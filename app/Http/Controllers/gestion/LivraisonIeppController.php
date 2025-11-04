<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LivraisonIeppController extends Controller
{
    //
    public function add(){
    return view('espace.espace_super.livraisoniepp.add');
    }

    public function edit($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.livraisoniepp.update',compact('data'));

    }

       public function details($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.livraisoniepp.detail',compact('data'));

    }

}
