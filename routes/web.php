<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\parametre\UtilisateurController;
use App\Http\Controllers\parametre\TypeManuelController;
use App\Http\Controllers\parametre\RoleController;
use App\Http\Controllers\parametre\NiveauController;
use App\Http\Controllers\gestion\RetourController;


//le tableau de bord 
Route::get('/', function () {
   // return view('welcome');
    return view('espace.espace_super.dashboard.dashboard');
})->name('dashboard');

// ===== ROUTES CRUD POUR LES 8 PREMIERS MENUS =====

// 1. ANNÉE SCOLAIRE - Routes CRUD statiques
Route::prefix('annee_scolaire')->name('annee_scolaire.')->group(function () {
    Route::get('/', function () {
        return view('espace.espace_super.annee_scolaire.liste');
    })->name('index');
    Route::get('/create', function () {
        return view('espace.espace_super.annee_scolaire.create');
    })->name('create');
    Route::get('/show/{id}', function ($id) {
        return view('espace.espace_super.annee_scolaire.show', compact('id'));
    })->name('show');
    Route::get('/edit/{id}', function ($id) {
        return view('espace.espace_super.annee_scolaire.edit', compact('id'));
    })->name('edit');
    // Routes statiques - pas de vraies actions
    Route::any('/store', function () {
        return view('espace.espace_super.annee_scolaire.liste');
    })->name('store');
    Route::any('/update/{id}', function ($id) {
        return view('espace.espace_super.annee_scolaire.show', compact('id'));
    })->name('update');
    Route::any('/activate/{id}', function ($id) {
        return view('espace.espace_super.annee_scolaire.show', compact('id'));
    })->name('activate');
    Route::any('/destroy/{id}', function ($id) {
        return view('espace.espace_super.annee_scolaire.liste');
    })->name('destroy');
    Route::any('/duplicate/{id}', function ($id) {
        return view('espace.espace_super.annee_scolaire.show', compact('id'));
    })->name('duplicate');
    Route::any('/export/{id}', function ($id) {
        return view('espace.espace_super.annee_scolaire.show', compact('id'));
    })->name('export');
});

// Routes statiques pour les modules liés aux années scolaires
Route::prefix('inscriptions')->name('inscriptions.')->group(function () {
    Route::get('/', function () {
        return view('espace.espace_super.annee_scolaire.show');
    })->name('index');
});

Route::prefix('classes')->name('classes.')->group(function () {
    Route::get('/', function () {
        return view('espace.espace_super.annee_scolaire.show');
    })->name('index');
});

Route::prefix('calendrier')->name('calendrier.')->group(function () {
    Route::get('/', function () {
        return view('espace.espace_super.annee_scolaire.show');
    })->name('index');
});

Route::prefix('rapports')->name('rapports.')->group(function () {
    Route::get('/financiers', function () {
        return view('espace.espace_super.annee_scolaire.show');
    })->name('financiers');
});

// 2. COMMANDE DAF - Routes CRUD complètes
Route::prefix('commande_daf')->name('commande_daf.')->group(function () {
    Route::get('/', function () {
        return view('espace.espace_super.commande.liste');
    })->name('index');
    Route::get('/create', function () {
        return view('espace.espace_super.commande.create');
    })->name('create');
    Route::any('/store', function () {
        return view('espace.espace_super.commande.liste');
    })->name('store');
    Route::get('/show/{id}', function ($id) {
        return view('espace.espace_super.commande.show', compact('id'));
    })->name('show');
    Route::get('/edit/{id}', function ($id) {
        return view('espace.espace_super.commande.edit', compact('id'));
    })->name('edit');
    Route::any('/update/{id}', function ($id) {
        return view('espace.espace_super.commande.show', compact('id'));
    })->name('update');
    Route::any('/destroy/{id}', function ($id) {
        return view('espace.espace_super.commande.liste');
    })->name('destroy');
});

// 3. DIRECTION CENTRALE - Routes CRUD complètes
Route::prefix('direction_centrale')->name('direction_centrale.')->group(function () {
    Route::get('/', function () {
        return view('espace.espace_super.direction_centrale.liste');
    })->name('index');
    Route::get('/create', function () {
        return view('espace.espace_super.direction_centrale.create');
    })->name('create');
    Route::any('/store', function () {
        return view('espace.espace_super.direction_centrale.liste');
    })->name('store');
    Route::get('/show/{id}', function ($id) {
        return view('espace.espace_super.direction_centrale.show', compact('id'));
    })->name('show');
    Route::get('/edit/{id}', function ($id) {
        return view('espace.espace_super.direction_centrale.edit', compact('id'));
    })->name('edit');
    Route::any('/update/{id}', function ($id) {
        return view('espace.espace_super.direction_centrale.show', compact('id'));
    })->name('update');
    Route::any('/destroy/{id}', function ($id) {
        return view('espace.espace_super.direction_centrale.liste');
    })->name('destroy');
});

// 4. DISTRIBUTION EPP - Routes CRUD complètes
Route::prefix('distribution_epp')->name('distribution_epp.')->group(function () {
    Route::get('/', function () {
        return view('espace.espace_super.distributionepp.liste');
    })->name('index');
    Route::get('/create', function () {
        return view('espace.espace_super.distributionepp.create');
    })->name('create');
    Route::any('/store', function () {
        return view('espace.espace_super.distributionepp.liste');
    })->name('store');
    Route::get('/show/{id}', function ($id) {
        return view('espace.espace_super.distributionepp.show', compact('id'));
    })->name('show');
    Route::get('/edit/{id}', function ($id) {
        return view('espace.espace_super.distributionepp.edit', compact('id'));
    })->name('edit');
    Route::any('/update/{id}', function ($id) {
        return view('espace.espace_super.distributionepp.show', compact('id'));
    })->name('update');
    Route::any('/destroy/{id}', function ($id) {
        return view('espace.espace_super.distributionepp.liste');
    })->name('destroy');
});

// 5. DISTRIBUTION IEPP - Routes CRUD complètes
Route::prefix('distribution_iepp')->name('distribution_iepp.')->group(function () {
    Route::get('/', function () {
        return view('espace.espace_super.distributioniepp.liste');
    })->name('index');
    Route::get('/create', function () {
        return view('espace.espace_super.distributioniepp.create');
    })->name('create');
    Route::any('/store', function () {
        return view('espace.espace_super.distributioniepp.liste');
    })->name('store');
    Route::get('/show/{id}', function ($id) {
        return view('espace.espace_super.distributioniepp.show', compact('id'));
    })->name('show');
    Route::get('/edit/{id}', function ($id) {
        return view('espace.espace_super.distributioniepp.edit', compact('id'));
    })->name('edit');
    Route::any('/update/{id}', function ($id) {
        return view('espace.espace_super.distributioniepp.show', compact('id'));
    })->name('update');
    Route::any('/destroy/{id}', function ($id) {
        return view('espace.espace_super.distributioniepp.liste');
    })->name('destroy');
});

// 6. DRENA - Routes CRUD complètes
Route::prefix('drena')->name('drena.')->group(function () {
    Route::get('/', function () {
        return view('espace.espace_super.drena.liste');
    })->name('index');
    Route::get('/create', function () {
        return view('espace.espace_super.drena.create');
    })->name('create');
    Route::any('/store', function () {
        return view('espace.espace_super.drena.liste');
    })->name('store');
    Route::get('/show/{id}', function ($id) {
        return view('espace.espace_super.drena.show', compact('id'));
    })->name('show');
    Route::get('/edit/{id}', function ($id) {
        return view('espace.espace_super.drena.edit', compact('id'));
    })->name('edit');
    Route::any('/update/{id}', function ($id) {
        return view('espace.espace_super.drena.show', compact('id'));
    })->name('update');
    Route::any('/destroy/{id}', function ($id) {
        return view('espace.espace_super.drena.liste');
    })->name('destroy');
});

// 7. EPP - Routes CRUD complètes
Route::prefix('epp')->name('epp.')->group(function () {
    Route::get('/', function () {
        return view('espace.espace_super.epp.liste');
    })->name('index');
    Route::get('/create', function () {
        return view('espace.espace_super.epp.create');
    })->name('create');
    Route::any('/store', function () {
        return view('espace.espace_super.epp.liste');
    })->name('store');
    Route::get('/show/{id}', function ($id) {
        return view('espace.espace_super.epp.show', compact('id'));
    })->name('show');
    Route::get('/edit/{id}', function ($id) {
        return view('espace.espace_super.epp.edit', compact('id'));
    })->name('edit');
    Route::any('/update/{id}', function ($id) {
        return view('espace.espace_super.epp.show', compact('id'));
    })->name('update');
    Route::any('/destroy/{id}', function ($id) {
        return view('espace.espace_super.epp.liste');
    })->name('destroy');
});

// ===== ROUTES EXISTANTES (INCHANGÉES) =====

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




//niveau
Route::get('/niveau', function () {
    return view('espace.espace_super.niveau.liste');
});

//regulation drena
Route::get('/regulation_drena', function () {
    return view('espace.espace_super.regulationdrena.liste');
});

//regulation epp
Route::get('/regulation_epp', function () {
   // return view('welcome');
       return view('espace.espace_super.regulationepp.liste');

});

Route::get('/ajoutregulationepp','App\Http\Controllers\gestion\RegulationEppController@add');

Route::get('detailregulationepp/{id}','App\Http\Controllers\gestion\RegulationEppController@detail');

Route::get('modificationregulationepp/{id}','App\Http\Controllers\gestion\RegulationEppController@edit');

// Route::post('/updateus/{id}','App\Http\Controllers\gestion\RegulationEppController@update');
// Route::get('click_supus/{id}','App\Http\Controllers\gestion\RegulationEppController@delete');
// Route::post('/deleteus','App\Http\Controllers\gestion\RegulationEppController@sup');


//creation de regulation iepp
Route::get('/regulation_iepp', function () {
    return view('espace.espace_super.regulationiepp.liste');
});

//retour manuels
Route::get('/retour_manuels', function () {
    return view('espace.espace_super.retourmanuels.liste');
});

//role
Route::get('/role', function () {
    return view('espace.espace_super.role.liste');
});

// type manuel
Route::get('/type_manuel', function () {
    return view('espace.espace_super.type_manuel.liste');
});

// utilisateur
Route::get('/compte_utilisateur', function () {
    return view('espace.espace_super.utilisateur.liste');
});

Route::get('/accueil', function () {
    return view('welcome');
});




//--------------------------------------------------debut travail  de degry


//creation des iepp

//iepp afficher la liste
Route::get('/iepp', function () {
   // return view('welcome');
       return view('espace.espace_super.iepp.liste');

});

// afficher le formulaire d'ajout
Route::get('/ajoutiepp','App\Http\Controllers\parametre\IeppController@add');

//afficher la page de modification
Route::get('modificationiepp/{id}','App\Http\Controllers\parametre\IeppController@edit');

//Fin creationiepp



//creation des Manuels

//manuels 
Route::get('/manuel_scolaire', function () {
   // return view('welcome');
       return view('espace.espace_super.manuels.liste');

});


// afficher le formulaire d'ajout
Route::get('/ajoutmanuels','App\Http\Controllers\parametre\ManuelsController@add');

//afficher la page de modification
Route::get('modificationmanuels/{id}','App\Http\Controllers\parametre\ManuelsController@edit');

// Fin Manuels





//creation des livraison iepp

//livraison iepp
Route::get('/livraison_iepp', function () {
   // return view('welcome');
       return view('espace.espace_super.livraisoniepp.liste');

});


// afficher le formulaire d'ajout
Route::get('/ajoutlivraisoniepp','App\Http\Controllers\gestion\LivraisonIeppController@add');

// afficher la page details
Route::get('detaillivraisoniepp/{id}','App\Http\Controllers\gestion\LivraisonIeppController@detail');

//afficher la page de modification
Route::get('modificationlivraisoniepp/{id}','App\Http\Controllers\gestion\LivraisonIeppController@edit');

// Fin livraison iepp






//creation des livraison epp


//livraison epp 
Route::get('/livraison_epp', function () {
   // return view('welcome');
       return view('espace.espace_super.livraisonepp.liste');

});

// Fin livraison epp





//creation des expressions des besions


//livraison epp 
Route::get('/expression_besion_epp', function () {
   // return view('welcome');
       return view('espace.espace_super.livraisonepp.liste');

});


// afficher le formulaire d'ajout
Route::get('/ajoutexpressionbesionepp','App\Http\Controllers\gestion\ExpressionBesionEppController@add');



//afficher la page de modification
Route::get('modificationexpressionbesionepp/{id}','App\Http\Controllers\gestion\ExpressionBesionEppController@edit');

// Fin livraison epp




//creation des expressions des besions iepp


//exprssion besion iepp
Route::get('/expression_besoin_iepp', function () {
   // return view('welcome');
       return view('espace.espace_super.expression_besoin_iepp.liste');

});


// exprssion besion iepp






//-------------------------------------------------------------------- Fin travail degry