@extends('layouts.layouts_super.master')
@section('title', 'Modifier Distribution IEPP')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Modifier Distribution IEPP</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('distribution_iepp.index') }}">Distribution IEPP</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('distribution_iepp.show', 1) }}">Distribution #1</a></li>
                            <li class="breadcrumb-item"><a href="#!">Modifier</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Main content -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Formulaire de Modification de Distribution IEPP</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> Plein écran</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> Réduire</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="#" method="POST" id="distributionForm" onsubmit="return handleStaticSubmit(event)">
                            @csrf
                            @method('PUT')

                            <div class="row">
                            <!-- Informations générales -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="mb-0"><i class="feather icon-info mr-2"></i>Informations Générales</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="numero_distribution" class="form-label">Numéro de distribution <span class="text-danger">*</span></label>
                                            <input type="text"
                                                   class="form-control @error('numero_distribution') is-invalid @enderror"
                                                   id="numero_distribution"
                                                   name="numero_distribution"
                                                   value="DIST-IEPP-2024-001"
                                                   readonly>
                                            <small class="form-text text-muted">Numéro généré automatiquement</small>
                                            @error('numero_distribution')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="date_distribution" class="form-label">Date de distribution <span class="text-danger">*</span></label>
                                            <input type="date"
                                                   class="form-control @error('date_distribution') is-invalid @enderror"
                                                   id="date_distribution"
                                                   name="date_distribution"
                                                   value="{{ date('Y-m-d') }}"
                                                   required>
                                            @error('date_distribution')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="iepp_destinataire" class="form-label">IEPP destinataire <span class="text-danger">*</span></label>
                                            <select class="form-control @error('iepp_destinataire') is-invalid @enderror"
                                                    id="iepp_destinataire"
                                                    name="iepp_destinataire"
                                                    required>
                                                <option value="">-- Sélectionner une IEPP --</option>
                                                <option value="iepp_abidjan_centre" selected>IEPP Abidjan Centre</option>
                                                <option value="iepp_cocody">IEPP Cocody</option>
                                                <option value="iepp_yopougon">IEPP Yopougon</option>
                                                <option value="iepp_bouake">IEPP Bouaké</option>
                                                <option value="iepp_yamoussoukro">IEPP Yamoussoukro</option>
                                                <option value="iepp_korhogo">IEPP Korhogo</option>
                                                <option value="iepp_man">IEPP Man</option>
                                                <option value="iepp_san_pedro">IEPP San-Pédro</option>
                                            </select>
                                            @error('iepp_destinataire')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="region" class="form-label">Région <span class="text-danger">*</span></label>
                                            <select class="form-control @error('region') is-invalid @enderror"
                                                    id="region"
                                                    name="region"
                                                    required>
                                                <option value="">-- Sélectionner une région --</option>
                                                <option value="lagunes" selected>Lagunes - Abidjan</option>
                                                <option value="gbeke">Gbêkê - Bouaké</option>
                                                <option value="lacs">Lacs - Yamoussoukro</option>
                                                <option value="poro">Poro - Korhogo</option>
                                                <option value="tonkpi">Tonkpi - Man</option>
                                                <option value="san_pedro">San-Pédro</option>
                                            </select>
                                            @error('region')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Statut et responsable -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="mb-0"><i class="feather icon-user mr-2"></i>Statut et Responsable</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="statut" class="form-label">Statut <span class="text-danger">*</span></label>
                                            <select class="form-control @error('statut') is-invalid @enderror"
                                                    id="statut"
                                                    name="statut"
                                                    required>
                                                <option value="">-- Sélectionner un statut --</option>
                                                <option value="planifiee">Planifiée</option>
                                                <option value="en_preparation">En préparation</option>
                                                <option value="en_transit">En transit</option>
                                                <option value="livree" selected>Livrée</option>
                                                <option value="retardee">Retardée</option>
                                                <option value="annulee">Annulée</option>
                                            </select>
                                            @error('statut')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="priorite" class="form-label">Priorité</label>
                                            <select class="form-control @error('priorite') is-invalid @enderror"
                                                    id="priorite"
                                                    name="priorite">
                                                <option value="normale">Normale</option>
                                                <option value="urgente" selected>Urgente</option>
                                                <option value="tres_urgente">Très Urgente</option>
                                                <option value="critique">Critique</option>
                                            </select>
                                            @error('priorite')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="responsable_distribution" class="form-label">Responsable distribution <span class="text-danger">*</span></label>
                                            <input type="text"
                                                   class="form-control @error('responsable_distribution') is-invalid @enderror"
                                                   id="responsable_distribution"
                                                   name="responsable_distribution"
                                                   value="Jean KOUAME"
                                                   required>
                                            @error('responsable_distribution')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="contact_responsable" class="form-label">Contact responsable</label>
                                            <input type="tel"
                                                   class="form-control @error('contact_responsable') is-invalid @enderror"
                                                   id="contact_responsable"
                                                   name="contact_responsable"
                                                   value="+225 07 12 34 56 78">
                                            @error('contact_responsable')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="observation" class="form-label">Observation</label>
                                            <textarea class="form-control @error('observation') is-invalid @enderror"
                                                      id="observation"
                                                      name="observation"
                                                      rows="3">Distribution effectuée conformément au planning. Tous les manuels ont été livrés en bon état.</textarea>
                                            @error('observation')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Détails des manuels -->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="mb-0"><i class="feather icon-book mr-2"></i>Détails des Manuels</h6>
                                    <div class="card-header-right">
                                        <button type="button" class="btn btn-sm btn-success waves-effect waves-light" onclick="addManuel()">
                                            <i class="feather icon-plus"></i> Ajouter Manuel
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="manuels-container">
                                        <!-- Manuel 1 -->
                                        <div class="manuel-item card mb-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-label">Type de Manuel</label>
                                                            <select class="form-control" name="manuels[0][type]" required>
                                                                <option value="">Sélectionner...</option>
                                                                <option value="mathematiques" selected>Mathématiques</option>
                                                                <option value="francais">Français</option>
                                                                <option value="sciences">Sciences</option>
                                                                <option value="histoire_geo">Histoire-Géographie</option>
                                                                <option value="anglais">Anglais</option>
                                                                <option value="edhc">EDHC</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label">Niveau</label>
                                                            <select class="form-control" name="manuels[0][niveau]" required>
                                                                <option value="">Niveau...</option>
                                                                <option value="cp1" selected>CP1</option>
                                                                <option value="cp2">CP2</option>
                                                                <option value="ce1">CE1</option>
                                                                <option value="ce2">CE2</option>
                                                                <option value="cm1">CM1</option>
                                                                <option value="cm2">CM2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label">Qty Demandée</label>
                                                            <input type="number"
                                                                   class="form-control"
                                                                   name="manuels[0][quantite_demandee]"
                                                                   value="150"
                                                                   min="1"
                                                                   readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label">Qty Livrée</label>
                                                            <input type="number"
                                                                   class="form-control"
                                                                   name="manuels[0][quantite_livree]"
                                                                   value="150"
                                                                   min="0"
                                                                   required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label">Statut</label>
                                                            <select class="form-control" name="manuels[0][statut_livraison]">
                                                                <option value="livree" selected>Livrée</option>
                                                                <option value="partielle">Partielle</option>
                                                                <option value="en_attente">En attente</option>
                                                                <option value="annulee">Annulée</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <label class="form-label">&nbsp;</label>
                                                            <button type="button"
                                                                    class="btn btn-danger btn-block waves-effect waves-light"
                                                                    onclick="supprimerManuel(this)">
                                                                <i class="feather icon-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Manuel 2 -->
                                        <div class="manuel-item card mb-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="form-label">Type de Manuel</label>
                                                            <select class="form-control" name="manuels[1][type]" required>
                                                                <option value="">Sélectionner...</option>
                                                                <option value="mathematiques">Mathématiques</option>
                                                                <option value="francais" selected>Français</option>
                                                                <option value="sciences">Sciences</option>
                                                                <option value="histoire_geo">Histoire-Géographie</option>
                                                                <option value="anglais">Anglais</option>
                                                                <option value="edhc">EDHC</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label">Niveau</label>
                                                            <select class="form-control" name="manuels[1][niveau]" required>
                                                                <option value="">Niveau...</option>
                                                                <option value="cp1">CP1</option>
                                                                <option value="cp2" selected>CP2</option>
                                                                <option value="ce1">CE1</option>
                                                                <option value="ce2">CE2</option>
                                                                <option value="cm1">CM1</option>
                                                                <option value="cm2">CM2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label">Qty Demandée</label>
                                                            <input type="number"
                                                                   class="form-control"
                                                                   name="manuels[1][quantite_demandee]"
                                                                   value="120"
                                                                   min="1"
                                                                   readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label">Qty Livrée</label>
                                                            <input type="number"
                                                                   class="form-control"
                                                                   name="manuels[1][quantite_livree]"
                                                                   value="120"
                                                                   min="0"
                                                                   required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label">Statut</label>
                                                            <select class="form-control" name="manuels[1][statut_livraison]">
                                                                <option value="livree" selected>Livrée</option>
                                                                <option value="partielle">Partielle</option>
                                                                <option value="en_attente">En attente</option>
                                                                <option value="annulee">Annulée</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <label class="form-label">&nbsp;</label>
                                                            <button type="button"
                                                                    class="btn btn-danger btn-block waves-effect waves-light"
                                                                    onclick="supprimerManuel(this)">
                                                                <i class="feather icon-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="alert alert-info">
                                        <i class="feather icon-info mr-2"></i>
                                        <strong>Total :</strong> <span id="total-demandee">270</span> demandés, <span id="total-livree">270</span> livrés
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="{{ route('distribution_iepp.show', 1) }}"
                                       class="btn btn-inverse waves-effect">
                                        <i class="feather icon-arrow-left mr-2"></i>Retour aux Détails
                                    </a>
                                    <a href="{{ route('distribution_iepp.index') }}"
                                       class="btn btn-outline-secondary waves-effect">
                                        <i class="feather icon-list mr-2"></i>Retour à la Liste
                                    </a>
                                    <button type="button"
                                            class="btn btn-outline-warning waves-effect"
                                            onclick="resetForm()">
                                        <i class="feather icon-refresh-cw mr-2"></i>Réinitialiser
                                    </button>
                                    <button type="submit"
                                            class="btn btn-primary waves-effect waves-light">
                                        <i class="feather icon-save mr-2"></i>Enregistrer les Modifications
                                    </button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
let manuelIndex = 2;

document.addEventListener('DOMContentLoaded', function() {
    // Calculer le total initial
    calculateTotals();

    // Mise à jour automatique de la région selon l'IEPP
    document.getElementById('iepp_destinataire').addEventListener('change', updateRegion);

    // Écouter les changements dans les quantités
    document.addEventListener('input', function(e) {
        if (e.target.name && (e.target.name.includes('[quantite_demandee]') || e.target.name.includes('[quantite_livree]'))) {
            calculateTotals();
        }
    });
});

function updateRegion() {
    const iepp = document.getElementById('iepp_destinataire').value;
    const regionSelect = document.getElementById('region');

    const ieppRegions = {
        'iepp_abidjan_centre': 'lagunes',
        'iepp_cocody': 'lagunes',
        'iepp_yopougon': 'lagunes',
        'iepp_bouake': 'gbeke',
        'iepp_yamoussoukro': 'lacs',
        'iepp_korhogo': 'poro',
        'iepp_man': 'tonkpi',
        'iepp_san_pedro': 'san_pedro'
    };

    if (ieppRegions[iepp]) {
        regionSelect.value = ieppRegions[iepp];
    }
}

function addManuel() {
    const container = document.getElementById('manuels-container');
    const manuelItem = document.createElement('div');
    manuelItem.className = 'manuel-item card mb-3';
    manuelItem.innerHTML = `
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Type de Manuel</label>
                        <select class="form-control" name="manuels[${manuelIndex}][type]" required>
                            <option value="">Sélectionner...</option>
                            <option value="mathematiques">Mathématiques</option>
                            <option value="francais">Français</option>
                            <option value="sciences">Sciences</option>
                            <option value="histoire_geo">Histoire-Géographie</option>
                            <option value="anglais">Anglais</option>
                            <option value="edhc">EDHC</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="form-label">Niveau</label>
                        <select class="form-control" name="manuels[${manuelIndex}][niveau]" required>
                            <option value="">Niveau...</option>
                            <option value="cp1">CP1</option>
                            <option value="cp2">CP2</option>
                            <option value="ce1">CE1</option>
                            <option value="ce2">CE2</option>
                            <option value="cm1">CM1</option>
                            <option value="cm2">CM2</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="form-label">Qty Demandée</label>
                        <input type="number" class="form-control" name="manuels[${manuelIndex}][quantite_demandee]"
                               min="1" placeholder="0" readonly>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="form-label">Qty Livrée</label>
                        <input type="number" class="form-control" name="manuels[${manuelIndex}][quantite_livree]"
                               min="0" placeholder="0" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="form-label">Statut</label>
                        <select class="form-control" name="manuels[${manuelIndex}][statut_livraison]">
                            <option value="en_attente" selected>En attente</option>
                            <option value="livree">Livrée</option>
                            <option value="partielle">Partielle</option>
                            <option value="annulee">Annulée</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label class="form-label">&nbsp;</label>
                        <button type="button" class="btn btn-danger btn-block waves-effect waves-light" onclick="supprimerManuel(this)">
                            <i class="feather icon-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `;

    container.appendChild(manuelItem);
    manuelIndex++;
    calculateTotals();
}

function supprimerManuel(btn) {
    if (document.querySelectorAll('.manuel-item').length <= 1) {
        new PNotify({
            title: 'Attention',
            text: 'Vous devez conserver au moins un manuel dans la distribution.',
            type: 'warning'
        });
        return;
    }

    new PNotify({
        title: 'Confirmation',
        text: 'Êtes-vous sûr de vouloir supprimer ce manuel ?',
        type: 'warning',
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
        btn.closest('.manuel-item').remove();
        calculateTotals();

        new PNotify({
            title: 'Succès',
            text: 'Manuel supprimé avec succès',
            type: 'success'
        });
    });
}

function calculateTotals() {
    const quantitesDemandees = document.querySelectorAll('input[name*="[quantite_demandee]"]');
    const quantitesLivrees = document.querySelectorAll('input[name*="[quantite_livree]"]');

    let totalDemandee = 0;
    let totalLivree = 0;

    quantitesDemandees.forEach(input => {
        if (input.value && parseInt(input.value) > 0) {
            totalDemandee += parseInt(input.value);
        }
    });

    quantitesLivrees.forEach(input => {
        if (input.value && parseInt(input.value) >= 0) {
            totalLivree += parseInt(input.value);
        }
    });

    document.getElementById('total-demandee').textContent = totalDemandee;
    document.getElementById('total-livree').textContent = totalLivree;
}

function resetForm() {
    new PNotify({
        title: 'Confirmation',
        text: 'Êtes-vous sûr de vouloir réinitialiser toutes les modifications ?',
        type: 'warning',
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
        location.reload();
    });
}

function validateForm() {
    const form = document.querySelector('#distributionForm');
    const required = form.querySelectorAll('[required]');
    let valid = true;
    let errors = [];

    required.forEach(field => {
        if (!field.value.trim()) {
            field.classList.add('is-invalid');
            const label = field.closest('.form-group').querySelector('label');
            if (label) {
                errors.push(label.textContent.replace('*', '').trim());
            }
            valid = false;
        } else {
            field.classList.remove('is-invalid');
        }
    });

    if (valid) {
        new PNotify({
            title: 'Validation',
            text: 'Formulaire valide ! Vous pouvez enregistrer.',
            type: 'success'
        });
    } else {
        new PNotify({
            title: 'Erreur de validation',
            text: 'Veuillez remplir les champs obligatoires : ' + errors.join(', '),
            type: 'error'
        });
    }

    return valid;
}

function handleStaticSubmit(event) {
    event.preventDefault();

    if (!validateForm()) {
        return false;
    }

    // Simulation de sauvegarde avec notification pcoded
    const loadingNotification = new PNotify({
        title: 'Enregistrement',
        text: 'Enregistrement en cours...',
        type: 'info',
        hide: false
    });

    // Désactiver le bouton de soumission
    const submitBtn = event.target.querySelector('button[type="submit"]');
    if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="feather icon-loader mr-2"></i>Enregistrement...';
    }

    setTimeout(() => {
        loadingNotification.remove();

        new PNotify({
            title: 'Succès',
            text: 'Modifications enregistrées avec succès (simulation)',
            type: 'success'
        });

        // Redirection après succès
        setTimeout(() => {
            window.location.href = "{{ route('distribution_iepp.show', 1) }}";
        }, 1500);
    }, 2000);

    return false;
}
</script>

@endsection
