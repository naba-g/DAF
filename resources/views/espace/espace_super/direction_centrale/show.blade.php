@extends('layouts.layouts_super.master')
@section('title', 'Détails de la Direction Centrale')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-eye"></i> Détails de la Direction Centrale</h5>
                            <p class="m-b-0">Affichage des détails de la direction #{{ $id }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Accueil</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('direction_centrale.index') }}">Direction Centrale</a>
                            </li>
                            <li class="breadcrumb-item active">Direction #{{ $id }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="page-body">
            <!-- Informations de la Direction -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-info"></i> Informations Générales</h5>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="feather icon-maximize full-card"></i></li>
                                    <li><i class="feather icon-minus minimize-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Nom de la Direction:</label>
                                        <p class="text-gray-800 h5">Direction des Affaires Administratives</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Code:</label>
                                        <p class="text-gray-800"><span class="badge badge-dark">DC-ADM</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Type de Direction:</label>
                                        <p><span class="badge badge-primary">Administrative</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Statut:</label>
                                        <p><span class="badge badge-success">Actif</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Description:</label>
                                <p class="text-gray-800">Cette direction s'occupe de toutes les affaires administratives du ministère, incluant la gestion du personnel, les procédures administratives, et la coordination avec les autres directions.</p>
                            </div>

                            <!-- Responsable de la Direction -->
                            <div class="card mt-4">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0"><i class="feather icon-user text-primary"></i> Responsable de la Direction</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="font-weight-bold">Responsable:</label>
                                                <p class="text-gray-800">M. KOUASSI Albert</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="font-weight-bold">Poste:</label>
                                                <p class="text-gray-800">Directeur</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="font-weight-bold">Téléphone:</label>
                                                <p class="text-gray-800">+225 27 20 21 22 23</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="font-weight-bold">Email:</label>
                                                <p class="text-gray-800">direction.admin@men.gouv.ci</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Date de Création:</label>
                                        <p class="text-gray-800">15/03/2021</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Localisation:</label>
                                        <p class="text-gray-800">Plateau, Tour C - 5ème étage, Abidjan, Côte d'Ivoire</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Statut de la Direction -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-activity"></i> Statut de la Direction</h5>
                        </div>
                        <div class="card-block text-center">
                            <div class="mb-3">
                                <span class="badge badge-success badge-lg">Direction Active</span>
                            </div>
                            <p class="text-muted">Direction opérationnelle</p>
                            <p class="text-muted">Dernière mise à jour: {{ date('d/m/Y H:i') }}</p>
                        </div>
                    </div>

                    <!-- Actions Rapides -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-settings"></i> Actions Disponibles</h5>
                        </div>
                        <div class="card-block">
                            <a href="{{ route('direction_centrale.edit', $id) }}" class="btn btn-warning btn-block waves-effect waves-light mb-2">
                                <i class="feather icon-edit"></i> Modifier la Direction
                            </a>
                            <button type="button" class="btn btn-info btn-block waves-effect waves-light mb-2" onclick="voirRapports()">
                                <i class="feather icon-bar-chart-2"></i> Voir Rapports
                            </button>
                            <button type="button" class="btn btn-success btn-block waves-effect waves-light mb-2" onclick="changerStatut()">
                                <i class="feather icon-check"></i> Changer Statut
                            </button>
                            <hr>
                            <a href="{{ route('direction_centrale.index') }}" class="btn btn-inverse btn-block waves-effect waves-light">
                                <i class="feather icon-arrow-left"></i> Retour à la Liste
                            </a>
                        </div>
                    </div>

                    <!-- Informations Supplémentaires -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-user"></i> Informations Supplémentaires</h5>
                        </div>
                        <div class="card-block">
                            <div class="form-group">
                                <label class="font-weight-bold">Créé par:</label>
                                <p class="text-gray-800">Administrateur</p>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Date de Création:</label>
                                <p class="text-gray-800">15/03/2021</p>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Dernière Modification:</label>
                                <p class="text-gray-800">{{ date('d/m/Y H:i') }}</p>
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

@section('script')
<script>
function confirmDelete() {
    if (confirm('Êtes-vous sûr de vouloir supprimer cette direction ?')) {
        new PNotify({
            title: 'Direction supprimée',
            text: 'Direction supprimée avec succès',
            type: 'success',
            delay: 3000
        });
        setTimeout(function() {
            window.location.href = '{{ route("direction_centrale.index") }}';
        }, 2000);
    }
}

function changerStatut() {
    if (confirm('Êtes-vous sûr de vouloir changer le statut de cette direction ?')) {
        new PNotify({
            title: 'Statut modifié',
            text: 'Statut de la direction modifié avec succès',
            type: 'success',
            delay: 3000
        });
        setTimeout(function() {
            location.reload();
        }, 2000);
    }
}

function voirRapports() {
    new PNotify({
        title: 'Rapports',
        text: 'Fonctionnalité de rapports en cours de développement',
        type: 'info',
        delay: 4000
    });
}

// Fonctionnalités supplémentaires
function exporterFiche() {
    new PNotify({
        title: 'Export en cours',
        text: 'Génération de la fiche direction en PDF...',
        type: 'info',
        delay: 3000
    });
}

function envoyerEmail() {
    new PNotify({
        title: 'Email envoyé',
        text: 'Notification envoyée au responsable de la direction',
        type: 'success',
        delay: 4000
    });
}
</script>

<style>
.badge-lg {
    font-size: 1.1em;
    padding: 0.5rem 1rem;
}

.badge-primary {
    background-color: #007bff;
}
.badge-success {
    background-color: #28a745;
}
.badge-dark {
    background-color: #343a40;
}

.text-gray-800 {
    color: #5a5c69;
    font-size: 0.95rem;
}

.font-weight-bold {
    font-weight: 600;
}

.card-header.bg-light {
    background-color: #f8f9fc !important;
    border-bottom: 1px solid #e3e6f0;
}
</style>
@endsection
