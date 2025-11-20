@extends('layouts.layouts_super.master')
<<<<<<< HEAD
@section('title', 'Détails IEPP')
=======
@section('title', 'Détails iepp')
>>>>>>> 2eaac5f9525b8613fd3a4e1cf3dd0483c49298bc
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
<<<<<<< HEAD
                            <h5 class="m-b-10">Détails IEPP</h5>
=======
                            <h5 class="m-b-10">Détails iepp</h5>
>>>>>>> 2eaac5f9525b8613fd3a4e1cf3dd0483c49298bc
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('distribution_epp.index') }}">Details iepp</a></li>
<<<<<<< HEAD
                            
=======
                           
>>>>>>> 2eaac5f9525b8613fd3a4e1cf3dd0483c49298bc
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="row">
<<<<<<< HEAD


            

=======
 
>>>>>>> 2eaac5f9525b8613fd3a4e1cf3dd0483c49298bc
            <div class="row">
                <!-- Informations principales -->

                <div class="col-lg-8">
                    <!-- Informations de base -->
<<<<<<< HEAD

=======
>>>>>>> 2eaac5f9525b8613fd3a4e1cf3dd0483c49298bc
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-info mr-2"></i>Informations de Base</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Numéro de distribution</label>
                                        <p class="form-control-static">DIST-EPP-2024-{{ str_pad($id ?? 1, 3, '0', STR_PAD_LEFT) }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Date de distribution</label>
                                        <p class="form-control-static">{{ date('d/m/Y') }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">École EPP</label>
                                        <p class="form-control-static">
                                            <span class="badge badge-info">EPP Plateau 1</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Région</label>
                                        <p class="form-control-static">Lagunes - Abidjan</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Statut</label>
                                        <p class="form-control-static">
                                            <span class="badge badge-success">Livrée</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Priorité</label>
                                        <p class="form-control-static">
                                            <span class="badge badge-warning">Urgente</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Adresse de livraison</label>
                                        <p class="form-control-static">
                                            EPP Plateau 1, Boulevard de la République, Plateau, Abidjan
                                        </p>
                                    </div>
                                </div>
                            </div>
<<<<<<< HEAD
                        </div>
                    </div>


                  
                    <!-- Personnel et logistique -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-truck mr-2"></i>Personnel et Logistique</h5>
                        </div>
=======

                        </div>
                    </div>
                    

                    <!-- Personnel et logistique -->
                    <div class="card">

                        <div class="card-header">
                            <h5><i class="feather icon-truck mr-2"></i>Personnel et Logistique</h5>
                        </div>

>>>>>>> 2eaac5f9525b8613fd3a4e1cf3dd0483c49298bc
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Responsable livraison</label>
                                        <p class="form-control-static">M. KONE Seydou</p>
                                    </div>
                                </div>
<<<<<<< HEAD
=======

>>>>>>> 2eaac5f9525b8613fd3a4e1cf3dd0483c49298bc
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Téléphone</label>
                                        <p class="form-control-static">+225 07 08 09 10 11</p>
                                    </div>
                                </div>
                            </div>

<<<<<<< HEAD
=======
                            
>>>>>>> 2eaac5f9525b8613fd3a4e1cf3dd0483c49298bc
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Véhicule</label>
                                        <p class="form-control-static">Camion CI-001-AB</p>
                                    </div>
                                </div>
<<<<<<< HEAD
=======
                                
>>>>>>> 2eaac5f9525b8613fd3a4e1cf3dd0483c49298bc
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Date de livraison</label>
                                        <p class="form-control-static">{{ date('d/m/Y H:i') }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Observations</label>
                                        <p class="form-control-static">
                                            Livraison à effectuer en matinée. Prévoir un accès pour le camion dans la cour de l'école.
                                            Contact avec le directeur obligatoire avant déchargement.
                                        </p>
                                    </div>
                                </div>
                            </div>
<<<<<<< HEAD
                        </div>
                    </div>



=======

                        </div>

                    </div>
>>>>>>> 2eaac5f9525b8613fd3a4e1cf3dd0483c49298bc
                </div>

                <!-- Panneau latéral -->
                <div class="col-lg-4">
<<<<<<< HEAD

                    <!-- Statistiques rapides -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-bar-chart mr-2"></i>Résumé</h5>
                        </div>
                        <div class="card-body text-center">
=======
                    <!-- Statistiques rapides -->

                    <div class="card">
                        
                        <div class="card-header">
                            <h5><i class="feather icon-bar-chart mr-2"></i>Résumé</h5>
                        </div>

                        <div class="card-body text-center">

>>>>>>> 2eaac5f9525b8613fd3a4e1cf3dd0483c49298bc
                            <div class="mb-3">
                                <h2 class="text-primary">1,000</h2>
                                <p class="text-muted">Total manuels</p>
                            </div>
<<<<<<< HEAD

=======
                            
                            
>>>>>>> 2eaac5f9525b8613fd3a4e1cf3dd0483c49298bc
                            <div class="mb-3">
                                <h2 class="text-success">3</h2>
                                <p class="text-muted">Types de manuels</p>
                            </div>

<<<<<<< HEAD
                            <hr>

                            <div class="row">
                                <div class="col-6">
                                    <h4 class="text-success">100%</h4>
                                    <small class="text-muted">Taux de livraison</small>
                                </div>
                                <div class="col-6">
                                    <h4 class="text-info">CE1</h4>
                                    <small class="text-muted">Niveau cible</small>
                                </div>
                            </div>
=======
>>>>>>> 2eaac5f9525b8613fd3a4e1cf3dd0483c49298bc
                        </div>
                    </div>

                </div>


<<<<<<< HEAD
                
            </div>
        </div>



        <!-- Page-body end -->
=======

            </div>
        </div>
        <!-- Page-body end -->

>>>>>>> 2eaac5f9525b8613fd3a4e1cf3dd0483c49298bc
    </div>
</div>

@endsection
