<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Vehicule;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehiculeController extends Controller
{
    public function create()
    {
        return view('vehicule.create');
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $clients = Client::all();

        foreach ($clients as $client) {
            if ($user->id === $client->userID) {
                $clientID = $client->id;
             
            }
        }
        $validatedData = $request->validate([
            'Marque' => 'required',
            'Modele' => 'required',
            'Type_carburant' => 'required',
            'numero_immatriculation' => 'required|unique:vehicules',
            'Picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        

        $vehicule = new Vehicule();
        $vehicule->Marque = $validatedData['Marque'];
        $vehicule->Modele = $validatedData['Modele'];
        $vehicule->Type_carburant = $validatedData['Type_carburant'];
        $vehicule->numero_immatriculation = $validatedData['numero_immatriculation'];
        $vehicule->clientID = $clientID;
        
        $ext = request()->Picture->getClientOriginalExtension();;
        $name = Str::random(30) . time() . "." . $ext;
        request()->Picture->move(public_path("storage/avatars"), $name);
        $vehicule->Picture = $name;
        $vehicule->save();

        return redirect()->route('vehicule.index')->with('success', 'Le véhicule a été ajouté avec succès.');
    }

    public function index()
    {
        $vehicules = Vehicule::all();
        return view('vehicule.index', compact('vehicules'));
    }

    public function edit($id)
    {
        $vehicule = Vehicule::findOrFail($id);
        return view('vehicule.edit', compact('vehicule'));
    }

    public function update(Request $request, Vehicule $vehicule)
    {
        $validatedData = $request->validate([
            'Marque' => 'required',
            'Modele' => 'required',
            'Type_carburant' => 'required',
            'numero_immatriculation' => 'required',
            'Picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $vehicule->update($validatedData);

        return redirect()->route('vehicule.index')->with('success', 'Vehicle updated successfully!');
    }

    public function destroy($id)
    {
        $vehicule = Vehicule::findOrFail($id);
        $vehicule->delete();
        return redirect()->route('vehicule.index')->with('success', 'Vehicle deleted successfully.');
    }
}
