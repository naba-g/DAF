@extends('layouts.layouts_super.master')
@section('title', 'Détails Année Scolaire')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Header -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Détails de l'Année Scolaire</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Administration</a></li>
                            <li class="breadcrumb-item"><a href="/annee_scolaire">Années Scolaires</a></li>
                            <li class="breadcrumb-item"><a href="#!">2024-2025</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions rapides -->
        <div class="row">
            <div class="col-md-12">
                <div class="card custom-card-accent">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="mb-0">
                                    <i class="feather icon-calendar mr-2"></i>
                                    2024-2025
                                    <span class="badge badge-success ml-2">Année Active</span>
                                </h4>
                                <p class="text-muted mb-0">Année scolaire en cours - Période normale</p>
                            </div>
                            <div class="col-md-4 text-right">
                                <div class="btn-group" role="group">
                                    <a href="/annee_scolaire/edit/1" class="btn btn-outline-warning waves-effect">
                                        <i class="feather icon-edit mr-1"></i>Modifier
                                    </a>
                                    <!-- Année déjà active, bouton désactivé -->
                                    <button type="button" class="btn btn-outline-success" disabled title="Déjà active">
                                        <i class="feather icon-check mr-1"></i>Active
                                    </button>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-secondary dropdown-toggle waves-effect" data-toggle="dropdown">
                                            <i class="feather icon-more-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#" onclick="duplicateYear({{ $anneeScolaire->id ?? 1 }})">
                                                <i class="feather icon-copy mr-2"></i>Dupliquer
                                            </a>
                                            <a class="dropdown-item" href="#" onclick="exportData({{ $anneeScolaire->id ?? 1 }})">
                                                <i class="feather icon-download mr-2"></i>Exporter
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            @if(!($anneeScolaire->is_active ?? true))
                                                <a class="dropdown-item text-danger" href="#" onclick="deleteYear({{ $anneeScolaire->id ?? 1 }})">
                                                    <i class="feather icon-trash-2 mr-2"></i>Supprimer
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistiques -->
        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="card bg-c-blue order-card">
                    <div class="card-body">
                        <h6 class="text-white">Manuels Distribués</h6>
                        <h2 class="text-white"><i class="feather icon-book mr-2"></i><span>1,248</span></h2>
                        <p class="text-white m-b-0">Total des distributions</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6">
                <div class="card bg-c-green order-card">
                    <div class="card-body">
                        <h6 class="text-white">Classes Ouvertes</h6>
                        <h2 class="text-white"><i class="feather icon-home mr-2"></i><span>42</span></h2>
                        <p class="text-white m-b-0">Classes actives</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Informations générales -->
            <div class="col-md-6">
                <div class="card custom-card-accent">
                    <div class="card-header">
                        <h5><i class="feather icon-info mr-2"></i>Informations Générales</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td><strong>Libellé:</strong></td>
                                        <td>{{ $anneeScolaire->libelle ?? '2024-2025' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Date de début:</strong></td>
                                        <td>
                                            <span class="badge badge-light-primary">
                                                {{ isset($anneeScolaire->date_debut) ? $anneeScolaire->date_debut->format('d/m/Y') : '01/09/2024' }}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Date de fin:</strong></td>
                                        <td>
                                            <span class="badge badge-light-primary">
                                                {{ isset($anneeScolaire->date_fin) ? $anneeScolaire->date_fin->format('d/m/Y') : '31/08/2025' }}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Durée:</strong></td>
                                        <td>
                                            @php
                                                $debut = isset($anneeScolaire->date_debut) ? $anneeScolaire->date_debut : \Carbon\Carbon::parse('2024-09-01');
                                                $fin = isset($anneeScolaire->date_fin) ? $anneeScolaire->date_fin : \Carbon\Carbon::parse('2025-08-31');
                                                $duree = $debut->diffInDays($fin);
                                            @endphp
                                            {{ $duree }} jours ({{ round($duree/30, 1) }} mois)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Statut:</strong></td>
                                        <td>
                                            @switch($anneeScolaire->statut ?? 'active')
                                                @case('active')
                                                    <span class="badge badge-success">
                                                        <i class="feather icon-check-circle mr-1"></i>Active
                                                    </span>
                                                    @break
                                                @case('planifiee')
                                                    <span class="badge badge-warning">
                                                        <i class="feather icon-clock mr-1"></i>Planifiée
                                                    </span>
                                                    @break
                                                @case('archivee')
                                                    <span class="badge badge-secondary">
                                                        <i class="feather icon-archive mr-1"></i>Archivée
                                                    </span>
                                                    @break
                                                @default
                                                    <span class="badge badge-light">
                                                        <i class="feather icon-help-circle mr-1"></i>Indéfini
                                                    </span>
                                            @endswitch
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Description:</strong></td>
                                        <td>{{ $anneeScolaire->description ?? 'Aucune description disponible' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Informations de base -->
            <div class="col-md-6">
                <div class="card custom-card-accent">
                    <div class="card-header">
                        <h5><i class="feather icon-info mr-2"></i>Informations de Base</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td><strong>Total des élèves:</strong></td>
                                        <td>
                                            <span class="badge badge-light-info">
                                                1,248 élèves
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Détails système -->
        <div class="row">
            <div class="col-md-12">
                <div class="card custom-card-accent">
                    <div class="card-header">
                        <h5><i class="feather icon-settings mr-2"></i>Informations Système</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td><strong>ID:</strong></td>
                                        <td><code>{{ $anneeScolaire->id ?? 1 }}</code></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Créée le:</strong></td>
                                        <td>{{ isset($anneeScolaire->created_at) ? $anneeScolaire->created_at->format('d/m/Y H:i:s') : '15/08/2024 10:30:00' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Dernière modification:</strong></td>
                                        <td>{{ isset($anneeScolaire->updated_at) ? $anneeScolaire->updated_at->format('d/m/Y H:i:s') : '20/10/2024 16:45:12' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Créée par:</strong></td>
                                        <td>{{ $anneeScolaire->createur->name ?? 'Administrateur' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Dernière modif. par:</strong></td>
                                        <td>{{ $anneeScolaire->modificateur->name ?? 'Administrateur' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



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

.badge-light-primary {
    color: #4680ff;
    background-color: rgba(70, 128, 255, 0.1);
}

.timeline-wrapper {
    position: relative;
}

.timeline-item {
    display: flex;
    margin-bottom: 20px;
    position: relative;
}

.timeline-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    margin-right: 15px;
    flex-shrink: 0;
}

.timeline-content h6 {
    margin-bottom: 5px;
    font-weight: 600;
}

.timeline-content p {
    margin-bottom: 5px;
    font-size: 14px;
}

.custom-card-accent {
    border-top: 4px solid #4680ff !important; /* Trait bleu en haut */
}

.custom-card-accent .card-header {
    background-color: rgba(70, 128, 255, 0.05);
    border-bottom: 1px solid rgba(70, 128, 255, 0.1);
}

.card {
    box-shadow: 0 1px 20px 0 rgba(69,90,100,.08);
    border: none;
    margin-bottom: 30px;
}

.table-borderless td {
    border: none;
    padding: 8px 15px;
}

.table-borderless td:first-child {
    width: 40%;
    color: #6c757d;
}

.progress {
    background-color: rgba(0,0,0,.1);
}
</style>

@endsection
