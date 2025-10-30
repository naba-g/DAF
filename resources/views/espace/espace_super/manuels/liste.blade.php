@extends('layouts.layouts_super.master')
@section('title', 'Liste des manuels ')
@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content">

        <!-- [ Breadcrumb / Header ] -->
        <div class="page-header">
            <div class="page-block">

                <div class="row align-items-center">

                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Manuel</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Manuels</a></li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- [ Tableau + Formulaire intégré ] -->
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
                        <h5 class="mb-0 fw-semibold text-dark">
                            <i class="feather icon-list text-success me-2"></i>
                            Liste des Manuels
                        </h5>
                    </div>

                    <div class="card-body">

                        <!-- Formulaire intégré sur trois colonnes avec bouton à droite -->
                        <form id="formAddBesoin" class="mb-4">
                            <div class="row g-3 align-items-end">

                                <!-- Colonne 1 : Nom du Livre -->
                                <div class="col-md-3">
                                    <label class="form-label fw-semibold">Titre</label>
                                    <input type="text" class="form-control" placeholder="Ex : Français" required>
                                </div>

                                
                                <!-- Colonne 4 : Année scolaire -->
                                <div class="col-md-2">
                                    <label class="form-label fw-semibold">code</label>
                                    <input type="text" class="form-control" placeholder="Ex : N002" required>
                                </div>

                                <!-- Colonne 5 : Nom EPP -->
                                <div class="col-md-3">
                                    <label class="form-label fw-semibold">Type manuel</label>
                                    <input type="text" class="form-control" placeholder="Ex : cahier exercice" required>
                                </div>

                                <!-- Bouton Enregistrer -->
                                <div class="col-md-2 text-end">
                                    <button type="submit" class="btn btn-success mt-2">
                                        <i class="feather icon-save me-1"></i> Enregistrer
                                    </button>
                                </div>

                            </div>
                        </form>

                        <!-- Tableau des besoins -->
                        <div class="table-responsive">
                            <table class="table align-middle table-bordered table-hover">
                                <thead class="table-light text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>code</th>
                                        <th>type Manuel</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>1</td>
                                        <td>Mathématique</td>
                                        <td>M001</td>
                                        <td>livre</td>
                                       
                                     
                                        <td>
                                            <button class="btn btn-sm btn-warning text-white me-1">
                                                <i class="feather icon-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="feather icon-trash-2"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Francais</td>
                                        <td>B012</td>
                                        <td>cahier d'exercice</td>
                                        
                                        <td>
                                            <button class="btn btn-sm btn-warning text-white me-1">
                                                <i class="feather icon-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="feather icon-trash-2"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Français</td>
                                        <td>K900</td>
                                        <td>Guide du maitre</td>
                                        
                                        <td>
                                            <button class="btn btn-sm btn-warning text-white me-1">
                                                <i class="feather icon-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger">
                                                <i class="feather icon-trash-2"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination simulée -->
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

                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->

    </div>
</div>

@endsection

@section('page-script')
<script>
document.getElementById('formAddBesoin').addEventListener('submit', function(e){
    e.preventDefault();
    alert('Le besoin a été ajouté avec succès (simulation).');
    this.reset();
});
</script>
@endsection