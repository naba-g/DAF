<?php

namespace App\Http\Controllers\parametre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    //
      public function add(){
    return view('espace.espace_super.niveau.add');
    }

    public function edit($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.niveau.update',compact('data'));

    }

       //------------------

    public function detail($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.niveau.detail',compact('data'));

    }
}
