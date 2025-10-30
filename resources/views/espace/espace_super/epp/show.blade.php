@extends('layouts.layouts_super.master')
@section('title', 'Détails EPP')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-eye"></i> Détails de l'EPP</h5>
                            <p class="m-b-0">Affichage des détails de l'école primaire publique</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Accueil</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('epp.index') }}">EPP</a>
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
                    <a href="{{ route('epp.edit', 1) }}" class="btn btn-warning btn-lg waves-effect">
                        <i class="feather icon-edit"></i> Modifier
                    </a>
                    <a href="{{ route('epp.index') }}" class="btn btn-inverse btn-lg waves-effect">
                <i class="feather icon-arrow-left"></i> Retour à la liste
            </a>
            <button type="button" class="btn btn-danger btn-lg waves-effect" onclick="confirmDelete()">
                <i class="feather icon-trash-2"></i> Supprimer
            </button>
        </div>
    </div>

    <div class="row">
        <!-- Informations principales -->
        <div class="col-lg-8">
            <!-- Informations de base -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="feather icon-info"></i> Informations de base
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Nom de l'École</label>
                                <div class="info-value">EPP Plateau 1</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Code EPP</label>
                                <div class="info-value">
                                    <span class="badge badge-primary">EPP-ABIDJAN-PLATEAU-001</span>
                                    <small class="text-muted d-block">Généré selon hiérarchie DREN-IEPP</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section hiérarchie administrative -->
                    <div class="alert alert-info">
                        <h6><i class="feather icon-sitemap mr-2"></i>Hiérarchie Administrative</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="info-group mb-2">
                                    <label class="info-label">Direction Régionale (DREN)</label>
                                    <div class="info-value">
                                        <span class="badge badge-primary badge-lg">DREN ABIDJAN 1</span>
                                        <small class="text-muted d-block">Région administrative de rattachement</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-group mb-2">
                                    <label class="info-label">Inspection (IEPP)</label>
                                    <div class="info-value">
                                        <span class="badge badge-info badge-lg">IEPP PLATEAU</span>
                                        <small class="text-muted d-block">Inspection de rattachement</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="info-group mb-3">
                                <label class="info-label">Commune</label>
                                <div class="info-value">Plateau</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-group mb-3">
                                <label class="info-label">Quartier</label>
                                <div class="info-value">Plateau Nord</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-group mb-3">
                                <label class="info-label">Code Postal</label>
                                <div class="info-value">01 BP 5678</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-group mb-3">
                                <label class="info-label">Adresse complète</label>
                                <div class="info-value">
                                    Rue des Écoles, Plateau Nord, BP 5678 Abidjan, Côte d'Ivoire
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="info-group mb-3">
                                <label class="info-label">Type d'École</label>
                                <div class="info-value">
                                    <span class="badge badge-success badge-lg">École Complète</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-group mb-3">
                                <label class="info-label">Statut</label>
                                <div class="info-value">
                                    <span class="badge badge-success badge-lg">Active</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-group mb-3">
                                <label class="info-label">Date de création</label>
                                <div class="info-value">15 septembre 2018</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cycles et Niveaux -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="feather icon-book"></i> Cycles et Niveaux d'Enseignement
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Cycles Disponibles</label>
                                <div class="info-value">
                                    <span class="badge badge-info badge-lg">Primaire complet (CP1-CM2)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Niveaux enseignés</label>
                                <div class="info-value">
                                    <span class="badge badge-primary mr-1">CP1</span>
                                    <span class="badge badge-primary mr-1">CP2</span>
                                    <span class="badge badge-primary mr-1">CE1</span>
                                    <span class="badge badge-primary mr-1">CE2</span>
                                    <span class="badge badge-primary mr-1">CM1</span>
                                    <span class="badge badge-primary mr-1">CM2</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Personnel et Direction -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-users"></i> Personnel et Direction
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Directeur</label>
                                <div class="info-value">M. KOUAME Yves</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Contact du Directeur</label>
                                <div class="info-value">+225 07 45 67 89 12</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="info-group mb-3">
                                <label class="info-label">Nombre d'enseignants</label>
                                <div class="info-value">
                                    <span class="h4 text-primary">12</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-group mb-3">
                                <label class="info-label">Nombre de classes</label>
                                <div class="info-value">
                                    <span class="h4 text-success">8</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-group mb-3">
                                <label class="info-label">Personnel administratif</label>
                                <div class="info-value">
                                    <span class="h4 text-warning">3</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Email de l'École</label>
                                <div class="info-value">
                                    <a href="mailto:epp.plateau1@education.gouv.ci">epp.plateau1@education.gouv.ci</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Téléphone de l'École</label>
                                <div class="info-value">+225 27 20 45 67 89</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Infrastructure et Équipements -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-building"></i> Infrastructure et Équipements
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-group mb-3">
                                <label class="info-label">Équipements disponibles</label>
                                <div class="info-value">
                                    <span class="badge badge-success mr-1 mb-1">
                                        <i class="fas fa-check"></i> Bibliothèque
                                    </span>
                                    <span class="badge badge-success mr-1 mb-1">
                                        <i class="fas fa-check"></i> Cantine scolaire
                                    </span>
                                    <span class="badge badge-success mr-1 mb-1">
                                        <i class="fas fa-check"></i> Infirmerie
                                    </span>
                                    <span class="badge badge-success mr-1 mb-1">
                                        <i class="fas fa-check"></i> Terrain de sport
                                    </span>
                                    <span class="badge badge-success mr-1 mb-1">
                                        <i class="fas fa-check"></i> Salle informatique
                                    </span>
                                    <span class="badge badge-success mr-1 mb-1">
                                        <i class="fas fa-check"></i> Électricité
                                    </span>
                                    <span class="badge badge-success mr-1 mb-1">
                                        <i class="fas fa-check"></i> Eau courante
                                    </span>
                                    <span class="badge badge-success mr-1 mb-1">
                                        <i class="fas fa-check"></i> Toilettes
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Observations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-sticky-note"></i> Observations
                    </h6>
                </div>
                <div class="card-body">
                    <div class="info-group">
                        <div class="info-value">
                            L'EPP Plateau 1 est une école modèle située dans le centre administratif d'Abidjan.
                            Elle dispose d'infrastructures modernes et d'un personnel qualifié. L'école accueille
                            des élèves du CP1 au CM2 et propose un enseignement de qualité dans un environnement
                            propice à l'apprentissage. Les résultats aux examens sont excellents avec un taux de
                            réussite au CEP de 95%.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Panneau latéral -->
        <div class="col-lg-4">
            <!-- Statistiques d'effectifs -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-chart-bar"></i> Effectifs
                    </h6>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <div class="h2 text-primary">450</div>
                        <div class="text-muted">Effectif actuel</div>
                    </div>

                    <div class="text-center mb-3">
                        <div class="h2 text-success">500</div>
                        <div class="text-muted">Capacité d'accueil</div>
                    </div>

                    <div class="progress mb-3">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                    </div>
                    <div class="text-center text-muted small">Taux d'occupation</div>

                    <hr>

                    <div class="row text-center">
                        <div class="col-6">
                            <div class="h4 text-info">230</div>
                            <div class="text-muted small">Garçons</div>
                        </div>
                        <div class="col-6">
                            <div class="h4 text-warning">220</div>
                            <div class="text-muted small">Filles</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Répartition par niveau -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-layer-group"></i> Répartition par niveau
                    </h6>
                </div>
                <div class="card-body">
                    <div class="info-group mb-2">
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">CP1</span>
                            <span class="font-weight-bold">75 élèves</span>
                        </div>
                    </div>
                    <div class="info-group mb-2">
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">CP2</span>
                            <span class="font-weight-bold">80 élèves</span>
                        </div>
                    </div>
                    <div class="info-group mb-2">
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">CE1</span>
                            <span class="font-weight-bold">78 élèves</span>
                        </div>
                    </div>
                    <div class="info-group mb-2">
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">CE2</span>
                            <span class="font-weight-bold">72 élèves</span>
                        </div>
                    </div>
                    <div class="info-group mb-2">
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">CM1</span>
                            <span class="font-weight-bold">70 élèves</span>
                        </div>
                    </div>
                    <div class="info-group">
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">CM2</span>
                            <span class="font-weight-bold">75 élèves</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Documents et fichiers -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-file-alt"></i> Documents
                    </h6>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-file-pdf text-danger"></i>
                                <span class="ml-2">Document de création</span>
                            </div>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-download"></i>
                            </a>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-image text-success"></i>
                                <span class="ml-2">Photo de l'école</span>
                            </div>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-file-excel text-success"></i>
                                <span class="ml-2">Liste des élèves</span>
                            </div>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-download"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Informations système -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-info"></i> Informations système
                    </h6>
                </div>
                <div class="card-body">
                    <div class="info-group mb-2">
                        <label class="info-label small">Créé le</label>
                        <div class="info-value small">15 septembre 2018 à 14:30</div>
                    </div>
                    <div class="info-group mb-2">
                        <label class="info-label small">Créé par</label>
                        <div class="info-value small">Admin Système</div>
                    </div>
                    <div class="info-group mb-2">
                        <label class="info-label small">Dernière modification</label>
                        <div class="info-value small">{{ date('d M Y à H:i') }}</div>
                    </div>
                    <div class="info-group">
                        <label class="info-label small">Modifié par</label>
                        <div class="info-value small">{{ Auth::user()->name ?? 'Utilisateur' }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation de suppression -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmer la suppression</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cette EPP ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger" onclick="deleteItem()">Supprimer</button>
            </div>
        </div>
    </div>
        </div>
        <!-- Page-body end -->
    </div>
</div>

<script>
function confirmDelete() {
    (new PNotify({
        title: 'Confirmation de suppression',
        text: 'Êtes-vous sûr de vouloir supprimer cette EPP ? Cette action est irréversible.',
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
        deleteItem();
    });
}

function deleteItem() {
    // Ici, vous pouvez ajouter la logique de suppression
    new PNotify({
        title: 'EPP supprimée',
        text: 'EPP supprimée avec succès (simulation)',
        type: 'success',
        delay: 3000
    });
    // window.location.href = "{{ route('epp.index') }}";
}
</script>

<style>
.info-group {
    margin-bottom: 1rem;
}

.info-label {
    font-weight: 600;
    color: #5a5c69;
    font-size: 0.9rem;
    display: block;
    margin-bottom: 0.25rem;
}

.info-value {
    color: #3a3b45;
    font-size: 1rem;
    line-height: 1.4;
}

.badge-lg {
    font-size: 0.9rem;
    padding: 0.5rem 0.75rem;
}

.card-header {
    background-color: #f8f9fc;
    border-bottom: 1px solid #e3e6f0;
}

.btn-lg {
    padding: 0.75rem 1.5rem;
    font-size: 1.1rem;
}

.list-group-item {
    border-left: none;
    border-right: none;
    padding: 0.75rem 0;
}

.list-group-item:first-child {
    border-top: none;
}

.list-group-item:last-child {
    border-bottom: none;
}

hr {
    margin: 1.5rem 0;
    border-color: #e3e6f0;
}

.h2, .h4 {
    margin-bottom: 0.5rem;
}

.text-muted.small {
    font-size: 0.8rem;
}

.progress {
    height: 10px;
}

.badge {
    font-size: 0.8rem;
}
</style>

@endsection
