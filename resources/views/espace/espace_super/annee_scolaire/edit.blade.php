@extends('layouts.layouts_super.master')
@section('title', 'Modifier Année Scolaire')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Header -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Modifier Année Scolaire</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Administration</a></li>
                            <li class="breadcrumb-item"><a href="/annee_scolaire">Années Scolaires</a></li>
                            <li class="breadcrumb-item"><a href="/annee_scolaire/show/1">Détails</a></li>
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
                        <h5>Formulaire de Modification d'Année Scolaire</h5>
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

                        <form action="#" method="POST" id="anneeForm" onsubmit="return handleStaticSubmit(event)">
                            <!-- Simulation statique - pas de vraie soumission -->

                            <div class="row">
                                <!-- Informations de base -->
                                <div class="col-md-6">
                                    <div class="card">
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
                                                       value="2024-2025"
                                                       placeholder="Ex: 2024-2025"
                                                       maxlength="9"
                                                       pattern="[0-9]{4}-[0-9]{4}"
                                                       title="Format requis: YYYY-YYYY (ex: 2024-2025)"
                                                       required>
                                                @error('anneesco')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <small class="form-text text-muted">Format obligatoire: YYYY-YYYY (9 caractères max)</small>
                                                <div class="alert alert-warning mt-2">
                                                    <i class="feather icon-alert-triangle mr-2"></i>
                                                    <small>Attention: Modifier l'année peut affecter les données liées</small>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea class="form-control @error('description') is-invalid @enderror"
                                                          id="description"
                                                          name="description"
                                                          rows="3"
                                                          placeholder="Description optionnelle de l'année scolaire">{{ old('description', $anneeScolaire->description ?? '') }}</textarea>
                                                @error('description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label">Informations système</label>
                                                <div class="bg-light p-3 rounded">
                                                    <small class="text-muted">
                                                        <strong>Créée le:</strong> 15/08/2024 10:30<br>
                                                        <strong>Dernière modification:</strong> 29/10/2024 14:25<br>
                                                        <strong>ID:</strong> 1
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Période et statut -->
                                <div class="col-md-6">
                                    <div class="card">
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
                                                       value="{{ old('date_debut', isset($anneeScolaire->date_debut) ? $anneeScolaire->date_debut->format('Y-m-d') : '2024-09-01') }}"
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
                                                       value="{{ old('date_fin', isset($anneeScolaire->date_fin) ? $anneeScolaire->date_fin->format('Y-m-d') : '2025-08-31') }}"
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
                                                    <option value="1" {{ old('statut', $anneeScolaire->statut ?? '1') == '1' ? 'selected' : '' }}>Active</option>
                                                    <option value="0" {{ old('statut', $anneeScolaire->statut ?? '') == '0' ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                                <small class="form-text text-muted">Une seule année peut être active simultanément</small>
                                                @error('statut')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="alert alert-info">
                                                <i class="feather icon-info mr-2"></i>
                                                <strong>Information:</strong> Activer cette année désactivera automatiquement l'année précédente.
                                            </div>

                                            @if(old('statut', $anneeScolaire->statut ?? '') == '1')
                                            <div class="alert alert-success">
                                                <i class="feather icon-check-circle mr-2"></i>
                                                <strong>Année active:</strong> Cette année est actuellement la période scolaire en cours.
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Boutons d'action -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary btn-lg mr-2 waves-effect waves-light">
                                                    <i class="feather icon-save mr-2"></i>Mettre à jour
                                                </button>
                                                <button type="button" class="btn btn-outline-warning btn-lg mr-2 waves-effect" onclick="resetForm()">
                                                    <i class="feather icon-refresh-cw mr-2"></i>Restaurer
                                                </button>
                                                <a href="/annee_scolaire/show/1" class="btn btn-outline-info btn-lg mr-2 waves-effect">
                                                    <i class="feather icon-eye mr-2"></i>Voir Détails
                                                </a>
                                                <a href="/annee_scolaire" class="btn btn-outline-secondary btn-lg waves-effect">
                                                    <i class="feather icon-arrow-left mr-2"></i>Retour
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
    // Validation des dates et année scolaire
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
                type: 'error',
                delay: 4000
            });
            this.focus();
        }
        updateAnneesco();
    });

    dateFin.addEventListener('change', function() {
        if (dateDebut.value && new Date(dateDebut.value) >= new Date(this.value)) {
            new PNotify({
                title: 'Erreur de validation',
                text: 'La date de fin doit être postérieure à la date de début',
                type: 'error',
                delay: 4000
            });
            this.focus();
        }
        updateAnneesco();
    });

    // Auto-génération de anneesco basé sur les dates (si vide)
    function updateAnneesco() {
        if (dateDebut.value && dateFin.value && !anneesco.value) {
            const debut = new Date(dateDebut.value);
            const fin = new Date(dateFin.value);
            const anneeScolaire = debut.getFullYear() + '-' + fin.getFullYear();
            anneesco.value = anneeScolaire;
            anneesco.dispatchEvent(new Event('input'));
        }
    }
});

// Fonction pour gérer la soumission statique
function handleStaticSubmit(e) {
    e.preventDefault(); // Empêche la soumission réelle

    const anneesco = document.getElementById('anneesco').value;
    const dateDebutVal = document.getElementById('date_debut').value;
    const dateFinVal = document.getElementById('date_fin').value;
    const statut = document.getElementById('statut').value;

    if (!anneesco || !dateDebutVal || !dateFinVal || !statut) {
        new PNotify({
            title: 'Champs obligatoires',
            text: 'Veuillez remplir tous les champs obligatoires',
            type: 'error',
            delay: 4000
        });
        return false;
    }

    // Validation format anneesco
    const pattern = /^[0-9]{4}-[0-9]{4}$/;
    if (!pattern.test(anneesco)) {
        new PNotify({
            title: 'Format invalide',
            text: 'Format année scolaire invalide. Utilisez YYYY-YYYY',
            type: 'error',
            delay: 4000
        });
        return false;
    }

    const [debut, fin] = anneesco.split('-');
    if (parseInt(fin) !== parseInt(debut) + 1) {
        new PNotify({
            title: 'Années incohérentes',
            text: 'L\'année de fin doit être l\'année de début + 1',
            type: 'error',
            delay: 4000
        });
        return false;
    }

    if (new Date(dateDebutVal) >= new Date(dateFinVal)) {
        new PNotify({
            title: 'Erreur de dates',
            text: 'La date de début doit être antérieure à la date de fin',
            type: 'error',
            delay: 4000
        });
        return false;
    }

    // Confirmation avant simulation
    (new PNotify({
        title: 'Confirmation de modification',
        text: 'Voulez-vous vraiment modifier cette année scolaire ?',
        icon: 'feather icon-help-circle',
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
        // Simulation de succès
        new PNotify({
            title: 'Modification réussie',
            text: 'Année scolaire "' + anneesco + '" mise à jour avec succès !',
            type: 'success',
            delay: 4000
        });

        // Simulation d'avertissement si activation d'une nouvelle année
        if (statut === '1') {
            setTimeout(() => {
                new PNotify({
                    title: 'Année activée',
                    text: 'L\'année précédente a été automatiquement désactivée.',
                    type: 'info',
                    delay: 4000
                });
            }, 1500);
        }

        // Redirection simulée vers la vue détail après délai
        setTimeout(function() {
            (new PNotify({
                title: 'Navigation',
                text: 'Voulez-vous voir les détails de l\'année scolaire ?',
                icon: 'feather icon-eye',
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
                window.location.href = '/annee_scolaire/show/1';
            });
        }, 2000);
    });

    return false; // Empêche la vraie soumission
}

    // Sauvegarde des valeurs originales pour la restauration
    const originalValues = {
        anneesco: document.getElementById('anneesco').value,
        description: document.getElementById('description').value,
        date_debut: document.getElementById('date_debut').value,
        date_fin: document.getElementById('date_fin').value,
        statut: document.getElementById('statut').value
    };

    window.resetForm = function() {
        (new PNotify({
            title: 'Confirmation',
            text: 'Voulez-vous vraiment restaurer les valeurs originales ?',
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
            document.getElementById('anneesco').value = originalValues.anneesco;
            document.getElementById('description').value = originalValues.description;
            document.getElementById('date_debut').value = originalValues.date_debut;
            document.getElementById('date_fin').value = originalValues.date_fin;
            document.getElementById('statut').value = originalValues.statut;

            new PNotify({
                title: 'Valeurs restaurées',
                text: 'Les valeurs originales ont été restaurées',
                type: 'info',
                delay: 3000
            });
        });
    };
});

// Détection des changements non sauvegardés
let formChanged = false;
document.getElementById('anneeForm').addEventListener('change', function() {
    formChanged = true;
});

window.addEventListener('beforeunload', function(e) {
    if (formChanged) {
        e.preventDefault();
        e.returnValue = '';
    }
});
</script>

<style>
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

.alert-success {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}
</style>

@endsection
