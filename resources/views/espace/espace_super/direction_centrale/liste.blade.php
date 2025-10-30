
@extends('layouts.layouts_super.master')
@section('title', 'Liste Direction Centrale')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-home text-primary"></i> Gestion Direction Centrale</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Direction Centrale</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions et Filtres SIDMAS -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h5 class="mb-0"><i class="feather icon-filter text-primary"></i> Filtres Direction Centrale SIDMAS</h5>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('direction_centrale.create') }}" class="btn btn-primary waves-effect waves-light">
                                    <i class="feather icon-plus"></i> Nouvelle Direction
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Filtres essentiels -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="searchInput" class="small font-weight-bold">🔍 Recherche globale :</label>
                                    <input type="text" id="searchInput" class="form-control form-control-sm" placeholder="Code direction, nom, responsable...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="statusFilter" class="small font-weight-bold">Statut :</label>
                                    <select id="statusFilter" class="form-control form-control-sm">
                                        <option value="">Tous les statuts</option>
                                        <option value="actif">Actif</option>
                                        <option value="inactif">Inactif</option>
                                        <option value="en_cours">En cours</option>
                                        <option value="reorganisation">Réorganisation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small font-weight-bold">&nbsp;</label>
                                    <div>
                                        <button type="button" class="btn btn-secondary btn-sm waves-effect" onclick="resetFilters()">
                                            🔄 Réinitialiser
                                        </button>
                                        <button type="button" class="btn btn-info btn-sm waves-effect ml-1" onclick="exportData()">
                                            <i class="feather icon-download"></i> Exporter
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Liste Direction Centrale -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Liste des Directions Centrales</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="#!"><i class="feather icon-eye"></i> Tout afficher</a></li>
                                    <li><a class="dropdown-item" href="#!"><i class="feather icon-refresh-cw"></i> Actualiser</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="servicesTable">
                                <thead class="thead-dark">
                        <tr>
                            <th width="5%">#</th>
                            <th width="12%">Code</th>
                            <th width="35%">Nom de la Direction</th>
                            <th width="25%">Responsable</th>
                            <th width="12%">Date Création</th>
                            <th width="11%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Directions Centrales SIDMAS -->
                        <tr>
                            <td>1</td>
                            <td><span class="badge badge-dark">DC-ADM</span></td>
                            <td>Direction des Affaires Administratives</td>
                            <td>
                                <div class="font-weight-bold">M. KOUASSI Albert</div>
                                <small class="text-muted">Directeur</small>
                            </td>
                            <td>15/03/2021</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('direction_centrale.show', 1) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                        <i class="feather icon-eye"></i>
                                    </a>
                                    <a href="{{ route('direction_centrale.edit', 1) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
                                        <i class="feather icon-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Supprimer" onclick="confirmDelete(1)">
                                        <i class="feather icon-trash-2"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><span class="badge badge-dark">DC-PED</span></td>
                            <td>Direction Pédagogique et Formation</td>
                            <td>
                                <div class="font-weight-bold">Mme DIALLO Fatou</div>
                                <small class="text-muted">Directrice</small>
                            </td>
                            <td>20/03/2021</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('direction_centrale.show', 2) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                        <i class="feather icon-eye"></i>
                                    </a>
                                    <a href="{{ route('direction_centrale.edit', 2) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
                                        <i class="feather icon-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Supprimer" onclick="confirmDelete(2)">
                                        <i class="feather icon-trash-2"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><span class="badge badge-dark">DC-LOG</span></td>
                            <td>Direction Logistique et Distribution</td>
                            <td>
                                <div class="font-weight-bold">M. TRAORE Seydou</div>
                                <small class="text-muted">Directeur</small>
                            </td>
                            <td>10/01/2022</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('direction_centrale.show', 3) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                        <i class="feather icon-eye"></i>
                                    </a>
                                    <a href="{{ route('direction_centrale.edit', 3) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
                                        <i class="feather icon-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Supprimer" onclick="confirmDelete(3)">
                                        <i class="feather icon-trash-2"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><span class="badge badge-dark">DC-FIN</span></td>
                            <td>Direction Financière et Budget</td>
                            <td>
                                <div class="font-weight-bold">Mme BAMBA Aicha</div>
                                <small class="text-muted">Directrice</small>
                            </td>
                            <td>05/04/2021</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('direction_centrale.show', 4) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                        <i class="feather icon-eye"></i>
                                    </a>
                                    <a href="{{ route('direction_centrale.edit', 4) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
                                        <i class="feather icon-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Supprimer" onclick="confirmDelete(4)">
                                        <i class="feather icon-trash-2"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><span class="badge badge-dark">DC-TEC</span></td>
                            <td>Direction Technique et Maintenance</td>
                            <td>
                                <div class="font-weight-bold">M. KONE Moussa</div>
                                <small class="text-muted">Directeur</small>
                            </td>
                            <td>22/06/2023</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('direction_centrale.show', 5) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                        <i class="feather icon-eye"></i>
                                    </a>
                                    <a href="{{ route('direction_centrale.edit', 5) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
                                        <i class="feather icon-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Supprimer" onclick="confirmDelete(5)">
                                        <i class="feather icon-trash-2"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><span class="badge badge-dark">DC-RH</span></td>
                            <td>Direction Ressources Humaines</td>
                            <td>
                                <div class="font-weight-bold">Mme YAO Marie</div>
                                <small class="text-muted">Directrice</small>
                            </td>
                            <td>14/09/2022</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('direction_centrale.show', 6) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                        <i class="feather icon-eye"></i>
                                    </a>
                                    <a href="{{ route('direction_centrale.edit', 6) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
                                        <i class="feather icon-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Supprimer" onclick="confirmDelete(6)">
                                        <i class="feather icon-trash-2"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><span class="badge badge-dark">DC-JUR</span></td>
                            <td>Direction Juridique et Contentieux</td>
                            <td>
                                <div class="font-weight-bold">M. OUATTARA Jean</div>
                                <small class="text-muted">Directeur</small>
                            </td>
                            <td>18/02/2024</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('direction_centrale.show', 7) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                        <i class="feather icon-eye"></i>
                                    </a>
                                    <a href="{{ route('direction_centrale.edit', 7) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
                                        <i class="feather icon-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Supprimer" onclick="confirmDelete(7)">
                                        <i class="feather icon-trash-2"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><span class="badge badge-dark">DC-COM</span></td>
                            <td>Direction Communication et Relations Publiques</td>
                            <td>
                                <div class="font-weight-bold">Mme GBAGBO Aya</div>
                                <small class="text-muted">Directrice</small>
                            </td>
                            <td>30/11/2023</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('direction_centrale.show', 8) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                        <i class="feather icon-eye"></i>
                                    </a>
                                    <a href="{{ route('direction_centrale.edit', 8) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
                                        <i class="feather icon-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Supprimer" onclick="confirmDelete(8)">
                                        <i class="feather icon-trash-2"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                        </div>

                        <!-- Pagination simplifiée -->
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <span class="text-muted">
                                    <i class="feather icon-info text-primary"></i>
                                    Affichage de 1 à 8 sur 8 directions centrales
                                </span>
                            </div>
                            <div class="col-md-6">
                                <nav aria-label="Pagination">
                                    <ul class="pagination justify-content-end mb-0">
                                        <li class="page-item disabled">
                                            <span class="page-link">Précédent</span>
                                        </li>
                                        <li class="page-item active">
                                            <span class="page-link">1</span>
                                        </li>
                                        <li class="page-item disabled">
                                            <span class="page-link">Suivant</span>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistiques simplifiées Direction Centrale -->
        <div class="row mt-4">
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-primary text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">8</h4>
                        <p class="mb-0">Total Directions</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-success text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">7</h4>
                        <p class="mb-0">Directions Actives</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-warning text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">1</h4>
                        <p class="mb-0">En Réorganisation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-info text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">2024</h4>
                        <p class="mb-0">Année Dernière Création</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function resetFilters() {
    document.getElementById('searchInput').value = '';
    document.getElementById('statusFilter').value = '';
    filterTable();

    new PNotify({
        title: 'Filtres réinitialisés',
        text: 'Tous les filtres ont été remis à zéro',
        type: 'info',
        delay: 2000
    });
}

function exportData() {
    new PNotify({
        title: 'Export en cours',
        text: 'Génération du fichier Excel des directions centrales...',
        type: 'info',
        delay: 3000
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const statusFilter = document.getElementById('statusFilter');
    const table = document.getElementById('servicesTable');
    const tbody = table.getElementsByTagName('tbody')[0];

    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase();
        const statusValue = statusFilter.value.toLowerCase();

        const rows = tbody.getElementsByTagName('tr');
        let visibleCount = 0;

        for (let i = 0; i < rows.length; i++) {
            const row = rows[i];
            const cells = row.getElementsByTagName('td');
            let showRow = true;

            // Filtrage par recherche globale
            if (searchTerm) {
                const textContent = row.textContent.toLowerCase();
                if (!textContent.includes(searchTerm)) {
                    showRow = false;
                }
            }

            // Filtrage par statut (recherche dans toute la ligne car plus de colonne statut)
            if (statusValue && showRow) {
                const textContent = row.textContent.toLowerCase();
                if (!textContent.includes(statusValue)) {
                    showRow = false;
                }
            }

            row.style.display = showRow ? '' : 'none';
            if (showRow) visibleCount++;
        }

        // Mettre à jour le compteur
        const countSpan = document.querySelector('.text-muted');
        countSpan.innerHTML = `
            <i class="feather icon-info text-primary"></i>
            Affichage de 1 à ${visibleCount} sur ${rows.length} directions centrales
        `;
    }

    // Rendre la fonction globalement accessible
    window.filterTable = filterTable;

    // Événements de filtrage
    searchInput.addEventListener('keyup', filterTable);
    statusFilter.addEventListener('change', filterTable);
});

function confirmDelete(id) {
    (new PNotify({
        title: 'Confirmation de suppression',
        text: 'Êtes-vous sûr de vouloir supprimer cette direction centrale ?',
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
            title: 'Direction supprimée',
            text: 'La direction centrale a été supprimée avec succès',
            type: 'success',
            delay: 3000
        });
    });
}
</script>

@endsection
