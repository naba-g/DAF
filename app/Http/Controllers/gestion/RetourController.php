<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RetourController extends Controller
{
    //
     //
    public function add(){
    return view('espace.espace_super.retourmanuels.add');
    }

    public function edit($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.retourmanuels.update',compact('data'));

    }

       //------------------

    public function detail($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.retourmanuels.detail',compact('data'));

    }
}
