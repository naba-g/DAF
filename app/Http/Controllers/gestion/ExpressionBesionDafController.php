<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpressionBesionDafController extends Controller
{
    //
    //
         public function add(){
    return view('espace.espace_super.expression_besoin_daf.add');
    }

    public function edit($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.expression_besoin_daf.update',compact('data'));

    }

       public function details($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.expression_besoin_daf.detail',compact('data'));

    }
}
