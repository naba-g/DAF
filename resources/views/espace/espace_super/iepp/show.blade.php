@extends('layouts.layouts_super.master')
@section('title', 'Détails IEPP')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-eye"></i> Détails de l'IEPP</h5>
                            <p class="m-b-0">Informations détaillées de l'Inspection de l'Enseignement Primaire et Préscolaire</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Accueil</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('iepp.index') }}">IEPP</a>
                            </li>
                            <li class="breadcrumb-item active">Détails</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Informations principales -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-info"></i> Informations principales</h5>
                            <div class="card-header-right">
                                <a href="{{ route('iepp.edit', $id) }}" class="btn btn-primary btn-sm">
                                    <i class="feather icon-edit"></i> Modifier
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6><strong>Nom de l'IEPP</strong></h6>
                                    <p>IEPP PLATEAU</p>
                                </div>
                                <div class="col-md-6">
                                    <h6><strong>Code IEPP</strong></h6>
                                    <p><span class="badge badge-primary">IEPP-ABJ-PLA-001</span></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6><strong>DREN de rattachement</strong></h6>
                                    <p>DREN ABIDJAN 1</p>
                                </div>
                                <div class="col-md-6">
                                    <h6><strong>Type de zone</strong></h6>
                                    <p><span class="badge badge-info">Urbaine</span></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6><strong>Statut</strong></h6>
                                    <p><span class="badge badge-success">Active</span></p>
                                </div>
                                <div class="col-md-6">
                                    <h6><strong>Date de création</strong></h6>
                                    <p>15 Janvier 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Localisation -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-map-pin"></i> Localisation</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6><strong>Commune</strong></h6>
                                    <p>Plateau</p>
                                </div>
                                <div class="col-md-6">
                                    <h6><strong>Quartier</strong></h6>
                                    <p>Zone administrative</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h6><strong>Adresse complète</strong></h6>
                                    <p>Avenue Jean Mermoz, Immeuble Postel 2001, 2ème étage - Plateau, Abidjan</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Responsable -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-user"></i> Responsable</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <h6><strong>Nom et Prénoms</strong></h6>
                                    <p>KOUAME Yves Marie</p>
                                </div>
                                <div class="col-md-4">
                                    <h6><strong>Fonction</strong></h6>
                                    <p>Inspecteur</p>
                                </div>
                                <div class="col-md-4">
                                    <h6><strong>Téléphone</strong></h6>
                                    <p>+225 07 12 34 56 78</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6><strong>Email</strong></h6>
                                    <p>iepp.plateau@education.gouv.ci</p>
                                </div>
                                <div class="col-md-6">
                                    <h6><strong>Statut responsable</strong></h6>
                                    <p><span class="badge badge-success">En fonction</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Statistiques -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-bar-chart"></i> Statistiques</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card bg-primary text-white">
                                        <div class="card-body">
                                            <h4>85</h4>
                                            <p>EPP rattachées</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card bg-info text-white">
                                        <div class="card-body">
                                            <h4>12,450</h4>
                                            <p>Élèves</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card bg-success text-white">
                                        <div class="card-body">
                                            <h4>456</h4>
                                            <p>Enseignants</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card bg-warning text-white">
                                        <div class="card-body">
                                            <h4>125</h4>
                                            <p>Distributions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Boutons d'action -->
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <a href="{{ route('iepp.edit', $id) }}" class="btn btn-primary btn-lg mr-2">
                                    <i class="feather icon-edit"></i> Modifier
                                </a>
                                <a href="{{ route('iepp.index') }}" class="btn btn-secondary btn-lg mr-2">
                                    <i class="feather icon-list"></i> Retour à la liste
                                </a>
                                <button type="button" class="btn btn-info btn-lg mr-2" onclick="printIepp()">
                                    <i class="feather icon-printer"></i> Imprimer
                                </button>
                                <button type="button" class="btn btn-danger btn-lg" onclick="deleteIepp()">
                                    <i class="feather icon-trash-2"></i> Supprimer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function printIepp() {
    new PNotify({
        title: 'Impression',
        text: 'Génération du rapport IEPP en cours...',
        type: 'info'
    });
}

function deleteIepp() {
    new PNotify({
        title: 'Confirmation',
        text: 'Êtes-vous sûr de vouloir supprimer cette IEPP ?',
        type: 'warning',
        confirm: {
            confirm: true
        },
        buttons: {
            closer: false,
            sticker: false
        },
        history: {
            history: false
        }
    }).get().on('pnotify.confirm', function() {
        new PNotify({
            title: 'IEPP supprimée',
            text: 'L\'IEPP a été supprimée avec succès',
            type: 'success'
        });
    });
}
</script>

@endsection