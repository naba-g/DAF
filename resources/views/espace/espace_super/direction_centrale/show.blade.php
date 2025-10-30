@extends('layouts.layouts_super.master')
@section('title', 'Détails du Service - Direction Centrale')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-eye"></i> Détails du Service - Direction Centrale</h5>
                            <p class="m-b-0">Affichage des détails du service #{{ $id }}</p>
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
                            <li class="breadcrumb-item active">Service #{{ $id }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="page-body">
            <!-- Informations du Service -->
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
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('direction_centrale.edit', $id) }}">
                                <i class="feather icon-edit mr-2"></i>
                                Modifier
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#" onclick="confirmDelete()">
                                <i class="feather icon-trash-2 mr-2"></i>
                                Supprimer
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="font-weight-bold">Nom du Service:</label>
                                <p class="text-gray-800 h5">Service des Affaires Administratives</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="font-weight-bold">Code:</label>
                                <p class="text-gray-800"><span class="badge badge-secondary">SAA</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Type de Service:</label>
                                <p><span class="badge badge-info">Administrative</span></p>
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
                        <p class="text-gray-800">Ce service s'occupe de toutes les affaires administratives de la direction centrale, incluant la gestion du personnel, les procédures administratives, et la coordination avec les autres services.</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Responsable:</label>
                                <p class="text-gray-800">Mme KOUAME Adjoua</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Poste:</label>
                                <p class="text-gray-800">Chef de Service</p>
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
                                <p class="text-gray-800">saa@men.gouv.ci</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Date de Création:</label>
                                <p class="text-gray-800">01/01/2024</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Numéro d'Ordre:</label>
                                <p class="text-gray-800">
                                    <span class="badge badge-primary">1</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Adresse/Localisation:</label>
                        <p class="text-gray-800">Plateau, Tour C - 5ème étage, Abidjan, Côte d'Ivoire</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Nombre d'Employés:</label>
                                <p class="text-gray-800">15 employés</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Niveau de Priorité:</label>
                                <p><span class="badge badge-warning">Importante</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Objectifs et Missions:</label>
                        <p class="text-gray-800">
                            - Gestion des ressources humaines<br>
                            - Coordination des activités administratives<br>
                            - Support aux autres services<br>
                            - Gestion documentaire et archivage
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Statut du Service -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Statut du Service</h6>
                </div>
                <div class="card-body text-center">
                    <div class="mb-3">
                        <span class="badge badge-success badge-lg">Actif</span>
                    </div>
                    <p class="text-muted">Service stratégique</p>
                    <p class="text-muted">Dernière mise à jour: {{ date('d/m/Y H:i') }}</p>
                </div>
            </div>

            <!-- Actions Rapides -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Actions Rapides</h6>
                </div>
                <div class="card-body">
                    <a href="{{ route('direction_centrale.edit', $id) }}" class="btn btn-warning btn-block mb-2 waves-effect">
                        <i class="feather icon-edit"></i> Modifier
                    </a>
                    <button type="button" class="btn btn-info btn-block mb-2 waves-effect" onclick="voirRapports()">
                        <i class="feather icon-bar-chart-2"></i> Voir Rapports
                    </button>
                    <button type="button" class="btn btn-success btn-block mb-2 waves-effect" onclick="activerService()">
                        <i class="feather icon-check"></i> Activer/Désactiver
                    </button>
                    <a href="{{ route('direction_centrale.index') }}" class="btn btn-secondary btn-block waves-effect">
                        <i class="feather icon-arrow-left"></i> Retour à la Liste
                    </a>
                </div>
            </div>

            <!-- Statistiques -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Statistiques</h6>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-6">
                            <div class="border-right">
                                <h4 class="text-primary">15</h4>
                                <small class="text-muted">Employés</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <h4 class="text-success">95%</h4>
                            <small class="text-muted">Performance</small>
                        </div>
                    </div>
                    <hr>
                    <div class="row text-center">
                        <div class="col-6">
                            <div class="border-right">
                                <h4 class="text-info">24</h4>
                                <small class="text-muted">Projets</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <h4 class="text-warning">8</h4>
                            <small class="text-muted">En cours</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Informations Supplémentaires -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informations Supplémentaires</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="font-weight-bold">Créé par:</label>
                        <p class="text-gray-800">Administrateur</p>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Date de Création:</label>
                        <p class="text-gray-800">01/01/2024</p>
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

<script>
function confirmDelete() {
    (new PNotify({
        title: 'Confirmation de suppression',
        text: 'Êtes-vous sûr de vouloir supprimer ce service ?',
        icon: 'feather icon-trash-2',
        hide: false,
        confirm: {
            confirm: true
        },
        buttons: {
            closer: false,
            sticker: false
        },
        history: {
            history: false
        },
        addClass: 'notice-remove'
    })).get().on('pnotify.confirm', function() {
        new PNotify({
            title: 'Service supprimé',
            text: 'Service supprimé (simulation)',
            type: 'success',
            delay: 3000
        });
        setTimeout(function() {
            window.location.href = '{{ route("direction_centrale.index") }}';
        }, 2000);
    });
}

function activerService() {
    (new PNotify({
        title: 'Changement de statut',
        text: 'Êtes-vous sûr de vouloir changer le statut de ce service ?',
        icon: 'feather icon-check',
        hide: false,
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
    })).get().on('pnotify.confirm', function() {
        new PNotify({
            title: 'Statut modifié',
            text: 'Statut du service modifié (simulation)',
            type: 'success',
            delay: 3000
        });
        setTimeout(function() {
            location.reload();
        }, 2000);
    });
}

function voirRapports() {
    new PNotify({
        title: 'Rapports',
        text: 'Fonctionnalité de rapports en cours de développement',
        type: 'info',
        delay: 4000
    });
}
</script>

<style>
.badge-lg {
    font-size: 1.1em;
    padding: 0.5rem 1rem;
}

.badge-info {
    background-color: #17a2b8;
}
.badge-success {
    background-color: #28a745;
}
.badge-warning {
    background-color: #ffc107;
    color: #212529;
}
.badge-secondary {
    background-color: #6c757d;
}

.border-right {
    border-right: 1px solid #e3e6f0;
}

.text-primary {
    color: #4e73df !important;
}
.text-success {
    color: #1cc88a !important;
}
.text-info {
    color: #36b9cc !important;
}
.text-warning {
    color: #f6c23e !important;
}
</style>

@endsection
