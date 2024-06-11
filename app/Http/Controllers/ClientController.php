<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all(); 
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'numero_telephone' => 'required',
            'adresse_email' => 'required|email',
        ]);


        $userData['name'] = $request->nom;
        $userData['email'] = $request->adresse_email;
        $userData['password'] = ('password');
        $userData['role'] = 'client';

        $user = User::create($userData);
        if ($user) {
           
            $clientData['nom'] = $request->nom;
            $clientData['prenom'] = $request->prenom;
            $clientData['adresse'] = $request->adresse;
            $clientData['adresse_email'] = $request->adresse_email;
            $clientData['numero_telephone'] = $request->numero_telephone;
            $clientData['userID'] = $user->id;
            $client = Client::create($clientData);

            if ($client) {
                return redirect()->route('clients.index');
            }
        } else {
            redirect()->back()->withErrors(['error' => 'error creating client']);
        }


        Client::create($validatedData);

        return redirect()->route('clients.index')->with('success', 'Client added successfully!');
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'numero_telephone' => 'required',
            'adresse_email' => 'required|email',
        ]);

        $client->update($validatedData);

        return redirect()->route('clients.index')->with('success', 'Client updated successfully!');
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client deleted successfully!');
    }
}
