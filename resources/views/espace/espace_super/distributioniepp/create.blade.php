@extends('layouts.layouts_super.master')
@section('title', 'Créer Distribution IEPP')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-plus"></i> Nouvelle Distribution IEPP</h5>
                            <p class="m-b-0">Créer une nouvelle distribution IEPP</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Accueil</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('distribution_iepp.index') }}">Distribution IEPP</a>
                            </li>
                            <li class="breadcrumb-item active">Nouvelle Distribution</li>
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
                            <h5><i class="feather icon-edit"></i> Informations de la Distribution IEPP</h5>
                        </div>
                        <div class="card-block">
                            <form method="POST" action="#">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dren_id">DREN Superviseur <span class="text-danger">*</span></label>
                            <select class="form-control" id="dren_id" name="dren_id" required>
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
                            <small class="form-text text-muted">Direction Régionale superviseur (structure SIDMAS)</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="iepp_id">IEPP Destinataire <span class="text-danger">*</span></label>
                            <select class="form-control" id="iepp_id" name="iepp_id" required>
                                <option value="">Sélectionner une IEPP</option>
                                <!-- Options dynamiques selon DREN sélectionnée -->
                            </select>
                            <small class="form-text text-muted">Inspection destinataire de la distribution</small>
                        </div>
                    </div>
                </div>

                <!-- Détails des manuels -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="mb-0"><i class="feather icon-book mr-2"></i>Détails des Manuels</h6>
                                <div class="card-header-right">
                                    <button type="button" class="btn btn-sm btn-success waves-effect waves-light" onclick="addManuel()">
                                        <i class="feather icon-plus"></i> Ajouter Manuel
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="manuels-container">
                                    <!-- Manuel 1 -->
                                    <div class="manuel-item card mb-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Type d'ouvrage <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="manuels[0][type_ouvrage]" required>
                                                            <option value="">Sélectionner...</option>
                                                            <option value="manuel_scolaire">Manuel Scolaire</option>
                                                            <option value="guide_pedagogique">Guide Pédagogique</option>
                                                            <option value="livre_lecture">Livre de Lecture</option>
                                                            <option value="cahier_activites">Cahier d'Activités</option>
                                                            <option value="atlas_cartes">Atlas et Cartes</option>
                                                            <option value="materiel_didactique">Matériel Didactique</option>
                                                        </select>
                                                        <small class="form-text text-muted">Classification SIDMAS</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Niveau <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="manuels[0][niveau]" required>
                                                            <option value="">Niveau...</option>
                                                            <option value="prescolaire">Préscolaire</option>
                                                            <option value="cp1">CP1</option>
                                                            <option value="cp2">CP2</option>
                                                            <option value="ce1">CE1</option>
                                                            <option value="ce2">CE2</option>
                                                            <option value="cm1">CM1</option>
                                                            <option value="cm2">CM2</option>
                                                        </select>
                                                        <small class="form-text text-muted">Niveaux primaire</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Titre de l'ouvrage <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="manuels[0][titre_ouvrage]" required>
                                                            <option value="">Sélectionner le titre...</option>
                                                            <!-- Options dynamiques selon type et niveau -->
                                                        </select>
                                                        <small class="form-text text-muted">Référence SIDMAS</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Quantité demandée <span class="text-danger">*</span></label>
                                                        <input type="number"
                                                               class="form-control"
                                                               name="manuels[0][quantite_demandee]"
                                                               min="1"
                                                               placeholder="0"
                                                               required>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label">Quantité livrée</label>
                                                        <input type="number"
                                                               class="form-control"
                                                               name="manuels[0][quantite_livree]"
                                                               min="0"
                                                               placeholder="0">
                                                        <small class="form-text text-muted">Livraison effective</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label class="form-label">Priorité</label>
                                                        <select class="form-control" name="manuels[0][priorite]">
                                                            <option value="normale" selected>Normale</option>
                                                            <option value="urgente">Urgente</option>
                                                            <option value="tres_urgente">Très Urgente</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label class="form-label">&nbsp;</label>
                                                        <button type="button"
                                                                class="btn btn-danger btn-block waves-effect waves-light"
                                                                onclick="supprimerManuel(this)">
                                                            <i class="feather icon-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="alert alert-info">
                                    <i class="feather icon-info mr-2"></i>
                                    <strong>Total :</strong> <span id="total-demandee">0</span> demandés, <span id="total-livree">0</span> livrés
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="annee_scolaire">Année scolaire <span class="text-danger">*</span></label>
                            <select class="form-control" id="annee_scolaire" name="annee_scolaire" required>
                                <option value="">Sélectionner l'année scolaire</option>
                                <option value="2024-2025" selected>2024-2025</option>
                                <option value="2023-2024">2023-2024</option>
                                <option value="2022-2023">2022-2023</option>
                            </select>
                            <small class="form-text text-muted">Année scolaire cible</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date_prevue">Date prévue livraison <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="date_prevue" name="date_prevue" required>
                            <small class="form-text text-muted">Date planifiée de livraison</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="numero_distribution">N° Distribution <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="numero_distribution" name="numero_distribution"
                                   value="DIST-IEPP-{{ date('Y') }}-{{ str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT) }}"
                                   readonly>
                            <small class="form-text text-muted">Numéro auto-généré selon format SIDMAS</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="quantite_totale">Quantité totale d'ouvrages</label>
                            <input type="number" class="form-control" id="quantite_totale" name="quantite_totale"
                                   readonly placeholder="Calculé automatiquement">
                            <small class="form-text text-muted">Somme automatique des quantités par manuel</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="statut">Statut distribution</label>
                            <select class="form-control" id="statut" name="statut">
                                <option value="planifiee" selected>Planifiée</option>
                                <option value="en_preparation">En préparation</option>
                                <option value="en_cours">En cours de livraison</option>
                                <option value="livree">Livrée</option>
                                <option value="retardee">Retardée</option>
                                <option value="annulee">Annulée</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="priorite">Priorité</label>
                            <select class="form-control" id="priorite" name="priorite">
                                <option value="normale" selected>Normale</option>
                                <option value="urgente">Urgente</option>
                                <option value="tres_urgente">Très Urgente</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nombre_epp">Nombre d'EPP ciblées</label>
                            <input type="number" class="form-control" id="nombre_epp" name="nombre_epp"
                                   min="1" placeholder="Nombre d'écoles">
                            <small class="form-text text-muted">Écoles destinataires dans l'IEPP</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="responsable_iepp">Responsable IEPP</label>
                            <input type="text" class="form-control" id="responsable_iepp" name="responsable_iepp"
                                   placeholder="Nom de l'Inspecteur principal">
                            <small class="form-text text-muted">Inspecteur responsable de l'IEPP</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telephone_iepp">Contact IEPP</label>
                            <input type="tel" class="form-control" id="telephone_iepp" name="telephone_iepp"
                                   placeholder="+225 07 XX XX XX XX">
                            <small class="form-text text-muted">Téléphone de l'IEPP destinataire</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="responsable_logistique">Responsable logistique</label>
                            <input type="text" class="form-control" id="responsable_logistique" name="responsable_logistique"
                                   placeholder="Nom du responsable transport/livraison">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="vehicule_transport">Moyen de transport</label>
                            <select class="form-control" id="vehicule_transport" name="vehicule_transport">
                                <option value="">Sélectionner un véhicule</option>
                                <option value="camion_dren_01">Camion DREN-001</option>
                                <option value="camion_dren_02">Camion DREN-002</option>
                                <option value="pick_up_iepp">Pick-up IEPP</option>
                                <option value="bus_transport">Bus de Transport</option>
                                <option value="vehicule_externe">Véhicule externe</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="adresse_depot">Adresse dépôt/point de collecte</label>
                            <textarea class="form-control" id="adresse_depot" name="adresse_depot" rows="2"
                                      placeholder="Adresse du dépôt régional ou centre de distribution DREN..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="observations">Observations et instructions</label>
                            <textarea class="form-control" id="observations" name="observations" rows="3"
                                      placeholder="Instructions particulières, contraintes logistiques, remarques..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="urgente" name="urgente">
                                <label class="form-check-label" for="urgente">
                                    <strong>Distribution urgente</strong> (livraison prioritaire)
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="distribution_groupee" name="distribution_groupee">
                                <label class="form-check-label" for="distribution_groupee">
                                    <strong>Distribution groupée</strong> (plusieurs EPP simultanément)
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
                                <a href="{{ route('distribution_iepp.index') }}" class="btn btn-inverse">
                                    <i class="feather icon-arrow-left"></i> Retour
                                </a>
                                <button type="button" class="btn btn-outline-primary" onclick="resetForm()">
                                    <i class="feather icon-refresh-cw"></i> Réinitialiser
                                </button>
                                <button type="submit" class="btn btn-primary">
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

@endsection

@section('scripts')
<script>
let manuelIndex = 1;

document.addEventListener('DOMContentLoaded', function() {
    // Calculer le total initial
    calculateTotals();

    // Données SIDMAS pour les relations DREN → IEPP
    const drenIeppMap = {
        'DREN-ABJ1': [
            {value: 'IEPP-ABJ1-01', text: 'IEPP Cocody-Bingerville'},
            {value: 'IEPP-ABJ1-02', text: 'IEPP Plateau-Marcory'},
            {value: 'IEPP-ABJ1-03', text: 'IEPP Adjamé-Attécoubé'}
        ],
        'DREN-ABJ2': [
            {value: 'IEPP-ABJ2-01', text: 'IEPP Abobo-Est'},
            {value: 'IEPP-ABJ2-02', text: 'IEPP Abobo-Ouest'},
            {value: 'IEPP-ABJ2-03', text: 'IEPP Anyama-Bingerville'}
        ],
        'DREN-ABJ3': [
            {value: 'IEPP-ABJ3-01', text: 'IEPP Yopougon-Ouest'},
            {value: 'IEPP-ABJ3-02', text: 'IEPP Yopougon-Est'},
            {value: 'IEPP-ABJ3-03', text: 'IEPP Port-Bouët-Koumassi'}
        ],
        'DREN-BOU1': [
            {value: 'IEPP-BOU1-01', text: 'IEPP Bouaké Centre'},
            {value: 'IEPP-BOU1-02', text: 'IEPP Bouaké Nord'},
            {value: 'IEPP-BOU1-03', text: 'IEPP Sakassou-Béoumi'}
        ],
        'DREN-YAM': [
            {value: 'IEPP-YAM-01', text: 'IEPP Yamoussoukro'},
            {value: 'IEPP-YAM-02', text: 'IEPP Tiébissou-Toumodi'}
        ]
    };

    // Titres d'ouvrages par type et niveau (base SIDMAS)
    const titresOuvrages = {
        'manuel_scolaire': {
            'prescolaire': ['Album préscolaire - Découverte', 'Cahier de graphisme préscolaire'],
            'cp1': ['Mon premier livre de lecture CP1', 'Mathématiques CP1 - Je compte et je calcule'],
            'cp2': ['Lecture et expression écrite CP2', 'Mathématiques CP2 - Découverte des nombres'],
            'ce1': ['Français CE1 - Lire et comprendre', 'Mathématiques CE1 - Géométrie et calcul'],
            'ce2': ['Français CE2 - Expression et communication', 'Sciences d\'observation CE2'],
            'cm1': ['Histoire-Géographie CM1', 'Mathématiques CM1 - Problèmes et solutions'],
            'cm2': ['Français CM2 - Préparation à la 6ème', 'Sciences et technologie CM2']
        },
        'guide_pedagogique': {
            'cp1': ['Guide du maître Lecture CP1', 'Guide pédagogique Mathématiques CP1'],
            'cp2': ['Guide du maître Lecture CP2', 'Guide pédagogique Mathématiques CP2'],
            'ce1': ['Guide du maître Français CE1', 'Guide pédagogique Sciences CE1'],
            'ce2': ['Guide méthodologique CE2', 'Guide d\'évaluation CE2'],
            'cm1': ['Guide du maître Histoire-Géo CM1', 'Guide pédagogique Mathématiques CM1'],
            'cm2': ['Guide méthodologique CM2', 'Guide d\'évaluation CM2']
        },
        'livre_lecture': {
            'cp1': ['Lecture progressive CP1', 'Conte et histoires CP1'],
            'cp2': ['Lecture enrichie CP2', 'Bibliothèque de classe CP2'],
            'ce1': ['Lecture suivie CE1', 'Roman jeunesse CE1'],
            'ce2': ['Lecture documentaire CE2', 'Récits d\'aventure CE2']
        },
        'cahier_activites': {
            'cp2': ['Cahier d\'exercices Lecture CP2', 'Cahier d\'activités Mathématiques CP2'],
            'ce1': ['Cahier d\'exercices Français CE1', 'Cahier de travaux pratiques CE1'],
            'ce2': ['Cahier d\'exercices Français CE2', 'Cahier de travaux pratiques Sciences CE2'],
            'cm1': ['Cahier d\'activités Histoire-Géo CM1', 'Cahier d\'exercices Mathématiques CM1'],
            'cm2': ['Cahier de préparation CM2', 'Cahier d\'évaluation CM2']
        },
        'atlas_cartes': {
            'ce2': ['Atlas géographique CE2', 'Cartes historiques CE2'],
            'cm1': ['Atlas de la Côte d\'Ivoire CM1', 'Cartes géographiques CM1'],
            'cm2': ['Atlas mondial CM2', 'Cartes thématiques CM2']
        },
        'materiel_didactique': {
            'prescolaire': ['Jeux éducatifs préscolaire', 'Matériel de manipulation'],
            'cp1': ['Matériel de numération CP1', 'Supports visuels CP1'],
            'cp2': ['Matériel de calcul CP2', 'Supports pédagogiques CP2']
        }
    };

    const drenSelect = document.getElementById('dren_id');
    const ieppSelect = document.getElementById('iepp_id');

    // Mise à jour des IEPP selon DREN sélectionnée
    drenSelect.addEventListener('change', function() {
        const selectedDren = this.value;
        ieppSelect.innerHTML = '<option value="">Sélectionner une IEPP</option>';

        if (selectedDren && drenIeppMap[selectedDren]) {
            drenIeppMap[selectedDren].forEach(iepp => {
                const option = document.createElement('option');
                option.value = iepp.value;
                option.textContent = iepp.text;
                ieppSelect.appendChild(option);
            });
        }
    });

    // Écouter les changements dans les selects de type et niveau pour mettre à jour les titres
    document.addEventListener('change', function(e) {
        if (e.target.name && (e.target.name.includes('[type_ouvrage]') || e.target.name.includes('[niveau]'))) {
            updateTitresManuel(e.target);
        }
    });

    // Écouter les changements dans les quantités
    document.addEventListener('input', function(e) {
        if (e.target.name && (e.target.name.includes('[quantite_demandee]') || e.target.name.includes('[quantite_livree]'))) {
            calculateTotals();
        }
    });

    // Fonction pour mettre à jour les titres selon type et niveau
    window.updateTitresManuel = function(changedElement) {
        const manuelContainer = changedElement.closest('.manuel-item');
        if (!manuelContainer) return;

        const typeSelect = manuelContainer.querySelector('select[name*="[type_ouvrage]"]');
        const niveauSelect = manuelContainer.querySelector('select[name*="[niveau]"]');
        const titreSelect = manuelContainer.querySelector('select[name*="[titre_ouvrage]"]');

        if (!typeSelect || !niveauSelect || !titreSelect) return;

        const typeOuvrage = typeSelect.value;
        const niveau = niveauSelect.value;

        titreSelect.innerHTML = '<option value="">Sélectionner le titre...</option>';

        if (typeOuvrage && niveau && titresOuvrages[typeOuvrage] && titresOuvrages[typeOuvrage][niveau]) {
            titresOuvrages[typeOuvrage][niveau].forEach(titre => {
                const option = document.createElement('option');
                option.value = titre.toLowerCase().replace(/[^a-z0-9]/g, '_');
                option.textContent = titre;
                titreSelect.appendChild(option);
            });
        }
    };

    // Fonctions globales pour la gestion des manuels
    window.addManuel = function() {
        const container = document.getElementById('manuels-container');
        const manuelItem = document.createElement('div');
        manuelItem.className = 'manuel-item card mb-3';
        manuelItem.innerHTML = `
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label">Type d'ouvrage <span class="text-danger">*</span></label>
                            <select class="form-control" name="manuels[${manuelIndex}][type_ouvrage]" required>
                                <option value="">Sélectionner...</option>
                                <option value="manuel_scolaire">Manuel Scolaire</option>
                                <option value="guide_pedagogique">Guide Pédagogique</option>
                                <option value="livre_lecture">Livre de Lecture</option>
                                <option value="cahier_activites">Cahier d'Activités</option>
                                <option value="atlas_cartes">Atlas et Cartes</option>
                                <option value="materiel_didactique">Matériel Didactique</option>
                            </select>
                            <small class="form-text text-muted">Classification SIDMAS</small>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label">Niveau <span class="text-danger">*</span></label>
                            <select class="form-control" name="manuels[${manuelIndex}][niveau]" required>
                                <option value="">Niveau...</option>
                                <option value="prescolaire">Préscolaire</option>
                                <option value="cp1">CP1</option>
                                <option value="cp2">CP2</option>
                                <option value="ce1">CE1</option>
                                <option value="ce2">CE2</option>
                                <option value="cm1">CM1</option>
                                <option value="cm2">CM2</option>
                            </select>
                            <small class="form-text text-muted">Niveaux primaire</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-label">Titre de l'ouvrage <span class="text-danger">*</span></label>
                            <select class="form-control" name="manuels[${manuelIndex}][titre_ouvrage]" required>
                                <option value="">Sélectionner le titre...</option>
                            </select>
                            <small class="form-text text-muted">Référence SIDMAS</small>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label">Quantité demandée <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="manuels[${manuelIndex}][quantite_demandee]"
                                   min="1" placeholder="0" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label">Quantité livrée</label>
                            <input type="number" class="form-control" name="manuels[${manuelIndex}][quantite_livree]"
                                   min="0" placeholder="0">
                            <small class="form-text text-muted">Livraison effective</small>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label class="form-label">Priorité</label>
                            <select class="form-control" name="manuels[${manuelIndex}][priorite]">
                                <option value="normale" selected>Normale</option>
                                <option value="urgente">Urgente</option>
                                <option value="tres_urgente">Très Urgente</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label class="form-label">&nbsp;</label>
                            <button type="button" class="btn btn-danger btn-block waves-effect waves-light" onclick="supprimerManuel(this)">
                                <i class="feather icon-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;

        container.appendChild(manuelItem);
        
        const newTypeSelect = manuelItem.querySelector('select[name*="[type_ouvrage]"]');
        const newNiveauSelect = manuelItem.querySelector('select[name*="[niveau]"]');
        
        if (newTypeSelect) {
            newTypeSelect.addEventListener('change', function() {
                updateTitresManuel(this);
            });
        }
        
        if (newNiveauSelect) {
            newNiveauSelect.addEventListener('change', function() {
                updateTitresManuel(this);
            });
        }
        
        manuelIndex++;
        calculateTotals();
    };

    window.supprimerManuel = function(btn) {
        if (document.querySelectorAll('.manuel-item').length <= 1) {
            new PNotify({
                title: 'Attention',
                text: 'Vous devez conserver au moins un manuel dans la distribution.',
                type: 'warning'
            });
            return;
        }

        new PNotify({
            title: 'Confirmation',
            text: 'Êtes-vous sûr de vouloir supprimer ce manuel ?',
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
            btn.closest('.manuel-item').remove();
            calculateTotals();

            new PNotify({
                title: 'Succès',
                text: 'Manuel supprimé avec succès',
                type: 'success'
            });
        });
    };

    window.calculateTotals = function() {
        const quantites = document.querySelectorAll('input[name*="[quantite_demandee]"]');
        const quantitesLivrees = document.querySelectorAll('input[name*="[quantite_livree]"]');
        const quantiteTotaleInput = document.getElementById('quantite_totale');

        let totalDemandee = 0;
        let totalLivree = 0;

        quantites.forEach(input => {
            if (input.value && parseInt(input.value) > 0) {
                totalDemandee += parseInt(input.value);
            }
        });

        quantitesLivrees.forEach(input => {
            if (input.value && parseInt(input.value) >= 0) {
                totalLivree += parseInt(input.value);
            }
        });

        document.getElementById('total-demandee').textContent = totalDemandee;
        document.getElementById('total-livree').textContent = totalLivree;
        if (quantiteTotaleInput) {
            quantiteTotaleInput.value = totalDemandee;
        }
    };

    // Validation du formulaire avec PNotify
    const form = document.querySelector('form');
    if (form) {
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

            new PNotify({
                title: 'Confirmation de création',
                text: 'Êtes-vous sûr de vouloir créer cette distribution IEPP ?',
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
                    title: 'Distribution créée',
                    text: 'La distribution IEPP a été créée avec succès dans SIDMAS.',
                    type: 'success',
                    delay: 3000
                });
            });
        });
    }
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

        const randomNum = Math.floor(Math.random() * 999) + 1;
        const newNum = 'DIST-IEPP-' + new Date().getFullYear() + '-' + randomNum.toString().padStart(3, '0');
        document.getElementById('numero_distribution').value = newNum;

        document.getElementById('statut').value = 'planifiee';
        document.getElementById('priorite').value = 'normale';
        document.getElementById('annee_scolaire').value = '2024-2025';

        document.getElementById('iepp_id').innerHTML = '<option value="">Sélectionner une IEPP</option>';

        const container = document.getElementById('manuels-container');
        const firstManuel = container.querySelector('.manuel-item');
        container.innerHTML = '';
        if (firstManuel) {
            firstManuel.querySelectorAll('select').forEach(select => select.selectedIndex = 0);
            firstManuel.querySelectorAll('input[type="number"]').forEach(input => input.value = '');
            container.appendChild(firstManuel);
        }
        
        calculateTotals();

        new PNotify({
            title: 'Formulaire réinitialisé',
            text: 'Le formulaire a été remis à zéro.',
            type: 'info',
            delay: 2000
        });
    });
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

.form-check-input:checked {
    background-color: #4e73df;
    border-color: #4e73df;
}
</style>

@endsection