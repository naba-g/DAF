@extends('layouts.layouts_super.master')
@section('title', 'Détails Distribution EPP')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Détails Distribution EPP</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('distribution_epp.index') }}">Distribution EPP</a></li>
                            <li class="breadcrumb-item"><a href="#!">Distribution #{{ $id ?? 1 }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="row">
            <!-- Actions rapides -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Actions Rapides</h5>
                    </div>
                    <div class="card-body text-center">
                        <a href="{{ route('distribution_epp.edit', $id ?? 1) }}" class="btn btn-warning waves-effect waves-light">
                            <i class="feather icon-edit mr-2"></i>Modifier
                        </a>
                        <a href="{{ route('distribution_epp.index') }}" class="btn btn-inverse waves-effect">
                            <i class="feather icon-arrow-left mr-2"></i>Retour à la liste
                        </a>
                        <button type="button" class="btn btn-danger waves-effect waves-light" onclick="confirmDelete()">
                            <i class="feather icon-trash mr-2"></i>Supprimer
                        </button>
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="imprimerBonLivraison()">
                            <i class="feather icon-printer mr-2"></i>Bon de Livraison
                        </button>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Informations principales -->
                <div class="col-lg-8">
                    <!-- Informations de base -->
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
                        </div>
                    </div>

                    <!-- Détails des manuels -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-book mr-2"></i>Détails des Manuels</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Manuel</th>
                                            <th>Niveau</th>
                                            <th class="text-center">Quantité</th>
                                            <th class="text-center">État</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mathématiques CE1</td>
                                            <td>CE1</td>
                                            <td class="text-center"><span class="badge badge-primary">500</span></td>
                                            <td class="text-center">
                                                <span class="badge badge-success">Livré</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Français CE1</td>
                                            <td>CE1</td>
                                            <td class="text-center"><span class="badge badge-primary">300</span></td>
                                            <td class="text-center">
                                                <span class="badge badge-success">Livré</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sciences CE1</td>
                                            <td>CE1</td>
                                            <td class="text-center"><span class="badge badge-primary">200</span></td>
                                            <td class="text-center">
                                                <span class="badge badge-success">Livré</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="table-active">
                                            <th colspan="2">Total</th>
                                            <th class="text-center"><span class="badge badge-dark">1,000</span></th>
                                            <th class="text-center"><span class="badge badge-success">100% Livré</span></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Personnel et logistique -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-truck mr-2"></i>Personnel et Logistique</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Responsable livraison</label>
                                        <p class="form-control-static">M. KONE Seydou</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Téléphone</label>
                                        <p class="form-control-static">+225 07 08 09 10 11</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Véhicule</label>
                                        <p class="form-control-static">Camion CI-001-AB</p>
                                    </div>
                                </div>
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
                        </div>
                    </div>
                </div>

                <!-- Panneau latéral -->
                <div class="col-lg-4">
                    <!-- Statistiques rapides -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-bar-chart mr-2"></i>Résumé</h5>
                        </div>
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <h2 class="text-primary">1,000</h2>
                                <p class="text-muted">Total manuels</p>
                            </div>

                            <div class="mb-3">
                                <h2 class="text-success">3</h2>
                                <p class="text-muted">Types de manuels</p>
                            </div>

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
                        </div>
                    </div>

                    <!-- Actions rapides -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-zap mr-2"></i>Actions Rapides</h5>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-success btn-block waves-effect waves-light mb-2" onclick="marquerLivree()">
                                <i class="feather icon-check mr-2"></i>Marquer Livrée
                            </button>
                            <button type="button" class="btn btn-warning btn-block waves-effect waves-light mb-2" onclick="modifierStatut()">
                                <i class="feather icon-edit mr-2"></i>Modifier Statut
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-block waves-effect" onclick="exporterDonnees()">
                                <i class="feather icon-download mr-2"></i>Exporter
                            </button>
                        </div>
                    </div>

                    <!-- Informations système -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-info mr-2"></i>Informations Système</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label small">Créé le</label>
                                <p class="form-control-static small">{{ date('d/m/Y H:i') }}</p>
                            </div>
                            <div class="form-group">
                                <label class="form-label small">Créé par</label>
                                <p class="form-control-static small">Admin Système</p>
                            </div>
                            <div class="form-group">
                                <label class="form-label small">Dernière modification</label>
                                <p class="form-control-static small">{{ date('d/m/Y H:i') }}</p>
                            </div>
                            <div class="form-group">
                                <label class="form-label small">Modifié par</label>
                                <p class="form-control-static small">Utilisateur Actuel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-body end -->
    </div>
</div>

@endsection
