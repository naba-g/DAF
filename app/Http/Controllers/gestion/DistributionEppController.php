<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DistributionEppController extends Controller
{
    public function index()
    {
        return view('espace.espace_super.distributionepp.liste');
    }

    public function create()
    {
        return view('espace.espace_super.distributionepp.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('distribution_epp.index')->with('success', 'Distribution créée.');
    }

    public function show($id)
    {
        return view('espace.espace_super.distributionepp.show', compact('id'));
    }

    public function edit($id)
    {
        return view('espace.espace_super.distributionepp.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('distribution_epp.show', $id)->with('success', 'Distribution mise à jour.');
    }

    public function destroy($id)
    {
        return redirect()->route('distribution_epp.index')->with('success', 'Distribution supprimée.');
    }
}