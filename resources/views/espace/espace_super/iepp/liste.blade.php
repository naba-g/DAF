@extends('layouts.layouts_super.master')
@section('title', 'Liste des iepp')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">

        <!-- En-tête -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Gestion des iepp</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Administration</a></li>
                            <li class="breadcrumb-item"><a href="#!">Liste des iepp</a></li>
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
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="filterStatut">Nom drena</label>
                                    <select class="form-control" id="filterStatut">
                                        <option value="">Tous les Drena</option>
                                        <option value="active">DRENA ABIDJAN 1</option>
                                        <option value="archivee">DRENA ABIDJAN 2</option>
                                        <option value="future">DRENA ABIDJAN 3</option>
                                         <option value="future">DRENA ABIDJAN 4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="filterAnnee">Nom iepp</label>
                                    <input type="text" class="form-control" id="filternomiepp" placeholder="Ex: Plateau village 2">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="filterAnnee">Code iepp</label>
                                    <input type="text" class="form-control" id="filteriepp" placeholder="Ex: 978-2-09-15">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <div class="d-block">
                                        <button type="button" class="btn btn-outline-primary" onclick="applyFilters()">
                                            <i class="feather icon-search"></i> Rechercher
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary ml-2" onclick="resetFilters()">
                                            <i class="feather icon-refresh-cw"></i> Actualiser
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!--<div class="col-md-3">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <div class="d-block">
                                        <a href="/annee_scolaire/create" class="btn btn-primary">
                                            <i class="feather icon-plus"></i> Nouvelle Année
                                        </a>
                                    </div>
                                </div>
                            </div>-->

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Tableau -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Liste des iepp - 8,247 </h5>

                        <!-- Lien remplaçant le bouton -->
                        <!-- <a href="/ajoutiepp" 
                           class="text-primary fw-semibold"
                           style="text-decoration: none; transition: all 0.2s ease; font-size: 14px;"
                           onmouseover="this.style.textDecoration='underline'"
                           onmouseout="this.style.textDecoration='none'">
                          Nouvelle iepp
                        </a> -->

                        <div class="d-block">
                        <a href="/ajoutiepp" class="btn btn-primary">
                        <i class="feather icon-plus"></i> Nouvelle iepp
                         </a>
                      </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Nom drena</th>
                                        <th>Code iepp</th> 
                                        <th>Nom iepp</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><strong>Abengourou</strong></td>
                                        <td>978-2-09-15</td>
                                        <td>soleil 4</td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                             
                                               <a href="modificationiepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
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
                                        <td><strong>Daloa</strong></td>
                                        <td>978-2-09-16</td>
                                        <td>Rabat mayer 2</td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                             
                                               <a href="modificationiepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
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
                                        <td><strong>Abj 1</strong></td>
                                        <td>978-2-09-17</td>
                                        <td>Plateau village</td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               
                                                <a href="modificationiepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
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
                                        <td><strong>Aboisso</strong></td>
                                        <td>978-2-09-18</td>
                                        <td>Koko-ville</td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                              
                                                 <a href="modificationiepp/1" class="btn btn-outline-warning btn-action" title="Modifier">
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

                        <!-- Pagination -->
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
                                <p class="text-center text-muted">Affichage de 1 à 4 sur 4 entrées</p>
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


</style>

@endsection
