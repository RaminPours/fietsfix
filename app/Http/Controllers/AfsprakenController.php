<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Afspraken;

class AfsprakenController extends Controller
{

    public function index()
    {
        $afspraken = Afspraken::all();
        return view('afspraken.index', compact('afspraken'));
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

        return redirect()->route('afspraken.success', $afspraken->id);
    }
    
    public function success($id)
    {
        $afspraken = afspraken::find($id);
        return view('afspraken.success', compact('afspraken'));
    }    

    public function delete($id)
    {
        $afspraken = afspraken::find($id);
            $afspraken->delete();
            return redirect()->route('afspraken.index');
    }
    
}

