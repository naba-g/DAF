@extends('layouts.layouts_super.master')
@section('title', 'Modifier Distribution EPP')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Header -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Modifier Distribution EPP</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('distribution_epp.index') }}">Distribution EPP</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('distribution_epp.show', $id ?? 1) }}">Distribution #{{ $id ?? 1 }}</a></li>
                            <li class="breadcrumb-item"><a href="#!">Modifier</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Formulaire de Modification de Distribution EPP</h5>
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
                                <!-- Informations de base -->
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h6 class="mb-0"><i class="feather icon-info mr-2"></i>Informations de Base</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="numero_distribution" class="form-label">N° Distribution <span class="text-danger">*</span></label>
                                                <input type="text"
                                                       class="form-control"
                                                       id="numero_distribution"
                                                       name="numero_distribution"
                                                       value="DIST-EPP-2024-{{ str_pad($id ?? 1, 3, '0', STR_PAD_LEFT) }}"
                                                       readonly>
                                                <small class="form-text text-muted">Numéro généré automatiquement</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="date_prevue" class="form-label">Date Prévue <span class="text-danger">*</span></label>
                                                <input type="date"
                                                       class="form-control @error('date_prevue') is-invalid @enderror"
                                                       id="date_prevue"
                                                       name="date_prevue"
                                                       value="{{ date('Y-m-d') }}"
                                                       required>
                                                @error('date_prevue')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="ecole_epp" class="form-label">École/EPP <span class="text-danger">*</span></label>
                                                <select class="form-control @error('ecole_epp') is-invalid @enderror"
                                                        id="ecole_epp"
                                                        name="ecole_epp"
                                                        required>
                                                    <option value="">Sélectionner une EPP</option>
                                                    <option value="epp_plateau_1" selected>EPP Plateau 1</option>
                                                    <option value="epp_marcory">EPP Marcory</option>
                                                    <option value="epp_koumassi">EPP Koumassi</option>
                                                    <option value="epp_treichville">EPP Treichville</option>
                                                    <option value="epp_bouake">EPP Bouaké Centre</option>
                                                    <option value="epp_yamoussoukro">EPP Yamoussoukro</option>
                                                    <option value="epp_korhogo">EPP Korhogo</option>
                                                    <option value="epp_man">EPP Man</option>
                                                </select>
                                                @error('ecole_epp')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="region" class="form-label">Région <span class="text-danger">*</span></label>
                                                <select class="form-control @error('region') is-invalid @enderror"
                                                        id="region"
                                                        name="region"
                                                        required>
                                                    <option value="">Sélectionner une région</option>
                                                    <option value="abidjan" selected>Lagunes - Abidjan</option>
                                                    <option value="bouake">Gbêkê - Bouaké</option>
                                                    <option value="yamoussoukro">Lacs - Yamoussoukro</option>
                                                    <option value="korhogo">Poro - Korhogo</option>
                                                    <option value="man">Tonkpi - Man</option>
                                                    <option value="san_pedro">San-Pédro</option>
                                                </select>
                                                @error('region')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="adresse_livraison" class="form-label">Adresse de Livraison <span class="text-danger">*</span></label>
                                                <textarea class="form-control @error('adresse_livraison') is-invalid @enderror"
                                                          id="adresse_livraison"
                                                          name="adresse_livraison"
                                                          rows="3"
                                                          required>EPP Plateau 1, Boulevard de la République, Plateau, Abidjan</textarea>
                                                @error('adresse_livraison')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- État et logistique -->
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h6 class="mb-0"><i class="feather icon-settings mr-2"></i>État et Logistique</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="statut" class="form-label">Statut <span class="text-danger">*</span></label>
                                                <select class="form-control @error('statut') is-invalid @enderror"
                                                        id="statut"
                                                        name="statut"
                                                        required>
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
                                                <label for="responsable_livraison" class="form-label">Responsable Livraison</label>
                                                <input type="text"
                                                       class="form-control @error('responsable_livraison') is-invalid @enderror"
                                                       id="responsable_livraison"
                                                       name="responsable_livraison"
                                                       value="M. KONE Seydou">
                                                @error('responsable_livraison')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="telephone_contact" class="form-label">Téléphone Contact</label>
                                                <input type="tel"
                                                       class="form-control @error('telephone_contact') is-invalid @enderror"
                                                       id="telephone_contact"
                                                       name="telephone_contact"
                                                       value="+225 07 08 09 10 11">
                                                @error('telephone_contact')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="vehicule" class="form-label">Véhicule de Transport</label>
                                                <select class="form-control @error('vehicule') is-invalid @enderror"
                                                        id="vehicule"
                                                        name="vehicule">
                                                    <option value="">Sélectionner un véhicule</option>
                                                    <option value="camion_1" selected>Camion CI-001-AB</option>
                                                    <option value="camion_2">Camion CI-002-AB</option>
                                                    <option value="camion_3">Camion CI-003-AB</option>
                                                    <option value="pick_up_1">Pick-up CI-101-AB</option>
                                                    <option value="pick_up_2">Pick-up CI-102-AB</option>
                                                </select>
                                                @error('vehicule')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="date_livraison" class="form-label">Date de Livraison Effective</label>
                                                <input type="datetime-local"
                                                       class="form-control @error('date_livraison') is-invalid @enderror"
                                                       id="date_livraison"
                                                       name="date_livraison"
                                                       value="{{ date('Y-m-d') }}T09:30">
                                                @error('date_livraison')
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
                                            <button type="button" class="btn btn-sm btn-success waves-effect waves-light" onclick="ajouterManuel()">
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
                                                        <div class="col-md-4">
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
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-label">Niveau</label>
                                                                <select class="form-control" name="manuels[0][niveau]" required>
                                                                    <option value="">Niveau...</option>
                                                                    <option value="cp1">CP1</option>
                                                                    <option value="cp2">CP2</option>
                                                                    <option value="ce1" selected>CE1</option>
                                                                    <option value="ce2">CE2</option>
                                                                    <option value="cm1">CM1</option>
                                                                    <option value="cm2">CM2</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-label">Quantité</label>
                                                                <input type="number"
                                                                       class="form-control"
                                                                       name="manuels[0][quantite]"
                                                                       value="500"
                                                                       min="1"
                                                                       required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
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
                                                        <div class="col-md-4">
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
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-label">Niveau</label>
                                                                <select class="form-control" name="manuels[1][niveau]" required>
                                                                    <option value="">Niveau...</option>
                                                                    <option value="cp1">CP1</option>
                                                                    <option value="cp2">CP2</option>
                                                                    <option value="ce1" selected>CE1</option>
                                                                    <option value="ce2">CE2</option>
                                                                    <option value="cm1">CM1</option>
                                                                    <option value="cm2">CM2</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-label">Quantité</label>
                                                                <input type="number"
                                                                       class="form-control"
                                                                       name="manuels[1][quantite]"
                                                                       value="300"
                                                                       min="1"
                                                                       required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
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
                                            <strong>Total :</strong> <span id="total-manuels">800</span> manuels
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Observations et paramètres -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="mb-0"><i class="feather icon-edit mr-2"></i>Observations et Paramètres</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="observations" class="form-label">Observations et Instructions</label>
                                            <textarea class="form-control @error('observations') is-invalid @enderror"
                                                      id="observations"
                                                      name="observations"
                                                      rows="4">Livraison à effectuer en matinée. Prévoir un accès pour le camion dans la cour de l'école. Contact avec le directeur obligatoire avant déchargement.</textarea>
                                            @error('observations')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="checkbox-fade fade-in-primary">
                                                    <label>
                                                        <input type="checkbox" id="livraison_confirmee" name="livraison_confirmee">
                                                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                        <span>Livraison confirmée par l'école</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkbox-fade fade-in-primary">
                                                    <label>
                                                        <input type="checkbox" id="signature_requise" name="signature_requise" checked>
                                                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                        <span>Signature du directeur requise</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mt-3">
                                            <label for="raison_modification" class="form-label">Raison de la Modification <span class="text-danger">*</span></label>
                                            <textarea class="form-control @error('raison_modification') is-invalid @enderror"
                                                      id="raison_modification"
                                                      name="raison_modification"
                                                      rows="3"
                                                      required
                                                      placeholder="Décrivez la raison de cette modification..."></textarea>
                                            @error('raison_modification')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="form-text text-muted">Cette information sera ajoutée à l'historique des modifications</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Boutons d'action -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <a href="{{ route('distribution_epp.show', $id ?? 1) }}"
                                           class="btn btn-inverse waves-effect waves-light">
                                            <i class="feather icon-arrow-left mr-2"></i>Retour aux Détails
                                        </a>
                                        <a href="{{ route('distribution_epp.index') }}"
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
    calculateTotal();

    // Mise à jour automatique de la région selon l'EPP
    document.getElementById('ecole_epp').addEventListener('change', updateRegion);

    // Écouter les changements dans les quantités
    document.addEventListener('input', function(e) {
        if (e.target.name && e.target.name.includes('[quantite]')) {
            calculateTotal();
        }
    });
});

function updateRegion() {
    const epp = document.getElementById('ecole_epp').value;
    const regionSelect = document.getElementById('region');

    const eppRegions = {
        'epp_plateau_1': 'abidjan',
        'epp_marcory': 'abidjan',
        'epp_koumassi': 'abidjan',
        'epp_treichville': 'abidjan',
        'epp_bouake': 'bouake',
        'epp_yamoussoukro': 'yamoussoukro',
        'epp_korhogo': 'korhogo',
        'epp_man': 'man'
    };

    if (eppRegions[epp]) {
        regionSelect.value = eppRegions[epp];
    }
}

function ajouterManuel() {
    const container = document.getElementById('manuels-container');
    const manuelItem = document.createElement('div');
    manuelItem.className = 'manuel-item card mb-3';
    manuelItem.innerHTML = `
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
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
                <div class="col-md-3">
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
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="form-label">Quantité</label>
                        <input type="number" class="form-control" name="manuels[${manuelIndex}][quantite]"
                               value="0" min="1" required>
                    </div>
                </div>
                <div class="col-md-2">
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
    calculateTotal();
}

function supprimerManuel(btn) {
    if (document.querySelectorAll('.manuel-item').length <= 1) {
        // Utilisation de notification pcoded
        new PNotify({
            title: 'Attention',
            text: 'Vous devez conserver au moins un manuel dans la distribution.',
            type: 'warning'
        });
        return;
    }

    if (confirm('Êtes-vous sûr de vouloir supprimer ce manuel ?')) {
        btn.closest('.manuel-item').remove();
        calculateTotal();

        new PNotify({
            title: 'Succès',
            text: 'Manuel supprimé avec succès',
            type: 'success'
        });
    }
}

function calculateTotal() {
    const quantites = document.querySelectorAll('input[name*="[quantite]"]');
    let total = 0;
    let types = 0;

    quantites.forEach(input => {
        if (input.value && parseInt(input.value) > 0) {
            total += parseInt(input.value);
            types++;
        }
    });

    document.getElementById('total-manuels').textContent = total;
}

function resetForm() {
    if (confirm('Êtes-vous sûr de vouloir réinitialiser toutes les modifications ?')) {
        location.reload();
    }
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
            window.location.href = "{{ route('distribution_epp.show', $id ?? 1) }}";
        }, 1500);
    }, 2000);

    return false;
}
</script>

@endsection
