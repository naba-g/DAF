@extends('layouts.layouts_super.master')
@section('title', 'Liste des livraisons iepp')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">

        <!-- En-tête -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Gestion des livraisons iepp</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Administration</a></li>
                            <li class="breadcrumb-item"><a href="#!">La liste des livraisons iepp</a></li>
                        </ul>
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
                        <!-- Ligne des champs de filtre -->
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="filterEpp">Nom EPP</label>
                                    <select class="form-control" id="filterEpp">
                                        <option value="">Tous les EPP</option>
                                        <option value="active">EPP 1</option>
                                        <option value="archivee">EPP 2</option>
                                        <option value="future">EPP 3</option>
                                        <option value="future">EPP 4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="filterNiveau">Niveau</label>
                                    <select class="form-control" id="filterNiveau">
                                        <option value="">Tous les niveaux</option>
                                        <option value="active">CP1</option>
                                        <option value="archivee">CP2</option>
                                        <option value="future">CE1</option>
                                        <option value="future">CE2</option>
                                        <option value="future">CM1</option>
                                        <option value="future">CM2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="filterType">Type manuel</label>
                                    <select class="form-control" id="filterType">
                                        <option value="">Tous les type manuel</option>
                                        <option value="active">Livre de mathématiques</option>
                                        <option value="archivee">Guide maitre</option>
                                        <option value="future">Livre de français</option>
                                        <option value="future">Cahier d'exercice</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="filterAnnee">Année scolaire</label>
                                    <select class="form-control" id="filterAnnee">
                                        <option value="">Tous les années</option>
                                        <option value="active">2025</option>
                                        <option value="archivee">2026</option>
                                        <option value="future">2027</option>
                                        <option value="future">2028</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Ligne séparée pour les boutons -->
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="d-flex align-items-center">

                                    <button type="button" class="btn btn-outline-primary mr-2" onclick="applyFilters()">
                                        <i class="feather icon-search"></i> Rechercher
                                    </button>

                                    <button type="button" class="btn btn-outline-secondary mr-2" onclick="resetFilters()">
                                        <i class="feather icon-refresh-cw"></i> Actualiser
                                    </button>

                                    <a href="/ajoutlivraisoniepp" class="btn btn-primary">
                                        <i class="feather icon-plus"></i> Nouvelle livraison
                                    </a>
                                    
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>

        <!-- Section des onglets -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Liste des livraisons par type</h5>
                    </div>
                    <div class="card-body">
                        <!-- Navigation par onglets -->
                        <ul class="nav nav-tabs" id="livraisonTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="guides-tab" data-toggle="tab" href="#guides" role="tab" aria-controls="guides" aria-selected="true">
                                    <i class="feather icon-book-open"></i> Guides Maitre
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="livres-tab" data-toggle="tab" href="#livres" role="tab" aria-controls="livres" aria-selected="false">
                                    <i class="feather icon-book"></i> Livres
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="cahiers-tab" data-toggle="tab" href="#cahiers" role="tab" aria-controls="cahiers" aria-selected="false">
                                    <i class="feather icon-file-text"></i> Cahiers d'Exercice
                                </a>
                            </li>
                        </ul>

                        <!-- Contenu des onglets -->
                        <div class="tab-content" id="livraisonTabsContent">
                            <!-- Onglet Guides Maitre -->
                            <div class="tab-pane fade show active" id="guides" role="tabpanel" aria-labelledby="guides-tab">
                                <div class="table-responsive mt-3">
                                    <table class="table table-hover">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>#</th>
                                                <th>niveau</th>
                                                <th>Titre de manuel</th>
                                                <th>quantité</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><strong>CP1</strong></td>
                                                <td>Livre de Mathématique</td>
                                                <td><strong>14000</strong></td>
                                                <td>
                                                    <div class="btn-group btn-group-xs" role="group">
                                                        <a href="modificationlivraisoniepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                            <i class="feather icon-edit"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(1)">
                                                            <i class="feather icon-trash-2"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td><strong>CP1</strong></td>
                                                <td>Livre de physique</td>
                                                <td><strong>14000</strong></td>
                                                <td>
                                                    <div class="btn-group btn-group-xs" role="group">
                                                        <a href="modificationlivraisoniepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                            <i class="feather icon-edit"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(2)">
                                                            <i class="feather icon-trash-2"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td><strong>CP1</strong></td>
                                                <td>Livre de français</td>
                                                <td><strong>14000</strong></td>
                                                <td>
                                                    <div class="btn-group btn-group-xs" role="group">
                                                        <a href="modificationlivraisoniepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                            <i class="feather icon-edit"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(3)">
                                                            <i class="feather icon-trash-2"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td><strong>CP1</strong></td>
                                                <td>Livre de EDHC</td>
                                                <td><strong>14000</strong></td>
                                                <td>
                                                    <div class="btn-group btn-group-xs" role="group">
                                                        <a href="modificationlivraisoniepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                            <i class="feather icon-edit"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                            <i class="feather icon-trash-2"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Pagination pour les guides maitre -->
                                <div class="row mt-3">
                                    <div class="col-sm-12">
                                        <nav aria-label="Pagination guides maitre">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <p class="text-center text-muted">Affichage de 1 à 4 sur 12 entrées</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Onglet Livres -->
                            <div class="tab-pane fade" id="livres" role="tabpanel" aria-labelledby="livres-tab">
                                <div class="table-responsive mt-3">
                                    <table class="table table-hover">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>#</th>
                                                <th>niveau</th>
                                                <th>Titre de manuel</th>
                                                <th>quantité</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><strong>CP1</strong></td>
                                                <td>Livre de Mathématique</td>
                                                <td><strong>14000</strong></td>
                                                <td>
                                                    <div class="btn-group btn-group-xs" role="group">
                                                        <a href="modificationlivraisonieppt/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                            <i class="feather icon-edit"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(1)">
                                                            <i class="feather icon-trash-2"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td><strong>CP1</strong></td>
                                                <td>Livre de physique</td>
                                                <td><strong>14000</strong></td>
                                                <td>
                                                    <div class="btn-group btn-group-xs" role="group">
                                                        <a href="modificationlivraisonieppt/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                            <i class="feather icon-edit"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(2)">
                                                            <i class="feather icon-trash-2"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td><strong>CP1</strong></td>
                                                <td>Livre de français</td>
                                                <td><strong>14000</strong></td>
                                                <td>
                                                    <div class="btn-group btn-group-xs" role="group">
                                                        <a href="modificationlivraisonieppt/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                            <i class="feather icon-edit"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(3)">
                                                            <i class="feather icon-trash-2"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td><strong>CP1</strong></td>
                                                <td>Livre de EDHC</td>
                                                <td><strong>14000</strong></td>
                                                <td>
                                                    <div class="btn-group btn-group-xs" role="group">
                                                        <a href="modificationlivraisonieppt/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                            <i class="feather icon-edit"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                            <i class="feather icon-trash-2"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Pagination pour les livres livrés -->
                                <div class="row mt-3">
                                    <div class="col-sm-12">
                                        <nav aria-label="Pagination livres livrés">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <p class="text-center text-muted">Affichage de 1 à 4 sur 12 entrées</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Onglet Cahiers d'Exercice -->
                            <div class="tab-pane fade" id="cahiers" role="tabpanel" aria-labelledby="cahiers-tab">
                                <div class="table-responsive mt-3">
                                    <table class="table table-hover">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>#</th>
                                                <th>niveau</th>
                                                <th>Titre de manuel</th>
                                                <th>quantité</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><strong>CP1</strong></td>
                                                <td>Livre de Mathématique</td>
                                                <td><strong>14000</strong></td>
                                                <td>
                                                    <div class="btn-group btn-group-xs" role="group">
                                                        <a href="/manuel/edit/1" class="btn btn-outline-warning btn-action" title="Modifier">
                                                            <i class="feather icon-edit"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(1)">
                                                            <i class="feather icon-trash-2"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td><strong>CP1</strong></td>
                                                <td>Livre de physique</td>
                                                <td><strong>14000</strong></td>
                                                <td>
                                                    <div class="btn-group btn-group-xs" role="group">
                                                        <a href="/manuel/edit/2" class="btn btn-outline-warning btn-action" title="Modifier">
                                                            <i class="feather icon-edit"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(2)">
                                                            <i class="feather icon-trash-2"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td><strong>CP1</strong></td>
                                                <td>Livre de français</td>
                                                <td><strong>14000</strong></td>
                                                <td>
                                                    <div class="btn-group btn-group-xs" role="group">
                                                        <a href="/manuel/edit/3" class="btn btn-outline-warning btn-action" title="Modifier">
                                                            <i class="feather icon-edit"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(3)">
                                                            <i class="feather icon-trash-2"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td><strong>CP1</strong></td>
                                                <td>Livre de EDHC</td>
                                                <td><strong>14000</strong></td>
                                                <td>
                                                    <div class="btn-group btn-group-xs" role="group">
                                                        <a href="/manuel/edit/4" class="btn btn-outline-warning btn-action" title="Modifier">
                                                            <i class="feather icon-edit"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                            <i class="feather icon-trash-2"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Pagination pour les cahiers d'exercice -->
                                <div class="row mt-3">
                                    <div class="col-sm-12">
                                        <nav aria-label="Pagination cahiers d'exercice">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <p class="text-center text-muted">Affichage de 1 à 4 sur 12 entrées</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Scripts -->
<script>
function confirmDelete(id) {
    new PNotify({
        title: 'Confirmation',
        text: 'Voulez-vous vraiment supprimer ce manuel ?',
        type: 'warning',
        confirm: { confirm: true },
        buttons: { closer: false, sticker: false },
    }).get().on('pnotify.confirm', function() {
        new PNotify({
            title: 'Succès',
            text: 'Manuel supprimé avec succès',
            type: 'success'
        });
    });
}

function applyFilters() {
    // Logique pour appliquer les filtres
    console.log('Application des filtres...');
}

function resetFilters() {
    // Logique pour réinitialiser les filtres
    document.getElementById('filterEpp').value = '';
    document.getElementById('filterNiveau').value = '';
    document.getElementById('filterType').value = '';
    document.getElementById('filterAnnee').value = '';
    console.log('Filtres réinitialisés');
}

// Initialisation des onglets
document.addEventListener('DOMContentLoaded', function() {
    // Activation du premier onglet par défaut
    var firstTab = new bootstrap.Tab(document.getElementById('guides-tab'));
    firstTab.show();
});
</script>

<!-- Style boutons réduits -->
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
    margin-right: 4px;
    padding: 6px 10px;
}

.btn-sm {
    padding: 6px 10px !important;
    font-size: 13px !important;
}

.table-hover tbody tr:hover {
    background-color: #f5f5f5;
}

.btn-action {
    border-radius: 4px;
    transition: all 0.3s ease;
}

.btn-action:hover {
    transform: translateY(-1px);
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.mr-2 {
    margin-right: 0.5rem !important;
}

.mt-3 {
    margin-top: 1rem !important;
}

/* Styles pour les onglets */
.nav-tabs {
    border-bottom: 1px solid #dee2e6;
}

.nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
    margin-bottom: -1px;
}

.nav-tabs .nav-link:hover {
    border-color: #e9ecef #e9ecef #dee2e6;
}

.nav-tabs .nav-link.active {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff;
}

.nav-tabs .nav-link i {
    margin-right: 5px;
}

.tab-content {
    padding: 15px 0;
}
</style>

@endsection