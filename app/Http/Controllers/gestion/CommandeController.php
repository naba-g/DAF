<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index()
    {
        return view('espace.espace_super.commande.liste');
    }

    public function create()
    {
        return view('espace.espace_super.commande.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('commande_daf.index')->with('success', 'Commande créée avec succès.');
    }

    public function show($id)
    {
        return view('espace.espace_super.commande.show', compact('id'));
    }

    public function edit($id)
    {
        return view('espace.espace_super.commande.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('commande_daf.show', $id)->with('success', 'Commande mise à jour.');
    }

    public function destroy($id)
    {
        return redirect()->route('commande_daf.index')->with('success', 'Commande supprimée.');
    }
}
