@extends('layouts.layouts_super.master')
@section('title', 'Modifier le Service - Direction Centrale')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-edit"></i> Modifier le Service - Direction Centrale</h5>
                            <p class="m-b-0">Modifier les informations du service</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Accueil</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('direction_centrale.index') }}">Direction Centrale</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('direction_centrale.show', $id) }}">Service #{{ $id }}</a>
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
                    <!-- Formulaire de Modification -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-edit-2"></i> Modifier les Informations du Service</h5>
                        </div>
                        <div class="card-block">
                            <form method="POST" action="#">
                                @csrf
                                @method('PUT')

                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="nom_service">Nom du Service <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nom_service" name="nom_service"
                                   value="Service des Affaires Administratives" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="code_service">Code Service</label>
                            <input type="text" class="form-control" id="code_service" name="code_service"
                                   value="SAA" maxlength="10">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="type_service">Type de Service <span class="text-danger">*</span></label>
                            <select class="form-control" id="type_service" name="type_service" required>
                                <option value="">Sélectionner un type</option>
                                <option value="administrative" selected>Administrative</option>
                                <option value="pedagogique">Pédagogique</option>
                                <option value="logistique">Logistique</option>
                                <option value="financiere">Financière</option>
                                <option value="technique">Technique</option>
                                <option value="ressources_humaines">Ressources Humaines</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="statut">Statut <span class="text-danger">*</span></label>
                            <select class="form-control" id="statut" name="statut" required>
                                <option value="actif" selected>Actif</option>
                                <option value="inactif">Inactif</option>
                                <option value="en_cours">En cours de création</option>
                                <option value="en_attente">En attente</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Description du Service</label>
                            <textarea class="form-control" id="description" name="description" rows="3">Ce service s'occupe de toutes les affaires administratives de la direction centrale, incluant la gestion du personnel, les procédures administratives, et la coordination avec les autres services.</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nom_responsable">Nom du Responsable <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nom_responsable" name="nom_responsable"
                                   value="Mme KOUAME Adjoua" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="poste_responsable">Poste du Responsable</label>
                            <input type="text" class="form-control" id="poste_responsable" name="poste_responsable"
                                   value="Chef de Service">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telephone">Téléphone</label>
                            <input type="tel" class="form-control" id="telephone" name="telephone"
                                   value="+225 27 20 21 22 23">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   value="saa@men.gouv.ci">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date_creation">Date de Création <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="date_creation" name="date_creation"
                                   value="2024-01-01" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="numero_ordre">Numéro d'Ordre</label>
                            <input type="number" class="form-control" id="numero_ordre" name="numero_ordre"
                                   value="1" min="1">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="adresse">Adresse/Localisation</label>
                            <textarea class="form-control" id="adresse" name="adresse" rows="2">Plateau, Tour C - 5ème étage, Abidjan, Côte d'Ivoire</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre_employes">Nombre d'Employés</label>
                            <input type="number" class="form-control" id="nombre_employes" name="nombre_employes"
                                   value="15" min="1">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="priorite">Niveau de Priorité</label>
                            <select class="form-control" id="priorite" name="priorite">
                                <option value="normale">Normale</option>
                                <option value="importante" selected>Importante</option>
                                <option value="critique">Critique</option>
                                <option value="elevee">Élevée</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="objectifs">Objectifs et Missions</label>
                            <textarea class="form-control" id="objectifs" name="objectifs" rows="3">- Gestion des ressources humaines
- Coordination des activités administratives
- Support aux autres services
- Gestion documentaire et archivage</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="service_strategique" name="service_strategique" checked>
                                <label class="form-check-label" for="service_strategique">
                                    Service stratégique
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="notification" name="notification">
                                <label class="form-check-label" for="notification">
                                    Envoyer une notification de modification
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Historique des Modifications -->
                <div class="card bg-light mt-4">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-secondary">Historique des Modifications</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="raison_modification">Raison de la Modification <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="raison_modification" name="raison_modification" rows="2"
                                      placeholder="Veuillez indiquer la raison de cette modification..." required></textarea>
                        </div>
                        <small class="text-muted">
                            <i class="fas fa-info-circle"></i>
                            Dernière modification le 01/01/2024 à 10:30 par Administrateur
                        </small>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <a href="{{ route('direction_centrale.show', $id) }}" class="btn btn-inverse waves-effect">
                                            <i class="feather icon-arrow-left"></i> Retour aux Détails
                                        </a>
                                        <a href="{{ route('direction_centrale.index') }}" class="btn btn-outline-secondary waves-effect">
                                            <i class="feather icon-list"></i> Retour à la Liste
                                        </a>
                                        <button type="button" class="btn btn-outline-warning waves-effect" onclick="resetForm()">
                                            <i class="feather icon-refresh-cw"></i> Annuler les Modifications
                                        </button>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            <i class="feather icon-save"></i> Enregistrer les Modifications
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-body end -->
    </div>
</div>

<script>
// Sauvegarde des valeurs originales pour la réinitialisation
let originalValues = {};

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const inputs = form.querySelectorAll('input, select, textarea');

    // Sauvegarder les valeurs originales
    inputs.forEach(input => {
        if (input.type === 'checkbox') {
            originalValues[input.name] = input.checked;
        } else {
            originalValues[input.name] = input.value;
        }
    });

    // Validation en temps réel
    form.addEventListener('submit', function(e) {
        const required = form.querySelectorAll('[required]');
        let valid = true;

        required.forEach(field => {
            if (!field.value.trim()) {
                field.classList.add('is-invalid');
                valid = false;
            } else {
                field.classList.remove('is-invalid');
            }
        });

        if (!valid) {
            e.preventDefault();
            new PNotify({
                title: 'Champs obligatoires',
                text: 'Veuillez remplir tous les champs obligatoires.',
                type: 'error',
                delay: 4000
            });
        } else {
            e.preventDefault();
            (new PNotify({
                title: 'Confirmation de modification',
                text: 'Êtes-vous sûr de vouloir enregistrer ces modifications ?',
                icon: 'feather icon-save',
                hide: false,
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
            })).get().on('pnotify.confirm', function() {
                new PNotify({
                    title: 'Modifications enregistrées',
                    text: 'Modifications enregistrées avec succès (simulation)',
                    type: 'success',
                    delay: 4000
                });
            });
        }
    });

    // Détection des modifications
    inputs.forEach(input => {
        if (input.type === 'checkbox') {
            input.addEventListener('change', function() {
                checkForChanges();
            });
        } else {
            input.addEventListener('input', function() {
                checkForChanges();
            });
        }
    });
});

function resetForm() {
    (new PNotify({
        title: 'Annulation des modifications',
        text: 'Êtes-vous sûr de vouloir annuler toutes les modifications ?',
        icon: 'feather icon-refresh-cw',
        hide: false,
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
    })).get().on('pnotify.confirm', function() {
        const form = document.querySelector('form');
        const inputs = form.querySelectorAll('input, select, textarea');

        inputs.forEach(input => {
            if (input.name === 'raison_modification') return; // Ignorer ce champ

            if (input.type === 'checkbox') {
                input.checked = originalValues[input.name] || false;
            } else if (originalValues[input.name] !== undefined) {
                input.value = originalValues[input.name];
            }
        });

        checkForChanges();

        new PNotify({
            title: 'Modifications annulées',
            text: 'Toutes les modifications ont été annulées',
            type: 'info',
            delay: 3000
        });
    });
}

function checkForChanges() {
    const form = document.querySelector('form');
    const inputs = form.querySelectorAll('input, select, textarea');
    let hasChanges = false;

    inputs.forEach(input => {
        if (input.name === 'raison_modification') return; // Ignorer ce champ

        if (input.type === 'checkbox') {
            if (input.checked !== (originalValues[input.name] || false)) {
                hasChanges = true;
            }
        } else if (originalValues[input.name] !== input.value) {
            hasChanges = true;
        }
    });

    // Mettre à jour l'interface si nécessaire
    const saveButton = document.querySelector('button[type="submit"]');
    if (hasChanges) {
        saveButton.classList.add('btn-warning');
        saveButton.classList.remove('btn-primary');
    } else {
        saveButton.classList.add('btn-primary');
        saveButton.classList.remove('btn-warning');
    }
}
</script>

<style>
.form-control.is-invalid {
    border-color: #dc3545;
}

.text-danger {
    color: #dc3545 !important;
}

.card-header {
    background-color: #f8f9fc;
    border-bottom: 1px solid #e3e6f0;
}

.bg-light {
    background-color: #f8f9fa !important;
}

.btn-warning.btn {
    animation: pulse 1s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}
</style>

@endsection
