@extends('layouts.layouts_super.master')
@section('title', 'Expression de Besoin EPP')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content">

   
        <!-- [ Formulaire de saisie ] -->
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm rounded-3 mb-4">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0 fw-semibold text-dark">
                            <i class="feather icon-edit text-success me-2"></i>
                            Nouveau besoin EPP
                        </h5>
                    </div>

                    <div class="card-body">
                        <form id="formAddBesoin">
                            <div class="row g-2 align-items-end">

                                <!-- Nom du Livre -->
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <label class="form-label small fw-semibold mb-1">Nom du Livre</label>
                                    <select class="form-select form-select-sm" required>
                                        <option value="">-- Choisir --</option>
                                        <option>Français</option>
                                        <option>Mathématiques</option>
                                        <option>Science et Vie</option>
                                    </select>
                                </div>

                                <!-- Nom du Niveau -->
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <label class="form-label small fw-semibold mb-1">Nom du Niveau</label>
                                    <select class="form-select form-select-sm" required>
                                        <option value="">-- Choisir --</option>
                                        <option>CP1</option>
                                        <option>CE2</option>
                                        <option>CM2</option>
                                    </select>
                                </div>

                                <!-- Effectif Total -->
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <label class="form-label small fw-semibold mb-1">Effectif Total</label>
                                    <input type="number" class="form-control form-control-sm" placeholder="Ex : 300" required>
                                </div>

                                <!-- Année scolaire -->
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <label class="form-label small fw-semibold mb-1">Année scolaire</label>
                                    <select class="form-select form-select-sm" required>
                                        <option value="">-- Choisir --</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                        <option>2026</option>
                                    </select>
                                </div>

                                <!-- Nom EPP -->
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                    <label class="form-label small fw-semibold mb-1">Nom EPP</label>
                                    <select class="form-select form-select-sm" required>
                                        <option value="">-- Choisir --</option>
                                        <option>EPP Plateau 1</option>
                                        <option>EPP Songon</option>
                                        <option>EPP Bassam 1</option>
                                    </select>
                                </div>

                                <!-- Bouton -->
                                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12 text-lg-end mt-2 mt-sm-0">
                                    <button type="submit" class="btn btn-success btn-sm w-100 w-lg-auto">
                                        <i class="feather icon-save me-1"></i> Enregistrer
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- [ Tableau des besoins ] -->
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-semibold text-dark">
                            <i class="feather icon-list text-primary me-2"></i>
                            Liste des besoins EPP
                        </h5>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle table-bordered table-hover">
                                <thead class="table-light text-center">
                                    <tr>
                                        <th>#</th>
                                        <th>Nom du Niveau</th>
                                        <th>Total</th>
                                        <th>Nom du Livre</th>
                                        <th>Nom EPP</th>
                                        <th>Année scolaire</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>1</td>
                                        <td>CP1</td>
                                        <td>345</td>
                                        <td>Lecture débutant</td>
                                        <td>EPP Plateau 1</td>
                                        <td>2026</td>
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
                                        <td>CE2</td>
                                        <td>552</td>
                                        <td>Mathématiques niveau 2</td>
                                        <td>EPP Plateau 1</td>
                                        <td>2026</td>
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

                    </div>
                </div>
            </div>
        </div>

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
