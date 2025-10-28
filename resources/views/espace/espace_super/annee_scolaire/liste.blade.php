
        @extends('layouts.layouts_super.master')
@section('title', 'Liste des années scolaires')
@section('content')


<div class="pcoded-main-container">
    <div class="pcoded-content">

        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Gestion des Années Scolaires</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Paramètres</a></li>
                            <li class="breadcrumb-item"><a href="#!">Années Scolaires</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h5 class="mb-0">Liste des Années Scolaires</h5>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createAnneeModal">
                                    <i class="feather icon-plus"></i> Nouvelle Année Scolaire
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <!-- Filtres
                                                     Recherche -->
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="search">Rechercher :</label>
                                    <input type="text" class="form-control" id="search" placeholder="Rechercher par libellé...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="filterStatut">Statut :</label>
                                    <select class="form-control" id="filterStatut">
                                        <option value="">Tous les statuts</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                        <option value="archive">Archivée</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="filterPeriode">Période :</label>
                                    <select class="form-control" id="filterPeriode">
                                        <option value="">Toutes les périodes</option>
                                        <option value="2023-2024">2023-2024</option>
                                        <option value="2024-2025">2024-2025</option>
                                        <option value="2025-2026">2025-2026</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <button type="button" class="btn btn-secondary btn-block" onclick="resetFilters()">
                                        <i class="feather icon-refresh-cw"></i> Réinitialiser
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-hover" id="anneesTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Libellé</th>
                                        <th>Date Début</th>
                                        <th>Date Fin</th>
                                        <th>Statut</th>
                                        <th>Date Création</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Données fictives -->
                                    <tr>
                                        <td>1</td>
                                        <td><strong>2024-2025</strong></td>
                                        <td>01/09/2024</td>
                                        <td>31/08/2025</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>15/08/2024</td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-sm btn-outline-primary" title="Voir" onclick="viewAnnee(1)">
                                                    <i class="feather icon-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-outline-warning" title="Modifier" onclick="editAnnee(1)">
                                                    <i class="feather icon-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-outline-danger" title="Supprimer" onclick="deleteAnnee(1)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><strong>2023-2024</strong></td>
                                        <td>01/09/2023</td>
                                        <td>31/08/2024</td>
                                        <td><span class="badge badge-secondary">Archivée</span></td>
                                        <td>20/08/2023</td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-sm btn-outline-primary" title="Voir" onclick="viewAnnee(2)">
                                                    <i class="feather icon-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-outline-warning" title="Modifier" onclick="editAnnee(2)">
                                                    <i class="feather icon-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-outline-danger" title="Supprimer" onclick="deleteAnnee(2)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><strong>2025-2026</strong></td>
                                        <td>01/09/2025</td>
                                        <td>31/08/2026</td>
                                        <td><span class="badge badge-warning">Planifiée</span></td>
                                        <td>10/06/2025</td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-sm btn-outline-primary" title="Voir" onclick="viewAnnee(3)">
                                                    <i class="feather icon-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-outline-warning" title="Modifier" onclick="editAnnee(3)">
                                                    <i class="feather icon-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-outline-danger" title="Supprimer" onclick="deleteAnnee(3)">
                                                    <i class="feather icon-trash-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class="row mt-3">
                            <div class="col-md-6">
                                <p class="text-muted">Affichage de 1 à 3 sur 3 entrées</p>
                            </div>
                            <div class="col-md-6">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-end">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Modal Créer an sco-->
<div class="modal fade" id="createAnneeModal" tabindex="-1" role="dialog" aria-labelledby="createAnneeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createAnneeModalLabel">Nouvelle Année Scolaire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="createAnneeForm">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="libelle">Libellé <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="libelle" name="libelle" placeholder="Ex: 2025-2026" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date_debut">Date de Début <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="date_debut" name="date_debut" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date_fin">Date de Fin <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="date_fin" name="date_fin" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="statut">Statut</label>
                        <select class="form-control" id="statut" name="statut">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                            <option value="planifiee">Planifiée</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description optionnelle"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('page-script')
<script>
    // Fonction de recherche
    document.getElementById('search').addEventListener('keyup', function() {
        let filter = this.value.toLowerCase();
        let table = document.getElementById('anneesTable');
        let rows = table.getElementsByTagName('tr');

        for (let i = 1; i < rows.length; i++) {
            let libelle = rows[i].getElementsByTagName('td')[1];
            if (libelle) {
                let textValue = libelle.textContent || libelle.innerText;
                if (textValue.toLowerCase().indexOf(filter) > -1) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }
        }
    });

    // Fonction pour réinitialiser les filtres
    function resetFilters() {
        document.getElementById('search').value = '';
        document.getElementById('filterStatut').value = '';
        document.getElementById('filterPeriode').value = '';

        // Réafficher toutes les lignes
        let table = document.getElementById('anneesTable');
        let rows = table.getElementsByTagName('tr');
        for (let i = 1; i < rows.length; i++) {
            rows[i].style.display = '';
        }
    }

    // Fonctions pour les actions
    function viewAnnee(id) {
        alert('Voir année scolaire ID: ' + id);
        // page de détails ou ouvrir un modal
    }

    function editAnnee(id) {
        alert('Modifier année scolaire ID: ' + id);
        // ouvrir un modal d'édition ou rediriger vers une page d'édition
    }

    function deleteAnnee(id) {
        if (confirm('Êtes-vous sûr de vouloir supprimer cette année scolaire ?')) {
            alert('Supprimer année scolaire ID: ' + id);
            // appel AJAX pour supprimer
        }
    }

    // Soumission
    document.getElementById('createAnneeForm').addEventListener('submit', function(e) {
        e.preventDefault();


        let libelle = document.getElementById('libelle').value;
        let dateDebut = document.getElementById('date_debut').value;
        let dateFin = document.getElementById('date_fin').value;

        if (!libelle || !dateDebut || !dateFin) {
            alert('Veuillez remplir tous les champs obligatoires');
            return;
        }

        if (new Date(dateDebut) >= new Date(dateFin)) {
            alert('La date de début doit être antérieure à la date de fin');
            return;
        }

        // appel AJAX pour créer an sco
        alert('Année scolaire créée avec succès !');
        $('#createAnneeModal').modal('hide');

        // Réinitialiser  fomr
        this.reset();
    });

    // Filtre par statut
    document.getElementById('filterStatut').addEventListener('change', function() {
        let filter = this.value.toLowerCase();
        let table = document.getElementById('anneesTable');
        let rows = table.getElementsByTagName('tr');

        for (let i = 1; i < rows.length; i++) {
            let statut = rows[i].getElementsByTagName('td')[4];
            if (statut) {
                let statutText = statut.textContent || statut.innerText;
                if (filter === '' || statutText.toLowerCase().indexOf(filter) > -1) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }
        }
    });
</script>
@endsection
