@extends('layouts.layouts_super.master')
@section('title', 'Créer une IEPP')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-plus"></i> Créer une nouvelle IEPP</h5>
                            <p class="m-b-0">Créer une nouvelle Inspection de l'Enseignement Primaire et Préscolaire</p>
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
                            <li class="breadcrumb-item active">Créer</li>
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
                    <form id="createIeppForm" action="{{ route('iepp.store') }}" method="POST" onsubmit="return handleStaticSubmit(event)">
                        @csrf

                        <!-- Informations de base -->
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="feather icon-edit"></i> Informations de base de l'IEPP</h5>
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
                                                   placeholder="Ex: IEPP PLATEAU"
                                                   required>
                                            @error('nom_iepp')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="form-text text-muted">Nom officiel de l'inspection</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dren_id" class="form-label required">Direction Régionale (DREN)</label>
                                            <select class="form-control @error('dren_id') is-invalid @enderror"
                                                    id="dren_id"
                                                    name="dren_id"
                                                    required
                                                    onchange="generateCodeIepp()">
                                                <option value="">-- Sélectionner une DREN --</option>
                                                <!-- Données basées sur la table DREN de SIDMAS (56 régions) -->
                                                <option value="1">DREN ABIDJAN 1</option>
                                                <option value="2">DREN ABIDJAN 2</option>
                                                <option value="3">DREN ABIDJAN 3</option>
                                                <option value="4">DREN BOUAKE 1</option>
                                                <option value="5">DREN BOUAKE 2</option>
                                                <option value="6">DREN YAMOUSSOUKRO</option>
                                                <option value="7">DREN KORHOGO</option>
                                                <option value="8">DREN SAN PEDRO</option>
                                                <option value="9">DREN DALOA</option>
                                                <option value="10">DREN MAN</option>
                                                <option value="11">DREN GAGNOA</option>
                                                <option value="12">DREN DIVO</option>
                                                <option value="13">DREN ABENGOUROU</option>
                                                <option value="14">DREN BONDOUKOU</option>
                                                <option value="15">DREN AGNIBILEKROU</option>
                                                <!-- Les 56 DREN selon la DB SIDMAS -->
                                            </select>
                                            @error('dren_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="form-text text-muted">DREN de rattachement administratif</small>
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
                                                    required>
                                                <option value="">-- Sélectionner le type --</option>
                                                <option value="urbaine">Urbaine</option>
                                                <option value="rurale">Rurale</option>
                                                <option value="mixte">Mixte</option>
                                                <option value="periurbaine">Périurbaine</option>
                                            </select>
                                            @error('type_zone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="form-text text-muted">Classification géographique</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="code_iepp_auto" class="form-label">Code Auto-généré</label>
                                            <input type="text"
                                                   class="form-control bg-light"
                                                   id="code_iepp_auto"
                                                   name="code_iepp_auto"
                                                   placeholder="Code généré automatiquement"
                                                   readonly>
                                            <small class="form-text text-muted">Format: IEPP-{DREN}-{NOM}-{SEQ}</small>
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
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                                <option value="en_cours">En cours de création</option>
                                                <option value="suspendue">Suspendue</option>
                                            </select>
                                            @error('statut')
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
                                                   placeholder="Ex: Plateau"
                                                   required>
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
                                                   placeholder="Ex: Zone administrative">
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
                                                      rows="3"
                                                      placeholder="Adresse complète du bureau de l'IEPP"></textarea>
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
                                                   placeholder="Ex: KOUAME">
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
                                                   placeholder="Ex: Yves Marie">
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
                                                <option value="inspecteur">Inspecteur</option>
                                                <option value="inspectrice">Inspectrice</option>
                                                <option value="coordinateur">Coordinateur</option>
                                                <option value="coordinatrice">Coordinatrice</option>
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
                                                   placeholder="+225 XX XX XX XX XX">
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
                                                   placeholder="iepp@education.gouv.ci">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg mr-2 waves-effect waves-light">
                                        <i class="feather icon-save mr-2"></i>Enregistrer l'IEPP
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-lg mr-2 waves-effect waves-light" onclick="resetForm()">
                                        <i class="feather icon-refresh-cw mr-2"></i>Réinitialiser
                                    </button>
                                    <a href="{{ route('iepp.index') }}" class="btn btn-outline-danger btn-lg waves-effect waves-light">
                                        <i class="feather icon-x mr-2"></i>Annuler
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
// Génération automatique du code IEPP selon la hiérarchie DB
function generateCodeIepp() {
    const drenSelect = document.getElementById('dren_id');
    const nomIepp = document.getElementById('nom_iepp').value;
    const codeField = document.getElementById('code_iepp_auto');

    if (drenSelect.value && nomIepp) {
        const drenText = drenSelect.options[drenSelect.selectedIndex].text;
        const drenCode = drenText.match(/DREN (\w+)/)?.[1] || 'XXX';
        const nomCode = nomIepp.toUpperCase().replace(/\s+/g, '').substring(0, 3);

        // Simulation séquence basée sur les 295 IEPP existantes
        const sequence = String(Math.floor(Math.random() * 295) + 1).padStart(3, '0');

        const codeGenere = `IEPP-${drenCode}-${nomCode}-${sequence}`;
        codeField.value = codeGenere;

        new PNotify({
            title: 'Code généré',
            text: `Code IEPP: ${codeGenere}`,
            type: 'success',
            delay: 3000
        });
    }
}

// Écouteur pour génération automatique
document.getElementById('nom_iepp').addEventListener('input', generateCodeIepp);

// Fonction pour gérer la soumission du formulaire (statique)
function handleStaticSubmit(e) {
    e.preventDefault();

    const nomIepp = document.getElementById('nom_iepp').value;
    const drenId = document.getElementById('dren_id').value;
    const typeZone = document.getElementById('type_zone').value;
    const statut = document.getElementById('statut').value;
    const commune = document.getElementById('commune').value;

    if (!nomIepp || !drenId || !typeZone || !statut || !commune) {
        new PNotify({
            title: 'Erreur de validation',
            text: 'Veuillez remplir tous les champs obligatoires',
            type: 'error'
        });
        return false;
    }

    // Simulation validation unicité selon DB SIDMAS
    const codeGenere = document.getElementById('code_iepp_auto').value;
    if (!codeGenere) {
        new PNotify({
            title: 'Code manquant',
            text: 'Le code IEPP doit être généré automatiquement',
            type: 'error'
        });
        return false;
    }

    // Simulation de succès avec PNotify
    new PNotify({
        title: 'IEPP créée avec succès',
        text: `IEPP "${nomIepp}" créée et ajoutée aux 295 inspections SIDMAS`,
        type: 'success'
    });

    // Information sur la hiérarchie
    setTimeout(() => {
        const drenNom = document.getElementById('dren_id').options[document.getElementById('dren_id').selectedIndex].text;
        new PNotify({
            title: 'Hiérarchie établie',
            text: `IEPP rattachée à ${drenNom} selon la structure SIDMAS`,
            type: 'info'
        });
    }, 2000);

    return false;
}

// Fonction de réinitialisation
function resetForm() {
    document.getElementById('createIeppForm').reset();
    document.getElementById('code_iepp_auto').value = '';

    new PNotify({
        title: 'Formulaire réinitialisé',
        text: 'Tous les champs ont été vidés',
        type: 'info'
    });
}

// Validation en temps réel
document.addEventListener('DOMContentLoaded', function() {
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
});
</script>

<style>
.required::after {
    content: ' *';
    color: red;
}

.form-label {
    font-weight: 600;
    color: #5a5c69;
}

.is-invalid {
    border-color: #e74a3b;
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
}
</style>

@endsection