@extends('layouts.layouts_super.master')
@section('title', 'Liste des Iepp')
@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content">

        <!-- [ breadcrumb ] -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Gestion des Iepp</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Paramètre</a></li>
                            <li class="breadcrumb-item"><a href="#!">Iepp</a></li>
                        </ul>
                    </div>
                </div>
            </div> 
        </div>

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