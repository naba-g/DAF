<?php

namespace App\Http\Controllers\parametre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnneeScolaireController extends Controller
{

    public function index()
    {
        return view('espace.espace_super.annee_scolaire.liste');
    }


    public function create()
    {
        return view('espace.espace_super.annee_scolaire.create');
    }


    public function show($id)
    {
        return view('espace.espace_super.annee_scolaire.show', compact('id'));
    }


    public function edit($id)
    {
        return view('espace.espace_super.annee_scolaire.edit', compact('id'));
    }

    public function store(Request $request)
    {
        return redirect()->route('annee_scolaire.index');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('annee_scolaire.show', $id);
    }


    public function activate($id)
    {
        return redirect()->route('annee_scolaire.show', $id);
    }

    public function destroy($id)
    {
        return redirect()->route('annee_scolaire.index');
    }

    public function duplicate($id)
    {
        return redirect()->route('annee_scolaire.show', $id);
    }

    public function export($id)
    {
        return redirect()->route('annee_scolaire.show', $id);
    }
}
