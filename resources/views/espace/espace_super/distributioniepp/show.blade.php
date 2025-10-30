@extends('layouts.layouts_super.master')
@section('title', 'Détails Distribution IEPP')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-eye"></i> Détails de la Distribution IEPP</h5>
                            <p class="m-b-0">Affichage des détails de la distribution</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Accueil</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('distribution_iepp.index') }}">Distribution IEPP</a>
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
                    <a href="{{ route('distribution_iepp.edit', 1) }}" class="btn btn-warning btn-lg">
                        <i class="feather icon-edit"></i> Modifier
                    </a>
                    <a href="{{ route('distribution_iepp.index') }}" class="btn btn-inverse btn-lg">
                        <i class="feather icon-arrow-left"></i> Retour à la liste
                    </a>
                    <button type="button" class="btn btn-danger btn-lg" onclick="confirmDelete()">
                        <i class="feather icon-trash"></i> Supprimer
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
                                <i class="feather icon-info"></i> Informations de base
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="info-group mb-3">
                                        <label class="info-label">Numéro de distribution</label>
                                        <div class="info-value">DIST-IEPP-2024-001</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-group mb-3">
                                        <label class="info-label">Date de distribution</label>
                                        <div class="info-value">{{ date('d/m/Y') }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="info-group mb-3">
                                        <label class="info-label">IEPP destinataire</label>
                                        <div class="info-value">
                                            <span class="badge badge-info badge-lg">IEPP Abidjan Centre</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-group mb-3">
                                        <label class="info-label">Région</label>
                                        <div class="info-value">Lagunes</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="info-group mb-3">
                                        <label class="info-label">Statut</label>
                                        <div class="info-value">
                                            <span class="badge badge-success badge-lg">Livrée</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-group mb-3">
                                        <label class="info-label">Responsable distribution</label>
                                        <div class="info-value">Jean KOUAME</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="info-group mb-3">
                                        <label class="info-label">Observation</label>
                                        <div class="info-value">
                                            Distribution effectuée conformément au planning. Tous les manuels ont été livrés en bon état.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Détails des manuels -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                <i class="feather icon-book"></i> Détails des manuels
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Manuel</th>
                                            <th>Niveau</th>
                                            <th>Quantité demandée</th>
                                            <th>Quantité livrée</th>
                                            <th>État</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mathématiques CP1</td>
                                            <td>CP1</td>
                                            <td class="text-center">150</td>
                                            <td class="text-center">150</td>
                                            <td class="text-center">
                                                <span class="badge badge-success">Complet</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Français CP2</td>
                                            <td>CP2</td>
                                            <td class="text-center">120</td>
                                            <td class="text-center">120</td>
                                            <td class="text-center">
                                                <span class="badge badge-success">Complet</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sciences CE1</td>
                                            <td>CE1</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">95</td>
                                            <td class="text-center">
                                                <span class="badge badge-warning">Partiel</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                <i class="feather icon-bar-chart"></i> Résumé
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <div class="h2 text-primary">370</div>
                                <div class="text-muted">Manuels demandés</div>
                            </div>

                            <div class="text-center mb-3">
                                <div class="h2 text-success">365</div>
                                <div class="text-muted">Manuels livrés</div>
                            </div>

                            <div class="text-center mb-3">
                                <div class="h2 text-warning">5</div>
                                <div class="text-muted">Manuels manquants</div>
                            </div>

                            <hr>

                            <div class="row text-center">
                                <div class="col-6">
                                    <div class="h4 text-success">98.6%</div>
                                    <div class="text-muted small">Taux de livraison</div>
                                </div>
                                <div class="col-6">
                                    <div class="h4 text-info">3</div>
                                    <div class="text-muted small">Types de manuels</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Informations système -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                <i class="feather icon-info"></i> Informations système
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="info-group mb-2">
                                <label class="info-label small">Créé le</label>
                                <div class="info-value small">{{ date('d/m/Y H:i') }}</div>
                            </div>
                            <div class="info-group mb-2">
                                <label class="info-label small">Créé par</label>
                                <div class="info-value small">Admin Système</div>
                            </div>
                            <div class="info-group mb-2">
                                <label class="info-label small">Dernière modification</label>
                                <div class="info-value small">{{ date('d/m/Y H:i') }}</div>
                            </div>
                            <div class="info-group">
                                <label class="info-label small">Modifié par</label>
                                <div class="info-value small">Utilisateur Actuel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-body end -->
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
                Êtes-vous sûr de vouloir supprimer cette distribution ? Cette action est irréversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger" onclick="deleteItem()">Supprimer</button>
            </div>
        </div>
    </div>
</div>

<script>
function confirmDelete() {
    $('#deleteModal').modal('show');
}

function deleteItem() {
    // Simulation de suppression
    alert('Distribution supprimée (simulation)');
    $('#deleteModal').modal('hide');
    // window.location.href = "{{ route('distribution_iepp.index') }}";
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

.h2, .h4 {
    margin-bottom: 0.5rem;
}

.text-muted.small {
    font-size: 0.8rem;
}
</style>

@endsection
