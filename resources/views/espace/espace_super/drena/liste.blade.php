
@extends('layouts.layouts_super.master')
@section('title', 'Liste des DREN')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- En-tête simplifié -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">
                                <i class="feather icon-map-pin text-primary"></i>
                                Gestion des DREN
                            </h5>
                            <p class="text-muted mb-0">
                                <i class="feather icon-database"></i> 56 Directions Régionales de l'Éducation Nationale (SIDMAS)
                            </p>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">
                                    <i class="feather icon-home"></i> Accueil
                                </a>
                            </li>
                            <li class="breadcrumb-item active">DREN</li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ route('drena.create') }}" class="btn btn-primary">
                            <i class="feather icon-plus"></i> Nouvelle DREN
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filtres essentiels -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <input type="text" id="searchInput" class="form-control"
                                       placeholder="🔍 Rechercher une DREN...">
                            </div>
                            <div class="col-md-2">
                                <select id="zoneFilter" class="form-control">
                                    <option value="">Toutes les zones</option>
                                    <option value="abidjan">Zone Abidjan</option>
                                    <option value="centre">Zone Centre</option>
                                    <option value="nord">Zone Nord</option>
                                    <option value="ouest">Zone Ouest</option>
                                    <option value="est">Zone Est</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="typeFilter" class="form-control">
                                    <option value="">Tous les types</option>
                                    <option value="metropolitaine">Métropolitaine</option>
                                    <option value="regionale">Régionale</option>
                                    <option value="departementale">Départementale</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="statusFilter" class="form-control">
                                    <option value="">Tous les statuts</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                    <option value="en_creation">En création</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="effectifFilter" class="form-control">
                                    <option value="">Tous les effectifs</option>
                                    <option value="petit">Petit (< 10 IEPP)</option>
                                    <option value="moyen">Moyen (10-20 IEPP)</option>
                                    <option value="grand">Grand (> 20 IEPP)</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-outline-secondary" onclick="resetFilters()" title="Réinitialiser">
                                    <i class="feather icon-refresh-cw"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau principal -->
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">
                    <i class="feather icon-list text-primary"></i>
                    Liste des DREN - <span class="text-primary">56 directions</span>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="drenaTable">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th width="25%">DREN</th>
                                <th width="12%">Code</th>
                                <th width="15%">Zone</th>
                                <th width="8%">IEPP</th>
                                <th width="8%">EPP</th>
                                <th width="17%">Directeur</th>
                                <th width="10%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="font-weight-bold">DREN ABIDJAN 1</div>
                                    <small class="text-muted">Plateau - Cocody - Marcory</small>
                                </td>
                                <td><code>DREN-ABJ1</code></td>
                                <td>
                                    <span class="badge badge-primary">Zone Abidjan</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold text-success">15</span>
                                    <small class="text-muted d-block">IEPP</small>
                                </td>
                                <td>
                                    <span class="font-weight-bold text-info">234</span>
                                    <small class="text-muted d-block">EPP</small>
                                </td>
                                <td>Dr. KOFFI Jean-Baptiste</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('drena.show', 1) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('drena.edit', 1) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                                <td>
                                    <div class="font-weight-bold">DREN ABIDJAN 2</div>
                                    <small class="text-muted">Abobo - Adjamé - Attécoubé</small>
                                </td>
                                <td><code>DREN-ABJ2</code></td>
                                <td>
                                    <span class="badge badge-primary">Zone Abidjan</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold text-success">18</span>
                                    <small class="text-muted d-block">IEPP</small>
                                </td>
                                <td>
                                    <span class="font-weight-bold text-info">312</span>
                                    <small class="text-muted d-block">EPP</small>
                                </td>
                                <td>Mme OUATTARA Aminata</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('drena.show', 2) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('drena.edit', 2) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                                <td>
                                    <div class="font-weight-bold">DREN ABIDJAN 3</div>
                                    <small class="text-muted">Yopougon - Koumassi - Port-Bouët</small>
                                </td>
                                <td><code>DREN-ABJ3</code></td>
                                <td>
                                    <span class="badge badge-primary">Zone Abidjan</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold text-success">22</span>
                                    <small class="text-muted d-block">IEPP</small>
                                </td>
                                <td>
                                    <span class="font-weight-bold text-info">387</span>
                                    <small class="text-muted d-block">EPP</small>
                                </td>
                                <td>M. YAO Kouassi</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('drena.show', 3) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('drena.edit', 3) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                                <td>
                                    <div class="font-weight-bold">DREN BOUAKÉ 1</div>
                                    <small class="text-muted">Bouaké Centre - Nord</small>
                                </td>
                                <td><code>DREN-BKE1</code></td>
                                <td>
                                    <span class="badge badge-info">Zone Centre</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold text-success">12</span>
                                    <small class="text-muted d-block">IEPP</small>
                                </td>
                                <td>
                                    <span class="font-weight-bold text-info">189</span>
                                    <small class="text-muted d-block">EPP</small>
                                </td>
                                <td>Mme TOURE Fatoumata</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('drena.show', 4) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('drena.edit', 4) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                                <td>
                                    <div class="font-weight-bold">DREN YAMOUSSOUKRO</div>
                                    <small class="text-muted">Capitale politique - Zone Lacs</small>
                                </td>
                                <td><code>DREN-YAM</code></td>
                                <td>
                                    <span class="badge badge-warning">Zone Centre</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold text-success">8</span>
                                    <small class="text-muted d-block">IEPP</small>
                                </td>
                                <td>
                                    <span class="font-weight-bold text-info">95</span>
                                    <small class="text-muted d-block">EPP</small>
                                </td>
                                <td>Dr. BEUGRE Sylvain</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('drena.show', 5) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('drena.edit', 5) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
                                            <i class="feather icon-edit"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-outline-danger" title="Supprimer" onclick="confirmDelete(5)">
                                            <i class="feather icon-trash-2"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination simple -->
                <div class="row mt-3">
                    <div class="col-md-6">
                        <p class="text-muted mb-0">Affichage de 1 à 5 sur 56 DREN</p>
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
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Suivant</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistiques simples -->
        <div class="row mt-4">
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-primary text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">56</h4>
                        <p class="mb-0">Total DREN</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-success text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">295</h4>
                        <p class="mb-0">IEPP Supervisées</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-info text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">8,247</h4>
                        <p class="mb-0">EPP Totales</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-warning text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">54</h4>
                        <p class="mb-0">DREN Actives</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
function resetFilters() {
    document.getElementById('searchInput').value = '';
    document.getElementById('zoneFilter').value = '';
    document.getElementById('typeFilter').value = '';
    document.getElementById('statusFilter').value = '';
    document.getElementById('effectifFilter').value = '';
    filterTable();

    new PNotify({
        title: 'Filtres réinitialisés',
        text: 'Tous les filtres ont été réinitialisés.',
        type: 'info',
        delay: 2000
    });
}

function filterTable() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    const zoneValue = document.getElementById('zoneFilter').value.toLowerCase();
    const typeValue = document.getElementById('typeFilter').value.toLowerCase();
    const statusValue = document.getElementById('statusFilter').value.toLowerCase();
    const effectifValue = document.getElementById('effectifFilter').value.toLowerCase();

    const table = document.getElementById('drenaTable');
    const tbody = table.getElementsByTagName('tbody')[0];
    const rows = tbody.getElementsByTagName('tr');

    for (let i = 0; i < rows.length; i++) {
        const row = rows[i];
        const cells = row.getElementsByTagName('td');
        let showRow = true;

        // Recherche globale
        if (searchTerm) {
            const textContent = row.textContent.toLowerCase();
            if (!textContent.includes(searchTerm)) {
                showRow = false;
            }
        }

        // Filtre Zone
        if (zoneValue && showRow) {
            const zoneCell = cells[3];
            const zoneText = zoneCell.textContent.toLowerCase();
            if (!zoneText.includes(zoneValue)) {
                showRow = false;
            }
        }

        // Filtre Type (logique à adapter selon vos données)
        if (typeValue && showRow) {
            // Logique de filtrage par type
        }

        // Filtre Statut
        if (statusValue && showRow) {
            // Toutes les DREN affichées sont actives dans cet exemple
            if (statusValue !== 'active') {
                showRow = false;
            }
        }

        row.style.display = showRow ? '' : 'none';
    }
}

function confirmDelete(id) {
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
        // Redirection vers la route de suppression
        window.location.href = '{{ route("drena.destroy", ":id") }}'.replace(':id', id);
    });
}

// Initialisation des événements
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const zoneFilter = document.getElementById('zoneFilter');
    const typeFilter = document.getElementById('typeFilter');
    const statusFilter = document.getElementById('statusFilter');
    const effectifFilter = document.getElementById('effectifFilter');

    searchInput.addEventListener('keyup', filterTable);
    zoneFilter.addEventListener('change', filterTable);
    typeFilter.addEventListener('change', filterTable);
    statusFilter.addEventListener('change', filterTable);
    effectifFilter.addEventListener('change', filterTable);

    // Initialisation des tooltips
    $('[title]').tooltip();
});
</script>
@endsection
