<?php

namespace App\Http\Controllers;

use App\Models\Afspraken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AfsprakenController extends Controller
{
    public function index()
    {
        return view('afspraken.index');
    }

    public function create()
    {
        return view('afspraken.create');
    }

    public function contact()
    {
        return view('afspraken.contact');
    }

    public function fietsonderhoud()
    {
        return view('afspraken.fietsonderhoud');
    }

    public function fietssoorten()
    {
        return view('afspraken.fietssoorten');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'naam' => ['required', 'string', 'max:250'],
            'email' => ['required', 'email', 'max:250'],
            'telefoonnummer' => ['required', 'string', 'max:20'],
            'fietstype' => ['required', 'string', 'max:250'],
            'fietsmerk' => ['required', 'string', 'max:250'],
            'probleem' => ['required', 'string', 'max:500'],
            'datum' => ['required', 'date', 'after_or_equal:today'],
            'tijd' => ['required', 'date_format:H:i'],
        ]);

        $validated['user_id'] = Auth::id();

        Afspraken::create($validated);

        return redirect()->route('dashboard')
            ->with('success', 'Uw afspraak is succesvol gemaakt.');
    }

    public function dashboard()
    {
        $afspraken = Afspraken::where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('dashboard', compact('afspraken'));
    }

    public function delete(int $id)
    {
        $afspraak = Afspraken::whereKey($id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $afspraak->delete();

        return redirect()
            ->route('afspraken.index')
            ->with('success', 'De afspraak is verwijderd.');
    }
}