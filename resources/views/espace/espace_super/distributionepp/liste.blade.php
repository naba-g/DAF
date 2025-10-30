
@extends('layouts.layouts_super.master')
@section('title', 'Distribution EPP')
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
                                <i class="feather icon-truck text-primary"></i>
                                Gestion Distribution EPP
                            </h5>
                            <p class="text-muted mb-0">
                                <i class="feather icon-database"></i> Distribution des manuels vers les 8,247 EPP (SIDMAS)
                            </p>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">
                                    <i class="feather icon-home"></i> Accueil
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Distribution EPP</li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ route('distribution_epp.create') }}" class="btn btn-primary">
                            <i class="feather icon-plus"></i> Nouvelle Distribution
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
                                       placeholder="🔍 Rechercher une distribution...">
                            </div>
                            <div class="col-md-2">
                                <select id="statusFilter" class="form-control">
                                    <option value="">Tous les statuts</option>
                                    <option value="planifiee">Planifiée</option>
                                    <option value="en_preparation">En préparation</option>
                                    <option value="en_transit">En transit</option>
                                    <option value="livree">Livrée</option>
                                    <option value="retardee">Retardée</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="regionFilter" class="form-control">
                                    <option value="">Toutes les régions</option>
                                    <option value="abidjan">Lagunes - Abidjan</option>
                                    <option value="bouake">Gbêkê - Bouaké</option>
                                    <option value="yamoussoukro">Lacs - Yamoussoukro</option>
                                    <option value="korhogo">Poro - Korhogo</option>
                                    <option value="man">Tonkpi - Man</option>
                                    <option value="san_pedro">San-Pédro</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="typeFilter" class="form-control">
                                    <option value="">Tous les types</option>
                                    <option value="manuel_lecture">Manuel Lecture</option>
                                    <option value="manuel_calcul">Manuel Calcul</option>
                                    <option value="cahier_exercice">Cahier Exercice</option>
                                    <option value="guide_maitre">Guide Maître</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="quantiteFilter" class="form-control">
                                    <option value="">Toutes quantités</option>
                                    <option value="petit">Petit (< 500)</option>
                                    <option value="moyen">Moyen (500-1000)</option>
                                    <option value="grand">Grand (> 1000)</option>
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
                    Liste des Distributions EPP - <span class="text-primary">distributeur national</span>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="distributionsTable">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th width="20%">N° Distribution</th>
                                <th width="25%">École/EPP</th>
                                <th width="15%">Région</th>
                                <th width="12%">Date Prévue</th>
                                <th width="8%">Quantité</th>
                                <th width="10%">Statut</th>
                                <th width="5%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="font-weight-bold">DIST-EPP-2024-001</div>
                                    <small class="text-muted">Distribution standard</small>
                                </td>
                                <td>
                                    <div class="font-weight-bold">EPP Plateau 1</div>
                                    <small class="text-muted">DREN ABIDJAN 1</small>
                                </td>
                                <td>Lagunes - Abidjan</td>
                                <td>25/01/2024</td>
                                <td>
                                    <span class="font-weight-bold text-primary">500</span>
                                    <small class="text-muted d-block">manuels</small>
                                </td>
                                <td><span class="badge badge-success">Livrée</span></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('distribution_epp.show', 1) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('distribution_epp.edit', 1) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                                    <div class="font-weight-bold">DIST-EPP-2024-002</div>
                                    <small class="text-muted">Distribution urgente</small>
                                </td>
                                <td>
                                    <div class="font-weight-bold">EPP Marcory</div>
                                    <small class="text-muted">DREN ABIDJAN 1</small>
                                </td>
                                <td>Lagunes - Abidjan</td>
                                <td>28/01/2024</td>
                                <td>
                                    <span class="font-weight-bold text-primary">750</span>
                                    <small class="text-muted d-block">manuels</small>
                                </td>
                                <td><span class="badge badge-warning">En préparation</span></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('distribution_epp.show', 2) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('distribution_epp.edit', 2) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                                    <div class="font-weight-bold">DIST-EPP-2024-003</div>
                                    <small class="text-muted">Distribution programmée</small>
                                </td>
                                <td>
                                    <div class="font-weight-bold">EPP Bouaké Centre</div>
                                    <small class="text-muted">DREN BOUAKÉ 1</small>
                                </td>
                                <td>Gbêkê - Bouaké</td>
                                <td>30/01/2024</td>
                                <td>
                                    <span class="font-weight-bold text-primary">600</span>
                                    <small class="text-muted d-block">manuels</small>
                                </td>
                                <td><span class="badge badge-info">Planifiée</span></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('distribution_epp.show', 3) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('distribution_epp.edit', 3) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                                    <div class="font-weight-bold">DIST-EPP-2024-004</div>
                                    <small class="text-muted">Distribution retardée</small>
                                </td>
                                <td>
                                    <div class="font-weight-bold">EPP Yamoussoukro</div>
                                    <small class="text-muted">DREN YAMOUSSOUKRO</small>
                                </td>
                                <td>Lacs - Yamoussoukro</td>
                                <td>02/02/2024</td>
                                <td>
                                    <span class="font-weight-bold text-primary">400</span>
                                    <small class="text-muted d-block">manuels</small>
                                </td>
                                <td><span class="badge badge-danger">Retardée</span></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('distribution_epp.show', 4) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('distribution_epp.edit', 4) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                                    <div class="font-weight-bold">DIST-EPP-2024-005</div>
                                    <small class="text-muted">Distribution en cours</small>
                                </td>
                                <td>
                                    <div class="font-weight-bold">EPP Korhogo</div>
                                    <small class="text-muted">DREN KORHOGO</small>
                                </td>
                                <td>Poro - Korhogo</td>
                                <td>05/02/2024</td>
                                <td>
                                    <span class="font-weight-bold text-primary">350</span>
                                    <small class="text-muted d-block">manuels</small>
                                </td>
                                <td><span class="badge badge-secondary">En transit</span></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('distribution_epp.show', 5) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('distribution_epp.edit', 5) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                        <p class="text-muted mb-0">Affichage de 1 à 5 sur 2,847 distributions</p>
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
                        <h4 class="mb-1">2,847</h4>
                        <p class="mb-0">Total Distributions</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-success text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">2,156</h4>
                        <p class="mb-0">Distributions Livrées</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-warning text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">534</h4>
                        <p class="mb-0">En Cours</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-info text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">1.2M</h4>
                        <p class="mb-0">Manuels Distribués</p>
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
    document.getElementById('statusFilter').value = '';
    document.getElementById('regionFilter').value = '';
    document.getElementById('typeFilter').value = '';
    document.getElementById('quantiteFilter').value = '';
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
    const statusValue = document.getElementById('statusFilter').value.toLowerCase();
    const regionValue = document.getElementById('regionFilter').value.toLowerCase();
    const typeValue = document.getElementById('typeFilter').value.toLowerCase();
    const quantiteValue = document.getElementById('quantiteFilter').value.toLowerCase();

    const table = document.getElementById('distributionsTable');
    const tbody = table.getElementsByTagName('tbody')[0];
    const rows = tbody.getElementsByTagName('tr');

    let visibleCount = 0;

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

        // Filtre Statut
        if (statusValue && showRow) {
            const statusCell = cells[6];
            const statusText = statusCell.textContent.toLowerCase();
            if (!statusText.includes(statusValue.replace('_', ' '))) {
                showRow = false;
            }
        }

        // Filtre Région
        if (regionValue && showRow) {
            const regionCell = cells[3];
            const regionText = regionCell.textContent.toLowerCase();
            if (!regionText.includes(regionValue)) {
                showRow = false;
            }
        }

        row.style.display = showRow ? '' : 'none';
        if (showRow) visibleCount++;
    }

    // Mettre à jour le compteur de pagination
    const paginationInfo = document.querySelector('.text-muted');
    if (paginationInfo) {
        paginationInfo.textContent = `Affichage de 1 à ${visibleCount} sur ${visibleCount} distributions filtrées`;
    }
}

function confirmDelete(id) {
    new PNotify({
        title: 'Confirmation',
        text: `Êtes-vous sûr de vouloir supprimer la distribution #${id} ?`,
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
        window.location.href = '{{ route("distribution_epp.destroy", ":id") }}'.replace(':id', id);
    });
}

// Initialisation des événements
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const statusFilter = document.getElementById('statusFilter');
    const regionFilter = document.getElementById('regionFilter');
    const typeFilter = document.getElementById('typeFilter');
    const quantiteFilter = document.getElementById('quantiteFilter');

    searchInput.addEventListener('keyup', filterTable);
    statusFilter.addEventListener('change', filterTable);
    regionFilter.addEventListener('change', filterTable);
    typeFilter.addEventListener('change', filterTable);
    quantiteFilter.addEventListener('change', filterTable);

    // Initialisation des tooltips
    $('[title]').tooltip();
});
</script>
@endsection
