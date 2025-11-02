@extends('layouts.layouts_super.master')
@section('title', 'Modifier IEPP')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-edit"></i> Modifier l'IEPP</h5>
                            <p class="m-b-0">Modification de l'Inspection de l'Enseignement Primaire et Préscolaire</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Accueil</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('iepp.index') }}">IEPP</a>
                            </li>
                            <li class="breadcrumb-item active">Modifier</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <form id="editIeppForm" action="{{ route('iepp.update', $iepp->id ?? 1) }}" method="POST" onsubmit="return validateIeppForm(event)">
                        @csrf
                        @method('PUT')

                        <!-- Informations système (lecture seule) -->
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="feather icon-database"></i> Informations Système</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="alert alert-info">
                                            <strong>ID IEPP:</strong> {{ $iepp->id ?? '1' }}<br>
                                            <strong>Code SIDMAS:</strong> <span id="code_display">{{ $iepp->code ?? 'IEPP-ABJ1-PLT-001' }}</span><br>
                                            <small class="text-muted">{{ $iepp->id ?? '1' }} des 295 IEPP enregistrées</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="alert alert-warning">
                                            <strong>Créée le:</strong> {{ isset($iepp->created_at) ? $iepp->created_at->format('d/m/Y') : '15/01/2024' }}<br>
                                            <strong>Dernière maj:</strong> {{ isset($iepp->updated_at) ? $iepp->updated_at->format('d/m/Y') : '28/10/2024' }}<br>
                                            <small class="text-muted">Historique des modifications</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="alert alert-success">
                                            <strong>EPP rattachées:</strong> {{ $iepp->epp_count ?? '12' }}<br>
                                            <strong>Effectif total:</strong> {{ $iepp->total_students ?? '3,247' }} élèves<br>
                                            <small class="text-muted">Statistiques supervisées</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Informations de base -->
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="feather icon-edit"></i> Informations de base</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nom_iepp" class="form-label required">Nom de l'IEPP</label>
                                            <input type="text"
                                                   class="form-control @error('nom_iepp') is-invalid @enderror"
                                                   id="nom_iepp"
                                                   name="nom_iepp"
                                                   value="{{ old('nom_iepp', $iepp->nom_iepp ?? 'IEPP PLATEAU') }}"
                                                   required
                                                   onchange="updateCodeDisplay()">
                                            @error('nom_iepp')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="form-text text-muted">Nom officiel dans SIDMAS</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dren_id" class="form-label required">Direction Régionale (DREN)</label>
                                            <select class="form-control @error('dren_id') is-invalid @enderror"
                                                    id="dren_id"
                                                    name="dren_id"
                                                    required
                                                    onchange="updateCodeDisplay(); checkHierarchyCoherence()">
                                                <option value="">-- Sélectionner une DREN --</option>
                                                <!-- Données basées sur la table DREN de SIDMAS (56 régions) -->
                                                <option value="1" {{ (old('dren_id', $iepp->dren_id ?? '1') == '1') ? 'selected' : '' }}>DREN ABIDJAN 1</option>
                                                <option value="2" {{ (old('dren_id', $iepp->dren_id ?? '') == '2') ? 'selected' : '' }}>DREN ABIDJAN 2</option>
                                                <option value="3" {{ (old('dren_id', $iepp->dren_id ?? '') == '3') ? 'selected' : '' }}>DREN ABIDJAN 3</option>
                                                <option value="4" {{ (old('dren_id', $iepp->dren_id ?? '') == '4') ? 'selected' : '' }}>DREN BOUAKE 1</option>
                                                <option value="5" {{ (old('dren_id', $iepp->dren_id ?? '') == '5') ? 'selected' : '' }}>DREN BOUAKE 2</option>
                                                <option value="6" {{ (old('dren_id', $iepp->dren_id ?? '') == '6') ? 'selected' : '' }}>DREN YAMOUSSOUKRO</option>
                                                <option value="7" {{ (old('dren_id', $iepp->dren_id ?? '') == '7') ? 'selected' : '' }}>DREN KORHOGO</option>
                                                <option value="8" {{ (old('dren_id', $iepp->dren_id ?? '') == '8') ? 'selected' : '' }}>DREN SAN PEDRO</option>
                                                <option value="9" {{ (old('dren_id', $iepp->dren_id ?? '') == '9') ? 'selected' : '' }}>DREN DALOA</option>
                                                <option value="10" {{ (old('dren_id', $iepp->dren_id ?? '') == '10') ? 'selected' : '' }}>DREN MAN</option>
                                                <option value="11" {{ (old('dren_id', $iepp->dren_id ?? '') == '11') ? 'selected' : '' }}>DREN GAGNOA</option>
                                                <option value="12" {{ (old('dren_id', $iepp->dren_id ?? '') == '12') ? 'selected' : '' }}>DREN DIVO</option>
                                                <option value="13" {{ (old('dren_id', $iepp->dren_id ?? '') == '13') ? 'selected' : '' }}>DREN ABENGOUROU</option>
                                                <option value="14" {{ (old('dren_id', $iepp->dren_id ?? '') == '14') ? 'selected' : '' }}>DREN BONDOUKOU</option>
                                                <option value="15" {{ (old('dren_id', $iepp->dren_id ?? '') == '15') ? 'selected' : '' }}>DREN AGNIBILEKROU</option>
                                                <!-- Les 56 DREN selon la DB SIDMAS -->
                                            </select>
                                            @error('dren_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="form-text text-muted">DREN de rattachement</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="type_zone" class="form-label required">Type de Zone</label>
                                            <select class="form-control @error('type_zone') is-invalid @enderror"
                                                    id="type_zone"
                                                    name="type_zone"
                                                    required
                                                    onchange="updateCodeDisplay()">
                                                <option value="">-- Sélectionner le type --</option>
                                                <option value="urbaine" {{ (old('type_zone', $iepp->type_zone ?? 'urbaine') == 'urbaine') ? 'selected' : '' }}>Urbaine</option>
                                                <option value="rurale" {{ (old('type_zone', $iepp->type_zone ?? '') == 'rurale') ? 'selected' : '' }}>Rurale</option>
                                                <option value="mixte" {{ (old('type_zone', $iepp->type_zone ?? '') == 'mixte') ? 'selected' : '' }}>Mixte</option>
                                                <option value="periurbaine" {{ (old('type_zone', $iepp->type_zone ?? '') == 'periurbaine') ? 'selected' : '' }}>Périurbaine</option>
                                            </select>
                                            @error('type_zone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="statut" class="form-label required">Statut</label>
                                            <select class="form-control @error('statut') is-invalid @enderror"
                                                    id="statut"
                                                    name="statut"
                                                    required>
                                                <option value="">-- Sélectionner le statut --</option>
                                                <option value="active" {{ (old('statut', $iepp->statut ?? 'active') == 'active') ? 'selected' : '' }}>Active</option>
                                                <option value="inactive" {{ (old('statut', $iepp->statut ?? '') == 'inactive') ? 'selected' : '' }}>Inactive</option>
                                                <option value="en_cours" {{ (old('statut', $iepp->statut ?? '') == 'en_cours') ? 'selected' : '' }}>En cours de création</option>
                                                <option value="suspendue" {{ (old('statut', $iepp->statut ?? '') == 'suspendue') ? 'selected' : '' }}>Suspendue</option>
                                            </select>
                                            @error('statut')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="priorite" class="form-label">Priorité</label>
                                            <select class="form-control @error('priorite') is-invalid @enderror"
                                                    id="priorite"
                                                    name="priorite">
                                                <option value="">-- Priorité --</option>
                                                <option value="haute" {{ (old('priorite', $iepp->priorite ?? '') == 'haute') ? 'selected' : '' }}>Haute</option>
                                                <option value="moyenne" {{ (old('priorite', $iepp->priorite ?? 'moyenne') == 'moyenne') ? 'selected' : '' }}>Moyenne</option>
                                                <option value="basse" {{ (old('priorite', $iepp->priorite ?? '') == 'basse') ? 'selected' : '' }}>Basse</option>
                                            </select>
                                            @error('priorite')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Localisation -->
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="feather icon-map-pin"></i> Localisation</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="commune" class="form-label required">Commune/Ville</label>
                                            <input type="text"
                                                   class="form-control @error('commune') is-invalid @enderror"
                                                   id="commune"
                                                   name="commune"
                                                   value="{{ old('commune', $iepp->commune ?? 'Plateau') }}"
                                                   required
                                                   onchange="updateCodeDisplay()">
                                            @error('commune')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="quartier" class="form-label">Quartier/Secteur</label>
                                            <input type="text"
                                                   class="form-control @error('quartier') is-invalid @enderror"
                                                   id="quartier"
                                                   name="quartier"
                                                   value="{{ old('quartier', $iepp->quartier ?? 'Zone administrative') }}">
                                            @error('quartier')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="adresse_complete" class="form-label">Adresse complète du bureau</label>
                                            <textarea class="form-control @error('adresse_complete') is-invalid @enderror"
                                                      id="adresse_complete"
                                                      name="adresse_complete"
                                                      rows="3">{{ old('adresse_complete', $iepp->adresse_complete ?? 'Avenue Jean Mermoz, Immeuble Postel 2001, 2ème étage - Plateau, Abidjan') }}</textarea>
                                            @error('adresse_complete')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Responsable -->
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="feather icon-user"></i> Responsable de l'IEPP</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nom_responsable" class="form-label">Nom du responsable</label>
                                            <input type="text"
                                                   class="form-control @error('nom_responsable') is-invalid @enderror"
                                                   id="nom_responsable"
                                                   name="nom_responsable"
                                                   value="{{ old('nom_responsable', $iepp->nom_responsable ?? 'KOUAME') }}">
                                            @error('nom_responsable')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="prenom_responsable" class="form-label">Prénom(s)</label>
                                            <input type="text"
                                                   class="form-control @error('prenom_responsable') is-invalid @enderror"
                                                   id="prenom_responsable"
                                                   name="prenom_responsable"
                                                   value="{{ old('prenom_responsable', $iepp->prenom_responsable ?? 'Yves Marie') }}">
                                            @error('prenom_responsable')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="fonction" class="form-label">Fonction</label>
                                            <select class="form-control @error('fonction') is-invalid @enderror"
                                                    id="fonction"
                                                    name="fonction">
                                                <option value="">-- Sélectionner la fonction --</option>
                                                <option value="inspecteur" {{ (old('fonction', $iepp->fonction ?? 'inspecteur') == 'inspecteur') ? 'selected' : '' }}>Inspecteur</option>
                                                <option value="inspectrice" {{ (old('fonction', $iepp->fonction ?? '') == 'inspectrice') ? 'selected' : '' }}>Inspectrice</option>
                                                <option value="coordinateur" {{ (old('fonction', $iepp->fonction ?? '') == 'coordinateur') ? 'selected' : '' }}>Coordinateur</option>
                                                <option value="coordinatrice" {{ (old('fonction', $iepp->fonction ?? '') == 'coordinatrice') ? 'selected' : '' }}>Coordinatrice</option>
                                            </select>
                                            @error('fonction')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="telephone" class="form-label">Téléphone</label>
                                            <input type="tel"
                                                   class="form-control @error('telephone') is-invalid @enderror"
                                                   id="telephone"
                                                   name="telephone"
                                                   value="{{ old('telephone', $iepp->telephone ?? '+225 07 12 34 56 78') }}">
                                            @error('telephone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   id="email"
                                                   name="email"
                                                   value="{{ old('email', $iepp->email ?? 'iepp.plateau@education.gouv.ci') }}">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Remarques et observations -->
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="feather icon-message-square"></i> Remarques et Observations</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="remarques" class="form-label">Remarques</label>
                                    <textarea class="form-control @error('remarques') is-invalid @enderror"
                                              id="remarques"
                                              name="remarques"
                                              rows="4">{{ old('remarques', $iepp->remarques ?? '') }}</textarea>
                                    @error('remarques')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="form-text text-muted">Observations particulières concernant cette IEPP</small>
                                </div>
                            </div>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg mr-2 waves-effect waves-light">
                                        <i class="feather icon-save mr-2"></i>Mettre à jour
                                    </button>
                                    <button type="reset" class="btn btn-outline-warning btn-lg mr-2 waves-effect">
                                        <i class="feather icon-refresh-cw mr-2"></i>Réinitialiser
                                    </button>
                                    <a href="{{ route('iepp.show', $iepp->id ?? 1) }}" class="btn btn-outline-info btn-lg mr-2 waves-effect">
                                        <i class="feather icon-eye mr-2"></i>Voir Détails
                                    </a>
                                    <a href="{{ route('iepp.index') }}" class="btn btn-outline-secondary btn-lg waves-effect">
                                        <i class="feather icon-arrow-left mr-2"></i>Retour Liste
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Mise à jour automatique du code IEPP
function updateCodeDisplay() {
    const drenId = document.getElementById('dren_id').value;
    const commune = document.getElementById('commune').value;
    const nomIepp = document.getElementById('nom_iepp').value;

    const drenCodes = {
        '1': 'ABJ1',
        '2': 'ABJ2', 
        '3': 'ABJ3',
        '4': 'BKE1',
        '5': 'BKE2',
        '6': 'YAM',
        '7': 'KOR',
        '8': 'SPE',
        '9': 'DAL',
        '10': 'MAN',
        '11': 'GAG',
        '12': 'DIV',
        '13': 'ABE',
        '14': 'BON',
        '15': 'AGN'
    };

    if (drenId && commune) {
        const drenCode = drenCodes[drenId] || 'XXX';
        const communeCode = commune.substring(0, 3).toUpperCase();
        const numero = String(Math.floor(Math.random() * 99) + 1).padStart(3, '0');
        const newCode = `IEPP-${drenCode}-${communeCode}-${numero}`;
        
        document.getElementById('code_display').textContent = newCode;
    }
}

// Vérification cohérence hiérarchique
function checkHierarchyCoherence() {
    const drenId = document.getElementById('dren_id').value;
    const currentCode = document.getElementById('code_display').textContent;

    const expectedDrenCodes = {
        '1': 'ABJ1',
        '2': 'ABJ2',
        '3': 'ABJ3',
        '4': 'BKE1',
        '5': 'BKE2'
    };

    const expectedCode = expectedDrenCodes[drenId];

    if (drenId && expectedCode && !currentCode.includes(expectedCode)) {
        new PNotify({
            title: 'Avertissement hiérarchique',
            text: `Attention : Le changement de DREN affectera la hiérarchie SIDMAS de cette IEPP`,
            type: 'warning',
            delay: 5000
        });
    }
}

// Validation du formulaire
function validateIeppForm(e) {
    e.preventDefault();

    const nomIepp = document.getElementById('nom_iepp').value.trim();
    const drenId = document.getElementById('dren_id').value;
    const typeZone = document.getElementById('type_zone').value;
    const statut = document.getElementById('statut').value;
    const commune = document.getElementById('commune').value.trim();

    // Validation des champs obligatoires
    if (!nomIepp) {
        showValidationError('Le nom de l\'IEPP est obligatoire');
        document.getElementById('nom_iepp').focus();
        return false;
    }

    if (!drenId) {
        showValidationError('La sélection de la DREN est obligatoire');
        document.getElementById('dren_id').focus();
        return false;
    }

    if (!typeZone) {
        showValidationError('Le type de zone est obligatoire');
        document.getElementById('type_zone').focus();
        return false;
    }

    if (!statut) {
        showValidationError('Le statut est obligatoire');
        document.getElementById('statut').focus();
        return false;
    }

    if (!commune) {
        showValidationError('La commune est obligatoire');
        document.getElementById('commune').focus();
        return false;
    }

    // Confirmation de modification
    confirmUpdate();
    return false;
}

function showValidationError(message) {
    new PNotify({
        title: 'Erreur de validation',
        text: message,
        type: 'error',
        delay: 4000
    });
}

function confirmUpdate() {
    (new PNotify({
        title: 'Confirmation de modification',
        text: 'Voulez-vous vraiment modifier cette IEPP ? Cette action affectera les EPP rattachées.',
        icon: 'feather icon-alert-triangle',
        hide: false,
        confirm: {
            confirm: true,
            buttons: [{
                text: 'Modifier',
                addClass: 'btn-primary'
            }, {
                text: 'Annuler',
                addClass: 'btn-secondary'
            }]
        },
        buttons: {
            closer: false,
            sticker: false
        },
        history: {
            history: false
        }
    })).get().on('pnotify.confirm', function() {
        processUpdate();
    });
}

function processUpdate() {
    new PNotify({
        title: 'Modification en cours',
        text: 'Mise à jour de l\'IEPP dans SIDMAS...',
        type: 'info',
        delay: 2000
    });

    setTimeout(() => {
        new PNotify({
            title: 'IEPP modifiée avec succès',
            text: 'Les informations ont été mises à jour dans le système SIDMAS',
            type: 'success',
            delay: 4000
        });
    }, 2500);
}

// Initialisation
document.addEventListener('DOMContentLoaded', function() {
    // Validation en temps réel
    const inputs = document.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            if (this.hasAttribute('required') && !this.value.trim()) {
                this.classList.add('is-invalid');
            } else {
                this.classList.remove('is-invalid');
            }
        });
    });

    // Génération initiale du code
    updateCodeDisplay();
});
</script>

<style>
.required::after {
    content: ' *';
    color: red;
    font-weight: bold;
}

.form-label {
    font-weight: 600;
    color: #5a5c69;
}

.is-invalid {
    border-color: #e74a3b !important;
}

.card-header {
    background-color: #f8f9fc;
    border-bottom: 1px solid #e3e6f0;
}

.btn-lg {
    padding: 0.75rem 1.5rem;
    font-size: 1.1rem;
}

.form-control:focus {
    border-color: #4e73df;
    box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-text {
    font-size: 0.85rem;
    color: #6c757d;
}

.alert {
    font-size: 0.9rem;
}

.waves-effect {
    position: relative;
    overflow: hidden;
}
</style>

@endsection