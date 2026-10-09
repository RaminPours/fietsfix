<?php

namespace Tests\Feature;

use App\Models\Afspraken;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AfsprakenTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutVite();
    }

    private function afspraakData(): array
    {
        return [
            'naam' => 'Ramin', 'email' => 'ramin@example.com',
            'telefoonnummer' => '0612345678', 'fietstype' => 'E-bike',
            'fietsmerk' => 'Gazelle', 'probleem' => 'Lekke band',
            'datum' => now()->addDay()->toDateString(), 'tijd' => '10:30',
        ];
    }

    public function test_guests_see_login_and_cannot_access_appointments(): void
    {
        $this->get('/')->assertOk()->assertSee('Inloggen')->assertDontSee('Afspraak inzien');
        foreach (['/dashboard', '/afspraken', '/afspraken/create'] as $url) {
            $this->get($url)->assertRedirect(route('login'));
        }
        $this->post('/afspraken', $this->afspraakData())->assertRedirect(route('login'));
        $this->assertDatabaseCount('afspraken', 0);
    }

    public function test_user_sees_empty_dashboard_and_authenticated_navigation(): void
    {
        $this->actingAs(User::factory()->create());
        $this->get('/')->assertOk()->assertSee('Afspraak inzien')->assertDontSee('>Inloggen<', false);
        $this->get('/dashboard')->assertOk()->assertSee('Je hebt nog geen afspraken.');
        $this->get('/afspraken/create')->assertOk()->assertSee('Afspraak inplannen');
    }

    public function test_booking_is_assigned_to_authenticated_user(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user)->post('/afspraken', array_merge($this->afspraakData(), ['user_id' => 999]))
            ->assertRedirect(route('dashboard'))->assertSessionHas('success');
        $this->assertDatabaseHas('afspraken', ['user_id' => $user->id, 'probleem' => 'Lekke band']);
        $this->get('/dashboard')->assertOk()->assertSee('Lekke band')->assertSee('10:30');
    }

    public function test_users_cannot_view_or_delete_another_users_appointment(): void
    {
        $owner = User::factory()->create();
        $afspraak = Afspraken::create(array_merge($this->afspraakData(), ['user_id' => $owner->id, 'probleem' => 'Privé reparatie']));
        $this->actingAs(User::factory()->create());
        $this->get('/dashboard')->assertOk()->assertDontSee('Privé reparatie');
        $this->get('/afspraken')->assertOk()->assertDontSee('Privé reparatie');
        $this->delete('/afspraken/'.$afspraak->id)->assertNotFound();
        $this->assertDatabaseHas('afspraken', ['id' => $afspraak->id]);
        $this->actingAs($owner)->delete('/afspraken/'.$afspraak->id)->assertRedirect(route('afspraken.index'));
        $this->assertDatabaseMissing('afspraken', ['id' => $afspraak->id]);
    }

    public function test_invalid_booking_is_not_saved(): void
    {
        $this->actingAs(User::factory()->create())->post('/afspraken', array_merge($this->afspraakData(), [
            'email' => 'invalid', 'datum' => now()->subDay()->toDateString(), 'tijd' => '25:99',
        ]))->assertSessionHasErrors(['email', 'datum', 'tijd']);
        $this->assertDatabaseCount('afspraken', 0);
    }
}
