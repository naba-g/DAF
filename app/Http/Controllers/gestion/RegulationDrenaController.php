<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegulationDrenaController extends Controller
{
    //
      public function add(){
    return view('espace.espace_super.regulationdrena.add');
    }

    public function edit($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.regulationdrena.update',compact('data'));

    }

       //------------------

    public function detail($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.regulationdrena.detail',compact('data'));

    }
}
