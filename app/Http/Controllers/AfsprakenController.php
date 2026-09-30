<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Afspraken;

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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'naam' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefoonnummer' => 'required|string|max:20',
            'fietstype' => 'required|string|max:255',
            'fietsmerk' => 'required|string|max:255',
            'probleem' => 'required|string|max:500',
            'datum' => 'required|date',
            'tijd' => 'required',
        ]);

        $afspraken = Afspraken::create($validated);

        return redirect()->route('afspraken.success', ['afspraken' => $afspraken->id]);
    }

    public function success(Afspraken $afspraken)
    {
        return view('afspraken.success', compact('afspraken'));
    }

}

