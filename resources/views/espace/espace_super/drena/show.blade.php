@extends('layouts.layouts_super.master')
@section('title', 'Détails DRENA')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-eye"></i> Détails de la DREN</h5>
                            <p class="m-b-0">Affichage des détails de la direction régionale SIDMAS</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Accueil</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('drena.index') }}">DREN</a>
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
            <!-- Actions rapides -->
            <div class="card">
                <div class="card-block text-center">
                    <a href="{{ route('drena.edit', 1) }}" class="btn btn-warning btn-lg">
                        <i class="feather icon-edit"></i> Modifier la DREN
                    </a>
                    <a href="{{ route('drena.index') }}" class="btn btn-inverse btn-lg">
                        <i class="feather icon-arrow-left"></i> Retour à la liste
                    </a>
                    <button type="button" class="btn btn-danger btn-lg" onclick="confirmDelete()">
                        <i class="feather icon-trash-2"></i> Supprimer
                    </button>
                </div>
            </div>

    <div class="row">
        <!-- Informations principales -->
        <div class="col-lg-8">
            <!-- Informations de base -->
            <div class="card">
                <div class="card-header">
                    <h5><i class="feather icon-info"></i> Informations de base</h5>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="font-weight-bold">Nom de la DREN:</label>
                                <p class="text-gray-800 h5">DREN Lagunes</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="font-weight-bold">Code:</label>
                                <p class="text-gray-800"><span class="badge badge-dark">DREN-LAG1</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Région administrative:</label>
                                <p><span class="badge badge-primary">Lagunes</span></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Zone géographique:</label>
                                <p><span class="badge badge-info">Zone Abidjan</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Ville du siège:</label>
                                <p class="text-gray-800">Abidjan</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Statut:</label>
                                <p><span class="badge badge-success">Active</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="font-weight-bold">Adresse complète:</label>
                                <p class="text-gray-800">Rue des Jardins, Plateau, BP 1234 Abidjan, Côte d'Ivoire</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Direction et Personnel -->
            <div class="card">
                <div class="card-header">
                    <h5><i class="feather icon-users"></i> Direction et Personnel</h5>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Directeur Régional:</label>
                                <p class="text-gray-800">Dr. KOFFI Jean-Baptiste</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Contact du Directeur:</label>
                                <p class="text-gray-800">+225 07 12 34 56 78</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Directeur Adjoint:</label>
                                <p class="text-gray-800">Mme OUATTARA Aminata</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Secrétaire Général:</label>
                                <p class="text-gray-800">M. YAO Kouassi</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Email DREN:</label>
                                <p class="text-gray-800">
                                    <a href="mailto:contact@drena-lagunes.edu.ci">contact@drena-lagunes.edu.ci</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="font-weight-bold">Téléphone DREN:</label>
                                <p class="text-gray-800">+225 27 20 12 34 56</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Organisation et Statut -->
            <div class="card">
                <div class="card-header">
                    <h5><i class="feather icon-settings"></i> Organisation et Statut</h5>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="font-weight-bold">Nombre d'IEPP supervisées:</label>
                                <p class="text-gray-800"><span class="h4 text-success">15</span></p>
                                <small class="text-muted">Inspections Enseignement Primaire Préscolaire</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="font-weight-bold">Nombre d'EPP:</label>
                                <p class="text-gray-800"><span class="h4 text-info">1,250</span></p>
                                <small class="text-muted">Écoles Primaires Publiques</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="font-weight-bold">Zone d'intervention:</label>
                                <p><span class="badge badge-warning">Mixte</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="font-weight-bold">Date de création:</label>
                                <p class="text-gray-800">15 janvier 2020</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="font-weight-bold">Année scolaire de création:</label>
                                <p class="text-gray-800">2019-2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Observations -->
            <div class="card">
                <div class="card-header">
                    <h5><i class="feather icon-file-text"></i> Observations</h5>
                </div>
                <div class="card-block">
                    <div class="form-group">
                        <p class="text-gray-800">
                            La DREN Lagunes couvre la région économique la plus importante du pays avec Abidjan comme chef-lieu.
                            Elle supervise un nombre important d'établissements scolaires allant du primaire au secondaire.
                            La direction régionale joue un rôle clé dans la coordination des politiques éducatives dans cette zone stratégique.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Panneau latéral -->
        <div class="col-lg-4">
            <!-- Statut de la DREN -->
            <div class="card">
                <div class="card-header">
                    <h5><i class="feather icon-activity"></i> Statut de la DREN</h5>
                </div>
                <div class="card-block text-center">
                    <div class="mb-3">
                        <span class="badge badge-success badge-lg">DREN Active</span>
                    </div>
                    <p class="text-muted">Direction opérationnelle</p>
                    <p class="text-muted">Dernière mise à jour: {{ date('d/m/Y H:i') }}</p>
                </div>
            </div>

            <!-- Actions Rapides -->
            <div class="card">
                <div class="card-header">
                    <h5><i class="feather icon-zap"></i> Actions Rapides</h5>
                </div>
                <div class="card-block">
                    <a href="{{ route('drena.edit', 1) }}" class="btn btn-warning btn-block waves-effect waves-light mb-2">
                        <i class="feather icon-edit"></i> Modifier la DREN
                    </a>
                    <button type="button" class="btn btn-info btn-block waves-effect waves-light mb-2" onclick="voirRapports()">
                        <i class="feather icon-bar-chart-2"></i> Voir Rapports
                    </button>
                    <button type="button" class="btn btn-success btn-block waves-effect waves-light mb-2" onclick="exporterFiche()">
                        <i class="feather icon-download"></i> Exporter Fiche
                    </button>
                    <hr>
                    <a href="{{ route('drena.index') }}" class="btn btn-inverse btn-block waves-effect waves-light">
                        <i class="feather icon-arrow-left"></i> Retour à la Liste
                    </a>
                </div>
            </div>

            <!-- Statistiques -->
            <div class="card">
                <div class="card-header">
                    <h5><i class="feather icon-bar-chart-2"></i> Statistiques</h5>
                </div>
                <div class="card-block">
                    <div class="text-center mb-3">
                        <div class="h2 text-success">15</div>
                        <div class="text-muted">IEPP supervisées</div>
                    </div>

                    <div class="text-center mb-3">
                        <div class="h2 text-info">1,250</div>
                        <div class="text-muted">EPP gérées</div>
                    </div>

                    <hr>

                    <div class="row text-center">
                        <div class="col-6">
                            <div class="h4 text-warning">45,000</div>
                            <div class="text-muted small">Personnel</div>
                        </div>
                        <div class="col-6">
                            <div class="h4 text-danger">750,000</div>
                            <div class="text-muted small">Élèves</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Documents -->
            <div class="card">
                <div class="card-header">
                    <h5><i class="feather icon-file-text"></i> Documents</h5>
                </div>
                <div class="card-block">
                    <div class="form-group">
                        <label class="font-weight-bold">Document de création:</label>
                        <p><a href="#" class="text-info">document_creation_dren_lagunes.pdf</a></p>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Logo DREN:</label>
                        <p><a href="#" class="text-info">logo_dren_lagunes.png</a></p>
                    </div>
                </div>
            </div>

            <!-- Informations Supplémentaires -->
            <div class="card">
                <div class="card-header">
                    <h5><i class="feather icon-info"></i> Informations Système</h5>
                </div>
                <div class="card-block">
                    <div class="form-group">
                        <label class="font-weight-bold">Créé par:</label>
                        <p class="text-gray-800">Admin Système</p>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Date de Création:</label>
                        <p class="text-gray-800">15 janvier 2020</p>
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

@section('scripts')
<script>
function confirmDelete() {
    new PNotify({
        title: 'Confirmation',
        text: 'Êtes-vous sûr de vouloir supprimer cette DREN ?',
        type: 'question',
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
            title: 'DREN supprimée',
            text: 'DREN supprimée avec succès',
            type: 'success',
            delay: 3000
        });
        setTimeout(function() {
            window.location.href = '{{ route("drena.index") }}';
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

function exporterFiche() {
    new PNotify({
        title: 'Export en cours',
        text: 'Génération de la fiche DREN en PDF...',
        type: 'info',
        delay: 3000
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
.badge-info {
    background-color: #17a2b8;
}
.badge-warning {
    background-color: #ffc107;
    color: #212529;
}

.text-gray-800 {
    color: #5a5c69;
    font-size: 0.95rem;
}

.font-weight-bold {
    font-weight: 600;
}

.card-header {
    background-color: #f8f9fc !important;
    border-bottom: 1px solid #e3e6f0;
}

.btn-lg {
    padding: 0.75rem 1.5rem;
    font-size: 1.1rem;
}

.h2, .h4 {
    margin-bottom: 0.5rem;
}

.text-muted.small {
    font-size: 0.8rem;
}

hr {
    margin: 1.5rem 0;
    border-color: #e3e6f0;
}
</style>
@endsection

@endsection
