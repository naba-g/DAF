@extends('layouts.layouts_super.master')
@section('title', 'Détails de la Commande DAF')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-eye"></i> Détails de la Commande DAF</h5>
                            <p class="m-b-0">Affichage des détails de la commande #{{ $id }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Accueil</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('commande_daf.index') }}">Commandes DAF</a>
                            </li>
                            <li class="breadcrumb-item active">Détails Commande #{{ $id }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="page-body">
            <!-- Informations de la Commande -->
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Numéro de Commande:</label>
                                        <p class="text-gray-800">CMD-2024-{{ str_pad($id, 3, '0', STR_PAD_LEFT) }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Date de Commande:</label>
                                        <p class="text-gray-800">{{ date('d/m/Y') }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Description:</label>
                                <p class="text-gray-800">Commande de manuels scolaires pour l'année académique 2024-2025.
                                Cette commande comprend des livres de mathématiques, français, sciences et histoire
                                pour les niveaux primaire et secondaire.</p>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Fournisseur:</label>
                                        <p class="text-gray-800">Éditions CEDA</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Type de Commande:</label>
                                        <p class="text-gray-800">Manuels scolaires</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Priorité:</label>
                                        <p><span class="badge badge-warning">Urgente</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Date de Livraison Prévue:</label>
                                        <p class="text-gray-800">{{ date('d/m/Y', strtotime('+30 days')) }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Observations:</label>
                                <p class="text-gray-800">Livraison à effectuer dans les entrepôts de la Direction Centrale.
                                Vérification de qualité requise avant acceptation de la livraison.</p>
                            </div>
                        </div>
            </div>

            <!-- Historique des Actions -->
            <div class="card">
                <div class="card-header">
                    <h5><i class="feather icon-clock"></i> Historique des Actions</h5>
                </div>
                <div class="card-block">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-marker bg-primary"></div>
                            <div class="timeline-content">
                                <h6 class="timeline-title">Commande créée</h6>
                                <p class="timeline-text">La commande a été créée par Admin</p>
                                <span class="timeline-time">{{ date('d/m/Y H:i') }}</span>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker bg-warning"></div>
                            <div class="timeline-content">
                                <h6 class="timeline-title">En attente de validation</h6>
                                <p class="timeline-text">La commande est en attente de validation par le responsable</p>
                                <span class="timeline-time">{{ date('d/m/Y H:i') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Statut de la Commande -->
            <div class="card">
                <div class="card-header">
                    <h5><i class="feather icon-info"></i> Statut</h5>
                </div>
                <div class="card-block text-center">
                    <div class="mb-3">
                        <span class="badge badge-warning badge-lg">En Attente</span>
                    </div>
                    <p class="text-muted">Dernière mise à jour: {{ date('d/m/Y H:i') }}</p>
                </div>
            </div>

                    <!-- Actions Rapides -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-settings"></i> Actions Rapides</h5>
                        </div>
                        <div class="card-block">
                            <a href="{{ route('commande_daf.edit', $id) }}" class="btn btn-warning btn-block waves-effect waves-light mb-2">
                                <i class="feather icon-edit"></i> Modifier
                            </a>
                            <button type="button" class="btn btn-success btn-block waves-effect waves-light mb-2" onclick="validerCommande()">
                                <i class="feather icon-check"></i> Valider
                            </button>
                            <button type="button" class="btn btn-danger btn-block waves-effect waves-light mb-2" onclick="annulerCommande()">
                                <i class="feather icon-x"></i> Annuler
                            </button>
                            <a href="{{ route('commande_daf.index') }}" class="btn btn-inverse btn-block waves-effect waves-light">
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
                        <p class="text-gray-800">{{ date('d/m/Y H:i') }}</p>
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

<script>
function confirmDelete() {
    new PNotify({
        title: 'Confirmation',
        text: 'Êtes-vous sûr de vouloir supprimer cette commande ?',
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
            title: 'Succès',
            text: 'Commande supprimée avec succès',
            type: 'success'
        });
        setTimeout(() => {
            window.location.href = '{{ route("commande_daf.index") }}';
        }, 1500);
    });
}

function validerCommande() {
    new PNotify({
        title: 'Confirmation',
        text: 'Êtes-vous sûr de vouloir valider cette commande ?',
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
            title: 'Succès',
            text: 'Commande validée avec succès',
            type: 'success'
        });
        setTimeout(() => location.reload(), 1500);
    });
}

function annulerCommande() {
    new PNotify({
        title: 'Raison d\'annulation',
        text: 'Veuillez indiquer la raison de l\'annulation dans les observations avant de confirmer.',
        type: 'info',
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
            title: 'Succès',
            text: 'Commande annulée avec succès',
            type: 'success'
        });
        setTimeout(() => location.reload(), 1500);
    });
}
</script>

<style>
.badge-lg {
    font-size: 1.1em;
    padding: 0.5rem 1rem;
}

.timeline {
    position: relative;
    padding: 0;
    list-style: none;
}

.timeline-item {
    position: relative;
    margin-bottom: 1.5rem;
    padding-left: 2rem;
}

.timeline-marker {
    position: absolute;
    left: 0;
    top: 0;
    width: 1rem;
    height: 1rem;
    border-radius: 50%;
}

.timeline-content .timeline-title {
    font-weight: bold;
    margin-bottom: 0.25rem;
}

.timeline-content .timeline-text {
    margin-bottom: 0.25rem;
    color: #6c757d;
}

.timeline-content .timeline-time {
    font-size: 0.875rem;
    color: #adb5bd;
}

.timeline-item:not(:last-child)::before {
    content: '';
    position: absolute;
    left: 0.5rem;
    top: 1rem;
    width: 2px;
    height: calc(100% + 0.5rem);
    background-color: #e9ecef;
    transform: translateX(-50%);
}
</style>

@endsection
