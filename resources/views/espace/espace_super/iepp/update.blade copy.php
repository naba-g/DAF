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
                            <p class="m-b-0">Modification de l'Inspection IEPP PLATEAU</p>
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
                    <form id="updateIeppForm" action="{{ route('iepp.update', 1) }}" method="POST" onsubmit="return handleStaticUpdate(event)">
                        @csrf
                        @method('PUT')

                        <!-- Informations système -->
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="feather icon-database"></i> Informations Système</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="alert alert-info">
                                            <strong>ID IEPP:</strong> 1<br>
                                            <strong>Code SIDMAS:</strong> IEPP-ABJ1-PLT-001<br>
                                            <small class="text-muted">1 des 295 IEPP enregistrées</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="alert alert-warning">
                                            <strong>Créée le:</strong> 15/01/2024<br>
                                            <strong>Dernière maj:</strong> 28/10/2024<br>
                                            <small class="text-muted">Historique des modifications</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="alert alert-success">
                                            <strong>EPP rattachées:</strong> 12<br>
                                            <strong>Effectif total:</strong> 3,247 élèves<br>
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
                                                   value="IEPP PLATEAU"
                                                   required>
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
                                                    onchange="checkHierarchyCoherence()">
                                                <option value="">-- Sélectionner une DREN --</option>
                                                <!-- Données basées sur la table DREN de SIDMAS (56 régions) -->
                                                <option value="1" selected>DREN ABIDJAN 1</option>
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
                                            <small class="form-text text-muted">DREN de rattachement actuel</small>
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
                                                <option value="urbaine" selected>Urbaine</option>
                                                <option value="rurale">Rurale</option>
                                                <option value="mixte">Mixte</option>
                                                <option value="periurbaine">Périurbaine</option>
                                            </select>
                                            @error('type_zone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="code_iepp_display" class="form-label">Code IEPP (SIDMAS)</label>
                                            <input type="text"
                                                   class="form-control bg-light"
                                                   id="code_iepp_display"
                                                   value="IEPP-ABJ1-PLT-001"
                                                   readonly>
                                            <small class="form-text text-muted">Code figé selon SIDMAS</small>
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
                                                <option value="active" selected>Active</option>
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
                                                   value="Plateau"
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
                                                   value="Zone administrative">
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
                                                      rows="3">Immeuble SCIAM, 3ème étage, Avenue Chardy, Plateau, Abidjan</textarea>
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
                                                   value="KONE">
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
                                                   value="Marie Ange">
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
                                                <option value="inspectrice" selected>Inspectrice</option>
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
                                                   value="+225 01 23 45 67 89">
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
                                                   value="iepp.plateau@education.gouv.ci">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Statistiques EPP rattachées -->
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="feather icon-bar-chart-2"></i> EPP Supervisées (Structure SIDMAS)</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card bg-primary text-white">
                                            <div class="card-body text-center">
                                                <h4>12</h4>
                                                <small>EPP Totales</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-success text-white">
                                            <div class="card-body text-center">
                                                <h4>11</h4>
                                                <small>EPP Actives</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-info text-white">
                                            <div class="card-body text-center">
                                                <h4>3,247</h4>
                                                <small>Élèves Total</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card bg-warning text-white">
                                            <div class="card-body text-center">
                                                <h4>187</h4>
                                                <small>Enseignants</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-info mt-3">
                                    <i class="feather icon-info mr-2"></i>
                                    <strong>Note:</strong> Les modifications de rattachement DREN affecteront la hiérarchie de supervision des 12 EPP rattachées.
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
                                    <button type="button" class="btn btn-outline-warning btn-lg mr-2 waves-effect" onclick="restoreOriginal()">
                                        <i class="feather icon-refresh-cw mr-2"></i>Restaurer
                                    </button>
                                    <a href="{{ route('iepp.show', 1) }}" class="btn btn-outline-info btn-lg mr-2 waves-effect">
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
// Vérification cohérence hiérarchique DREN → IEPP
function checkHierarchyCoherence() {
    const drenId = document.getElementById('dren_id').value;
    const codeIepp = document.getElementById('code_iepp_display').value;

    // Vérification de cohérence selon structure SIDMAS
    const expectedDrenInCode = {
        '1': 'ABJ1',
        '2': 'ABJ2',
        '3': 'ABJ3',
        '4': 'BKE1',
        '5': 'BKE2',
        '6': 'YAM',
        '7': 'KOR',
        '8': 'SPE'
    };

    const expectedCode = expectedDrenInCode[drenId];

    if (drenId && expectedCode && !codeIepp.includes(expectedCode)) {
        new PNotify({
            title: 'Incohérence hiérarchique détectée',
            text: `L'IEPP avec code ${codeIepp} ne correspond pas à la DREN sélectionnée. Vérifiez la cohérence selon SIDMAS.`,
            type: 'warning',
            delay: 5000
        });
    } else if (drenId && expectedCode && codeIepp.includes(expectedCode)) {
        new PNotify({
            title: 'Cohérence validée',
            text: 'Le rattachement DREN-IEPP respecte la structure SIDMAS',
            type: 'success',
            delay: 3000
        });
    }
}

// Fonction pour gérer la soumission statique
function handleStaticUpdate(e) {
    e.preventDefault();

    const nomIepp = document.getElementById('nom_iepp').value;
    const drenId = document.getElementById('dren_id').value;
    const typeZone = document.getElementById('type_zone').value;
    const statut = document.getElementById('statut').value;
    const commune = document.getElementById('commune').value;

    if (!nomIepp || !drenId || !typeZone || !statut || !commune) {
        new PNotify({
            title: 'Champs obligatoires',
            text: 'Veuillez remplir tous les champs obligatoires',
            type: 'error'
        });
        return false;
    }

    // Confirmation avec avertissement sur les EPP rattachées
    (new PNotify({
        title: 'Confirmation de modification',
        text: 'Cette modification affectera les 12 EPP rattachées. Voulez-vous continuer ?',
        icon: 'feather icon-alert-triangle',
        hide: false,
        confirm: {
            confirm: true,
            buttons: [{
                text: 'Confirmer',
                addClass: 'btn-warning'
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
        // Simulation de succès
        new PNotify({
            title: 'IEPP modifiée avec succès',
            text: `IEPP "${nomIepp}" mise à jour dans SIDMAS`,
            type: 'success',
            delay: 4000
        });

        // Information sur impact hiérarchique
        setTimeout(() => {
            new PNotify({
                title: 'Hiérarchie mise à jour',
                text: 'Les 12 EPP rattachées ont été notifiées des modifications',
                type: 'info',
                delay: 3000
            });
        }, 2000);
    });

    return false;
}

// Fonction de restauration
function restoreOriginal() {
    const originalValues = {
        nom_iepp: 'IEPP PLATEAU',
        dren_id: '1',
        type_zone: 'urbaine',
        statut: 'active',
        commune: 'Plateau',
        quartier: 'Zone administrative',
        nom_responsable: 'KONE',
        prenom_responsable: 'Marie Ange',
        fonction: 'inspectrice',
        telephone: '+225 01 23 45 67 89',
        email: 'iepp.plateau@education.gouv.ci'
    };

    Object.keys(originalValues).forEach(key => {
        const element = document.getElementById(key);
        if (element) {
            element.value = originalValues[key];
        }
    });

    new PNotify({
        title: 'Valeurs restaurées',
        text: 'Les valeurs originales ont été restaurées',
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

    // Vérification automatique au chargement
    checkHierarchyCoherence();
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
