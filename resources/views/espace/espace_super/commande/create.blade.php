@extends('layouts.layouts_super.master')
@section('title', 'Créer une Commande DAF')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-plus"></i> Nouvelle Commande DAF</h5>
                            <p class="m-b-0">Créer une nouvelle commande DAF</p>
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
                            <li class="breadcrumb-item active">Nouvelle Commande</li>
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
                    <!-- Formulaire -->
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="feather icon-edit"></i> Informations de la Commande</h5>
                        </div>
                        <div class="card-block">
                            <form method="POST" action="#">
                                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="numero_commande">N° Commande SIDMAS <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="numero_commande" name="numero_commande"
                                   value="CMD-{{ date('Y') }}-{{ str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT) }}"
                                   readonly>
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
                                <option value="DREN-ABJ1">DREN ABIDJAN 1 (Zone Abidjan)</option>
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
                                <option value="manuel_scolaire">Manuel Scolaire</option>
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
                                <option value="cp2">CP2 (Cours Préparatoire 2)</option>
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
                                   min="1" max="100000" placeholder="Nombre d'exemplaires" required>
                            <small class="form-text text-muted">Nombre d'exemplaires demandés</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="quantite_recue">Quantité reçue</label>
                            <input type="number" class="form-control" id="quantite_recue" name="quantite_recue"
                                   min="0" placeholder="Nombre d'exemplaires">
                            <small class="form-text text-muted">Quantité réellement reçue</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="priorite">Priorité de la commande</label>
                            <select class="form-control" id="priorite" name="priorite">
                                <option value="normale" selected>Normale</option>
                                <option value="urgente">Urgente</option>
                                <option value="tres_urgente">Très Urgente</option>
                                <option value="critique">Critique</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="statut_commande">Statut initial</label>
                            <select class="form-control" id="statut_commande" name="statut_commande">
                                <option value="en_preparation" selected>En préparation</option>
                                <option value="en_attente_validation">En attente validation</option>
                                <option value="validee">Validée</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="date_livraison_prevue">Date livraison prévue</label>
                            <input type="date" class="form-control" id="date_livraison_prevue" name="date_livraison_prevue">
                            <small class="form-text text-muted">Date prévue de livraison</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fournisseur_prevu">Fournisseur prévu</label>
                            <select class="form-control" id="fournisseur_prevu" name="fournisseur_prevu">
                                <option value="">Sélectionner un fournisseur</option>
                                <option value="editions_ceda">Éditions CEDA</option>
                                <option value="editions_nouvelles_sud">Éditions Nouvelles du Sud</option>
                                <option value="librairie_france">Librairie de France</option>
                                <option value="imprimerie_nationale">Imprimerie Nationale</option>
                                <option value="groupe_edicef">Groupe EDICEF</option>
                                <option value="autres">Autre fournisseur</option>
                            </select>
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
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="justification">Justification de la commande <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="justification" name="justification" rows="3"
                                      placeholder="Justification détaillée de la demande de commande..." required></textarea>
                            <small class="form-text text-muted">Motifs et contexte de la commande</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="observations">Observations et instructions</label>
                            <textarea class="form-control" id="observations" name="observations" rows="2"
                                      placeholder="Observations particulières, instructions logistiques..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="commande_urgente" name="commande_urgente">
                                <label class="form-check-label" for="commande_urgente">
                                    <strong>Commande urgente</strong> (traitement prioritaire)
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="distribution_directe" name="distribution_directe">
                                <label class="form-check-label" for="distribution_directe">
                                    <strong>Distribution directe</strong> (livraison directe aux IEPP)
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <a href="{{ route('commande_daf.index') }}" class="btn btn-inverse">
                                                    <i class="feather icon-arrow-left"></i> Retour
                                                </a>
                                                <button type="button" class="btn btn-outline-primary" onclick="resetForm()">
                                                    <i class="feather icon-refresh-cw"></i> Réinitialiser
                                                </button>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                    <i class="feather icon-save"></i> Enregistrer
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

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Relations SIDMAS pour titres d'ouvrages selon type et niveau
    const titresOuvrages = {
        'manuel_scolaire': {
            'prescolaire': ['Mon premier livre de découverte', 'Éveil et apprentissage préscolaire'],
            'cp1': ['Mon premier livre de lecture CP1', 'Mathématiques CP1 - Je compte et je calcule', 'Découverte du monde CP1'],
            'cp2': ['Lecture et expression écrite CP2', 'Mathématiques CP2 - Découverte des nombres', 'Sciences d\'observation CP2'],
            'ce1': ['Français CE1 - Lire et comprendre', 'Mathématiques CE1 - Géométrie et calcul', 'Histoire-Géographie CE1'],
            'ce2': ['Français CE2 - Expression et communication', 'Sciences d\'observation CE2', 'Mathématiques CE2 - Problèmes'],
            'cm1': ['Histoire-Géographie CM1', 'Mathématiques CM1 - Problèmes et solutions', 'Sciences et technologie CM1'],
            'cm2': ['Français CM2 - Préparation à la 6ème', 'Sciences et technologie CM2', 'Mathématiques CM2 - Synthèse']
        },
        'guide_pedagogique': {
            'cp1': ['Guide du maître Lecture CP1', 'Guide pédagogique Mathématiques CP1'],
            'cp2': ['Guide du maître Français CP2', 'Guide méthodologique Sciences CP2'],
            'ce1': ['Guide du maître Français CE1', 'Guide pédagogique Sciences CE1'],
            'ce2': ['Guide méthodologique CE2', 'Guide d\'évaluation CE2'],
            'cm1': ['Guide du maître CM1', 'Guide pédagogique Histoire-Géo CM1'],
            'cm2': ['Guide méthodologique CM2', 'Guide d\'évaluation CM2']
        },
        'livre_lecture': {
            'cp1': ['Mes premières lectures CP1', 'Contes et histoires CP1'],
            'cp2': ['Lectures progressives CP2', 'Bibliothèque de classe CP2'],
            'ce1': ['Recueil de textes CE1', 'Littérature jeunesse CE1'],
            'ce2': ['Anthologie CE2', 'Lectures dirigées CE2']
        },
        'cahier_activites': {
            'cp1': ['Cahier d\'écriture CP1', 'Cahier d\'exercices Mathématiques CP1'],
            'cp2': ['Cahier d\'exercices Lecture CP2', 'Cahier d\'activités Mathématiques CP2'],
            'ce1': ['Cahier d\'exercices Français CE1', 'Cahier de géométrie CE1'],
            'ce2': ['Cahier d\'exercices Français CE2', 'Cahier de travaux pratiques Sciences CE2'],
            'cm1': ['Cahier d\'activités Histoire-Géo CM1', 'Cahier d\'exercices Mathématiques CM1'],
            'cm2': ['Cahier de préparation 6ème', 'Cahier d\'activités Sciences CM2']
        },
        'atlas_cartes': {
            'ce2': ['Atlas géographique de la Côte d\'Ivoire CE2', 'Cartes murales Géographie CE2'],
            'cm1': ['Atlas de l\'Afrique de l\'Ouest CM1', 'Cartes historiques CM1'],
            'cm2': ['Atlas mondial CM2', 'Cartes géographiques et historiques CM2']
        },
        'materiel_didactique': {
            'cp1': ['Matériel de numération CP1', 'Jeux éducatifs CP1'],
            'cp2': ['Matériel de lecture CP2', 'Supports pédagogiques CP2'],
            'ce1': ['Matériel scientifique CE1', 'Outils pédagogiques CE1'],
            'ce2': ['Kit d\'expériences CE2', 'Matériel de géométrie CE2'],
            'cm1': ['Matériel scientifique CM1', 'Instruments de mesure CM1'],
            'cm2': ['Matériel de laboratoire CM2', 'Outils technologiques CM2']
        }
    };

    const typeOuvrageSelect = document.getElementById('type_ouvrage');
    const niveauSelect = document.getElementById('niveau_scolaire');
    const titreOuvrageSelect = document.getElementById('titre_ouvrage');
    const quantiteInput = document.getElementById('quantite_demandee');
    const budgetInput = document.getElementById('budget_estime');

    // Mise à jour des titres selon type et niveau
    function updateTitres() {
        const typeOuvrage = typeOuvrageSelect.value;
        const niveau = niveauSelect.value;

        titreOuvrageSelect.innerHTML = '<option value="">Sélectionner le titre</option>';

        if (typeOuvrage && niveau && titresOuvrages[typeOuvrage] && titresOuvrages[typeOuvrage][niveau]) {
            titresOuvrages[typeOuvrage][niveau].forEach(titre => {
                const option = document.createElement('option');
                option.value = titre;
                option.textContent = titre;
                titreOuvrageSelect.appendChild(option);
            });
        }
    }

    // Estimation automatique du budget
    function estimerBudget() {
        const typeOuvrage = typeOuvrageSelect.value;
        const quantite = parseInt(quantiteInput.value) || 0;

        // Prix unitaires moyens selon le type (en FCFA)
        const prixUnitaires = {
            'manuel_scolaire': 1500,
            'guide_pedagogique': 2500,
            'livre_lecture': 1200,
            'cahier_activites': 800,
            'atlas_cartes': 3000,
            'materiel_didactique': 2000
        };

        if (typeOuvrage && quantite > 0 && prixUnitaires[typeOuvrage]) {
            const budgetEstime = quantite * prixUnitaires[typeOuvrage];
            budgetInput.value = budgetEstime;
        }
    }

    // Écouteurs d'événements
    typeOuvrageSelect.addEventListener('change', function() {
        updateTitres();
        estimerBudget();
    });
    niveauSelect.addEventListener('change', updateTitres);
    quantiteInput.addEventListener('input', estimerBudget);

    // Validation du formulaire avec PNotify
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const requiredFields = form.querySelectorAll('[required]');
        let isValid = true;
        let missingFields = [];

        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                field.classList.add('is-invalid');
                const label = field.previousElementSibling;
                if (label && label.tagName === 'LABEL') {
                    missingFields.push(label.textContent.replace('*', '').trim());
                }
                isValid = false;
            } else {
                field.classList.remove('is-invalid');
            }
        });

        if (!isValid) {
            new PNotify({
                title: 'Champs manquants',
                text: `Veuillez remplir les champs suivants: ${missingFields.join(', ')}`,
                type: 'error',
                delay: 5000
            });
            return false;
        }

        // Confirmation avec PNotify
        new PNotify({
            title: 'Confirmation de création',
            text: 'Êtes-vous sûr de vouloir créer cette commande ?',
            type: 'question',
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
                title: 'Commande créée',
                text: 'La commande a été créée avec succès dans SIDMAS.',
                type: 'success',
                delay: 3000
            });

            // Ici, soumettre le formulaire réellement
            // form.submit();
        });
    });
});

function resetForm() {
    new PNotify({
        title: 'Confirmation',
        text: 'Êtes-vous sûr de vouloir réinitialiser le formulaire ?',
        type: 'question',
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
        document.querySelector('form').reset();

        // Remettre la date du jour
        document.getElementById('date_commande').value = new Date().toISOString().split('T')[0];

        // Regénérer le numéro de commande
        const randomNum = Math.floor(Math.random() * 999) + 1;
        const newNum = 'CMD-' + new Date().getFullYear() + '-' + randomNum.toString().padStart(3, '0');
        document.getElementById('numero_commande').value = newNum;

        // Remettre les valeurs par défaut
        document.getElementById('annee_scolaire').value = '2024-2025';
        document.getElementById('priorite').value = 'normale';
        document.getElementById('statut_commande').value = 'en_preparation';

        // Vider les selects dépendants
        document.getElementById('titre_ouvrage').innerHTML = '<option value="">Sélectionner le titre</option>';

        new PNotify({
            title: 'Formulaire réinitialisé',
            text: 'Le formulaire a été remis à zéro.',
            type: 'info',
            delay: 2000
        });
    });
}
</script>
@endsection

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
</style>

@endsection
