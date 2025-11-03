@extends('layouts.layouts_super.master')
@section('title', 'Modifier la Direction Centrale')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-edit"></i> Modifier la Direction Centrale</h5>
                            <p class="m-b-0">Modifier les informations de la direction</p>
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
                                <a href="{{ route('direction_centrale.show', $id) }}">Direction #{{ $id }}</a>
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
                            <h5><i class="feather icon-edit-2"></i> Modifier les Informations de la Direction</h5>
                        </div>
                        <div class="card-block">
                            <form method="POST" action="#">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="nom_direction">Nom de la Direction <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="nom_direction" name="nom_direction"
                                                   value="Direction des Affaires Administratives" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="code_direction">Code Direction</label>
                                            <input type="text" class="form-control" id="code_direction" name="code_direction"
                                                   value="DC-ADM" maxlength="10" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="type_direction">Type de Direction <span class="text-danger">*</span></label>
                                            <select class="form-control" id="type_direction" name="type_direction" required>
                                                <option value="">Sélectionner un type</option>
                                                <option value="administrative" selected>Administrative</option>
                                                <option value="pedagogique">Pédagogique</option>
                                                <option value="logistique">Logistique</option>
                                                <option value="financiere">Financière</option>
                                                <option value="technique">Technique</option>
                                                <option value="ressources_humaines">Ressources Humaines</option>
                                                <option value="juridique">Juridique</option>
                                                <option value="communication">Communication</option>
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
                                                <option value="reorganisation">Réorganisation</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Responsable de la Direction -->
                                <div class="card mt-4">
                                    <div class="card-header bg-light">
                                        <h6 class="mb-0"><i class="feather icon-user text-primary"></i> Responsable de la Direction</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nom_responsable">Nom du Responsable <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="nom_responsable" name="nom_responsable"
                                                           value="M. KOUASSI Albert" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="poste_responsable">Poste du Responsable</label>
                                                    <select class="form-control" id="poste_responsable" name="poste_responsable">
                                                        <option value="directeur" selected>Directeur</option>
                                                        <option value="directrice">Directrice</option>
                                                        <option value="directeur_adjoint">Directeur Adjoint</option>
                                                        <option value="directrice_adjointe">Directrice Adjointe</option>
                                                    </select>
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
                                                           value="direction.admin@men.gouv.ci">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Informations Opérationnelles -->
                                <div class="card mt-4">
                                    <div class="card-header bg-light">
                                        <h6 class="mb-0"><i class="feather icon-settings text-primary"></i> Informations Opérationnelles</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="date_creation">Date de Création <span class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" id="date_creation" name="date_creation"
                                                           value="2021-03-15" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="adresse">Localisation</label>
                                                    <textarea class="form-control" id="adresse" name="adresse" rows="2">Plateau, Tour C - 5ème étage, Abidjan, Côte d'Ivoire</textarea>
                                                </div>
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

                                <!-- Boutons d'action -->
                                <div class="form-group text-center mt-4">
                                    <a href="{{ route('direction_centrale.show', $id) }}" class="btn btn-inverse waves-effect waves-light mr-2">
                                        <i class="feather icon-arrow-left"></i> Retour aux Détails
                                    </a>
                                    <a href="{{ route('direction_centrale.index') }}" class="btn btn-outline-secondary waves-effect waves-light mr-2">
                                        <i class="feather icon-list"></i> Retour à la Liste
                                    </a>
                                    <button type="button" class="btn btn-outline-warning waves-effect waves-light mr-2" onclick="resetForm()">
                                        <i class="feather icon-refresh-cw"></i> Annuler les Modifications
                                    </button>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        <i class="feather icon-save"></i> Enregistrer les Modifications
                                    </button>
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

@endsection

@section('script')
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

    // Validation du formulaire
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const required = form.querySelectorAll('[required]');
        let valid = true;
        let errors = [];

        required.forEach(field => {
            if (!field.value.trim()) {
                field.classList.add('is-invalid');
                errors.push(`Le champ "${field.labels[0].textContent}" est obligatoire`);
                valid = false;
            } else {
                field.classList.remove('is-invalid');
            }
        });

        if (!valid) {
            new PNotify({
                title: 'Erreurs de validation',
                text: errors.join('<br>'),
                type: 'error',
                delay: 5000
            });
            return;
        }

        // Confirmation de modification
        if (confirm('Êtes-vous sûr de vouloir enregistrer ces modifications ?')) {
            new PNotify({
                title: 'Direction mise à jour',
                text: 'Les modifications ont été enregistrées avec succès',
                type: 'success',
                delay: 4000
            });
            
            setTimeout(() => {
                window.location.href = '{{ route("direction_centrale.show", $id) }}';
            }, 2000);
        }
    });

    // Détection des modifications
    inputs.forEach(input => {
        input.addEventListener('input', function() {
            checkForChanges();
        });
        input.addEventListener('change', function() {
            checkForChanges();
        });
    });
});

function resetForm() {
    if (confirm('Êtes-vous sûr de vouloir annuler toutes les modifications ?')) {
        const form = document.querySelector('form');
        const inputs = form.querySelectorAll('input, select, textarea');

        inputs.forEach(input => {
            if (input.name === 'raison_modification') {
                input.value = '';
                return;
            }

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
    }
}

function checkForChanges() {
    const form = document.querySelector('form');
    const inputs = form.querySelectorAll('input, select, textarea');
    let hasChanges = false;

    inputs.forEach(input => {
        if (input.name === 'raison_modification') return;

        if (input.type === 'checkbox') {
            if (input.checked !== (originalValues[input.name] || false)) {
                hasChanges = true;
            }
        } else if (originalValues[input.name] !== input.value) {
            hasChanges = true;
        }
    });

    // Mise à jour visuelle du bouton de sauvegarde
    const saveButton = document.querySelector('button[type="submit"]');
    if (hasChanges) {
        saveButton.classList.add('btn-warning');
        saveButton.classList.remove('btn-primary');
        saveButton.innerHTML = '<i class="feather icon-save"></i> Enregistrer les Modifications *';
    } else {
        saveButton.classList.add('btn-primary');
        saveButton.classList.remove('btn-warning');
        saveButton.innerHTML = '<i class="feather icon-save"></i> Enregistrer les Modifications';
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
    animation: pulse 1.5s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.02); }
    100% { transform: scale(1); }
}
</style>
@endsection
