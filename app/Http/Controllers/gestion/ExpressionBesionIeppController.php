<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpressionBesionIeppController extends Controller
{
    //
         public function add(){
    return view('espace.espace_super.expression_besoin_iepp.add');
    }

    public function edit($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.expression_besoin_iepp.update',compact('data'));

    }

       public function details($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.expression_besoin_iepp.detail',compact('data'));

    }
}
