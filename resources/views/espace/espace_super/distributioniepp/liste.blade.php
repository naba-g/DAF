@extends('layouts.layouts_super.master')
@section('title', 'Distribution IEPP')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- En-tête simplifié -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">
                                <i class="feather icon-truck text-primary"></i>
                                Distribution IEPP
                            </h5>
                            <p class="text-muted mb-0">
                                <i class="feather icon-database"></i> Gestion des distributions vers les 295 IEPP (SIDMAS)
                            </p>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">
                                    <i class="feather icon-home"></i> Accueil
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Distribution IEPP</li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{ route('distribution_iepp.create') }}" class="btn btn-primary">
                            <i class="feather icon-plus"></i> Nouvelle Distribution
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filtres essentiels -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <input type="text" id="searchInput" class="form-control"
                                       placeholder="🔍 Rechercher une distribution...">
                            </div>
                            <div class="col-md-2">
                                <select id="typeOuvrageFilter" class="form-control">
                                    <option value="">Tous types</option>
                                    <option value="manuel_scolaire">Manuel Scolaire</option>
                                    <option value="guide_pedagogique">Guide Pédagogique</option>
                                    <option value="livre_lecture">Livre de Lecture</option>
                                    <option value="cahier_activites">Cahier d'Activités</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="niveauFilter" class="form-control">
                                    <option value="">Tous niveaux</option>
                                    <option value="cp1">CP1</option>
                                    <option value="cp2">CP2</option>
                                    <option value="ce1">CE1</option>
                                    <option value="ce2">CE2</option>
                                    <option value="cm1">CM1</option>
                                    <option value="cm2">CM2</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="statusFilter" class="form-control">
                                    <option value="">Tous statuts</option>
                                    <option value="planifiee">Planifiée</option>
                                    <option value="en_cours">En cours</option>
                                    <option value="livree">Livrée</option>
                                    <option value="retardee">Retardée</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select id="drenFilter" class="form-control">
                                    <option value="">Toutes DREN</option>
                                    <option value="DREN-ABJ1">DREN ABIDJAN 1</option>
                                    <option value="DREN-BOU1">DREN BOUAKÉ 1</option>
                                    <option value="DREN-YAM">DREN YAMOUSSOUKRO</option>
                                    <option value="DREN-SAN">DREN SAN-PÉDRO</option>
                                    <option value="DREN-KOR">DREN KORHOGO</option>
                                    <option value="DREN-BOU">DREN BOUNDIALI</option>
                                    <option value="DREN-DAL">DREN DALOA</option>
                                    <option value="DREN-GAG">DREN GAGNOA</option>
                                    <option value="DREN-ABE">DREN ABENGOUROU</option>
                                    <option value="DREN-AGN">DREN AGNIBILÉKROU</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-outline-secondary" onclick="resetFilters()" title="Réinitialiser">
                                    <i class="feather icon-refresh-cw"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau principal -->
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">
                    <i class="feather icon-list text-primary"></i>
                    Liste des Distributions IEPP - <span class="text-primary">127 distributions</span>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="distributionsTable">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th width="12%">N° Distribution</th>
                                <th width="15%">DREN/IEPP</th>
                                <th width="10%">Zone</th>
                                <th width="12%">Ouvrage</th>
                                <th width="8%">Niveau</th>
                                <th width="10%">Quantité</th>
                                <th width="10%">Date Prévue</th>
                                <th width="8%">Statut</th>
                                <th width="10%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                // Données réalistes basées sur la structure SIDMAS
                                // 56 DREN - 295 IEPP - Distribution d'ouvrages scolaires
                                $distributions = [
                                    [
                                        'id'=>1,
                                        'num'=>'DIST-IEPP-2024-001',
                                        'dren'=>'DREN ABIDJAN 1',
                                        'iepp'=>'IEPP Cocody-Bingerville',
                                        'zone'=>'ZONE ABIDJAN',
                                        'type_ouvrage'=>'Manuel Scolaire',
                                        'niveau'=>'CP1',
                                        'titre'=>'Mon premier livre de lecture CP1',
                                        'quantite'=>2400,
                                        'date'=>'15/01/2024',
                                        'statut'=>'livree',
                                        'annee_scolaire'=>'2024-2025'
                                    ],
                                    [
                                        'id'=>2,
                                        'num'=>'DIST-IEPP-2024-002',
                                        'dren'=>'DREN BOUAKÉ 1',
                                        'iepp'=>'IEPP Bouaké-Centre',
                                        'zone'=>'ZONE CENTRE',
                                        'type_ouvrage'=>'Guide Pédagogique',
                                        'niveau'=>'CE1',
                                        'titre'=>'Guide du maître Mathématiques CE1',
                                        'quantite'=>85,
                                        'date'=>'18/01/2024',
                                        'statut'=>'livree',
                                        'annee_scolaire'=>'2024-2025'
                                    ],
                                    [
                                        'id'=>3,
                                        'num'=>'DIST-IEPP-2024-003',
                                        'dren'=>'DREN YAMOUSSOUKRO',
                                        'iepp'=>'IEPP Yamoussoukro',
                                        'zone'=>'ZONE CENTRE',
                                        'type_ouvrage'=>'Cahier d\'Activités',
                                        'niveau'=>'CM2',
                                        'titre'=>'Cahier d\'exercices Français CM2',
                                        'quantite'=>1650,
                                        'date'=>'22/01/2024',
                                        'statut'=>'livree',
                                        'annee_scolaire'=>'2024-2025'
                                    ],
                                    [
                                        'id'=>4,
                                        'num'=>'DIST-IEPP-2024-004',
                                        'dren'=>'DREN SAN-PÉDRO',
                                        'iepp'=>'IEPP San-Pédro',
                                        'zone'=>'ZONE SUD-OUEST',
                                        'type_ouvrage'=>'Atlas et Cartes',
                                        'niveau'=>'CM1',
                                        'titre'=>'Atlas géographique de la Côte d\'Ivoire',
                                        'quantite'=>320,
                                        'date'=>'25/01/2024',
                                        'statut'=>'en_cours',
                                        'annee_scolaire'=>'2024-2025'
                                    ],
                                    [
                                        'id'=>5,
                                        'num'=>'DIST-IEPP-2024-005',
                                        'dren'=>'DREN KORHOGO',
                                        'iepp'=>'IEPP Korhogo-Nord',
                                        'zone'=>'ZONE NORD',
                                        'type_ouvrage'=>'Manuel Scolaire',
                                        'niveau'=>'CE2',
                                        'titre'=>'Sciences d\'Observation CE2',
                                        'quantite'=>1890,
                                        'date'=>'28/01/2024',
                                        'statut'=>'en_cours',
                                        'annee_scolaire'=>'2024-2025'
                                    ],
                                    [
                                        'id'=>6,
                                        'num'=>'DIST-IEPP-2024-006',
                                        'dren'=>'DREN BOUNDIALI',
                                        'iepp'=>'IEPP Boundiali',
                                        'zone'=>'ZONE NORD',
                                        'type_ouvrage'=>'Cahier d\'Activités',
                                        'niveau'=>'CP2',
                                        'titre'=>'Cahier d\'écriture CP2',
                                        'quantite'=>1245,
                                        'date'=>'02/02/2024',
                                        'statut'=>'en_preparation',
                                        'annee_scolaire'=>'2024-2025'
                                    ],
                                    [
                                        'id'=>7,
                                        'num'=>'DIST-IEPP-2024-007',
                                        'dren'=>'DREN DALOA',
                                        'iepp'=>'IEPP Daloa-Centre',
                                        'zone'=>'ZONE CENTRE-OUEST',
                                        'type_ouvrage'=>'Guide Pédagogique',
                                        'niveau'=>'CM1',
                                        'titre'=>'Guide Histoire-Géographie CM1',
                                        'quantite'=>67,
                                        'date'=>'05/02/2024',
                                        'statut'=>'planifiee',
                                        'annee_scolaire'=>'2024-2025'
                                    ],
                                    [
                                        'id'=>8,
                                        'num'=>'DIST-IEPP-2024-008',
                                        'dren'=>'DREN GAGNOA',
                                        'iepp'=>'IEPP Gagnoa',
                                        'zone'=>'ZONE CENTRE-OUEST',
                                        'type_ouvrage'=>'Manuel Scolaire',
                                        'niveau'=>'CE1',
                                        'titre'=>'Mathématiques CE1',
                                        'quantite'=>2150,
                                        'date'=>'08/02/2024',
                                        'statut'=>'planifiee',
                                        'annee_scolaire'=>'2024-2025'
                                    ],
                                    [
                                        'id'=>9,
                                        'num'=>'DIST-IEPP-2024-009',
                                        'dren'=>'DREN ABENGOUROU',
                                        'iepp'=>'IEPP Abengourou',
                                        'zone'=>'ZONE EST',
                                        'type_ouvrage'=>'Cahier d\'Activités',
                                        'niveau'=>'CM2',
                                        'titre'=>'Cahier Sciences et Technologie CM2',
                                        'quantite'=>985,
                                        'date'=>'12/02/2024',
                                        'statut'=>'retardee',
                                        'annee_scolaire'=>'2024-2025'
                                    ],
                                    [
                                        'id'=>10,
                                        'num'=>'DIST-IEPP-2024-010',
                                        'dren'=>'DREN AGNIBILÉKROU',
                                        'iepp'=>'IEPP Agnibilékrou',
                                        'zone'=>'ZONE EST',
                                        'type_ouvrage'=>'Atlas et Cartes',
                                        'niveau'=>'CE2',
                                        'titre'=>'Cartes murales Côte d\'Ivoire',
                                        'quantite'=>45,
                                        'date'=>'15/02/2024',
                                        'statut'=>'retardee',
                                        'annee_scolaire'=>'2024-2025'
                                    ]
                                ];
                            @endphp

                            @foreach($distributions as $d)
                            <tr>
                                <td>{{ $d['id'] }}</td>
                                <td>
                                    <div class="font-weight-bold">{{ $d['num'] }}</div>
                                    <small class="text-muted">{{ $d['annee_scolaire'] }}</small>
                                </td>
                                <td>
                                    <div class="text-primary font-weight-bold">{{ $d['dren'] }}</div>
                                    <small class="text-muted">{{ $d['iepp'] }}</small>
                                </td>
                                <td>
                                    <span class="badge badge-outline-secondary">{{ $d['zone'] }}</span>
                                </td>
                                <td>
                                    <div class="font-weight-bold">{{ $d['titre'] }}</div>
                                    <small class="text-muted">{{ $d['type_ouvrage'] }}</small>
                                </td>
                                <td>
                                    <span class="badge badge-outline-primary">{{ $d['niveau'] }}</span>
                                </td>
                                <td>
                                    <span class="font-weight-bold text-info">{{ number_format($d['quantite'], 0, ',', ' ') }}</span>
                                    <small class="text-muted d-block">ex.</small>
                                </td>
                                <td>{{ $d['date'] }}</td>
                                <td>
                                    @php
                                        $statusColors = [
                                            'livree'=>'success',
                                            'en_cours'=>'warning',
                                            'en_preparation'=>'info',
                                            'planifiee'=>'primary',
                                            'retardee'=>'danger',
                                            'annulee'=>'secondary'
                                        ];
                                        $statusLabels = [
                                            'livree'=>'Livrée',
                                            'en_cours'=>'En cours',
                                            'en_preparation'=>'En préparation',
                                            'planifiee'=>'Planifiée',
                                            'retardee'=>'Retardée',
                                            'annulee'=>'Annulée'
                                        ];
                                    @endphp
                                    <span class="badge badge-{{ $statusColors[$d['statut']] ?? 'secondary' }}">
                                        {{ $statusLabels[$d['statut']] ?? ucfirst($d['statut']) }}
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('distribution_iepp.show', $d['id']) }}" class="btn btn-sm btn-outline-primary" title="Voir">
                                            <i class="feather icon-eye"></i>
                                        </a>
                                        <a href="{{ route('distribution_iepp.edit', $d['id']) }}" class="btn btn-sm btn-outline-warning" title="Modifier">
                                            <i class="feather icon-edit"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-outline-danger" title="Supprimer" onclick="confirmDelete({{ $d['id'] }})">
                                            <i class="feather icon-trash-2"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination simple -->
                <div class="row mt-3">
                    <div class="col-md-6">
                        <p class="text-muted mb-0">Affichage de 1 à 10 sur 127 distributions - Couvrant 6 zones géographiques</p>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="Pagination">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <span class="page-link">Précédent</span>
                                </li>
                                <li class="page-item active">
                                    <span class="page-link">1</span>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Suivant</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistiques représentatives -->
        <div class="row mt-4">
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-primary text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">127</h4>
                        <p class="mb-0">Total Distributions</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-success text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">89</h4>
                        <p class="mb-0">Distributions Livrées</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-warning text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">295</h4>
                        <p class="mb-0">IEPP Ciblés (SIDMAS)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card bg-info text-white">
                    <div class="card-body text-center">
                        <h4 class="mb-1">1,246,789</h4>
                        <p class="mb-0">Ouvrages Distribués</p>
                    </div>
                </div>
            </div>
        </div>
                        <p class="mb-0">Ouvrages Distribués</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
function resetFilters() {
    document.getElementById('searchInput').value = '';
    document.getElementById('typeOuvrageFilter').value = '';
    document.getElementById('niveauFilter').value = '';
    document.getElementById('statusFilter').value = '';
    document.getElementById('drenFilter').value = '';
    filterTable();

    new PNotify({
        title: 'Filtres réinitialisés',
        text: 'Tous les filtres ont été réinitialisés.',
        type: 'info',
        delay: 2000
    });
}

function filterTable() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    const typeValue = document.getElementById('typeOuvrageFilter').value.toLowerCase();
    const niveauValue = document.getElementById('niveauFilter').value.toLowerCase();
    const statusValue = document.getElementById('statusFilter').value.toLowerCase();
    const drenValue = document.getElementById('drenFilter').value.toLowerCase();

    const table = document.getElementById('distributionsTable');
    const tbody = table.getElementsByTagName('tbody')[0];
    const rows = tbody.getElementsByTagName('tr');

    for (let i = 0; i < rows.length; i++) {
        const row = rows[i];
        const cells = row.getElementsByTagName('td');
        let showRow = true;

        // Recherche globale
        if (searchTerm) {
            const textContent = row.textContent.toLowerCase();
            if (!textContent.includes(searchTerm)) {
                showRow = false;
            }
        }

        // Filtre Type
        if (typeValue && showRow) {
            const typeCell = cells[3];
            const typeText = typeCell.textContent.toLowerCase();
            if (!typeText.includes(typeValue.replace('_', ' '))) {
                showRow = false;
            }
        }

        // Filtre Niveau
        if (niveauValue && showRow) {
            const niveauCell = cells[4];
            const niveauText = niveauCell.textContent.toLowerCase();
            if (!niveauText.includes(niveauValue)) {
                showRow = false;
            }
        }

        // Filtre Statut
        if (statusValue && showRow) {
            const statusCell = cells[7];
            const statusText = statusCell.textContent.toLowerCase();
            if (!statusText.includes(statusValue.replace('_', ' '))) {
                showRow = false;
            }
        }

        // Filtre DREN
        if (drenValue && showRow) {
            const drenCell = cells[2];
            const drenText = drenCell.textContent.toLowerCase();
            if (!drenText.includes(drenValue)) {
                showRow = false;
            }
        }

        row.style.display = showRow ? '' : 'none';
    }
}

function confirmDelete(id) {
    new PNotify({
        title: 'Confirmation',
        text: 'Êtes-vous sûr de vouloir supprimer cette distribution ?',
        type: 'question',
        confirm: {
            confirm: true
        },
        buttons: {
            closer: false,
            sticker: false
        },
        history: {
            history: false
        }
    }).get().on('pnotify.confirm', function() {
        // Redirection vers la route de suppression
        window.location.href = '{{ route("distribution_iepp.destroy", ":id") }}'.replace(':id', id);
    });
}

// Initialisation des événements
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const typeFilter = document.getElementById('typeOuvrageFilter');
    const niveauFilter = document.getElementById('niveauFilter');
    const statusFilter = document.getElementById('statusFilter');
    const drenFilter = document.getElementById('drenFilter');

    searchInput.addEventListener('keyup', filterTable);
    typeFilter.addEventListener('change', filterTable);
    niveauFilter.addEventListener('change', filterTable);
    statusFilter.addEventListener('change', filterTable);
    drenFilter.addEventListener('change', filterTable);

    // Initialisation des tooltips
    $('[title]').tooltip();
});
</script>
@endsection
