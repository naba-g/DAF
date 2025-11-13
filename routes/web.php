<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\parametre\UtilisateurController;
use App\Http\Controllers\parametre\TypeManuelController;
use App\Http\Controllers\parametre\RoleController;
use App\Http\Controllers\parametre\NiveauController;

use App\Http\Controllers\parametre\AnneeScolaireController;

use App\Http\Controllers\gestion\DashboardController;
use App\Http\Controllers\gestion\CommandeController;
use App\Http\Controllers\gestion\DirectionCentraleController;
use App\Http\Controllers\gestion\DistributionEppController;
use App\Http\Controllers\gestion\DistributionIeppController;
use App\Http\Controllers\gestion\DrenaController;
use App\Http\Controllers\gestion\EppController;

use App\Http\Controllers\gestion\RetourController;


// 0. TABLEAU DE BORD - Routes principales
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// 1. ANNÉE SCOLAIRE - Routes CRUD statiques
Route::prefix('annee_scolaire')->name('annee_scolaire.')->group(function () {
    Route::get('/', [AnneeScolaireController::class, 'index'])->name('index');
    Route::get('/create', [AnneeScolaireController::class, 'create'])->name('create');
    Route::get('/show/{id}', [AnneeScolaireController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [AnneeScolaireController::class, 'edit'])->name('edit');

    // Actions
    Route::post('/store', [AnneeScolaireController::class, 'store'])->name('store');
    Route::put('/update/{id}', [AnneeScolaireController::class, 'update'])->name('update');
    Route::post('/activate/{id}', [AnneeScolaireController::class, 'activate'])->name('activate');
    Route::delete('/destroy/{id}', [AnneeScolaireController::class, 'destroy'])->name('destroy');
    Route::post('/duplicate/{id}', [AnneeScolaireController::class, 'duplicate'])->name('duplicate');
    Route::get('/export/{id}', [AnneeScolaireController::class, 'export'])->name('export');
});


// 2. COMMANDE DAF - Routes CRUD complètes
Route::prefix('commande_daf')->name('commande_daf.')->group(function () {
    Route::get('/', [CommandeController::class, 'index'])->name('index');
    Route::get('/create', [CommandeController::class, 'create'])->name('create');
    Route::post('/store', [CommandeController::class, 'store'])->name('store');
    Route::get('/show/{id}', [CommandeController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [CommandeController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [CommandeController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [CommandeController::class, 'destroy'])->name('destroy');
});

// 3. DIRECTION CENTRALE - Routes CRUD complètes
Route::prefix('direction_centrale')->name('direction_centrale.')->group(function () {
    Route::get('/', [DirectionCentraleController::class, 'index'])->name('index');
    Route::get('/create', [DirectionCentraleController::class, 'create'])->name('create');
    Route::post('/store', [DirectionCentraleController::class, 'store'])->name('store');
    Route::get('/show/{id}', [DirectionCentraleController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [DirectionCentraleController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [DirectionCentraleController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [DirectionCentraleController::class, 'destroy'])->name('destroy');
});

// 4. DISTRIBUTION EPP - Routes CRUD complètes
Route::prefix('distribution_epp')->name('distribution_epp.')->group(function () {
    Route::get('/', [DistributionEppController::class, 'index'])->name('index');
    Route::get('/create', [DistributionEppController::class, 'create'])->name('create');
    Route::post('/store', [DistributionEppController::class, 'store'])->name('store');
    Route::get('/show/{id}', [DistributionEppController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [DistributionEppController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [DistributionEppController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [DistributionEppController::class, 'destroy'])->name('destroy');
});

// 5. DISTRIBUTION IEPP - Routes CRUD complètes
Route::prefix('distribution_iepp')->name('distribution_iepp.')->group(function () {
    Route::get('/', [DistributionIeppController::class, 'index'])->name('index');
    Route::get('/create', [DistributionIeppController::class, 'create'])->name('create');
    Route::post('/store', [DistributionIeppController::class, 'store'])->name('store');
    Route::get('/show/{id}', [DistributionIeppController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [DistributionIeppController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [DistributionIeppController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [DistributionIeppController::class, 'destroy'])->name('destroy');
});

// 6. DRENA - Routes CRUD complètes
Route::prefix('drena')->name('drena.')->group(function () {
    Route::get('/', [DrenaController::class, 'index'])->name('index');
    Route::get('/create', action: [DrenaController::class, 'create'])->name('create');
    Route::post('/store', [DrenaController::class, 'store'])->name('store');
    Route::get('/show/{id}', [DrenaController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [DrenaController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [DrenaController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [DrenaController::class, 'destroy'])->name('destroy');
});

// 7. EPP - Routes CRUD complètes
Route::prefix('epp')->name('epp.')->group(function () {
    Route::get('/', action: [EppController::class, 'index'])->name('index');
    Route::get('/create', [EppController::class, 'create'])->name('create');
    Route::post('/store', [EppController::class, 'store'])->name('store');
    Route::get('/show/{id}', [EppController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [EppController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [EppController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [EppController::class, 'destroy'])->name('destroy');
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


// =========================================================   ===============================================================

//---------------------- bloc jesus debut -------------------------------------

//creation de compte utilisateur
Route::get('/compte_utilisateur', function () {
   // return view('welcome');
       return view('espace.espace_super.utilisateur.liste');

});

Route::get('/ajoututilisateur','App\Http\Controllers\parametre\UtilisateurController@add');
Route::get('detailutilisateur/{id}','App\Http\Controllers\parametre\UtilisateurController@detail');
Route::get('modificationutilisateur/{id}','App\Http\Controllers\parametre\UtilisateurController@edit');

// Route::post('/updateus/{id}','App\Http\Controllers\param\UtilisateurController@update');
// Route::get('click_supus/{id}','App\Http\Controllers\param\UtilisateurController@delete');
// Route::post('/deleteus','App\Http\Controllers\param\UtilisateurController@sup');


//-----------------------
//creation de type de manuels
Route::get('/type_manuel', function () {
   // return view('welcome');
       return view('espace.espace_super.type_manuel.liste');

});

Route::get('/ajouttype','App\Http\Controllers\parametre\TypeManuelController@add');
Route::get('modificationtype/{id}','App\Http\Controllers\parametre\TypeManuelController@edit');

// Route::post('/updateus/{id}','App\Http\Controllers\param\TypeManuelController@update');
// Route::get('click_supus/{id}','App\Http\Controllers\param\TypeManuelController@delete');
// Route::post('/deleteus','App\Http\Controllers\param\TypeManuelController@sup');

//creation de role
Route::get('/role', function () {
   // return view('welcome');
       return view('espace.espace_super.role.liste');

});


Route::get('/ajoutrole','App\Http\Controllers\parametre\RoleController@add');
Route::get('detailrole/{id}','App\Http\Controllers\parametre\RoleController@detail');
Route::get('modificationrole/{id}','App\Http\Controllers\parametre\RoleController@edit');

// Route::post('/updateus/{id}','App\Http\Controllers\param\RoleController@update');
// Route::get('click_supus/{id}','App\Http\Controllers\param\RoleController@delete');
// Route::post('/deleteus','App\Http\Controllers\param\RoleController@sup');


//creation des niveaux

Route::get('/niveau', function () {
   // return view('welcome');
       return view('espace.espace_super.niveau.liste');

});


Route::get('/ajoutniveau','App\Http\Controllers\parametre\NiveauController@add');
Route::get('detailniveau/{id}','App\Http\Controllers\parametre\NiveauController@detail');
Route::get('modificationniveau/{id}','App\Http\Controllers\parametre\NiveauController@edit');

// Route::post('/updateus/{id}','App\Http\Controllers\param\NiveauController@update');
// Route::get('click_supus/{id}','App\Http\Controllers\param\NiveauController@delete');
// Route::post('/deleteus','App\Http\Controllers\param\NiveauController@sup');



//creation de retour
Route::get('/retour_manuels', function () {
   // return view('welcome');
       return view('espace.espace_super.retourmanuels.liste');

});

Route::get('/ajoutretour','App\Http\Controllers\gestion\RetourController@add');
Route::get('detailretour/{id}','App\Http\Controllers\gestion\RetourController@detail');
Route::get('modificationretour/{id}','App\Http\Controllers\gestion\RetourController@edit');

// Route::post('/updateus/{id}','App\Http\Controllers\gestion\RetourController@update');
// Route::get('click_supus/{id}','App\Http\Controllers\gestion\RetourController@delete');
// Route::post('/deleteus','App\Http\Controllers\gestion\RetourController@sup');

//creation de regulation epp

//creation de retour
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
   // return view('welcome');
       return view('espace.espace_super.regulationiepp.liste');

});

Route::get('/ajoutregulationiepp','App\Http\Controllers\gestion\RegulationIeppController@add');

Route::get('detailregulationiepp/{id}','App\Http\Controllers\gestion\RegulationIeppController@detail');

Route::get('modificationregulationiepp/{id}','App\Http\Controllers\gestion\RegulationIeppController@edit');
// Route::post('/updateus/{id}','App\Http\Controllers\gestion\RegulationIeppController@update');
// Route::get('click_supus/{id}','App\Http\Controllers\gestion\RegulationIeppController@delete');
// Route::post('/deleteus','App\Http\Controllers\gestion\RegulationIeppController@sup');


//creation de regulation drena
Route::get('/regulation_drena', function () {
   // return view('welcome');
       return view('espace.espace_super.regulationdrena.liste');

});

Route::get('/ajoutregulationdrena','App\Http\Controllers\gestion\RegulationDrenaController@add');

Route::get('detailregulationdrena/{id}','App\Http\Controllers\gestion\RegulationDrenaController@detail');

Route::get('modificationregulationdrena/{id}','App\Http\Controllers\gestion\RegulationDrenaController@edit');

// Route::post('/updateus/{id}','App\Http\Controllers\gestion\RegulationDrenaController@update');
// Route::get('click_supus/{id}','App\Http\Controllers\gestion\RegulationDrenaController@delete');
// Route::post('/deleteus','App\Http\Controllers\gestion\RegulationDrenaController@sup');


//---------------------------bloc jesus fin --------------------------------------------

// ===========================================================================================================================



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
Route::get('detailiepp/{id}','App\Http\Controllers\parametre\IeppController@detail');

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
