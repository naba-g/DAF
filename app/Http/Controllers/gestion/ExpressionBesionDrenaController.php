<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpressionBesionDrenaController extends Controller
{
    //
         public function add(){
    return view('espace.espace_super.expression_besoin_drena.add');
    }

    public function edit($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.expression_besoin_drena.update',compact('data'));

    }

       public function details($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.expression_besoin_drena.detail',compact('data'));

    }
}
