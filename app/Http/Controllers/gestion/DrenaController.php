<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DrenaController extends Controller
{
    public function index()
    {
        return view('espace.espace_super.drena.liste');
    }

    public function create()
    {
        return view('espace.espace_super.drena.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('drena.index')->with('success', 'DRENA créée.');
    }

    public function show($id)
    {
        return view('espace.espace_super.drena.show', compact('id'));
    }

    public function edit($id)
    {
        return view('espace.espace_super.drena.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('drena.show', $id)->with('success', 'DRENA mise à jour.');
    }

    public function destroy($id)
    {
        return redirect()->route('drena.index')->with('success', 'DRENA supprimée.');
    }
}