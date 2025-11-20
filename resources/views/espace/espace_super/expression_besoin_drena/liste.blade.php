@extends('layouts.layouts_super.master')
@section('title', 'expression des besion des drena')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">

        <!-- En-tête -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Gestion des besion drena</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Administration</a></li>
                            <li class="breadcrumb-item"><a href="#!">Expression des besions drena</a></li>
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

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="filterStatut">Nom IEPP</label>
                                    <select class="form-control" id="filterStatut">
                                        <option value="">Tous les iepp</option>
                                        <option value="active">IEPP 1</option>
                                        <option value="archivee">IEPP 2</option>
                                        <option value="future">IEPP 3</option>
                                         <option value="future">IEPP 4</option>
                                    </select>
                                </div>
                            </div>


                            <!--<div class="col-md-2">
                                <div class="form-group">
                                    <label for="filterStatut">Niveau</label>
                                    <select class="form-control" id="filterStatut">
                                        <option value="">Tous les niveaux</option>
                                        <option value="active">CP1</option>
                                        <option value="archivee">CP2</option>
                                        <option value="future">CE1</option>
                                         <option value="future">CE2</option>
                                         <option value="future">CM1</option>
                                         <option value="future">CM2</option>
                                    </select>
                                </div>
                            </div>-->


                            <!--<div class="col-md-3">
                                <div class="form-group">
                                    <label for="filterStatut">Type manuel</label>
                                    <select class="form-control" id="filterStatut">
                                        <option value="">Tous les type manuel</option>
                                        <option value="active">Livre de mathématiques</option>
                                        <option value="archivee">Guide maitre</option>
                                        <option value="future">Livre de français</option>
                                         <option value="future">Cahier d'exercice</option>
                                    </select>
                                </div>
                            </div>-->

                             <div class="col-md-2">
                                <div class="form-group">
                                    <label for="filterStatut">Année scolaire</label>
                                    <select class="form-control" id="filterStatut">
                                        <option value="">Tous les années</option>
                                        <option value="active">2025</option>
                                        <option value="archivee">2026</option>
                                        <option value="future">2027</option>
                                         <option value="future">2028</option>
                                    </select>
                                </div>
                            </div>




                            <!--<div class="col-md-3">
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
                            </div>-->

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
                        <h5 class="mb-0">Expression des besions</h5>

                        <!-- Lien remplaçant le bouton -->
                      <!--<div class="d-block">
                        <a href="/ajoutexpressionbesionepp" class="btn btn-primary">
                        <i class="feather icon-plus"></i> Nouvel effectif estimé
                         </a>
                      </div>-->
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Nom IEPP</th>
                                        <!--<th>niveau</th>-->
                                        <!--<th>Titre manuel</th>-->
                                        <!--<th>qté livre</th>-->
                                        <!--<th>qté guide maitre</th>-->

                                        <th>Qté Totale</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>iepp1</td>
                                        <!--<td><strong>CP1</strong></td>-->
                                        <!--<td>Livre de Mathématique</td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <td><strong>56000</strong></td>


                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                                 <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="detailsdrena/1" class="btn btn-outline-primary btn-action" title="voir details">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(1)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                           <td>iepp2</td>
                                        <!--<td><strong>CP1</strong></td>-->
                                        <!--<td>Livre de physique</td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <td><strong>14000</strong></td>



                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="detailsdrena/1" class="btn btn-outline-primary btn-action" title="voir details">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(2)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                           <td>iepp3</td>
                                        <!--<td><strong>CP1</strong></td>-->
                                        <!--<td>Livre de français</td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <td><strong>14000</strong></td>

                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                                <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="detailsdrena/1" class="btn btn-outline-primary btn-action" title="Modifier">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(3)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                           <td>iepp4</td>
                                        <!--<td><strong>CP1</strong></td>-->
                                         <!--<td>Livre de EDHC</td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                           <!--<td><strong>14000</strong></td>-->
                                        <td><strong>14000</strong></td>

                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="detailsdrena/1" class="btn btn-outline-primary btn-action" title="voir details">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>


                                     <tr>
                                        <td>5</td>
                                           <td>iepp5</td>
                                        <!--<td><strong>CP1</strong></td>-->
                                         <!--<td>Livre d'histoire-géographie</td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <td><strong>14000</strong></td>

                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="detailsdrena/1" class="btn btn-outline-primary btn-action" title="voir details">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>



                                     <tr>
                                        <td>6</td>
                                           <td>iepp6</td>
                                        <!--<td><strong>CP1</strong></td>-->
                                         <!--<td>Livre de sciences et technologies</td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                           <!--<td><strong>14000</strong></td>-->
                                        <td><strong>14000</strong></td>

                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="detailsdrena/1" class="btn btn-outline-primary btn-action" title="voir details">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>



                                   <tr>
                                        <td>7</td>
                                           <td>iepp7</td>
                                        <!--<td><strong>CP2</strong></td>-->
                                         <!--<td>Livre de Mathématique</td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <td><strong>14000</strong></td>

                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                                 <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="detailsdrena/1" class="btn btn-outline-primary btn-action" title="voir details">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(1)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                           <td>iepp8</td>
                                        <!--<td><strong>CP2</strong></td>-->
                                         <!--<td>Livre de physique</td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <td><strong>14000</strong></td>

                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="detailsdrena/1" class="btn btn-outline-primary btn-action" title="Modifier">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(2)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                           <td>iepp9</td>
                                        <!--<td><strong>CP2</strong></td>-->
                                        <!--<td>Livre de français</td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <td><strong>14000</strong></td>

                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                                <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="detailsdrena/1" class="btn btn-outline-primary btn-action" title="voir details">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(3)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>10</td>
                                        <td>iepp10</td>
                                        <!--<td><strong>CP2</strong></td>-->
                                        <!--<td>Livre de EDHC</td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <td><strong>14000</strong></td>

                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="detailsdrena/1" class="btn btn-outline-primary btn-action" title="voir details">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>


                                     <tr>
                                        <td>11</td>
                                           <td>iepp11</td>
                                        <!--<td><strong>CP2</strong></td>-->
                                         <!--<td>Livre d'histoire-géographie</td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <td><strong>14000</strong></td>

                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="detailsdrena/1" class="btn btn-outline-primary btn-action" title="voir details">
                                                    <i class="feather icon-eye"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger btn-action" title="Supprimer" onclick="confirmDelete(4)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>



                                     <tr>
                                        <td>12</td>
                                        <td>iepp12</td>
                                        <!--<td><strong>CP2</strong></td>-->
                                        <!--<td>Livre de sciences et technologies</td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <!--<td><strong>14000</strong></td>-->
                                        <td><strong>14000</strong></td>

                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                               <!--<a href="/manuel/show/1" class="btn btn-outline-info btn-action" title="Voir">
                                                    <i class="feather icon-eye"></i>
                                                </a>-->
                                                <a href="detailsdrena/1" class="btn btn-outline-primary btn-action" title="voir details">
                                                    <i class="feather icon-eye"></i>
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
