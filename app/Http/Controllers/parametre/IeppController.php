<?php

namespace App\Http\Controllers\parametre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IeppController extends Controller
{
    //
    //
      public function add(){
    return view('espace.espace_super.iepp.add');
    }

    public function detail($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.iepp.detail',compact('data'));

    }

       //------------------

}
