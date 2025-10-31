<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegulationEppController extends Controller
{
    //
      public function add(){
    return view('espace.espace_super.regulationepp.add');
    }

    public function edit($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.regulationepp.update',compact('data'));

    }

       //------------------

    public function detail($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.regulationepp.detail',compact('data'));

    }
}
