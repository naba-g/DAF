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

        <!-- Tableau -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Liste des iepp</h5>

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
.btn-action {
    padding: 2px 6px !important;
    font-size: 12px !important;
    line-height: 1.2 !important;
}
.btn-group-xs > .btn {
    border-radius: 4px;
}
.table th, .table td {
    vertical-align: middle;
}

/* Couleur claire pour l’en-tête du tableau */
.table-header-custom {
    background-color: #f8f9fa !important;
    color: #212529 !important;
    font-weight: 600;
}

/* Effet au survol des lignes */
.table-hover tbody tr:hover {
    background-color: #f1f3f5 !important;
    transition: background-color 0.2s ease-in-out;
}

/* Lien Ajouter un manuel */
a.text-primary:hover {
    text-decoration: underline !important;
}
</style>

@endsection
