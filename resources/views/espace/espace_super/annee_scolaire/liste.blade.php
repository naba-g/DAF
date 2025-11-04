
@extends('layouts.layouts_super.master')
@section('title', 'Liste des Années Scolaires')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Header -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Gestion des Années Scolaires</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Administration</a></li>
                            <li class="breadcrumb-item"><a href="#!">Années Scolaires</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card bg-c-blue order-card">
                    <div class="card-body">
                        <h6 class="text-white">Total Années</h6>
                        <h2 class="text-white"><i class="feather icon-calendar mr-2"></i><span>5</span></h2>
                        <p class="text-white m-b-0">Années enregistrées</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card bg-c-green order-card">
                    <div class="card-body">
                        <h6 class="text-white">Année Active</h6>
                        <h2 class="text-white"><i class="feather icon-check-circle mr-2"></i><span>2024-2025</span></h2>
                        <p class="text-white m-b-0">Année en cours</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card bg-c-yellow order-card">
                    <div class="card-body">
                        <h6 class="text-white">Années Archivées</h6>
                        <h2 class="text-white"><i class="feather icon-archive mr-2"></i><span>2</span></h2>
                        <p class="text-white m-b-0">Années fermées</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card bg-c-red order-card">
                    <div class="card-body">
                        <h6 class="text-white">Dernière MAJ</h6>
                        <h2 class="text-white"><i class="feather icon-clock mr-2"></i><span>Hier</span></h2>
                        <p class="text-white m-b-0">Mise à jour</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filters and Actions -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Filtres et Actions</h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="filterStatut">Statut</label>
                                    <select class="form-control" id="filterStatut">
                                        <option value="">Tous les statuts</option>
                                        <option value="active">Active</option>
                                        <option value="archivee">Archivée</option>
                                        <option value="future">Future</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="filterAnnee">Rechercher année</label>
                                    <input type="text" class="form-control" id="filterAnnee" placeholder="Ex: 2023-2024">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <div class="d-block">
                                        <button type="button" class="btn btn-outline-primary" onclick="applyFilters()">
                                            <i class="feather icon-search"></i> Filtrer
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary ml-2" onclick="resetFilters()">
                                            <i class="feather icon-refresh-cw"></i> Reset
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <div class="d-block">
                                        <a href="/annee_scolaire/create" class="btn btn-primary">
                                            <i class="feather icon-plus"></i> Nouvelle Année
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Table -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Liste des Années Scolaires</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> Plein écran</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> Réduire</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><span><i class="feather icon-refresh-cw"></i> Actualiser</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Année Scolaire</th>
                                        <th>Date Début</th>
                                        <th>Date Fin</th>
                                        <th>Statut</th>
                                        <th>Nombre d'Élèves</th>
                                        <th>Créée le</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <strong>2024-2025</strong>
                                            <span class="badge badge-success ml-1">Active</span>
                                        </td>
                                        <td>01/09/2024</td>
                                        <td>31/08/2025</td>
                                        <td>
                                            <span class="badge badge-light-success">
                                                <i class="feather icon-check-circle"></i> Active
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-primary">
                                                1,248 élèves
                                            </span>
                                        </td>
                                        <td>15/08/2024 10:30</td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="/annee_scolaire/show/1" class="btn btn-outline-info" title="Voir détails">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <a href="/annee_scolaire/edit/1" class="btn btn-outline-warning" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-success" title="Déjà active" disabled>
                                                    <i class="feather icon-check"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <strong>2023-2024</strong>
                                        </td>
                                        <td>01/09/2023</td>
                                        <td>31/08/2024</td>
                                        <td>
                                            <span class="badge badge-light-secondary">
                                                <i class="feather icon-archive"></i> Archivée
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-primary">
                                                1,156 élèves
                                            </span>
                                        </td>
                                        <td>20/08/2023 14:15</td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="/annee_scolaire/show/1" class="btn btn-outline-info" title="Voir détails">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <a href="/annee_scolaire/edit/1" class="btn btn-outline-warning" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger" title="Supprimer" onclick="confirmDelete(2)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-success" title="Activer" onclick="activateYear(2)">
                                                    <i class="feather icon-check"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <strong>2025-2026</strong>
                                        </td>
                                        <td>01/09/2025</td>
                                        <td>31/08/2026</td>
                                        <td>
                                            <span class="badge badge-light-info">
                                                <i class="feather icon-clock"></i> Future
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-primary">
                                                0 élèves
                                            </span>
                                        </td>
                                        <td>10/06/2024 09:45</td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="/annee_scolaire/show/1" class="btn btn-outline-info" title="Voir détails">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <a href="/annee_scolaire/edit/1" class="btn btn-outline-warning" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger" title="Supprimer" onclick="confirmDelete(3)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-success" title="Activer" onclick="activateYear(3)">
                                                    <i class="feather icon-check"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <strong>2022-2023</strong>
                                        </td>
                                        <td>01/09/2022</td>
                                        <td>31/08/2023</td>
                                        <td>
                                            <span class="badge badge-light-secondary">
                                                <i class="feather icon-archive"></i> Archivée
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-primary">
                                                1,089 élèves
                                            </span>
                                        </td>
                                        <td>25/08/2022 16:20</td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="/annee_scolaire/show/1" class="btn btn-outline-info" title="Voir détails">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <a href="/annee_scolaire/edit/1" class="btn btn-outline-warning" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-success" title="Activer" onclick="activateYear(4)">
                                                    <i class="feather icon-check"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <strong>2026-2027</strong>
                                        </td>
                                        <td>01/09/2026</td>
                                        <td>31/08/2027</td>
                                        <td>
                                            <span class="badge badge-light-info">
                                                <i class="feather icon-clock"></i> Future
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge badge-light-primary">
                                                0 élèves
                                            </span>
                                        </td>
                                        <td>15/06/2024 11:00</td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="/annee_scolaire/show/1" class="btn btn-outline-info" title="Voir détails">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <a href="/annee_scolaire/edit/1" class="btn btn-outline-warning" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger" title="Supprimer" onclick="confirmDelete(5)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-success" title="Activer" onclick="activateYear(5)">
                                                    <i class="feather icon-check"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination statique -->
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
                                <p class="text-center text-muted">Affichage de 1 à 5 sur 5 entrées</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Filtres
function applyFilters() {
    const statut = document.getElementById('filterStatut').value;
    const annee = document.getElementById('filterAnnee').value;

    new PNotify({
        title: 'Filtres appliqués',
        text: `Statut: ${statut || 'Tous'}, Année: ${annee || 'Toutes'}`,
        type: 'info'
    });
}

function resetFilters() {
    document.getElementById('filterStatut').value = '';
    document.getElementById('filterAnnee').value = '';

    new PNotify({
        title: 'Information',
        text: 'Filtres réinitialisés',
        type: 'info'
    });
}

// Confirmation de suppression
function confirmDelete(id) {
    new PNotify({
        title: 'Confirmation',
        text: 'Êtes-vous sûr de vouloir supprimer cette année scolaire ? Cette action est irréversible.',
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
            text: 'Année scolaire supprimée avec succès',
            type: 'success'
        });
    });
}

// Activation d'année
function activateYear(id) {
    new PNotify({
        title: 'Confirmation',
        text: 'Voulez-vous définir cette année comme année active ?',
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
            text: 'Année scolaire activée avec succès',
            type: 'success'
        });
        setTimeout(() => location.reload(), 1500);
    });
}

// Auto-refresh simulation
setInterval(function() {
    // Simulation d'auto-refresh
}, 30000);
</script>

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
    margin-right: 2px;
}

.table-hover tbody tr:hover {
    background-color: #f5f5f5;
}
</style>

@endsection
