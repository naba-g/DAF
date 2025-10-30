@extends('layouts.layouts_super.master')
@section('title', 'Détails DRENA')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-eye"></i> Détails de la DRENA</h5>
                            <p class="m-b-0">Affichage des détails de la direction régionale</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Accueil</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('drena.index') }}">DRENA</a>
                            </li>
                            <li class="breadcrumb-item active">Détails</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="page-body">
            <!-- Actions rapides -->
            <div class="card">
                <div class="card-block text-center">
                    <a href="{{ route('drena.edit', 1) }}" class="btn btn-warning btn-lg">
                        <i class="feather icon-edit"></i> Modifier
                    </a>
                    <a href="{{ route('drena.index') }}" class="btn btn-inverse btn-lg">
                <i class="fas fa-arrow-left"></i> Retour à la liste
            </a>
            <button type="button" class="btn btn-danger btn-lg" onclick="confirmDelete()">
                <i class="fas fa-trash"></i> Supprimer
            </button>
        </div>
    </div>

    <div class="row">
        <!-- Informations principales -->
        <div class="col-lg-8">
            <!-- Informations de base -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-info-circle"></i> Informations de base
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Nom de la DRENA</label>
                                <div class="info-value">DRENA Lagunes</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Code DRENA</label>
                                <div class="info-value">DRENA-LAG-001</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Région</label>
                                <div class="info-value">
                                    <span class="badge badge-info badge-lg">Lagunes</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Ville du siège</label>
                                <div class="info-value">Abidjan</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-group mb-3">
                                <label class="info-label">Adresse complète</label>
                                <div class="info-value">
                                    Rue des Jardins, Plateau, BP 1234 Abidjan, Côte d'Ivoire
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Statut</label>
                                <div class="info-value">
                                    <span class="badge badge-success badge-lg">Active</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Date de création</label>
                                <div class="info-value">15 janvier 2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Direction et Personnel -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-users"></i> Direction et Personnel
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Directeur Régional</label>
                                <div class="info-value">Dr. KOFFI Jean-Baptiste</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Contact du Directeur</label>
                                <div class="info-value">+225 07 12 34 56 78</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Directeur Adjoint</label>
                                <div class="info-value">Mme OUATTARA Aminata</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Secrétaire Général</label>
                                <div class="info-value">M. YAO Kouassi</div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Email DRENA</label>
                                <div class="info-value">
                                    <a href="mailto:contact@drena-lagunes.edu.ci">contact@drena-lagunes.edu.ci</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Téléphone DRENA</label>
                                <div class="info-value">+225 27 20 12 34 56</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Organisation et Ressources -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-cogs"></i> Organisation et Ressources
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Nombre d'établissements</label>
                                <div class="info-value">
                                    <span class="h4 text-primary">1,250</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group mb-3">
                                <label class="info-label">Zone d'intervention</label>
                                <div class="info-value">
                                    <span class="badge badge-warning badge-lg">Mixte</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Observations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-sticky-note"></i> Observations
                    </h6>
                </div>
                <div class="card-body">
                    <div class="info-group">
                        <div class="info-value">
                            La DRENA Lagunes couvre la région économique la plus importante du pays avec Abidjan comme chef-lieu.
                            Elle supervise un nombre important d'établissements scolaires allant du primaire au secondaire.
                            La direction régionale joue un rôle clé dans la coordination des politiques éducatives dans cette zone stratégique.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Panneau latéral -->
        <div class="col-lg-4">
            <!-- Statistiques rapides -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-chart-bar"></i> Statistiques
                    </h6>
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <div class="h2 text-primary">1,250</div>
                        <div class="text-muted">Établissements gérés</div>
                    </div>

                    <div class="row text-center">
                        <div class="col-6">
                            <div class="h4 text-success">850</div>
                            <div class="text-muted small">Primaires</div>
                        </div>
                        <div class="col-6">
                            <div class="h4 text-info">400</div>
                            <div class="text-muted small">Secondaires</div>
                        </div>
                    </div>

                    <hr>

                    <div class="text-center mb-3">
                        <div class="h2 text-warning">45,000</div>
                        <div class="text-muted">Personnel éducatif</div>
                    </div>

                    <div class="text-center">
                        <div class="h2 text-danger">750,000</div>
                        <div class="text-muted">Élèves scolarisés</div>
                    </div>
                </div>
            </div>

            <!-- Documents et fichiers -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-file-alt"></i> Documents
                    </h6>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-file-pdf text-danger"></i>
                                <span class="ml-2">Document de création</span>
                            </div>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-download"></i>
                            </a>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-image text-success"></i>
                                <span class="ml-2">Logo DRENA</span>
                            </div>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-file-word text-primary"></i>
                                <span class="ml-2">Organigramme</span>
                            </div>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-download"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Informations système -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-info"></i> Informations système
                    </h6>
                </div>
                <div class="card-body">
                    <div class="info-group mb-2">
                        <label class="info-label small">Créé le</label>
                        <div class="info-value small">15 janvier 2020 à 10:30</div>
                    </div>
                    <div class="info-group mb-2">
                        <label class="info-label small">Créé par</label>
                        <div class="info-value small">Admin Système</div>
                    </div>
                    <div class="info-group mb-2">
                        <label class="info-label small">Dernière modification</label>
                        <div class="info-value small">{{ date('d M Y à H:i') }}</div>
                    </div>
                    <div class="info-group">
                        <label class="info-label small">Modifié par</label>
                        <div class="info-value small">{{ Auth::user()->name ?? 'Utilisateur' }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation de suppression -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmer la suppression</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cette DRENA ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger" onclick="deleteItem()">Supprimer</button>
            </div>
        </div>
        </div>
        <!-- Page-body end -->
    </div>
</div>

<script>
function confirmDelete() {
    $('#deleteModal').modal('show');
}

function deleteItem() {
    // Ici, vous pouvez ajouter la logique de suppression
    alert('DRENA supprimée (simulation)');
    $('#deleteModal').modal('hide');
    // window.location.href = "{{ route('drena.index') }}";
}
</script>

<style>
.info-group {
    margin-bottom: 1rem;
}

.info-label {
    font-weight: 600;
    color: #5a5c69;
    font-size: 0.9rem;
    display: block;
    margin-bottom: 0.25rem;
}

.info-value {
    color: #3a3b45;
    font-size: 1rem;
    line-height: 1.4;
}

.badge-lg {
    font-size: 0.9rem;
    padding: 0.5rem 0.75rem;
}

.card-header {
    background-color: #f8f9fc;
    border-bottom: 1px solid #e3e6f0;
}

.btn-lg {
    padding: 0.75rem 1.5rem;
    font-size: 1.1rem;
}

.list-group-item {
    border-left: none;
    border-right: none;
    padding: 0.75rem 0;
}

.list-group-item:first-child {
    border-top: none;
}

.list-group-item:last-child {
    border-bottom: none;
}

hr {
    margin: 1.5rem 0;
    border-color: #e3e6f0;
}

.h2, .h4 {
    margin-bottom: 0.5rem;
}

.text-muted.small {
    font-size: 0.8rem;
}
</style>

@endsection
