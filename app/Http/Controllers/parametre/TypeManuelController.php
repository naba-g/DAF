<?php

namespace App\Http\Controllers\parametre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeManuelController extends Controller
{
    //
    public function add(){
    return view('espace.espace_super.type_manuel.add');
    }

    public function edit($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.type_manuel.update',compact('data'));

    }

       //------------------

}
