<?php

namespace App\Http\Controllers;

use App\Models\Mecanicien;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class MecanicienController extends Controller
{
    public function index()
    {
        $mechanics = Mecanicien::all();
        return view('mechanics.index', compact('mechanics'));
    }

    public function create()
    {
        return view('mechanics.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
        ]);

        Mecanicien::create($validatedData);

        return redirect()->route('mechanics.index')->with('success', 'Mechanic added successfully.');
    }

    public function show(Mecanicien $mechanic)
    {
        return view('mechanics.show', compact('mechanic'));
    }

    public function edit(Mecanicien $mechanic)
    {
        return view('mechanics.edit', compact('mechanic'));
    }

    public function update(Request $request, Mecanicien $mechanic)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
        ]);

        $mechanic->update($validatedData);

        return redirect()->route('mechanics.index')->with('success', 'Mechanic updated successfully.');
    }

    public function destroy(Mecanicien $mechanic)
    {
        $mechanic->delete();

        return redirect()->route('mechanics.index')->with('success', 'Mechanic deleted successfully.');
    }
}
