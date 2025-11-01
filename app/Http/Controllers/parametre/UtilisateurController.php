<?php

namespace App\Http\Controllers\parametre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    //
    public function add(){
    return view('espace.espace_super.utilisateur.add');
    }

    public function edit($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.utilisateur.update',compact('data'));

    }

       //------------------

    public function detail($id=1){
        $data = $id;
      //  dd($data);
      return view('espace.espace_super.utilisateur.detail',compact('data'));

    }

    // //------------------
    // public function edit1($id){
    //   $datax = DB::select('select * From utilisateurs u
    //   LEFT JOIN service s ON u.service_id = s.id_service
    //   LEFT JOIN departements d ON u.departemen_id = d.id_departement
    //   LEFT JOIN groupe g ON u.groupe_id = g.id_groupe
  
    //   where u.id_user =?',[$id]);
    //   //dd($datax[0]);
    //   return view('update-utilisateur',compact('datax'));
  
    //   }
  



}
