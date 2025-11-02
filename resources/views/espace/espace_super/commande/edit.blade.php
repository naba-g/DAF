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
                            <label for="numero_commande">N° Commande SIDMAS <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="numero_commande" name="numero_commande"
                                   value="CMD-2024-{{ str_pad($id, 3, '0', STR_PAD_LEFT) }}" readonly>
                            <small class="form-text text-muted">Numéro auto-généré selon format SIDMAS</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="annee_scolaire">Année scolaire <span class="text-danger">*</span></label>
                            <select class="form-control" id="annee_scolaire" name="annee_scolaire" required>
                                <option value="">Sélectionner l'année</option>
                                <option value="2024-2025" selected>2024-2025</option>
                                <option value="2023-2024">2023-2024</option>
                                <option value="2022-2023">2022-2023</option>
                            </select>
                            <small class="form-text text-muted">Année scolaire de référence</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dren_destinataire">DREN destinataire <span class="text-danger">*</span></label>
                            <select class="form-control" id="dren_destinataire" name="dren_destinataire" required>
                                <option value="">Sélectionner une DREN</option>
                                <option value="DREN-ABJ1" selected>DREN ABIDJAN 1 (Zone Abidjan)</option>
                                <option value="DREN-ABJ2">DREN ABIDJAN 2 (Zone Abidjan)</option>
                                <option value="DREN-ABJ3">DREN ABIDJAN 3 (Zone Abidjan)</option>
                                <option value="DREN-BOU1">DREN BOUAKÉ 1 (Zone Centre)</option>
                                <option value="DREN-YAM">DREN YAMOUSSOUKRO (Zone Centre)</option>
                                <option value="DREN-KOR">DREN KORHOGO (Zone Nord)</option>
                                <option value="DREN-MAN">DREN MAN (Zone Ouest)</option>
                                <option value="DREN-SAN">DREN SAN-PÉDRO (Zone Sud)</option>
                            </select>
                            <small class="form-text text-muted">Direction Régionale destinataire selon SIDMAS</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date_commande">Date de commande <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="date_commande" name="date_commande"
                                   value="{{ date('Y-m-d') }}" required>
                            <small class="form-text text-muted">Date de création de la commande</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="type_ouvrage">Type d'ouvrage <span class="text-danger">*</span></label>
                            <select class="form-control" id="type_ouvrage" name="type_ouvrage" required>
                                <option value="">Sélectionner le type</option>
                                <option value="manuel_scolaire" selected>Manuel Scolaire</option>
                                <option value="guide_pedagogique">Guide Pédagogique</option>
                                <option value="livre_lecture">Livre de Lecture</option>
                                <option value="cahier_activites">Cahier d'Activités</option>
                                <option value="atlas_cartes">Atlas et Cartes</option>
                                <option value="materiel_didactique">Matériel Didactique</option>
                            </select>
                            <small class="form-text text-muted">Classification SIDMAS typeouvrage</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="niveau_scolaire">Niveau scolaire <span class="text-danger">*</span></label>
                            <select class="form-control" id="niveau_scolaire" name="niveau_scolaire" required>
                                <option value="">Sélectionner le niveau</option>
                                <option value="prescolaire">Préscolaire</option>
                                <option value="cp1">CP1 (Cours Préparatoire 1)</option>
                                <option value="cp2" selected>CP2 (Cours Préparatoire 2)</option>
                                <option value="ce1">CE1 (Cours Élémentaire 1)</option>
                                <option value="ce2">CE2 (Cours Élémentaire 2)</option>
                                <option value="cm1">CM1 (Cours Moyen 1)</option>
                                <option value="cm2">CM2 (Cours Moyen 2)</option>
                            </select>
                            <small class="form-text text-muted">Table niveau SIDMAS</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="titre_ouvrage">Titre de l'ouvrage <span class="text-danger">*</span></label>
                            <select class="form-control" id="titre_ouvrage" name="titre_ouvrage" required>
                                <option value="">Sélectionner le titre</option>
                                <option value="mon_premier_livre_lecture_cp2" selected>Mon premier livre de lecture CP2</option>
                                <!-- Options dynamiques selon type et niveau -->
                            </select>
                            <small class="form-text text-muted">Table titreouvrage SIDMAS</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="quantite_demandee">Quantité demandée <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="quantite_demandee" name="quantite_demandee"
                                   min="1" max="100000" value="1500" required>
                            <small class="form-text text-muted">Nombre d'exemplaires demandés</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="quantite_recue">Quantité reçue</label>
                            <input type="number" class="form-control" id="quantite_recue" name="quantite_recue"
                                   min="0" value="1200">
                            <small class="form-text text-muted">Quantité réellement reçue</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="priorite">Priorité de la commande</label>
                            <select class="form-control" id="priorite" name="priorite">
                                <option value="normale">Normale</option>
                                <option value="urgente" selected>Urgente</option>
                                <option value="tres_urgente">Très Urgente</option>
                                <option value="critique">Critique</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="statut_commande">Statut de la commande</label>
                            <select class="form-control" id="statut_commande" name="statut_commande">
                                <option value="en_preparation">En préparation</option>
                                <option value="en_attente_validation">En attente validation</option>
                                <option value="validee" selected>Validée</option>
                                <option value="en_cours_livraison">En cours de livraison</option>
                                <option value="livree">Livrée</option>
                                <option value="livree_partielle">Livrée partielle</option>
                                <option value="annulee">Annulée</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="date_livraison_prevue">Date livraison prévue</label>
                            <input type="date" class="form-control" id="date_livraison_prevue" name="date_livraison_prevue"
                                   value="2024-12-15">
                            <small class="form-text text-muted">Date prévue de livraison</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fournisseur_prevu">Fournisseur</label>
                            <select class="form-control" id="fournisseur_prevu" name="fournisseur_prevu">
                                <option value="">Sélectionner un fournisseur</option>
                                <option value="editions_ceda" selected>Éditions CEDA</option>
                                <option value="editions_nouvelles_sud">Éditions Nouvelles du Sud</option>
                                <option value="librairie_france">Librairie de France</option>
                                <option value="imprimerie_nationale">Imprimerie Nationale</option>
                                <option value="groupe_edilis">Groupe EDILIS</option>
                                <option value="autre">Autre fournisseur</option>
                            </select>
                            <small class="form-text text-muted">Fournisseur sélectionné</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="responsable_commande">Responsable de la commande</label>
                            <input type="text" class="form-control" id="responsable_commande" name="responsable_commande"
                                   placeholder="Nom du responsable DAF">
                            <small class="form-text text-muted">Agent DAF responsable du suivi</small>
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="date_livraison_effective">Date livraison effective</label>
                            <input type="date" class="form-control" id="date_livraison_effective" name="date_livraison_effective"
                                   value="2024-12-10">
                            <small class="form-text text-muted">Date réelle de livraison</small>
                        </div>
                    </div> -->
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="observations">Observations et commentaires</label>
                            <textarea class="form-control" id="observations" name="observations" rows="3"
                                      placeholder="Observations, notes particulières...">Commande partiellement livrée - En attente du solde de 300 exemplaires. Fournisseur contacté pour délai de livraison.</textarea>
                            <small class="form-text text-muted">Notes et commentaires sur la commande</small>
                        </div>
                    </div>
                </div>
                                <!-- Boutons d'action -->
                                <div class="form-group text-center mt-4">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-2">
                                        <i class="feather icon-save"></i> Mettre à jour la Commande
                                    </button>
                                    <button type="button" class="btn btn-warning waves-effect waves-light mr-2" onclick="resetForm()">
                                        <i class="feather icon-refresh-cw"></i> Réinitialiser
                                    </button>
                                    <a href="{{ route('commande_daf.show', $id) }}" class="btn btn-info waves-effect waves-light mr-2">
                                        <i class="feather icon-eye"></i> Voir Détails
                                    </a>
                                    <a href="{{ route('commande_daf.index') }}" class="btn btn-secondary waves-effect waves-light">
                                        <i class="feather icon-arrow-left"></i> Retour à la Liste
                                    </a>
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
