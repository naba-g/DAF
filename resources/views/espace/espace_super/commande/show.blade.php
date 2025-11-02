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
                                        <label class="font-weight-bold">N° Commande SIDMAS:</label>
                                        <p class="text-gray-800 h6">CMD-2024-{{ str_pad($id, 3, '0', STR_PAD_LEFT) }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Année Scolaire:</label>
                                        <p class="text-gray-800">2024-2025</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">DREN Destinataire:</label>
                                        <p class="text-primary font-weight-bold">DREN ABIDJAN 1</p>
                                        <small class="text-muted">Zone Abidjan</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Date de Commande:</label>
                                        <p class="text-gray-800">{{ date('d/m/Y') }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Type d'Ouvrage:</label>
                                        <p class="text-gray-800">
                                            <span class="badge badge-outline-primary">Manuel Scolaire</span>
                                        </p>
                                        <small class="text-muted">Classification SIDMAS</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Niveau Scolaire:</label>
                                        <p class="text-gray-800">
                                            <span class="badge badge-info">CP2 (Cours Préparatoire 2)</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Titre de l'Ouvrage:</label>
                                        <p class="text-gray-800 font-weight-bold">Mon premier livre de lecture CP2</p>
                                        <small class="text-muted">Référence SIDMAS</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Quantité Demandée:</label>
                                        <p class="text-info h5">1,500 exemplaires</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Quantité Reçue:</label>
                                        <p class="text-success h5">1,200 exemplaires</p>
                                        <small class="text-warning">
                                            <i class="feather icon-alert-triangle"></i> Livraison partielle (300 manquants)
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Priorité:</label>
                                        <p><span class="badge badge-warning">Urgente</span></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Date Livraison Prévue:</label>
                                        <p class="text-gray-800">15/12/2024</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Date Livraison Effective:</label>
                                        <p class="text-gray-800">10/12/2024</p>
                                        <small class="text-success">
                                            <i class="feather icon-check"></i> Livrée en avance
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Fournisseur:</label>
                                        <p class="text-gray-800">Éditions CEDA</p>
                                        <small class="text-muted">Fournisseur sélectionné</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Statut Actuel:</label>
                                        <p><span class="badge badge-success">Livrée Partielle</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Observations et Commentaires:</label>
                                <p class="text-gray-800">Commande partiellement livrée - En attente du solde de 300 exemplaires. Fournisseur contacté pour délai de livraison.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Historique des Actions -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-clock"></i> Historique et Suivi SIDMAS</h5>
                        </div>
                        <div class="card-block">
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div class="timeline-marker bg-success"></div>
                                    <div class="timeline-content">
                                        <h6 class="timeline-title">Livraison partielle reçue</h6>
                                        <p class="timeline-text">1,200 exemplaires livrés par Éditions CEDA</p>
                                        <span class="timeline-time">10/12/2024 14:30</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker bg-info"></div>
                                    <div class="timeline-content">
                                        <h6 class="timeline-title">En cours de livraison</h6>
                                        <p class="timeline-text">Expédition vers DREN ABIDJAN 1 confirmée</p>
                                        <span class="timeline-time">08/12/2024 09:15</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker bg-primary"></div>
                                    <div class="timeline-content">
                                        <h6 class="timeline-title">Commande validée</h6>
                                        <p class="timeline-text">Validation par le responsable DAF</p>
                                        <span class="timeline-time">25/11/2024 16:45</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker bg-warning"></div>
                                    <div class="timeline-content">
                                        <h6 class="timeline-title">En attente de validation</h6>
                                        <p class="timeline-text">Commande soumise pour validation</p>
                                        <span class="timeline-time">20/11/2024 11:20</span>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker bg-secondary"></div>
                                    <div class="timeline-content">
                                        <h6 class="timeline-title">Commande créée</h6>
                                        <p class="timeline-text">Création de la commande SIDMAS CMD-2024-{{ str_pad($id, 3, '0', STR_PAD_LEFT) }}</p>
                                        <span class="timeline-time">15/11/2024 08:30</span>
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
                            <h5><i class="feather icon-activity"></i> Statut et Progression</h5>
                        </div>
                        <div class="card-block text-center">
                            <div class="mb-3">
                                <span class="badge badge-success badge-lg">Livrée Partielle</span>
                            </div>
                            <div class="progress mb-3" style="height: 8px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-muted small">Progression: 1,200 / 1,500 exemplaires (80%)</p>
                            <p class="text-muted">Dernière mise à jour: {{ date('d/m/Y H:i') }}</p>
                        </div>
                    </div>

                    <!-- Métriques de Performance -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-trending-up"></i> Métriques</h5>
                        </div>
                        <div class="card-block">
                            <div class="row text-center">
                                <div class="col-6">
                                    <h4 class="text-success">5j</h4>
                                    <small class="text-muted">Avance livraison</small>
                                </div>
                                <div class="col-6">
                                    <h4 class="text-warning">80%</h4>
                                    <small class="text-muted">Taux livraison</small>
                                </div>
                            </div>
                            <hr>
                            <div class="row text-center">
                                <div class="col-12">
                                    <h5 class="text-info"> </h5>
                                    <small class="text-muted"> </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Actions Rapides -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-settings"></i> Actions Disponibles</h5>
                        </div>
                        <div class="card-block">
                            <a href="{{ route('commande_daf.edit', $id) }}" class="btn btn-warning btn-block waves-effect waves-light mb-2">
                                <i class="feather icon-edit"></i> Modifier la Commande
                            </a>
                            <button type="button" class="btn btn-info btn-block waves-effect waves-light mb-2" onclick="relancerFournisseur()">
                                <i class="feather icon-phone"></i> Relancer Fournisseur
                            </button>
                            <button type="button" class="btn btn-success btn-block waves-effect waves-light mb-2" onclick="marquerComplete()">
                                <i class="feather icon-check-circle"></i> Marquer Terminée
                            </button>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary btn-block dropdown-toggle" type="button" data-toggle="dropdown">
                                    <i class="feather icon-more-horizontal"></i> Plus d'actions
                                </button>
                                <div class="dropdown-menu w-100">
                                    <a class="dropdown-item" href="#" onclick="exportCommande()">
                                        <i class="feather icon-download"></i> Exporter en PDF
                                    </a>
                                    <a class="dropdown-item" href="#" onclick="duplicateCommande()">
                                        <i class="feather icon-copy"></i> Dupliquer la commande
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="#" onclick="annulerCommande()">
                                        <i class="feather icon-x"></i> Annuler la commande
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <a href="{{ route('commande_daf.index') }}" class="btn btn-inverse btn-block waves-effect waves-light">
                                <i class="feather icon-arrow-left"></i> Retour à la Liste
                            </a>
                        </div>
                    </div>

            <!-- Informations de Livraison -->
            <div class="card">
                <div class="card-header">
                    <h5><i class="feather icon-truck"></i> Détails de Livraison</h5>
                </div>
                <div class="card-block">
                    <div class="form-group">
                        <label class="font-weight-bold">Zone de Livraison:</label>
                        <p class="text-gray-800">Zone Abidjan</p>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Point de Livraison:</label>
                        <p class="text-gray-800">Entrepôt DREN ABIDJAN 1</p>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Responsable Réception:</label>
                        <p class="text-gray-800">M. Kouassi Jean</p>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">Contact:</label>
                        <p class="text-gray-800">+225 07 XX XX XX XX</p>
                    </div>
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

@section('script')
<script>
    function relancerFournisseur() {
        if (confirm('Êtes-vous sûr de vouloir envoyer une relance au fournisseur ?')) {
            // Simulation d'envoi de relance
            new PNotify({
                title: 'Relance Envoyée',
                text: 'Le fournisseur a été relancé avec succès.',
                type: 'success'
            });
        }
    }

    function marquerComplete() {
        if (confirm('Marquer cette commande comme terminée ?')) {
            // Simulation de mise à jour du statut
            new PNotify({
                title: 'Commande Mise à Jour',
                text: 'La commande a été marquée comme terminée.',
                type: 'success'
            });
            // Redirection ou actualisation de la page
            setTimeout(() => {
                location.reload();
            }, 1500);
        }
    }

    function exportCommande() {
        new PNotify({
            title: 'Export en cours',
            text: 'Génération du PDF de la commande...',
            type: 'info'
        });
        // Simulation de téléchargement
        setTimeout(() => {
            window.open('/commande/export/pdf/{{ $id }}', '_blank');
        }, 1000);
    }

    function duplicateCommande() {
        if (confirm('Dupliquer cette commande avec les mêmes informations ?')) {
            new PNotify({
                title: 'Duplication',
                text: 'Redirection vers la création d\'une nouvelle commande...',
                type: 'info'
            });
            setTimeout(() => {
                window.location.href = '{{ route("commande_daf.create") }}?duplicate={{ $id }}';
            }, 1000);
        }
    }

    function annulerCommande() {
        if (confirm('Êtes-vous sûr de vouloir annuler cette commande ? Cette action est irréversible.')) {
            new PNotify({
                title: 'Commande Annulée',
                text: 'La commande a été annulée avec succès.',
                type: 'error'
            });
            setTimeout(() => {
                window.location.href = '{{ route("commande_daf.index") }}';
            }, 1500);
        }
    }

    // Animation des badges au chargement
    $(document).ready(function() {
        $('.badge').each(function(index) {
            $(this).delay(index * 100).fadeIn();
        });
        
        // Animation des métriques
        $('.progress-bar').each(function() {
            var width = $(this).attr('aria-valuenow');
            $(this).css('width', '0%').animate({
                width: width + '%'
            }, 1000);
        });
    });
</script>
@endsection
