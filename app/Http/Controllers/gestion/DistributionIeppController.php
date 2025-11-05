<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DistributionIeppController extends Controller
{
    public function index()
    {
        return view('espace.espace_super.distributioniepp.liste');
    }

    public function create()
    {
        return view('espace.espace_super.distributioniepp.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('distribution_iepp.index')->with('success', 'Distribution créée.');
    }

    public function show($id)
    {
        return view('espace.espace_super.distributioniepp.show', compact('id'));
    }

    public function edit($id)
    {
        return view('espace.espace_super.distributioniepp.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('distribution_iepp.show', $id)->with('success', 'Distribution mise à jour.');
    }

    public function destroy($id)
    {
        return redirect()->route('distribution_iepp.index')->with('success', 'Distribution supprimée.');
    }
}