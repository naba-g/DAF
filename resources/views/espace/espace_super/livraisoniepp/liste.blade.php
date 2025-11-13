@extends('layouts.layouts_super.master')
@section('title', 'Liste des livraisons iepp')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">

        <!-- En-tête -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Gestion des livraisons iepp</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Administration</a></li>
                            <li class="breadcrumb-item"><a href="#!">La liste des livraisons iepp</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Liste des guides maitre livrés</h5>

                        <!-- Lien remplaçant le bouton -->
                          <div class="d-block">
                        <a href="/ajoutlivraisoniepp" class="btn btn-primary">
                        <i class="feather icon-plus"></i> Nouvelle livraison
                         </a>
                      </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>niveau</th>
                                        <th>Titre de manuel</th>
                                        <th>quantité</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><strong>CP1</strong></td>
                                         <td>Livre de Mathématique</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                                 <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisoniepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(1)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td><strong>CP1</strong></td>
                                         <td>Livre de physique</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisoniepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(2)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td><strong>CP1</strong></td>
                                         <td>Livre de français</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                                <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisoniepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(3)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td><strong>CP1</strong></td>
                                         <td>Livre de EDHC</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisoniepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>


                                     <tr>
                                        <td>4</td>
                                        <td><strong>CP1</strong></td>
                                         <td>Livre d'histoire-géographie</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisoniepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>



                                     <tr>
                                        <td>4</td>
                                        <td><strong>CP1</strong></td>
                                         <td>Livre de sciences et technologies</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisonieppt/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

 <tr>
                                        <td>1</td>
                                        <td><strong>CP2</strong></td>
                                         <td>Livre de Mathématique</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                                 <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisoniepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(1)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td><strong>CP2</strong></td>
                                         <td>Livre de physique</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisoniepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(2)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td><strong>CP2</strong></td>
                                         <td>Livre de français</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                                <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisoniepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(3)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td><strong>CP2</strong></td>
                                         <td>Livre de EDHC</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisoniepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>


                                     <tr>
                                        <td>4</td>
                                        <td><strong>CP2</strong></td>
                                         <td>Livre d'histoire-géographie</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisoniepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>



                                     <tr>
                                        <td>4</td>
                                        <td><strong>CP2</strong></td>
                                         <td>Livre de sciences et technologies</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisoniepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>

                           <div class="row">
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Liste des livres livrés</h5>

                        <!-- Lien remplaçant le bouton -->
                          <!-- <div class="d-block">
                        <a href="/ajoutlivraisoniepp" class="btn btn-primary">
                        <i class="feather icon-plus"></i> Nouvelle livraison
                         </a>
                      </div> -->
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>niveau</th>
                                        <th>Titre de manuel</th>
                                        <th>quantité</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><strong>CP1</strong></td>
                                         <td>Livre de Mathématique</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                                 <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisonieppt/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(1)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td><strong>CP1</strong></td>
                                         <td>Livre de physique</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisonieppt/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(2)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td><strong>CP1</strong></td>
                                         <td>Livre de français</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                                <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisonieppt/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(3)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td><strong>CP1</strong></td>
                                         <td>Livre de EDHC</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisonieppt/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>


                                     <tr>
                                        <td>4</td>
                                        <td><strong>CP1</strong></td>
                                         <td>Livre d'histoire-géographie</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisonieppt/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>



                                     <tr>
                                        <td>4</td>
                                        <td><strong>CP1</strong></td>
                                         <td>Livre de sciences et technologies</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisonieppt/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

 <tr>
                                        <td>1</td>
                                        <td><strong>CP2</strong></td>
                                         <td>Livre de Mathématique</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                                 <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisonieppt/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(1)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td><strong>CP2</strong></td>
                                         <td>Livre de physique</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisonieppt/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(2)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td><strong>CP2</strong></td>
                                         <td>Livre de français</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                                <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisonieppt/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(3)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td><strong>CP2</strong></td>
                                         <td>Livre de EDHC</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisonieppt/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>


                                     <tr>
                                        <td>4</td>
                                        <td><strong>CP2</strong></td>
                                         <td>Livre d'histoire-géographie</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisonieppt/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>



                                     <tr>
                                        <td>4</td>
                                        <td><strong>CP2</strong></td>
                                         <td>Livre de sciences et technologies</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="modificationlivraisonieppt/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>

                           <div class="row">
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Liste des cahiers d'excercice livrés</h5>

                        <!-- Lien remplaçant le bouton -->
                          <!-- <div class="d-block">
                        <a href="/ajoutlivraisoniepp" class="btn btn-primary">
                        <i class="feather icon-plus"></i> Nouvelle livraison
                         </a>
                      </div> -->
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>niveau</th>
                                        <th>Titre de manuel</th>
                                        <th>quantité</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><strong>CP1</strong></td>
                                         <td>Livre de Mathématique</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                                 <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="/manuel/edit/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(1)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td><strong>CP1</strong></td>
                                         <td>Livre de physique</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="/manuel/edit/2" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(2)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td><strong>CP1</strong></td>
                                         <td>Livre de français</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                                <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="/manuel/edit/3" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(3)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td><strong>CP1</strong></td>
                                         <td>Livre de EDHC</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="/manuel/edit/4" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>


                                     <tr>
                                        <td>4</td>
                                        <td><strong>CP1</strong></td>
                                         <td>Livre d'histoire-géographie</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="/manuel/edit/4" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>



                                     <tr>
                                        <td>4</td>
                                        <td><strong>CP1</strong></td>
                                         <td>Livre de sciences et technologies</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="/manuel/edit/4" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

 <tr>
                                        <td>1</td>
                                        <td><strong>CP2</strong></td>
                                         <td>Livre de Mathématique</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                                 <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="/manuel/edit/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(1)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td><strong>CP2</strong></td>
                                         <td>Livre de physique</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="/manuel/edit/2" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(2)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td><strong>CP2</strong></td>
                                         <td>Livre de français</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                                <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="/manuel/edit/3" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(3)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td><strong>CP2</strong></td>
                                         <td>Livre de EDHC</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="/manuel/edit/4" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>


                                     <tr>
                                        <td>4</td>
                                        <td><strong>CP2</strong></td>
                                         <td>Livre d'histoire-géographie</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="/manuel/edit/4" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>



                                     <tr>
                                        <td>4</td>
                                        <td><strong>CP2</strong></td>
                                         <td>Livre de sciences et technologies</td>
                                        <td><strong>14000</strong></td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="/manuel/edit/4" class="btn btn-outline-warning btn-action" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-sm-12">
                                <nav aria-label="Pagination">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <p class="text-center text-muted">Affichage de 1 à 4 sur 4 entrées</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Scripts -->
<script>
function confirmDelete(id) {
    new PNotify({
        title: 'Confirmation',
        text: 'Voulez-vous vraiment supprimer ce manuel ?',
        type: 'warning',
        confirm: { confirm: true },
        buttons: { closer: false, sticker: false },
    }).get().on('pnotify.confirm', function() {
        new PNotify({
            title: 'Succès',
            text: 'Manuel supprimé avec succès',
            type: 'success'
        });
    });
}
</script>

<!-- Style boutons réduits -->

<style>


.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg, #4099ff, #73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg, #2ed8b6, #59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg, #FFB64D, #ffcb80);
}

.bg-c-red {
    background: linear-gradient(45deg, #FF5370, #ff869a);
}

.badge-light-success {
    color: #2ed8b6;
    background-color: rgba(46, 216, 182, 0.1);
}

.badge-light-info {
    color: #4099ff;
    background-color: rgba(64, 153, 255, 0.1);
}

.badge-light-secondary {
    color: #6c757d;
    background-color: rgba(108, 117, 125, 0.1);
}

.badge-light-primary {
    color: #4680ff;
    background-color: rgba(70, 128, 255, 0.1);
}

.btn-group .btn {
    margin-right: 4px;
    padding: 6px 10px;
}

.btn-sm {
    padding: 6px 10px !important;
    font-size: 13px !important;
}

.table-hover tbody tr:hover {
    background-color: #f5f5f5;
}

.btn-action {
    border-radius: 4px;
    transition: all 0.3s ease;
}

.btn-action:hover {
    transform: translateY(-1px);
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}


</style>


@endsection
