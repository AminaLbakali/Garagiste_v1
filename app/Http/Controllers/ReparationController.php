<?php

namespace App\Http\Controllers;

use App\Models\Reparation;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class ReparationController extends Controller
{
    public function index()
    {
        $reparations = Reparation::all();
        return view('reparations.index', compact('reparations'));
    }

    public function create()
    {
            
            $vehicule = Vehicule::whereDoesntHave('reparations')
             ->select('vehicules.*', 'vehicules.picture')
             ->get();
             
        return view('reparations.create', compact('vehicule'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'status' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'mechanicNotes' => 'required',
            'clientNotes' => '',
        ]);

        $mecanicID = auth()->user()->id;

        $reparationData['description'] = $request->description;
        $reparationData['status'] = $request->status;
        $reparationData['startDate'] = $request->startDate;
        $reparationData['endDate'] = $request->endDate;
        $reparationData['mechanicNotes'] = $request->mechanicNotes;
        $reparationData['clientNotes'] = $request->clientNotes;
        $reparationData['vehicleID'] = $request->vehicleID;

        if ($mecanicID) {
            $reparationData['mechanicID'] = $mecanicID;

            $reparation = Reparation::create($reparationData);

            if ($reparation) {
                return redirect()->route('reparations.index');
            }
        } else {
            redirect()->back()->withErrors(['error' => 'error creating repair']);
        }
    }

    public function edit(Reparation $reparation)

    {
        return view('reparations.edit', compact('reparation'));
    }

    public function update(Request $request, Reparation $reparation)
    {
        $validatedData = $request->validate([
            'description' => 'required',
            'status' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'mechanicNotes' => 'required',
            'clientNotes' => '',
        ]);

        $reparation->update($validatedData);

        return  redirect()->back()->with('success', 'repair updated successfully!');
    }

    public function destroy(Reparation $reparation)
    {
        $reparation->delete();
        return redirect()->back()->with('success', 'repair deleted successfully!');
    }
}
