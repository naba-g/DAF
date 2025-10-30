@extends('layouts.layouts_super.master')
@section('title', 'Modifier la Commande DAF')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-edit"></i> Modifier la Commande DAF</h5>
                            <p class="m-b-0">Modifier les informations de la commande</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Accueil</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('commande_daf.index') }}">Commandes DAF</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('commande_daf.show', $id) }}">Commande #{{ $id }}</a>
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
                            <h5><i class="feather icon-edit-2"></i> Modifier les Informations de la Commande</h5>
                        </div>
                        <div class="card-block">
                            <form method="POST" action="#">
                                @csrf
                                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="numero_commande">Numéro de Commande <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="numero_commande" name="numero_commande"
                                   value="CMD-2024-{{ str_pad($id, 3, '0', STR_PAD_LEFT) }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date_commande">Date de Commande <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="date_commande" name="date_commande"
                                   value="{{ date('Y-m-d') }}" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="description" name="description" rows="3" required>Commande de manuels scolaires pour l'année académique 2024-2025. Cette commande comprend des livres de mathématiques, français, sciences et histoire pour les niveaux primaire et secondaire.</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fournisseur">Fournisseur</label>
                            <select class="form-control" id="fournisseur" name="fournisseur">
                                <option value="">Sélectionner un fournisseur</option>
                                <option value="fournisseur_1" selected>Éditions CEDA</option>
                                <option value="fournisseur_2">Éditions Nouvelles du Sud</option>
                                <option value="fournisseur_3">Librairie de France</option>
                                <option value="fournisseur_4">Autre</option>
                            </select>
                            @error('fournisseur')
                                <div class="form-control-feedback text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="type_commande">Type de Commande</label>
                            <select class="form-control" id="type_commande" name="type_commande">
                                <option value="">Sélectionner un type</option>
                                <option value="manuels_scolaires" selected>Manuels scolaires</option>
                                <option value="fournitures_bureau">Fournitures de bureau</option>
                                <option value="equipements_informatique">Équipements informatique</option>
                                <option value="mobilier_scolaire">Mobilier scolaire</option>
                            </select>
                            @error('type_commande')
                                <div class="form-control-feedback text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="priorite">Priorité</label>
                            <select class="form-control" id="priorite" name="priorite">
                                <option value="normale">Normale</option>
                                <option value="urgente" selected>Urgente</option>
                                <option value="tres_urgente">Très Urgente</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date_livraison_prevue">Date de Livraison Prévue</label>
                            <input type="date" class="form-control" id="date_livraison_prevue" name="date_livraison_prevue"
                                   value="{{ date('Y-m-d', strtotime('+30 days')) }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="statut">Statut <span class="text-danger">*</span></label>
                            <select class="form-control" id="statut" name="statut" required>
                                <option value="en_attente" selected>En attente</option>
                                <option value="validee">Validée</option>
                                <option value="en_cours">En cours</option>
                                <option value="livree">Livrée</option>
                                <option value="annulee">Annulée</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="responsable">Responsable</label>
                            <select class="form-control" id="responsable" name="responsable">
                                <option value="">Sélectionner un responsable</option>
                                <option value="admin" selected>Administrateur</option>
                                <option value="gestionnaire">Gestionnaire</option>
                                <option value="responsable_achats">Responsable Achats</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="observations">Observations</label>
                            <textarea class="form-control" id="observations" name="observations" rows="3">Livraison à effectuer dans les entrepôts de la Direction Centrale. Vérification de qualité requise avant acceptation de la livraison.</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="urgent" name="urgent" checked>
                                <label class="form-check-label" for="urgent">
                                    Marquer comme urgente
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
                            Dernière modification le {{ date('d/m/Y H:i') }} par Administrateur
                        </small>
                    </div>
                </div>

                <div class="row mt-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <a href="{{ route('commande_daf.show', $id) }}" class="btn btn-inverse">
                                                    <i class="feather icon-arrow-left"></i> Retour aux Détails
                                                </a>
                                                <a href="{{ route('commande_daf.index') }}" class="btn btn-outline-secondary">
                                                    <i class="feather icon-list"></i> Retour à la Liste
                                                </a>
                                                <button type="button" class="btn btn-outline-warning" onclick="resetForm()">
                                                    <i class="feather icon-refresh-cw"></i> Annuler les Modifications
                                                </button>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                    <i class="feather icon-save"></i> Enregistrer les Modifications
                                                </button>
                                            </div>
                                        </div>
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
        originalValues[input.name] = input.value;
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
            new PNotify({
                title: 'Erreur de validation',
                text: 'Veuillez remplir tous les champs obligatoires.',
                type: 'error'
            });
            return false;
        } else {
            new PNotify({
                title: 'Confirmation',
                text: 'Êtes-vous sûr de vouloir enregistrer ces modifications ?',
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
                new PNotify({
                    title: 'Succès',
                    text: 'Modifications enregistrées avec succès !',
                    type: 'success'
                });
            });
        }
    });

    // Détection des modifications
    inputs.forEach(input => {
        input.addEventListener('change', function() {
            checkForChanges();
        });
    });
});

function resetForm() {
    new PNotify({
        title: 'Confirmation',
        text: 'Êtes-vous sûr de vouloir annuler toutes les modifications ?',
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
        const form = document.querySelector('form');
        const inputs = form.querySelectorAll('input, select, textarea');

        inputs.forEach(input => {
            if (originalValues[input.name] !== undefined) {
                input.value = originalValues[input.name];
            }
        });

        // Réinitialiser les checkboxes
        document.getElementById('urgent').checked = true;
        document.getElementById('notification').checked = false;

        checkForChanges();

        new PNotify({
            title: 'Information',
            text: 'Formulaire réinitialisé',
            type: 'info'
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
            const originalChecked = input.name === 'urgent' ? true : false;
            if (input.checked !== originalChecked) {
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
