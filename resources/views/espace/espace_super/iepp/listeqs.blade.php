<<<<<<< HEAD
@extends('layouts.layouts_super.master')
@section('title', 'Liste des Iepp')
@section('content')
=======

        @extends('layouts.layouts_super.master')
        @section('title', 'Liste des IEPP')
        @section('content')

<!-- [ Main Content ] start -->
>>>>>>> 239406a14898536570cc1eeeca4289dabf43671a
<div class="pcoded-main-container">
    <div class="pcoded-content">

        <!-- [ breadcrumb ] -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
<<<<<<< HEAD
                            <h5 class="m-b-10">Gestion des Iepp</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Paramètre</a></li>
                            <li class="breadcrumb-item"><a href="#!">Iepp</a></li>
=======
                            <h5 class="m-b-10"><i class="feather icon-home text-primary"></i> Gestion des IEPP</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item active">IEPP</li>
>>>>>>> 239406a14898536570cc1eeeca4289dabf43671a
                        </ul>
                    </div>
                </div>
            </div> 
        </div>

<<<<<<< HEAD
        <!-- [ Contenu principal ] -->
        <div class="row">
            <div class="col-md-12">

                <div class="card border-0 shadow-sm rounded-3">

                    <!-- En-tête du tableau avec bouton à droite -->
                    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
                        <h5 class="mb-0 fw-semibold text-dark">
                            <i class="feather icon-list text-success me-2"></i>
                            Liste des Iepp
                        </h5>

                        <a href="#" class="btn btn-success btn-md px-4">
                            <i class="feather icon-plus me-1"></i> Ajouter Iepp
                        </a>
                    </div>

                    <div class="card-body">

                        <!-- Tableau des IEPP -->
                        <div class="table-responsive">
                            <table class="table align-middle table-bordered table-hover mb-0">
                                <thead class="table-light text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>DRENA</th>
                                        <th>Nom IEPP</th>
                                        <th>Code</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>1</td>
                                        <td>Bounoua</td>
                                        <td>Bounoua 1</td>
                                        <td>1012C</td>
                                        <td>
                                            <button class="btn btn-sm btn-info text-white me-1" style="padding: 0.25rem 0.5rem; font-size: 0.75rem;">
                                                <i class="feather icon-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-warning text-white me-1" style="padding: 0.25rem 0.5rem; font-size: 0.75rem;">
                                                <i class="feather icon-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger" style="padding: 0.25rem 0.5rem; font-size: 0.75rem;">
                                                <i class="feather icon-trash-2"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>DRENA AB2</td>
                                        <td>Soleil</td>
                                        <td>1012F</td>
                                        <td>
                                            <button class="btn btn-sm btn-info text-white me-1" style="padding: 0.25rem 0.5rem; font-size: 0.75rem;">
                                                <i class="feather icon-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-warning text-white me-1" style="padding: 0.25rem 0.5rem; font-size: 0.75rem;">
                                                <i class="feather icon-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger" style="padding: 0.25rem 0.5rem; font-size: 0.75rem;">
                                                <i class="feather icon-trash-2"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>DRENA KATIOLA</td>
                                        <td>Tasmi</td>
                                        <td>1023D</td>
                                        <td>
                                            <button class="btn btn-sm btn-info text-white me-1" style="padding: 0.25rem 0.5rem; font-size: 0.75rem;">
                                                <i class="feather icon-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-warning text-white me-1" style="padding: 0.25rem 0.5rem; font-size: 0.75rem;">
                                                <i class="feather icon-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger" style="padding: 0.25rem 0.5rem; font-size: 0.75rem;">
                                                <i class="feather icon-trash-2"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-end mt-3">
                            <nav>
                                <ul class="pagination pagination-sm mb-0">
                                    <li class="page-item disabled"><a class="page-link" href="#">«</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div> <!-- fin card-body -->
                </div> <!-- fin card -->
            </div>
        </div>

    </div>
</div>
@endsection

@section('page-script')
<script>
    // Simulation ajout IEPP
    document.querySelectorAll('.btn-success').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            alert('Ouverture du formulaire d’ajout d’un IEPP (simulation)');
        });
    });
    
    // Simulation bouton détails
    document.querySelectorAll('.btn-info').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            alert('Affichage des détails de l\'IEPP (simulation)');
        });
    });
    
    // Simulation bouton modifier
    document.querySelectorAll('.btn-warning').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            alert('Modification de l\'IEPP (simulation)');
        });
    });
    
    // Simulation bouton supprimer
    document.querySelectorAll('.btn-danger').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            if(confirm('Êtes-vous sûr de vouloir supprimer cet IEPP ?')) {
                alert('Suppression de l\'IEPP (simulation)');
            }
        });
    });
</script>
@endsection
=======
        <!-- Actions et Filtres -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Actions et Filtres</h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <a href="{{ route('iepp.create') }}" class="btn btn-primary btn-sm waves-effect waves-light">
                                    <i class="feather icon-plus"></i> Nouvelle IEPP
                                </a>
                            </div>
                            <div class="col-md-2">
                                <select id="drenFilter" class="form-control form-control-sm">
                                    <option value="">Toutes les DREN</option>
                                    <option value="1">DREN ABIDJAN 1</option>
                                    <option value="2">DREN ABIDJAN 2</option>
                                    <option value="3">DREN ABIDJAN 3</option>
                                    <option value="4">DREN BOUAKE 1</option>
                                    <option value="5">DREN BOUAKE 2</option>
                                    <option value="6">DREN YAMOUSSOUKRO</option>
                                    <option value="7">DREN KORHOGO</option>
                                    <option value="8">DREN SAN PEDRO</option>
                                    <!-- Basé sur les 56 DREN de SIDMAS -->
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input type="text" id="searchInput" class="form-control form-control-sm" placeholder="Rechercher IEPP...">
                            </div>
                            <div class="col-md-2">
                                <select id="statusFilter" class="form-control form-control-sm">
                                    <option value="">Tous les statuts</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                    <option value="en_cours">En cours</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="typeFilter" class="form-control form-control-sm">
                                    <option value="">Tous les types</option>
                                    <option value="urbaine">Urbaine</option>
                                    <option value="rurale">Rurale</option>
                                    <option value="mixte">Mixte</option>
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

        <!-- Liste IEPP -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Liste des IEPP</h5>
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
                                    <!-- Données basées sur la table IEPP de SIDMAS (295 inspections) -->
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="font-weight-bold">IEPP PLATEAU</div>
                                            <small class="text-muted">Zone Urbaine Centre</small>
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
                                            <div>Mme KONE Marie</div>
                                            <small class="text-muted">Inspectrice</small>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('iepp.show', 1) }}" class="btn btn-sm btn-outline-primary waves-effect" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <a href="{{ route('iepp.edit', 1) }}" class="btn btn-sm btn-outline-warning waves-effect" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-outline-danger waves-effect" title="Supprimer" onclick="confirmDelete(1)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="font-weight-bold">IEPP COCODY</div>
                                            <small class="text-muted">Zone Résidentielle</small>
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
                                            <div>M. KOUASSI Paul</div>
                                            <small class="text-muted">Inspecteur</small>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('iepp.show', 2) }}" class="btn btn-sm btn-outline-primary waves-effect" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <a href="{{ route('iepp.edit', 2) }}" class="btn btn-sm btn-outline-warning waves-effect" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-outline-danger waves-effect" title="Supprimer" onclick="confirmDelete(2)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="font-weight-bold">IEPP ABOBO EST</div>
                                            <small class="text-muted">Zone Périphérique</small>
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
                                            <div>Mme TRAORE Awa</div>
                                            <small class="text-muted">Inspectrice</small>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('iepp.show', 3) }}" class="btn btn-sm btn-outline-primary waves-effect" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <a href="{{ route('iepp.edit', 3) }}" class="btn btn-sm btn-outline-warning waves-effect" title="Modifier">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-sm btn-outline-danger waves-effect" title="Supprimer" onclick="confirmDelete(3)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
                        </div>
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
    document.getElementById('drenFilter').value = '';
    document.getElementById('typeFilter').value = '';
    filterTable();

    new PNotify({
        title: 'Filtres réinitialisés',
        text: 'Tous les filtres ont été supprimés',
        type: 'info',
        delay: 2000
    });
}

// Fonction de suppression avec PNotify
function confirmDelete(id) {
    (new PNotify({
        title: 'Confirmation de suppression',
        text: 'Êtes-vous sûr de vouloir supprimer cette IEPP ? Cette action est irréversible.',
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
        new PNotify({
            title: 'IEPP supprimée',
            text: 'L\'IEPP a été supprimée avec succès',
            type: 'success',
            delay: 3000
        });
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const statusFilter = document.getElementById('statusFilter');
    const drenFilter = document.getElementById('drenFilter');
    const typeFilter = document.getElementById('typeFilter');
    const table = document.getElementById('ieppTable');
    const tbody = table.getElementsByTagName('tbody')[0];

    // Ajout des écouteurs d'événements pour les filtres
    searchInput.addEventListener('input', filterTable);
    statusFilter.addEventListener('change', filterTable);
    drenFilter.addEventListener('change', filterTable);
    typeFilter.addEventListener('change', filterTable);

    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase();
        const statusValue = statusFilter.value.toLowerCase();
        const drenValue = drenFilter.value;
        const typeValue = typeFilter.value.toLowerCase();
        const rows = tbody.getElementsByTagName('tr');

        let visibleCount = 0;

        for (let i = 0; i < rows.length; i++) {
            const row = rows[i];
            const cells = row.getElementsByTagName('td');

            if (cells.length > 0) {
                const nom = cells[1].textContent.toLowerCase();
                const dren = cells[2].textContent.toLowerCase();
                const code = cells[3].textContent.toLowerCase();
                const type = cells[4].textContent.toLowerCase();
                const statut = cells[6].textContent.toLowerCase();

                const matchesSearch = nom.includes(searchTerm) ||
                                    dren.includes(searchTerm) ||
                                    code.includes(searchTerm);
                const matchesStatus = !statusValue || statut.includes(statusValue);
                const matchesDren = !drenValue || dren.includes(drenValue.toLowerCase());
                const matchesType = !typeValue || type.includes(typeValue);

                if (matchesSearch && matchesStatus && matchesDren && matchesType) {
                    row.style.display = '';
                    visibleCount++;
                } else {
                    row.style.display = 'none';
                }
            }
        }

        // Notification du nombre de résultats
        if (searchTerm || statusValue || drenValue || typeValue) {
            new PNotify({
                title: 'Filtrage appliqué',
                text: `${visibleCount} IEPP trouvée(s) sur 295 total`,
                type: 'info',
                delay: 2000
            });
        }
    }

    // Fonction globale pour réutilisation
    window.filterTable = filterTable;

    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase();
        const statusValue = statusFilter.value.toLowerCase();
        const rows = tbody.getElementsByTagName('tr');

        for (let i = 0; i < rows.length; i++) {
            const row = rows[i];
            let showRow = true;

            if (searchTerm) {
                const textContent = row.textContent.toLowerCase();
                if (!textContent.includes(searchTerm)) {
                    showRow = false;
                }
            }

            if (statusValue && showRow) {
                const statusCell = row.getElementsByTagName('td')[5];
                const statusText = statusCell.textContent.toLowerCase();
                if (!statusText.includes(statusValue)) {
                    showRow = false;
                }
            }

            row.style.display = showRow ? '' : 'none';
        }
    }

    window.filterTable = filterTable;
    searchInput.addEventListener('keyup', filterTable);
    statusFilter.addEventListener('change', filterTable);
});

function confirmDelete(id) {
    (new PNotify({
        title: 'Confirmation de suppression',
        text: 'Êtes-vous sûr de vouloir supprimer cette IEPP ?',
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
            title: 'IEPP supprimée',
            text: 'IEPP supprimée avec succès (simulation)',
            type: 'success',
            delay: 3000
        });
    });
}
</script>

@endsection
>>>>>>> 239406a14898536570cc1eeeca4289dabf43671a
