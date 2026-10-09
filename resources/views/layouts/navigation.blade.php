<nav x-data="{ open: false }" class="bg-white text-green-700 shadow-sm" aria-label="Hoofdnavigatie">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex min-h-20 flex-wrap items-center justify-between gap-4 py-3">
            <a href="{{ route('home') }}"><img src="{{ asset('images/fietsfix2.png') }}" alt="FietsFix home" class="h-16 w-auto"></a>
            <button type="button" @click="open = !open" :aria-expanded="open.toString()" aria-controls="navigation-links" class="rounded-lg border border-green-600 px-4 py-2 lg:hidden">Menu</button>
            <div id="navigation-links" :class="{ 'hidden': !open }" class="hidden w-full flex-col gap-3 lg:flex lg:w-auto lg:flex-row lg:items-center lg:gap-5">
                <a href="{{ route('home') }}" class="py-2 font-semibold hover:underline">Home</a>
                <a href="{{ route('fietssoorten') }}" class="py-2 font-semibold hover:underline">Fietssoorten</a>
                <a href="{{ route('fietsonderhoud') }}" class="py-2 font-semibold hover:underline">Fietsonderhoud</a>
                <a href="{{ route('contact') }}" class="py-2 font-semibold hover:underline">Contact</a>
                @guest
                    <a href="{{ route('login') }}" class="py-2 font-bold hover:underline">Inloggen</a>
                    <a href="{{ route('register') }}" class="rounded-lg bg-green-600 px-4 py-2 font-bold text-white hover:bg-green-700">Registreren</a>
                @else
                    <a href="{{ route('dashboard') }}" class="rounded-lg bg-green-600 px-4 py-2 font-bold text-white hover:bg-green-700">Afspraak inzien</a>
                    <a href="{{ route('profile.edit') }}" class="py-2 font-semibold hover:underline">Profiel</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="py-2 font-semibold hover:underline">Uitloggen</button>
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>
