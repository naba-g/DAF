<?php

use Illuminate\Support\Facades\Route;

//le tableau de bord 
Route::get('/', function () {
   // return view('welcome');
    return view('espace.espace_super.dashboard.dashboard');
});


//annee scolaire 
Route::get('/annee_scolaire', function () {
   // return view('welcome');
    return view('espace.espace_super.annee_scolaire.liste');
});



//commande 
Route::get('/commande_daf', function () {
   // return view('welcome');
    return view('espace.espace_super.commande.liste');
});

//direction centrale 
Route::get('/direction_centrale', function () {
   // return view('welcome');
    return view('espace.espace_super.direction_centrale.liste');
});

//distribution epp
Route::get('/distribution_epp', function () {
   // return view('welcome');
       return view('espace.espace_super.distributionepp.liste');

});

//distribution iepp 
Route::get('/distribution_iepp', function () {
   // return view('welcome');
       return view('espace.espace_super.distributioniepp.liste');

});

//drena
Route::get('/drena', function () {
   // return view('welcome');
       return view('espace.espace_super.drena.liste');

});


//epp
Route::get('/epp', function () {
   // return view('welcome');
       return view('espace.espace_super.epp.liste');

});

//exprssion besion iepp
Route::get('/besoin_iepp', function () {
   // return view('welcome');
       return view('espace.espace_super.expression_besoin_iepp.liste');

});

//expression besoin daf 
Route::get('/besoin_daf', function () {
   // return view('welcome');
       return view('espace.espace_super.expression_besoin_daf.liste');

});

//expression besoin drena 
Route::get('/besoin_drena', function () {
   // return view('welcome');
       return view('espace.espace_super.expression_besoin_drena.liste');

});

//expression besoin epp 
Route::get('/besoin_epp', function () {
   // return view('welcome');
       return view('espace.espace_super.expression_besoin_epp.liste');

});

//iepp 
Route::get('/iepp', function () {
   // return view('welcome');
       return view('espace.espace_super.iepp.liste');

});

//livraison epp 
Route::get('/livraison_epp', function () {
   // return view('welcome');
       return view('espace.espace_super.livraisonepp.liste');

});

//livraison iepp
Route::get('/livraison_iepp', function () {
   // return view('welcome');
       return view('espace.espace_super.livraisoniepp.liste');

});

//manuels 
Route::get('/manuel_scolaire', function () {
   // return view('welcome');
       return view('espace.espace_super.manuels.liste');

});

//niveau 
Route::get('/niveau', function () {
   // return view('welcome');
       return view('espace.espace_super.niveau.liste');

});

//regulation drena 
Route::get('/regulation_drena', function () {
   // return view('welcome');
       return view('espace.espace_super.regulationdrena.liste');

});

//regulation epp
Route::get('/regulation_epp', function () {
   // return view('welcome');
       return view('espace.espace_super.regulationepp.liste');

});

//regulation iepp
Route::get('/regulation_iepp', function () {
   // return view('welcome');
       return view('espace.espace_super.regulationiepp.liste');

});

//retour manuels 
Route::get('/retour_manuels', function () {
   // return view('welcome');
       return view('espace.espace_super.retourmanuels.liste');

});

//role
Route::get('/role', function () {
   // return view('welcome');
       return view('espace.espace_super.role.liste');

});

// type manuel 
Route::get('/type_manuel', function () {
   // return view('welcome');
       return view('espace.espace_super.type_manuel.liste');

});


// utilisateur 
Route::get('/compte_utilisateur', function () {
   // return view('welcome');
       return view('espace.espace_super.utilisateur.liste');

});



Route::get('/accueil', function () {
    return view('welcome');
});
