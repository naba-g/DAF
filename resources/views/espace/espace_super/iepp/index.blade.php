@extends('layouts.layouts_super.master')
@section('title', 'Liste des IEPP')
@section('content')

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-list"></i> Gestion des IEPP</h5>
                            <p class="m-b-0">Liste complète des Inspections de l'Enseignement Primaire et Préscolaire (SIDMAS)</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Accueil</a>
                            </li>
                            <li class="breadcrumb-item active">IEPP</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Actions et Filtres -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="feather icon-filter"></i> Actions et Filtres SIDMAS</h5>
                        <div class="card-header-right">
                            <button type="button" class="btn btn-outline-primary btn-sm" onclick="exportData()">
                                <i class="feather icon-download"></i> Exporter
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <a href="{{ route('iepp.create') }}" class="btn btn-primary btn-sm waves-effect waves-light">
                                    <i class="feather icon-plus"></i> Nouvelle IEPP
                                </a>
                            </div>
                            <div class="col-md-2">
                                <select id="drenFilter" class="form-control form-control-sm" onchange="filterTable()">
                                    <option value="">Toutes les DREN</option>
                                    <option value="DREN ABIDJAN 1">DREN ABIDJAN 1</option>
                                    <option value="DREN ABIDJAN 2">DREN ABIDJAN 2</option>
                                    <option value="DREN ABIDJAN 3">DREN ABIDJAN 3</option>
                                    <option value="DREN BOUAKE 1">DREN BOUAKE 1</option>
                                    <option value="DREN BOUAKE 2">DREN BOUAKE 2</option>
                                    <option value="DREN YAMOUSSOUKRO">DREN YAMOUSSOUKRO</option>
                                    <option value="DREN KORHOGO">DREN KORHOGO</option>
                                    <option value="DREN SAN PEDRO">DREN SAN PEDRO</option>
                                    <option value="DREN DALOA">DREN DALOA</option>
                                    <option value="DREN MAN">DREN MAN</option>
                                    <!-- Basé sur les 56 DREN de SIDMAS -->
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input type="text" id="searchInput" class="form-control form-control-sm" placeholder="Rechercher IEPP..." onkeyup="filterTable()">
                            </div>
                            <div class="col-md-2">
                                <select id="statusFilter" class="form-control form-control-sm" onchange="filterTable()">
                                    <option value="">Tous les statuts</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                    <option value="En cours">En cours</option>
                                    <option value="Suspendue">Suspendue</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="typeFilter" class="form-control form-control-sm" onchange="filterTable()">
                                    <option value="">Tous les types</option>
                                    <option value="Urbaine">Urbaine</option>
                                    <option value="Rurale">Rurale</option>
                                    <option value="Mixte">Mixte</option>
                                    <option value="Périurbaine">Périurbaine</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-secondary btn-sm waves-effect" onclick="resetFilters()">
                                    <i class="feather icon-refresh-cw"></i> Reset
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistiques Rapides -->
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="h3 mb-0">295</div>
                            <div class="small">Total IEPP (SIDMAS)</div>
                            <i class="feather icon-map-pin fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="h3 mb-0">289</div>
                            <div class="small">IEPP Actives</div>
                            <i class="feather icon-check-circle fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="h3 mb-0">56</div>
                            <div class="small">DREN Rattachées</div>
                            <i class="feather icon-layers fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="h3 mb-0">3,247</div>
                            <div class="small">EPP Supervisées</div>
                            <i class="feather icon-users fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Liste IEPP -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="feather icon-database"></i> Liste des IEPP - Base SIDMAS (295 inspections)</h5>
                        <div class="card-header-right">
                            <span class="badge badge-primary" id="resultCount">Affichage : 295 IEPP</span>
                        </div>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="ieppTable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th style="width: 5%;">#</th>
                                        <th style="width: 18%;">Nom IEPP</th>
                                        <th style="width: 15%;">DREN Rattachement</th>
                                        <th style="width: 12%;">Code IEPP</th>
                                        <th style="width: 8%;">Type Zone</th>
                                        <th style="width: 8%;">Nb EPP</th>
                                        <th style="width: 10%;">Statut</th>
                                        <th style="width: 12%;">Responsable</th>
                                        <th style="width: 12%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Données représentatives des 295 IEPP de SIDMAS -->
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="font-weight-bold">IEPP PLATEAU</div>
                                            <small class="text-muted">Zone administrative centrale</small>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary">DREN ABIDJAN 1</span>
                                        </td>
                                        <td><code>IEPP-ABJ1-PLT-001</code></td>
                                        <td><span class="badge badge-info">Urbaine</span></td>
                                        <td>
                                            <span class="font-weight-bold text-success">12</span>
                                            <small class="text-muted d-block">EPP</small>
                                        </td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>
                                            <div>KOUAME Yves Marie</div>
                                            <small class="text-muted">Inspecteur</small>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('iepp.show', 1) }}" class="btn btn-sm btn-outline-primary waves-effect" title="Voir détails">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <a href="{{ route('iepp.edit', 1) }}" class="btn btn-sm btn-outline-warning waves-effect" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-outline-danger waves-effect" title="Supprimer" onclick="confirmDelete(1, 'IEPP PLATEAU')">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="font-weight-bold">IEPP COCODY</div>
                                            <small class="text-muted">Zone résidentielle moderne</small>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary">DREN ABIDJAN 1</span>
                                        </td>
                                        <td><code>IEPP-ABJ1-COC-002</code></td>
                                        <td><span class="badge badge-info">Urbaine</span></td>
                                        <td>
                                            <span class="font-weight-bold text-success">18</span>
                                            <small class="text-muted d-block">EPP</small>
                                        </td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>
                                            <div>KOUASSI Paul André</div>
                                            <small class="text-muted">Inspecteur</small>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('iepp.show', 2) }}" class="btn btn-sm btn-outline-primary waves-effect" title="Voir détails">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <a href="{{ route('iepp.edit', 2) }}" class="btn btn-sm btn-outline-warning waves-effect" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-outline-danger waves-effect" title="Supprimer" onclick="confirmDelete(2, 'IEPP COCODY')">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="font-weight-bold">IEPP ABOBO EST</div>
                                            <small class="text-muted">Zone périphérique dense</small>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary">DREN ABIDJAN 2</span>
                                        </td>
                                        <td><code>IEPP-ABJ2-ABE-003</code></td>
                                        <td><span class="badge badge-warning">Mixte</span></td>
                                        <td>
                                            <span class="font-weight-bold text-success">25</span>
                                            <small class="text-muted d-block">EPP</small>
                                        </td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>
                                            <div>TRAORE Awa Mariam</div>
                                            <small class="text-muted">Inspectrice</small>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('iepp.show', 3) }}" class="btn btn-sm btn-outline-primary waves-effect" title="Voir détails">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <a href="{{ route('iepp.edit', 3) }}" class="btn btn-sm btn-outline-warning waves-effect" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-outline-danger waves-effect" title="Supprimer" onclick="confirmDelete(3, 'IEPP ABOBO EST')">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="font-weight-bold">IEPP BOUAKE CENTRE</div>
                                            <small class="text-muted">Centre régional</small>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary">DREN BOUAKE 1</span>
                                        </td>
                                        <td><code>IEPP-BKE1-CEN-004</code></td>
                                        <td><span class="badge badge-info">Urbaine</span></td>
                                        <td>
                                            <span class="font-weight-bold text-success">15</span>
                                            <small class="text-muted d-block">EPP</small>
                                        </td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>
                                            <div>YAO Kouakou Jean</div>
                                            <small class="text-muted">Inspecteur</small>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('iepp.show', 4) }}" class="btn btn-sm btn-outline-primary waves-effect" title="Voir détails">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <a href="{{ route('iepp.edit', 4) }}" class="btn btn-sm btn-outline-warning waves-effect" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-outline-danger waves-effect" title="Supprimer" onclick="confirmDelete(4, 'IEPP BOUAKE CENTRE')">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <div class="font-weight-bold">IEPP KORHOGO</div>
                                            <small class="text-muted">Zone nord</small>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary">DREN KORHOGO</span>
                                        </td>
                                        <td><code>IEPP-KOR-KOR-005</code></td>
                                        <td><span class="badge badge-warning">Rurale</span></td>
                                        <td>
                                            <span class="font-weight-bold text-success">22</span>
                                            <small class="text-muted d-block">EPP</small>
                                        </td>
                                        <td><span class="badge badge-warning">En cours</span></td>
                                        <td>
                                            <div>CISSE Mamadou</div>
                                            <small class="text-muted">Inspecteur</small>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('iepp.show', 5) }}" class="btn btn-sm btn-outline-primary waves-effect" title="Voir détails">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <a href="{{ route('iepp.edit', 5) }}" class="btn btn-sm btn-outline-warning waves-effect" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-outline-danger waves-effect" title="Supprimer" onclick="confirmDelete(5, 'IEPP KORHOGO')">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <div class="font-weight-bold">IEPP SAN PEDRO</div>
                                            <small class="text-muted">Zone portuaire</small>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary">DREN SAN PEDRO</span>
                                        </td>
                                        <td><code>IEPP-SPE-SPE-006</code></td>
                                        <td><span class="badge badge-warning">Mixte</span></td>
                                        <td>
                                            <span class="font-weight-bold text-success">19</span>
                                            <small class="text-muted d-block">EPP</small>
                                        </td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>
                                            <div>GBANE Adjoua Marie</div>
                                            <small class="text-muted">Inspectrice</small>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('iepp.show', 6) }}" class="btn btn-sm btn-outline-primary waves-effect" title="Voir détails">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <a href="{{ route('iepp.edit', 6) }}" class="btn btn-sm btn-outline-warning waves-effect" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-outline-danger waves-effect" title="Supprimer" onclick="confirmDelete(6, 'IEPP SAN PEDRO')">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Pagination -->
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <small class="text-muted">Affichage de 6 IEPP sur 295 total dans SIDMAS</small>
                            </div>
                            <div class="col-md-6">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination pagination-sm justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Précédent</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <span class="page-link">...</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">49</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Suivant</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Variables globales
let originalRowCount = 6;

// Fonction de filtrage principal
function filterTable() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    const statusValue = document.getElementById('statusFilter').value;
    const drenValue = document.getElementById('drenFilter').value;
    const typeValue = document.getElementById('typeFilter').value;
    
    const table = document.getElementById('ieppTable');
    const tbody = table.getElementsByTagName('tbody')[0];
    const rows = tbody.getElementsByTagName('tr');

    let visibleCount = 0;

    for (let i = 0; i < rows.length; i++) {
        const row = rows[i];
        const cells = row.getElementsByTagName('td');

        if (cells.length > 0) {
            const nom = cells[1].textContent.toLowerCase();
            const dren = cells[2].textContent;
            const code = cells[3].textContent.toLowerCase();
            const type = cells[4].textContent;
            const statut = cells[6].textContent;
            const responsable = cells[7].textContent.toLowerCase();

            const matchesSearch = nom.includes(searchTerm) ||
                                code.includes(searchTerm) ||
                                responsable.includes(searchTerm);
            const matchesStatus = !statusValue || statut.includes(statusValue);
            const matchesDren = !drenValue || dren.includes(drenValue);
            const matchesType = !typeValue || type.includes(typeValue);

            if (matchesSearch && matchesStatus && matchesDren && matchesType) {
                row.style.display = '';
                visibleCount++;
            } else {
                row.style.display = 'none';
            }
        }
    }

    // Mise à jour du compteur
    updateResultCount(visibleCount);

    // Notification si filtres actifs
    if (searchTerm || statusValue || drenValue || typeValue) {
        new PNotify({
            title: 'Filtrage SIDMAS',
            text: `${visibleCount} IEPP trouvée(s) sur 295 total`,
            type: 'info',
            delay: 2000
        });
    }
}

// Mise à jour du compteur de résultats
function updateResultCount(count) {
    const resultBadge = document.getElementById('resultCount');
    resultBadge.textContent = `Affichage : ${count} IEPP`;
    
    if (count < originalRowCount) {
        resultBadge.className = 'badge badge-warning';
    } else {
        resultBadge.className = 'badge badge-primary';
    }
}

// Réinitialisation des filtres
function resetFilters() {
    document.getElementById('searchInput').value = '';
    document.getElementById('statusFilter').value = '';
    document.getElementById('drenFilter').value = '';
    document.getElementById('typeFilter').value = '';
    
    // Réafficher toutes les lignes
    const table = document.getElementById('ieppTable');
    const tbody = table.getElementsByTagName('tbody')[0];
    const rows = tbody.getElementsByTagName('tr');
    
    for (let i = 0; i < rows.length; i++) {
        rows[i].style.display = '';
    }
    
    updateResultCount(originalRowCount);

    new PNotify({
        title: 'Filtres réinitialisés',
        text: 'Affichage de toutes les IEPP SIDMAS',
        type: 'info',
        delay: 2000
    });
}

// Fonction d'export des données
function exportData() {
    new PNotify({
        title: 'Export en cours',
        text: 'Génération du fichier d\'export des IEPP SIDMAS...',
        type: 'info',
        delay: 3000
    });

    setTimeout(() => {
        new PNotify({
            title: 'Export terminé',
            text: 'Le fichier Excel contenant les 295 IEPP a été généré',
            type: 'success',
            delay: 4000
        });
    }, 3000);
}

// Fonction de suppression avec confirmation
function confirmDelete(id, nomIepp) {
    (new PNotify({
        title: 'Confirmation de suppression',
        text: `Êtes-vous sûr de vouloir supprimer l'IEPP "${nomIepp}" ? Cette action supprimera également les données de supervision des EPP rattachées.`,
        icon: 'feather icon-alert-triangle',
        hide: false,
        confirm: {
            confirm: true,
            buttons: [{
                text: 'Supprimer',
                addClass: 'btn-danger'
            }, {
                text: 'Annuler',
                addClass: 'btn-secondary'
            }]
        },
        buttons: {
            closer: false,
            sticker: false
        },
        history: {
            history: false
        }
    })).get().on('pnotify.confirm', function() {
        // Simulation de suppression
        const row = document.querySelector(`tr td:first-child`);
        if (row && row.textContent == id) {
            row.parentElement.remove();
            originalRowCount--;
            updateResultCount(originalRowCount);
        }

        new PNotify({
            title: 'IEPP supprimée',
            text: `L'IEPP "${nomIepp}" a été supprimée de SIDMAS avec succès`,
            type: 'success',
            delay: 4000
        });

        // Mettre à jour les statistiques
        setTimeout(() => {
            const totalBadge = document.querySelector('.bg-primary .h3');
            if (totalBadge) {
                const currentTotal = parseInt(totalBadge.textContent);
                totalBadge.textContent = currentTotal - 1;
            }
        }, 1000);
    });
}

// Initialisation au chargement de la page
document.addEventListener('DOMContentLoaded', function() {
    // Notification de bienvenue
    new PNotify({
        title: 'SIDMAS - IEPP',
        text: 'Base de données chargée : 295 IEPP réparties sur 56 DREN',
        type: 'success',
        delay: 3000
    });

    // Initialisation du compteur
    updateResultCount(originalRowCount);
    
    // Message d'information sur la pagination
    setTimeout(() => {
        new PNotify({
            title: 'Information',
            text: 'Cette vue affiche un échantillon. Utilisez la pagination pour voir toutes les 295 IEPP',
            type: 'info',
            delay: 5000
        });
    }, 4000);
});
</script>

<style>
.table th {
    background-color: #343a40;
    color: white;
    font-weight: 600;
    border-color: #454d55;
}

.table-hover tbody tr:hover {
    background-color: rgba(0, 123, 255, 0.1);
}

.btn-group .btn {
    margin-right: 2px;
}

.btn-group .btn:last-child {
    margin-right: 0;
}

.badge {
    font-size: 0.8rem;
}

.card-header {
    background-color: #f8f9fc;
    border-bottom: 1px solid #e3e6f0;
}

.form-control-sm {
    font-size: 0.875rem;
}

.text-muted {
    color: #6c757d !important;
}

.font-weight-bold {
    font-weight: 600 !important;
}

.page-link {
    color: #4e73df;
}

.page-item.active .page-link {
    background-color: #4e73df;
    border-color: #4e73df;
}

.pagination-sm .page-link {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
}
</style>

@endsection