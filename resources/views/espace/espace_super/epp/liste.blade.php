
@extends('layouts.layouts_super.master')
@section('title', 'Liste des EPP')
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
                                <i class="feather icon-grid text-primary"></i>
                                Gestion des EPP
                            </h5>
                            <p class="text-muted mb-0">
                                <i class="feather icon-database"></i> 8,247 Écoles Primaires Publiques (SIDMAS)
                            </p>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">
                                    <i class="feather icon-home"></i> Accueil
                                </a>
                            </li>
                            <li class="breadcrumb-item active">EPP</li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ route('epp.create') }}" class="btn btn-primary">
                            <i class="feather icon-plus"></i> Nouvelle EPP
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
                                       placeholder="🔍 Rechercher une EPP...">
                            </div>
                            <div class="col-md-2">
                                <select id="drenFilter" class="form-control">
                                    <option value="">Toutes les DREN</option>
                                    <option value="1">DREN ABIDJAN 1</option>
                                    <option value="2">DREN ABIDJAN 2</option>
                                    <option value="3">DREN ABIDJAN 3</option>
                                    <option value="4">DREN BOUAKÉ 1</option>
                                    <option value="5">DREN YAMOUSSOUKRO</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="typeFilter" class="form-control">
                                    <option value="">Tous les types</option>
                                    <option value="complete">Complète</option>
                                    <option value="incomplete">Incomplète</option>
                                    <option value="maternelle">Maternelle</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="statusFilter" class="form-control">
                                    <option value="">Tous les statuts</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                    <option value="en_construction">En construction</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="cycleFilter" class="form-control">
                                    <option value="">Tous les cycles</option>
                                    <option value="cp1_cp2">CP1-CP2</option>
                                    <option value="ce1_ce2">CE1-CE2</option>
                                    <option value="cm1_cm2">CM1-CM2</option>
                                    <option value="complet">Cycle complet</option>
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
                    Liste des EPP - <span class="text-primary">8,247 écoles</span>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="eppTable">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th width="25%">École</th>
                                <th width="15%">DREN/IEPP</th>
                                <th width="12%">Commune</th>
                                <th width="10%">Type</th>
                                <th width="10%">Effectif</th>
                                <th width="13%">Directeur</th>
                                <th width="10%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="font-weight-bold">EPP Plateau 1</div>
                                    <small class="text-muted">Code: EPP-ABJ-PLT-001</small>
                                </td>
                                <td>
                                    <div class="text-primary font-weight-bold">DREN ABIDJAN 1</div>
                                    <small class="text-muted">IEPP PLATEAU</small>
                                </td>
                                <td>Plateau</td>
                                <td><span class="badge badge-success">Complète</span></td>
                                <td>
                                    <span class="font-weight-bold text-primary">450</span>
                                    <small class="text-muted d-block">élèves</small>
                                </td>
                                <td>M. KOUAME Yves</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('epp.show', 1) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('epp.edit', 1) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                                    <div class="font-weight-bold">EPP Cocody Riviera</div>
                                    <small class="text-muted">Code: EPP-ABJ-COC-002</small>
                                </td>
                                <td>
                                    <div class="text-primary font-weight-bold">DREN ABIDJAN 1</div>
                                    <small class="text-muted">IEPP COCODY</small>
                                </td>
                                <td>Cocody</td>
                                <td><span class="badge badge-success">Complète</span></td>
                                <td>
                                    <span class="font-weight-bold text-primary">520</span>
                                    <small class="text-muted d-block">élèves</small>
                                </td>
                                <td>Mme TRAORE Awa</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('epp.show', 2) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('epp.edit', 2) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                                    <div class="font-weight-bold">EPP Bouaké Centre</div>
                                    <small class="text-muted">Code: EPP-BKE-CNT-003</small>
                                </td>
                                <td>
                                    <div class="text-primary font-weight-bold">DREN BOUAKÉ 1</div>
                                    <small class="text-muted">IEPP BOUAKÉ CENTRE</small>
                                </td>
                                <td>Bouaké</td>
                                <td><span class="badge badge-warning">Incomplète</span></td>
                                <td>
                                    <span class="font-weight-bold text-primary">280</span>
                                    <small class="text-muted d-block">élèves</small>
                                </td>
                                <td>M. DIABATE Sekou</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('epp.show', 3) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('epp.edit', 3) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                                    <div class="font-weight-bold">EPP Yamoussoukro Habitat</div>
                                    <small class="text-muted">Code: EPP-YAM-HAB-004</small>
                                </td>
                                <td>
                                    <div class="text-primary font-weight-bold">DREN YAMOUSSOUKRO</div>
                                    <small class="text-muted">IEPP YAMOUSSOUKRO</small>
                                </td>
                                <td>Yamoussoukro</td>
                                <td><span class="badge badge-success">Complète</span></td>
                                <td>
                                    <span class="font-weight-bold text-primary">380</span>
                                    <small class="text-muted d-block">élèves</small>
                                </td>
                                <td>Mme KONE Mariam</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('epp.show', 4) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('epp.edit', 4) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                                    <div class="font-weight-bold">EPP San Pedro Port</div>
                                    <small class="text-muted">Code: EPP-SPD-PRT-005</small>
                                </td>
                                <td>
                                    <div class="text-primary font-weight-bold">DREN SAN PEDRO</div>
                                    <small class="text-muted">IEPP SAN PEDRO</small>
                                </td>
                                <td>San Pedro</td>
                                <td><span class="badge badge-info">Maternelle</span></td>
                                <td>
                                    <span class="font-weight-bold text-primary">195</span>
                                    <small class="text-muted d-block">élèves</small>
                                </td>
                                <td>Mme BAMBA Fatou</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('epp.show', 5) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('epp.edit', 5) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                        <p class="text-muted mb-0">Affichage de 1 à 5 sur 8,247 EPP</p>
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
                        <h4 class="mb-1">8,247</h4>
                        <p class="mb-0">Total EPP</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-success text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">1,825</h4>
                        <p class="mb-0">Total Élèves (milliers)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-warning text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">6,894</h4>
                        <p class="mb-0">EPP Complètes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-info text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">221</h4>
                        <p class="mb-0">Moyenne Élèves/École</p>
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
    document.getElementById('drenFilter').value = '';
    document.getElementById('typeFilter').value = '';
    document.getElementById('statusFilter').value = '';
    document.getElementById('cycleFilter').value = '';
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
    const drenValue = document.getElementById('drenFilter').value.toLowerCase();
    const typeValue = document.getElementById('typeFilter').value.toLowerCase();
    const statusValue = document.getElementById('statusFilter').value.toLowerCase();
    const cycleValue = document.getElementById('cycleFilter').value.toLowerCase();

    const table = document.getElementById('eppTable');
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

        // Filtre DREN
        if (drenValue && showRow) {
            const drenCell = cells[2];
            const drenText = drenCell.textContent.toLowerCase();
            if (!drenText.includes(drenValue)) {
                showRow = false;
            }
        }

        // Filtre Type
        if (typeValue && showRow) {
            const typeCell = cells[4];
            const typeText = typeCell.textContent.toLowerCase();
            if (!typeText.includes(typeValue)) {
                showRow = false;
            }
        }

        row.style.display = showRow ? '' : 'none';
    }
}

function confirmDelete(id) {
    new PNotify({
        title: 'Confirmation',
        text: 'Êtes-vous sûr de vouloir supprimer cette EPP ?',
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
        window.location.href = '{{ route("epp.destroy", ":id") }}'.replace(':id', id);
    });
}

// Initialisation des événements
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const drenFilter = document.getElementById('drenFilter');
    const typeFilter = document.getElementById('typeFilter');
    const statusFilter = document.getElementById('statusFilter');
    const cycleFilter = document.getElementById('cycleFilter');

    searchInput.addEventListener('keyup', filterTable);
    drenFilter.addEventListener('change', filterTable);
    typeFilter.addEventListener('change', filterTable);
    statusFilter.addEventListener('change', filterTable);
    cycleFilter.addEventListener('change', filterTable);

    // Initialisation des tooltips
    $('[title]').tooltip();
});
</script>
@endsection
