
@extends('layouts.layouts_super.master')
@section('title', 'Liste des Commandes')
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
                                <i class="feather icon-package text-primary"></i>
                                Gestion des Commandes DAF
                            </h5>
                            <p class="text-muted mb-0">
                                <i class="feather icon-database"></i> 89 Commandes de manuels et ouvrages (SIDMAS)
                            </p>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">
                                    <i class="feather icon-home"></i> Accueil
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Commandes</li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ route('commande_daf.create') }}" class="btn btn-primary">
                            <i class="feather icon-plus"></i> Nouvelle Commande
                        </a>
                    </div>
                </div>
            </div>
        </div>

<<<<<<< HEAD
        <!-- Filtres essentiels -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <input type="text" id="searchInput" class="form-control"
                                       placeholder="🔍 Rechercher une commande...">
                            </div>
                            <div class="col-md-2">
                                <select id="statusFilter" class="form-control">
                                    <option value="">Tous les statuts</option>
                                    <option value="en_attente_validation">En attente</option>
                                    <option value="validee">Validée</option>
                                    <option value="en_cours_livraison">En livraison</option>
                                    <option value="livree">Livrée</option>
                                    <option value="retardee">Retardée</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="typeFilter" class="form-control">
                                    <option value="">Tous les types</option>
                                    <option value="manuel_scolaire">Manuel Scolaire</option>
                                    <option value="guide_pedagogique">Guide Pédagogique</option>
                                    <option value="cahier_activites">Cahier d'Activités</option>
                                    <option value="atlas_cartes">Atlas et Cartes</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="prioriteFilter" class="form-control">
                                    <option value="">Toutes priorités</option>
                                    <option value="normale">Normale</option>
                                    <option value="urgente">Urgente</option>
                                    <option value="tres_urgente">Très Urgente</option>
                                    <option value="critique">Critique</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="drenFilter" class="form-control">
                                    <option value="">Toutes DREN</option>
                                    <option value="DREN ABIDJAN 1">DREN ABIDJAN 1</option>
                                    <option value="DREN ABIDJAN 2">DREN ABIDJAN 2</option>
                                    <option value="DREN BOUAKÉ 1">DREN BOUAKÉ 1</option>
                                    <option value="DREN YAMOUSSOUKRO">DREN YAMOUSSOUKRO</option>
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
                    Liste des Commandes - <span class="text-primary">89 commandes</span>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="commandesTable">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th width="15%">N° Commande</th>
                                <th width="18%">DREN Destinataire</th>
                                <th width="12%">Type Ouvrage</th>
                                <th width="20%">Titre</th>
                                <th width="8%">Quantité</th>
                                <th width="8%">Priorité</th>
                                <th width="14%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="font-weight-bold text-primary">CMD-2024-001</div>
                                    <small class="text-muted">15/01/2024</small>
                                </td>
                                <td>
                                    <div class="font-weight-bold">DREN ABIDJAN 1</div>
                                    <small class="text-muted">DREN-ABJ1</small>
                                </td>
                                <td>
                                    <span class="badge badge-primary">Manuel Scolaire</span>
                                </td>
                                <td>
                                    <div class="font-weight-bold">Mon premier livre de lecture CP1</div>
                                    <small class="text-muted">
                                        <span class="badge badge-warning">En attente</span>
                                    </small>
                                </td>
                                <td>
                                    <span class="font-weight-bold text-info">5,000</span>
                                    <small class="text-muted d-block">exemplaires</small>
                                </td>
                                <td>
                                    <span class="badge badge-warning">Urgente</span>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('commande_daf.show', 1) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('commande_daf.edit', 1) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                                    <div class="font-weight-bold text-primary">CMD-2024-002</div>
                                    <small class="text-muted">20/01/2024</small>
                                </td>
                                <td>
                                    <div class="font-weight-bold">DREN BOUAKÉ 1</div>
                                    <small class="text-muted">DREN-BOU1</small>
                                </td>
                                <td>
                                    <span class="badge badge-success">Guide Pédagogique</span>
                                </td>
                                <td>
                                    <div class="font-weight-bold">Guide du maître Mathématiques CE1</div>
                                    <small class="text-muted">
                                        <span class="badge badge-success">Validée</span>
                                    </small>
                                </td>
                                <td>
                                    <span class="font-weight-bold text-info">150</span>
                                    <small class="text-muted d-block">exemplaires</small>
                                </td>
                                <td>
                                    <span class="badge badge-secondary">Normale</span>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('commande_daf.show', 2) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('commande_daf.edit', 2) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                                    <div class="font-weight-bold text-primary">CMD-2024-003</div>
                                    <small class="text-muted">25/01/2024</small>
                                </td>
                                <td>
                                    <div class="font-weight-bold">DREN YAMOUSSOUKRO</div>
                                    <small class="text-muted">DREN-YAM</small>
                                </td>
                                <td>
                                    <span class="badge badge-warning">Cahier d'Activités</span>
                                </td>
                                <td>
                                    <div class="font-weight-bold">Cahier d'exercices Français CM2</div>
                                    <small class="text-muted">
                                        <span class="badge badge-success">Livrée</span>
                                    </small>
                                </td>
                                <td>
                                    <span class="font-weight-bold text-info">2,800</span>
                                    <small class="text-muted d-block">exemplaires</small>
                                </td>
                                <td>
                                    <span class="badge badge-danger">Très Urgente</span>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('commande_daf.show', 3) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('commande_daf.edit', 3) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                                    <div class="font-weight-bold text-primary">CMD-2024-004</div>
                                    <small class="text-muted">28/01/2024</small>
                                </td>
                                <td>
                                    <div class="font-weight-bold">DREN ABIDJAN 2</div>
                                    <small class="text-muted">DREN-ABJ2</small>
                                </td>
                                <td>
                                    <span class="badge badge-secondary">Atlas et Cartes</span>
                                </td>
                                <td>
                                    <div class="font-weight-bold">Atlas géographique de la Côte d'Ivoire</div>
                                    <small class="text-muted">
                                        <span class="badge badge-primary">En livraison</span>
                                    </small>
                                </td>
                                <td>
                                    <span class="font-weight-bold text-info">800</span>
                                    <small class="text-muted d-block">exemplaires</small>
                                </td>
                                <td>
                                    <span class="badge badge-secondary">Normale</span>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('commande_daf.show', 4) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('commande_daf.edit', 4) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                                    <div class="font-weight-bold text-primary">CMD-2024-005</div>
                                    <small class="text-muted">02/02/2024</small>
                                </td>
                                <td>
                                    <div class="font-weight-bold">DREN ABIDJAN 3</div>
                                    <small class="text-muted">DREN-ABJ3</small>
                                </td>
                                <td>
                                    <span class="badge badge-primary">Manuel Scolaire</span>
                                </td>
                                <td>
                                    <div class="font-weight-bold">Sciences d'Observation CE2</div>
                                    <small class="text-muted">
                                        <span class="badge badge-danger">Retardée</span>
                                    </small>
                                </td>
                                <td>
                                    <span class="font-weight-bold text-info">3,500</span>
                                    <small class="text-muted d-block">exemplaires</small>
                                </td>
                                <td>
                                    <span class="badge badge-dark">Critique</span>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('commande_daf.show', 5) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('commande_daf.edit', 5) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
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
                        <p class="text-muted mb-0">Affichage de 1 à 5 sur 89 commandes</p>
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
                        <h4 class="mb-1">89</h4>
                        <p class="mb-0">Total Commandes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-success text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">52</h4>
                        <p class="mb-0">Commandes Livrées</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-warning text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">23</h4>
                        <p class="mb-0">En Validation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-info text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">2.8M</h4>
                        <p class="mb-0">Budget Total (FCFA)</p>
                    </div>
=======


        <!-- [ Main Content ] start -->
        <div class="row">

            <!-- <p > BIENVENUE SUR DISMAS </p> -->

            <p class="btn btn-primary">BIENVENUE SUR DISMAS ----- liste des commandes</p>
          
           
           <p>Boqnjours famille DEv travail en groupe laravel ce jour PROF : Jesus</p>

            <!-- table card-1 start -->
            <div class="col-md-12 col-xl-4">
          <!--       <div class="card flat-card">-->
                </div> 
>>>>>>> afbfbed4971f1bc618e6778dea9af453515f7692
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
    document.getElementById('typeFilter').value = '';
    document.getElementById('prioriteFilter').value = '';
    document.getElementById('drenFilter').value = '';
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
    const typeValue = document.getElementById('typeFilter').value.toLowerCase();
    const prioriteValue = document.getElementById('prioriteFilter').value.toLowerCase();
    const drenValue = document.getElementById('drenFilter').value.toLowerCase();

    const table = document.getElementById('commandesTable');
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

        // Filtre Statut
        if (statusValue && showRow) {
            const titleCell = cells[4];
            const statusText = titleCell.textContent.toLowerCase();
            if (!statusText.includes(statusValue.replace('_', ' '))) {
                showRow = false;
            }
        }

        // Filtre Type
        if (typeValue && showRow) {
            const typeCell = cells[3];
            const typeText = typeCell.textContent.toLowerCase();
            if (!typeText.includes(typeValue.replace('_', ' '))) {
                showRow = false;
            }
        }

        // Filtre Priorité
        if (prioriteValue && showRow) {
            const prioriteCell = cells[6];
            const prioriteText = prioriteCell.textContent.toLowerCase();
            if (!prioriteText.includes(prioriteValue.replace('_', ' '))) {
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

        row.style.display = showRow ? '' : 'none';
    }
}

function confirmDelete(id) {
    new PNotify({
        title: 'Confirmation',
        text: 'Êtes-vous sûr de vouloir supprimer cette commande ?',
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
        window.location.href = '{{ route("commande_daf.destroy", ":id") }}'.replace(':id', id);
    });
}

// Initialisation des événements
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const statusFilter = document.getElementById('statusFilter');
    const typeFilter = document.getElementById('typeFilter');
    const prioriteFilter = document.getElementById('prioriteFilter');
    const drenFilter = document.getElementById('drenFilter');

    searchInput.addEventListener('keyup', filterTable);
    statusFilter.addEventListener('change', filterTable);
    typeFilter.addEventListener('change', filterTable);
    prioriteFilter.addEventListener('change', filterTable);
    drenFilter.addEventListener('change', filterTable);

    // Initialisation des tooltips
    $('[title]').tooltip();
});
</script>
@endsection
