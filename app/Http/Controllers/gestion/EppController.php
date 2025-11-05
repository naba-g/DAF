<?php
namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;


class EppController extends Controller
{
    public function index()
    {
        return view('espace.espace_super.epp.liste');
    }

    public function create()
    {
        return view('espace.espace_super.epp.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('epp.index');
    }

    public function show($id)
    {
        return view('espace.espace_super.epp.show', compact('id'));
    }

    public function edit($id)
    {
        return view('espace.espace_super.epp.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('epp.show', $id);
    }

    public function destroy($id)
    {
        return redirect()->route('epp.index');
    }
}
