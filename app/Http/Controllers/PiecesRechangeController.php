<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PiecesRechange;
use App\Notifications\LowStockNotification;
use Illuminate\Notifications\Notifiable;

class PiecesRechangeController extends Controller
{
    use Notifiable;
    public function index()
    {
        $pieces = PiecesRechange::all();
        return view('rechange.index', compact('pieces'));
    }

    public function create()
    {
        return view('rechange.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'reference' => 'required|string|max:255',
            'fournisseur' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $piecesRechange = PiecesRechange::create($validated);

        if ($piecesRechange->stock < 5) {
            auth()->user()->notify(new LowStockNotification($piecesRechange));
        }

        return redirect()->route('pieces-rechange.index');
    }

    public function show(PiecesRechange $piecesRechange)
    {
        return view('rechange.show', compact('piecesRechange'));
    }

    public function edit(PiecesRechange $piecesRechange)
    {
        return view('rechange.edit', compact('piecesRechange'));
    }

    public function update(Request $request, PiecesRechange $piecesRechange)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'reference' => 'required|string|max:255',
            'fournisseur' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $piecesRechange->update($validated);

        if ($piecesRechange->stock < 5) {
            auth()->user()->notify(new LowStockNotification($piecesRechange));
        }

        return redirect()->route('rechange.index');
    }

    public function destroy(PiecesRechange $piecesRechange)
    {
        $piecesRechange->delete();
        return redirect()->route('rechange.index');
    }
}
