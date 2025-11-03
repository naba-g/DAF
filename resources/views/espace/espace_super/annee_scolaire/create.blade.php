@extends('layouts.layouts_super.master')
@section('title', 'Créer Année Scolaire')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Header -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Nouvelle Année Scolaire</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Administration</a></li>
                            <li class="breadcrumb-item"><a href="/annee_scolaire">Années Scolaires</a></li>
                            <li class="breadcrumb-item"><a href="#!">Créer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="row">
            <div class="col-md-12">
                <div class="card custom-card-accent">
                    <div class="card-header">
                        <h5>Formulaire de Création d'Année Scolaire</h5>
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

                        <form action="#" method="POST" id="anneeForm" onsubmit="return handleStaticSubmit(event)">
                            <!-- Simulation statique - pas de vraie soumission -->

                            <!-- Simulation des erreurs pour démo statique -->
                            <!--
                            <div class="alert alert-danger" style="display: none;" id="errorAlert">
                                <ul class="mb-0">
                                    <li>Exemple d'erreur de validation</li>
                                </ul>
                            </div>
                            -->

                            <div class="row">
                                <!-- Informations de base -->
                                <div class="col-md-6">
                                    <div class="card custom-card-accent">
                                        <div class="card-header">
                                            <h6 class="mb-0"><i class="feather icon-info mr-2"></i>Informations Générales</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="anneesco" class="form-label">Année Scolaire <span class="text-danger">*</span></label>
                                                <input type="text"
                                                       class="form-control @error('anneesco') is-invalid @enderror"
                                                       id="anneesco"
                                                       name="anneesco"
                                                       value="{{ old('anneesco') }}"
                                                       placeholder="Ex: 2024-2025"
                                                       maxlength="9"
                                                       pattern="[0-9]{4}-[0-9]{4}"
                                                       title="Format requis: YYYY-YYYY (ex: 2024-2025)"
                                                       required>
                                                <small class="form-text text-muted">Format obligatoire: YYYY-YYYY (9 caractères max)</small>
                                                @error('anneesco')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea class="form-control"
                                                          id="description"
                                                          name="description"
                                                          rows="3"
                                                          placeholder="Description optionnelle de l'année scolaire"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Période et statut -->
                                <div class="col-md-6">
                                    <div class="card custom-card-accent">
                                        <div class="card-header">
                                            <h6 class="mb-0"><i class="feather icon-calendar mr-2"></i>Période et Statut</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="date_debut" class="form-label">Date de début <span class="text-danger">*</span></label>
                                                <input type="date"
                                                       class="form-control @error('date_debut') is-invalid @enderror"
                                                       id="date_debut"
                                                       name="date_debut"
                                                       value="{{ old('date_debut') }}"
                                                       required>
                                                @error('date_debut')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="date_fin" class="form-label">Date de fin <span class="text-danger">*</span></label>
                                                <input type="date"
                                                       class="form-control @error('date_fin') is-invalid @enderror"
                                                       id="date_fin"
                                                       name="date_fin"
                                                       value="{{ old('date_fin') }}"
                                                       required>
                                                @error('date_fin')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="statut" class="form-label">Statut <span class="text-danger">*</span></label>
                                                <select class="form-control @error('statut') is-invalid @enderror"
                                                        id="statut"
                                                        name="statut"
                                                        required>
                                                    <option value="">-- Sélectionner un statut --</option>
                                                    <option value="1" {{ old('statut') == '1' ? 'selected' : '' }}>Active</option>
                                                    <option value="0" {{ old('statut') == '0' ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                                <small class="form-text text-muted">Une seule année peut être active simultanément</small>
                                                @error('statut')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="alert alert-info">
                                                <i class="feather icon-info mr-2"></i>
                                                <strong>Information:</strong> Activer une nouvelle année désactivera automatiquement l'année précédente.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Boutons d'action -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card custom-card-accent">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary btn-lg mr-2 waves-effect waves-light">
                                                    <i class="feather icon-save mr-2"></i>Enregistrer
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary btn-lg mr-2 waves-effect waves-light" onclick="resetForm()">
                                                    <i class="feather icon-refresh-cw mr-2"></i>Réinitialiser
                                                </button>
                                                <a href="/annee_scolaire" class="btn btn-outline-danger btn-lg waves-effect waves-light">
                                                    <i class="feather icon-x mr-2"></i>Annuler
                                                </a>
                                            </div>
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
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Validation des dates
    const dateDebut = document.getElementById('date_debut');
    const dateFin = document.getElementById('date_fin');
    const anneesco = document.getElementById('anneesco');

    // Validation format année scolaire
    anneesco.addEventListener('input', function() {
        const value = this.value;
        const pattern = /^[0-9]{4}-[0-9]{4}$/;

        if (value && !pattern.test(value)) {
            this.setCustomValidity('Format requis: YYYY-YYYY (ex: 2024-2025)');
        } else if (value && pattern.test(value)) {
            const [debut, fin] = value.split('-');
            if (parseInt(fin) !== parseInt(debut) + 1) {
                this.setCustomValidity('L\'année de fin doit être l\'année de début + 1');
            } else {
                this.setCustomValidity('');
            }
        } else {
            this.setCustomValidity('');
        }
    });

    dateDebut.addEventListener('change', function() {
        if (dateFin.value && new Date(this.value) >= new Date(dateFin.value)) {
            new PNotify({
                title: 'Erreur de validation',
                text: 'La date de début doit être antérieure à la date de fin',
                type: 'error'
            });
            this.value = '';
        }
        updateAnneesco();
    });

    dateFin.addEventListener('change', function() {
        if (dateDebut.value && new Date(dateDebut.value) >= new Date(this.value)) {
            new PNotify({
                title: 'Erreur de validation',
                text: 'La date de fin doit être postérieure à la date de début',
                type: 'error'
            });
            this.value = '';
        }
        updateAnneesco();
    });

    // Auto-génération de anneesco basé sur les dates
    function updateAnneesco() {
        if (dateDebut.value && dateFin.value) {
            const debut = new Date(dateDebut.value);
            const fin = new Date(dateFin.value);
            const anneeScolaire = debut.getFullYear() + '-' + fin.getFullYear();

            if (!anneesco.value) {
                anneesco.value = anneeScolaire;
                anneesco.dispatchEvent(new Event('input'));
            }
        }
    }
});

// Fonction pour gérer la soumission du formulaire (statique)
function handleStaticSubmit(e) {
    e.preventDefault();

    const anneesco = document.getElementById('anneesco').value;
    const dateDebutVal = document.getElementById('date_debut').value;
    const dateFinVal = document.getElementById('date_fin').value;
    const statut = document.getElementById('statut').value;

    if (!anneesco || !dateDebutVal || !dateFinVal || !statut) {
        new PNotify({
            title: 'Erreur de validation',
            text: 'Veuillez remplir tous les champs obligatoires',
            type: 'error'
        });
        return false;
    }

    // Validation format anneesco
    const pattern = /^[0-9]{4}-[0-9]{4}$/;
    if (!pattern.test(anneesco)) {
        new PNotify({
            title: 'Erreur de validation',
            text: 'Format année scolaire invalide. Utilisez YYYY-YYYY',
            type: 'error'
        });
        return false;
    }

    const [debut, fin] = anneesco.split('-');
    if (parseInt(fin) !== parseInt(debut) + 1) {
        new PNotify({
            title: 'Erreur de validation',
            text: 'L\'année de fin doit être l\'année de début + 1',
            type: 'error'
        });
        return false;
    }

    if (new Date(dateDebutVal) >= new Date(dateFinVal)) {
        new PNotify({
            title: 'Erreur de validation',
            text: 'La date de début doit être antérieure à la date de fin',
            type: 'error'
        });
        return false;
    }

    // Simulation de succès avec PNotify
    new PNotify({
        title: 'Succès',
        text: `Année scolaire "${anneesco}" créée avec succès !`,
        type: 'success'
    });

    // Simulation d'avertissement si activation d'une nouvelle année
    if (statut === '1') {
        setTimeout(() => {
            new PNotify({
                title: 'Information',
                text: 'L\'année précédente a été automatiquement désactivée.',
                type: 'info'
            });
        }, 1500);
    }

    // Redirection simulée vers la liste
    setTimeout(() => {
        new PNotify({
            title: 'Redirection',
            text: 'Retour à la liste des années scolaires...',
            type: 'info'
        });
        setTimeout(() => {
            window.location.href = '/annee_scolaire';
        }, 1000);
    }, 1500);

    return false; // Empêche la vraie soumission
}

function resetForm() {
    new PNotify({
        title: 'Confirmation',
        text: 'Voulez-vous vraiment réinitialiser le formulaire ?',
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
        document.getElementById('anneeForm').reset();
        new PNotify({
            title: 'Information',
            text: 'Formulaire réinitialisé',
            type: 'info'
        });
    });
}
</script>

<style>
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

.card-header {
    background-color: #f8f9fa;
    border-bottom: 1px solid #e9ecef;
}

.form-label {
    font-weight: 500;
    color: #495057;
}

.form-control:focus {
    border-color: #4680ff;
    box-shadow: 0 0 0 0.2rem rgba(70, 128, 255, 0.25);
}

.btn-primary {
    background-color: #4680ff;
    border-color: #4680ff;
}

.btn-primary:hover {
    background-color: #3967d6;
    border-color: #3967d6;
}

.invalid-feedback {
    display: block;
}

.text-danger {
    color: #dc3545 !important;
}

.alert-danger {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
}
</style>

@endsection
