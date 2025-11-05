<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DirectionCentraleController extends Controller
{
    public function index()
    {
        return view('espace.espace_super.direction_centrale.liste');
    }

    public function create()
    {
        return view('espace.espace_super.direction_centrale.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('direction_centrale.index')->with('success', 'Direction créée avec succès.');
    }

    public function show($id)
    {
        return view('espace.espace_super.direction_centrale.show', compact('id'));
    }

    public function edit($id)
    {
        return view('espace.espace_super.direction_centrale.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('direction_centrale.show', $id)->with('success', 'Direction mise à jour.');
    }

    public function destroy($id)
    {
        return redirect()->route('direction_centrale.index')->with('success', 'Direction supprimée.');
    }
}
