<?php

namespace App\Http\Controllers\parametre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManuelsController extends Controller
{
    //
    //
      public function add(){
    return view('espace.espace_super.manuels.add');
    }

    public function edit($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.manuels.update',compact('data'));

    }

       //------------------
}
