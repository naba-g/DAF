@extends('layouts.layouts_super.master')
@section('title', 'Modifier EPP')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-edit"></i> Modifier l'EPP</h5>
                            <p class="m-b-0">Modifier les informations de l'école primaire publique</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Accueil</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('epp.index') }}">EPP</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('epp.show', 1) }}">Détails</a>
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
                    <form id="editEppForm" action="{{ route('epp.update', 1) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Informations de base -->
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="feather icon-edit"></i> Informations de base de l'EPP</h5>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nom_ecole" class="form-label required">Nom de l'École</label>
                                            <input type="text"
                                                class="form-control"
                                                id="nom_ecole"
                                                name="nom_ecole"
                                                value="EPP Plateau 1"
                                                required>
                                            @error('nom_ecole')
                                            <div class="form-control-feedback text-danger">{{ $message }}</div>
                                            @enderror
                                            <small class="form-text text-muted">Dénomination officielle selon SIDMAS</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="code_epp" class="form-label required">Code EPP</label>
                                            <input type="text"
                                                class="form-control"
                                                id="code_epp"
                                                name="code_epp"
                                                value="EPP-ABJ1-PLT-001"
                                                pattern="EPP-[A-Z0-9]+-[A-Z0-9]+-[0-9]+"
                                                required>
                                            @error('code_epp')
                                            <div class="form-control-feedback text-danger">{{ $message }}</div>
                                            @enderror
                                            <small class="form-text text-muted">Format: EPP-{DREN}-{IEPP}-{SEQ} selon structure SIDMAS</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="dren_id" class="form-label required">Direction Régionale (DREN)</label>
                                            <select class="form-control" id="dren_id" name="dren_id" required onchange="loadIeppByDren()">
                                                <option value="">Sélectionner une DREN</option>
                                                <!-- Données basées sur SIDMAS (56 DREN) avec structure hiérarchique -->
                                                <optgroup label="Zone Abidjan">
                                                    <option value="1" selected>DREN ABIDJAN 1</option>
                                                    <option value="2">DREN ABIDJAN 2</option>
                                                    <option value="3">DREN ABIDJAN 3</option>
                                                    <option value="4">DREN LAGUNES</option>
                                                    <option value="5">DREN AGNEBY-TIASSA</option>
                                                    <option value="6">DREN GRANDS-PONTS</option>
                                                </optgroup>
                                                <optgroup label="Zone Centre">
                                                    <option value="7">DREN BOUAKE 1</option>
                                                    <option value="8">DREN BOUAKE 2</option>
                                                    <option value="9">DREN YAMOUSSOUKRO</option>
                                                    <option value="10">DREN LACS</option>
                                                    <option value="11">DREN GBEKE</option>
                                                    <option value="12">DREN BELIER</option>
                                                    <option value="13">DREN IFFOU</option>
                                                    <option value="14">DREN MARAHOUE</option>
                                                </optgroup>
                                                <optgroup label="Zone Nord">
                                                    <option value="15">DREN KORHOGO</option>
                                                    <option value="16">DREN PORO</option>
                                                    <option value="17">DREN TCHOLOGO</option>
                                                    <option value="18">DREN BAGOUE</option>
                                                    <option value="19">DREN KABADOUGOU</option>
                                                    <option value="20">DREN HAMBOL</option>
                                                    <option value="21">DREN BOUNKANI</option>
                                                    <option value="22">DREN FOLON</option>
                                                    <option value="23">DREN BAFING</option>
                                                </optgroup>
                                                <optgroup label="Zone Ouest">
                                                    <option value="24">DREN MAN</option>
                                                    <option value="25">DREN TONKPI</option>
                                                    <option value="26">DREN CAVALLY</option>
                                                    <option value="27">DREN GUEMON</option>
                                                    <option value="28">DREN DALOA</option>
                                                    <option value="29">DREN HAUT-SASSANDRA</option>
                                                    <option value="30">DREN GBOKLE</option>
                                                    <option value="31">DREN SAN PEDRO</option>
                                                    <option value="32">DREN NAWA</option>
                                                </optgroup>
                                                <optgroup label="Zone Est">
                                                    <option value="33">DREN ABENGOUROU</option>
                                                    <option value="34">DREN INDENIE-DJUABLIN</option>
                                                    <option value="35">DREN BONDOUKOU</option>
                                                    <option value="36">DREN GONTOUGO</option>
                                                    <option value="37">DREN AGNIBILEKROU</option>
                                                    <option value="38">DREN MORONOU</option>
                                                </optgroup>
                                                <optgroup label="Zone Sud">
                                                    <option value="39">DREN GAGNOA</option>
                                                    <option value="40">DREN GOH-DJIBOUA</option>
                                                    <option value="41">DREN DIVO</option>
                                                    <option value="42">DREN LOH-DJIBOUA</option>
                                                    <option value="43">DREN SUD-COMOE</option>
                                                    <option value="44">DREN WORODOUGOU</option>
                                                </optgroup>
                                            </select>
                                            <small class="form-text text-muted">Structure administrative selon SIDMAS</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="iepp_id" class="form-label required">Inspection (IEPP)</label>
                                            <select class="form-control" id="iepp_id" name="iepp_id" required>
                                                <option value="">-- Chargement des IEPP... --</option>
                                                <option value="1" selected>IEPP PLATEAU</option>
                                                <option value="2">IEPP COCODY</option>
                                                <option value="3">IEPP MARCORY</option>
                                                <option value="4">IEPP TREICHVILLE</option>
                                            </select>
                                            <small class="form-text text-muted">295 inspections disponibles selon la DREN</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="zone_geographique" class="form-label required">Zone géographique</label>
                                            <select class="form-control" id="zone_geographique" name="zone_geographique" required>
                                                <option value="">Sélectionner une zone</option>
                                                <option value="Zone Abidjan" selected>Zone Abidjan</option>
                                                <option value="Zone Centre">Zone Centre</option>
                                                <option value="Zone Nord">Zone Nord</option>
                                                <option value="Zone Ouest">Zone Ouest</option>
                                                <option value="Zone Est">Zone Est</option>
                                                <option value="Zone Sud">Zone Sud</option>
                                            </select>
                                            <small class="form-text text-muted">Classification géographique SIDMAS</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="commune" class="form-label required">Commune/Ville</label>
                                            <input type="text"
                                                class="form-control"
                                                id="commune"
                                                name="commune"
                                                value="Plateau"
                                                required>
                                            <small class="form-text text-muted">Localité administrative</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="quartier" class="form-label">Quartier/Village</label>
                                            <input type="text"
                                                class="form-control"
                                                id="quartier"
                                                name="quartier"
                                                value="Plateau Nord">
                                            <small class="form-text text-muted">Précision géographique</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="adresse_complete" class="form-label">Adresse complète</label>
                                            <textarea class="form-control"
                                                id="adresse_complete"
                                                name="adresse_complete"
                                                rows="3">Rue des Écoles, Plateau Nord, BP 5678 Abidjan, Côte d'Ivoire</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Caractéristiques de l'école -->
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="feather icon-home"></i> Caractéristiques de l'École</h5>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="type_ecole" class="form-label required">Type d'École</label>
                                            <select class="form-control" id="type_ecole" name="type_ecole" required>
                                                <option value="">Sélectionner un type</option>
                                                <option value="complete" selected>École Complète</option>
                                                <option value="incomplete">École Incomplète</option>
                                                <option value="maternelle">École Maternelle</option>
                                                <option value="mixte">École Mixte</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="cycle_disponible" class="form-label required">Cycles Disponibles</label>
                                            <select class="form-control" id="cycle_disponible" name="cycle_disponible" required>
                                                <option value="">Sélectionner un cycle</option>
                                                <option value="prescolaire">Préscolaire uniquement</option>
                                                <option value="cp1_cp2">CP1-CP2</option>
                                                <option value="ce1_ce2">CE1-CE2</option>
                                                <option value="cm1_cm2">CM1-CM2</option>
                                                <option value="primaire_complet" selected>Primaire complet (CP1-CM2)</option>
                                                <option value="prescolaire_primaire">Préscolaire + Primaire</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="statut" class="form-label required">Statut</label>
                                            <select class="form-control" id="statut" name="statut" required>
                                                <option value="">Sélectionner un statut</option>
                                                <option value="active" selected>Active</option>
                                                <option value="inactive">Inactive</option>
                                                <option value="en_construction">En construction</option>
                                                <option value="en_renovation">En rénovation</option>
                                                <option value="fermee">Fermée</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="date_creation" class="form-label">Date de création</label>
                                            <input type="date"
                                                class="form-control"
                                                id="date_creation"
                                                name="date_creation"
                                                value="2018-09-15">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="zone_intervention" class="form-label">Zone d'intervention</label>
                                            <select class="form-control" id="zone_intervention" name="zone_intervention">
                                                <option value="">Sélectionner une zone</option>
                                                <option value="urbaine" selected>Urbaine</option>
                                                <option value="rurale">Rurale</option>
                                                <option value="mixte">Mixte</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="capacite_accueil" class="form-label">Capacité d'accueil</label>
                                            <input type="number"
                                                class="form-control"
                                                id="capacite_accueil"
                                                name="capacite_accueil"
                                                min="0"
                                                value="500">
                                            <small class="form-text text-muted">Nombre maximum d'élèves selon SIDMAS</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="effectif_actuel" class="form-label">Effectif actuel</label>
                                            <input type="number"
                                                class="form-control"
                                                id="effectif_actuel"
                                                name="effectif_actuel"
                                                min="0"
                                                value="450">
                                            <small class="form-text text-muted">Élèves actuellement inscrits</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Niveaux enseignés</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="ps" name="niveaux[]" value="ps">
                                                        <label class="form-check-label" for="ps">Petite Section (PS)</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="ms" name="niveaux[]" value="ms">
                                                        <label class="form-check-label" for="ms">Moyenne Section (MS)</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gs" name="niveaux[]" value="gs">
                                                        <label class="form-check-label" for="gs">Grande Section (GS)</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="cp1" name="niveaux[]" value="cp1" checked>
                                                        <label class="form-check-label" for="cp1">CP1</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="cp2" name="niveaux[]" value="cp2" checked>
                                                        <label class="form-check-label" for="cp2">CP2</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="ce1" name="niveaux[]" value="ce1" checked>
                                                        <label class="form-check-label" for="ce1">CE1</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="ce2" name="niveaux[]" value="ce2" checked>
                                                        <label class="form-check-label" for="ce2">CE2</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="cm1" name="niveaux[]" value="cm1" checked>
                                                        <label class="form-check-label" for="cm1">CM1</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="cm2" name="niveaux[]" value="cm2" checked>
                                                        <label class="form-check-label" for="cm2">CM2</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="annee_scolaire" class="form-label">Année scolaire de création</label>
                                            <input type="text"
                                                class="form-control"
                                                id="annee_scolaire"
                                                name="annee_scolaire"
                                                pattern="[0-9]{4}-[0-9]{4}"
                                                value="2018-2019">
                                            <small class="form-text text-muted">Format: AAAA-AAAA</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nombre_classes" class="form-label">Nombre de classes</label>
                                            <input type="number"
                                                class="form-control"
                                                id="nombre_classes"
                                                name="nombre_classes"
                                                min="0"
                                                value="8">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="code_epp_auto" class="form-label">Code Auto-généré</label>
                                            <input type="text"
                                                class="form-control bg-light"
                                                id="code_epp_auto"
                                                name="code_epp_auto"
                                                value="EPP-ABJ1-PLT-001"
                                                readonly>
                                            <small class="form-text text-muted">Généré selon DREN-IEPP-Séquence</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Personnel et Direction -->
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="feather icon-users"></i> Personnel et Direction</h5>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="directeur" class="form-label required">Directeur/Directrice</label>
                                            <input type="text"
                                                class="form-control"
                                                id="directeur"
                                                name="directeur"
                                                value="M. KOUAME Yves"
                                                required>
                                            <small class="form-text text-muted">Directeur en poste selon SIDMAS</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="contact_directeur" class="form-label">Contact du Directeur</label>
                                            <input type="tel"
                                                class="form-control"
                                                id="contact_directeur"
                                                name="contact_directeur"
                                                value="+225 07 45 67 89 12">
                                            <small class="form-text text-muted">Numéro de téléphone officiel</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nombre_enseignants" class="form-label">Nombre d'enseignants</label>
                                            <input type="number"
                                                class="form-control"
                                                id="nombre_enseignants"
                                                name="nombre_enseignants"
                                                min="0"
                                                value="12">
                                            <small class="form-text text-muted">Total enseignants toutes catégories</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nombre_fonctionnaires" class="form-label">Enseignants Fonctionnaires</label>
                                            <input type="number"
                                                class="form-control"
                                                id="nombre_fonctionnaires"
                                                name="nombre_fonctionnaires"
                                                min="0"
                                                value="8">
                                            <small class="form-text text-muted">Fonctionnaires de l'État</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nombre_volontaires" class="form-label">Enseignants Volontaires</label>
                                            <input type="number"
                                                class="form-control"
                                                id="nombre_volontaires"
                                                name="nombre_volontaires"
                                                min="0"
                                                value="4">
                                            <small class="form-text text-muted">Volontaires de l'enseignement</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombre_eleves_filles" class="form-label">Nombre d'Élèves Filles</label>
                                            <input type="number"
                                                class="form-control"
                                                id="nombre_eleves_filles"
                                                name="nombre_eleves_filles"
                                                min="0"
                                                value="220">
                                            <small class="form-text text-muted">Effectif féminin selon SIDMAS</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombre_eleves_garcons" class="form-label">Nombre d'Élèves Garçons</label>
                                            <input type="number"
                                                class="form-control"
                                                id="nombre_eleves_garcons"
                                                name="nombre_eleves_garcons"
                                                min="0"
                                                value="230">
                                            <small class="form-text text-muted">Effectif masculin selon SIDMAS</small>
                                        </div>
                                    </div>
                                </div>


                                <!-- Infrastructure et Équipements -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5><i class="feather icon-settings"></i> Infrastructure et Équipements</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="nombre_salles_classe" class="form-label">Salles de classe</label>
                                                    <input type="number"
                                                        class="form-control"
                                                        id="nombre_salles_classe"
                                                        name="nombre_salles_classe"
                                                        min="0"
                                                        value="8">
                                                    <small class="form-text text-muted">Nombre total de salles</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="nombre_bureaux" class="form-label">Bureaux administratifs</label>
                                                    <input type="number"
                                                        class="form-control"
                                                        id="nombre_bureaux"
                                                        name="nombre_bureaux"
                                                        min="0"
                                                        value="2">
                                                    <small class="form-text text-muted">Direction et secrétariat</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="etat_infrastructure" class="form-label">État des infrastructures</label>
                                                    <select class="form-control" id="etat_infrastructure" name="etat_infrastructure">
                                                        <option value="bon" selected>Bon état</option>
                                                        <option value="moyen">État moyen</option>
                                                        <option value="mauvais">Mauvais état</option>
                                                        <option value="renovation">En rénovation</option>
                                                    </select>
                                                    <small class="form-text text-muted">Évaluation globale</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Équipements disponibles</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="bibliotheque" name="equipements[]" value="bibliotheque" checked>
                                                                <label class="form-check-label" for="bibliotheque">Bibliothèque</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="cantine" name="equipements[]" value="cantine" checked>
                                                                <label class="form-check-label" for="cantine">Cantine scolaire</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="infirmerie" name="equipements[]" value="infirmerie" checked>
                                                                <label class="form-check-label" for="infirmerie">Infirmerie</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="terrain_sport" name="equipements[]" value="terrain_sport" checked>
                                                                <label class="form-check-label" for="terrain_sport">Terrain de sport</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="salle_informatique" name="equipements[]" value="salle_informatique" checked>
                                                                <label class="form-check-label" for="salle_informatique">Salle informatique</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="electricite" name="equipements[]" value="electricite" checked>
                                                                <label class="form-check-label" for="electricite">Électricité</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="eau_courante" name="equipements[]" value="eau_courante" checked>
                                                                <label class="form-check-label" for="eau_courante">Eau courante</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="toilettes" name="equipements[]" value="toilettes" checked>
                                                                <label class="form-check-label" for="toilettes">Toilettes</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="acces_internet" class="form-label">Accès Internet</label>
                                                    <select class="form-control" id="acces_internet" name="acces_internet">
                                                        <option value="aucun">Aucun accès</option>
                                                        <option value="wifi" selected>WiFi disponible</option>
                                                        <option value="fibre">Fibre optique</option>
                                                        <option value="mobile">Réseau mobile</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="source_eau" class="form-label">Source d'eau</label>
                                                    <select class="form-control" id="source_eau" name="source_eau">
                                                        <option value="reseau" selected>Réseau public</option>
                                                        <option value="forage">Forage</option>
                                                        <option value="puits">Puits</option>
                                                        <option value="aucune">Aucune</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="systeme_eclairage" class="form-label">Système d'éclairage</label>
                                                    <select class="form-control" id="systeme_eclairage" name="systeme_eclairage">
                                                        <option value="reseau" selected>Réseau électrique</option>
                                                        <option value="solaire">Panneaux solaires</option>
                                                        <option value="groupe">Groupe électrogène</option>
                                                        <option value="aucun">Aucun</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Observations  -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5><i class="feather icon-bar-chart"></i> Effectifs détaillés par niveau</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="effectif_cp1" class="form-label">Effectif CP1</label>
                                                    <input type="number"
                                                        class="form-control"
                                                        id="effectif_cp1"
                                                        name="effectif_cp1"
                                                        min="0"
                                                        value="{{ old('effectif_cp1') }}"
                                                        placeholder="Ex: 75">
                                                    <small class="form-text text-muted">Nombre d'élèves en CP1</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="effectif_cp2" class="form-label">Effectif CP2</label>
                                                    <input type="number"
                                                        class="form-control"
                                                        id="effectif_cp2"
                                                        name="effectif_cp2"
                                                        min="0"
                                                        value="{{ old('effectif_cp2') }}"
                                                        placeholder="Ex: 80">
                                                    <small class="form-text text-muted">Nombre d'élèves en CP2</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="effectif_ce1" class="form-label">Effectif CE1</label>
                                                    <input type="number"
                                                        class="form-control"
                                                        id="effectif_ce1"
                                                        name="effectif_ce1"
                                                        min="0"
                                                        value="{{ old('effectif_ce1') }}"
                                                        placeholder="Ex: 78">
                                                    <small class="form-text text-muted">Nombre d'élèves en CE1</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="effectif_ce2" class="form-label">Effectif CE2</label>
                                                    <input type="number"
                                                        class="form-control"
                                                        id="effectif_ce2"
                                                        name="effectif_ce2"
                                                        min="0"
                                                        value="{{ old('effectif_ce2') }}"
                                                        placeholder="Ex: 72">
                                                    <small class="form-text text-muted">Nombre d'élèves en CE2</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="effectif_cm1" class="form-label">Effectif CM1</label>
                                                    <input type="number"
                                                        class="form-control"
                                                        id="effectif_cm1"
                                                        name="effectif_cm1"
                                                        min="0"
                                                        value="{{ old('effectif_cm1') }}"
                                                        placeholder="Ex: 70">
                                                    <small class="form-text text-muted">Nombre d'élèves en CM1</small>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="effectif_cm2" class="form-label">Effectif CM2</label>
                                                    <input type="number"
                                                        class="form-control"
                                                        id="effectif_cm2"
                                                        name="effectif_cm2"
                                                        min="0"
                                                        value="{{ old('effectif_cm2') }}"
                                                        placeholder="Ex: 75">
                                                    <small class="form-text text-muted">Nombre d'élèves en CM2</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="effectif_prescolaire" class="form-label">Effectif Préscolaire total</label>
                                                    <input type="number"
                                                        class="form-control"
                                                        id="effectif_prescolaire"
                                                        name="effectif_prescolaire"
                                                        min="0"
                                                        value="{{ old('effectif_prescolaire') }}"
                                                        placeholder="Ex: 45">
                                                    <small class="form-text text-muted">Total PS + MS + GS</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="total_effectif_calcule" class="form-label">Total calculé</label>
                                                    <input type="number"
                                                        class="form-control bg-light"
                                                        id="total_effectif_calcule"
                                                        name="total_effectif_calcule"
                                                        readonly
                                                        placeholder="Calculé automatiquement">
                                                    <small class="form-text text-muted">Somme automatique de tous les niveaux</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- Journalisation -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">
                                            <i class="fas fa-history"></i> Informations de suivi
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="info-group">
                                                    <label class="info-label">Créé le</label>
                                                    <div class="info-value">15 septembre 2018</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="info-group">
                                                    <label class="info-label">Créé par</label>
                                                    <div class="info-value">Admin Système</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="info-group">
                                                    <label class="info-label">Dernière modification</label>
                                                    <div class="info-value">{{ date('d M Y') }}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="info-group">
                                                    <label class="info-label">Modifié par</label>
                                                    <div class="info-value">{{ Auth::user()->name ?? 'Utilisateur actuel' }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Boutons d'action -->
                                <div class="card">
                                    <div class="card-block text-center">
                                        <button type="submit" class="btn btn-success btn-lg waves-effect waves-light">
                                            <i class="feather icon-save"></i> Enregistrer les modifications
                                        </button>
                                        <button type="reset" class="btn btn-warning btn-lg waves-effect">
                                            <i class="feather icon-refresh-cw"></i> Réinitialiser
                                        </button>
                                        <a href="{{ route('epp.show', 1) }}" class="btn btn-info btn-lg waves-effect">
                                            <i class="feather icon-eye"></i> Voir les détails
                                        </a>
                                        <a href="{{ route('epp.index') }}" class="btn btn-inverse btn-lg waves-effect">
                                            <i class="feather icon-arrow-left"></i> Retour à la liste
                                        </a>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Page-body end -->
    </div>
</div>

<!-- Script pour la validation et l'interactivité -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('editEppForm');

        // Mise à jour des labels des fichiers
        const fileInputs = document.querySelectorAll('.custom-file-input');
        fileInputs.forEach(input => {
            input.addEventListener('change', function() {
                const fileName = this.files[0] ? this.files[0].name : 'Choisir un fichier';
                const label = this.nextElementSibling;
                label.textContent = fileName;
            });
        });

        // Auto-calcul de l'effectif total
        function calculateTotal() {
            const effectifInputs = [
                'effectif_cp1', 'effectif_cp2', 'effectif_ce1',
                'effectif_ce2', 'effectif_cm1', 'effectif_cm2'
            ];

            let total = 0;
            effectifInputs.forEach(inputId => {
                const input = document.getElementById(inputId);
                if (input && input.value) {
                    total += parseInt(input.value) || 0;
                }
            });

            document.getElementById('effectif_actuel').value = total;
        }

        // Ajouter les listeners pour le calcul automatique
        ['effectif_cp1', 'effectif_cp2', 'effectif_ce1', 'effectif_ce2', 'effectif_cm1', 'effectif_cm2'].forEach(id => {
            const input = document.getElementById(id);
            if (input) {
                input.addEventListener('input', calculateTotal);
            }
        });

        // Validation du formulaire
        form.addEventListener('submit', function(e) {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    isValid = false;
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            if (!isValid) {
                e.preventDefault();
                new PNotify({
                    title: 'Champs obligatoires',
                    text: 'Veuillez remplir tous les champs obligatoires.',
                    type: 'error',
                    delay: 4000
                });
                return false;
            }

            // Confirmation avant soumission
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
                    text: 'Les modifications de l\'EPP ont été enregistrées avec succès',
                    type: 'success',
                    delay: 3000
                });
            });
        });

        // Validation temps réel
        const inputs = form.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.hasAttribute('required') && !this.value.trim()) {
                    this.classList.add('is-invalid');
                } else {
                    this.classList.remove('is-invalid');
                }
            });

            // Supprimer la classe d'erreur lors de la saisie
            input.addEventListener('input', function() {
                this.classList.remove('is-invalid');
            });
        });

        // Format automatique des numéros de téléphone
        const phoneInputs = document.querySelectorAll('input[type="tel"]');
        phoneInputs.forEach(input => {
            input.addEventListener('input', function() {
                let value = this.value.replace(/\D/g, '');
                if (value.startsWith('225')) {
                    value = '+' + value;
                } else if (value.startsWith('0')) {
                    value = '+225 ' + value;
                }
                this.value = value;
            });
        });

        // Charger les IEPP au chargement de la page
        loadIeppByDren();
    });

    // Fonction pour charger les IEPP selon la DREN sélectionnée (mode édition)
    function loadIeppByDren() {
        const drenId = document.getElementById('dren_id').value;
        const ieppSelect = document.getElementById('iepp_id');
        const currentIeppId = ieppSelect.value; // Sauvegarder la sélection actuelle

        if (!drenId) {
            ieppSelect.innerHTML = '<option value="">-- Sélectionner d\'abord une DREN --</option>';
            return;
        }

        // Simulation des données IEPP par DREN (basé sur les 295 inspections SIDMAS)
        const ieppByDren = {
            '1': [ // DREN ABIDJAN 1
                {
                    id: 1,
                    nom: 'IEPP PLATEAU'
                },
                {
                    id: 2,
                    nom: 'IEPP COCODY'
                },
                {
                    id: 3,
                    nom: 'IEPP MARCORY'
                },
                {
                    id: 4,
                    nom: 'IEPP TREICHVILLE'
                }
            ],
            '2': [ // DREN ABIDJAN 2
                {
                    id: 5,
                    nom: 'IEPP ABOBO EST'
                },
                {
                    id: 6,
                    nom: 'IEPP ABOBO OUEST'
                },
                {
                    id: 7,
                    nom: 'IEPP ADJAME'
                },
                {
                    id: 8,
                    nom: 'IEPP YOPOUGON NORD'
                }
            ],
            '3': [ // DREN ABIDJAN 3
                {
                    id: 9,
                    nom: 'IEPP YOPOUGON SUD'
                },
                {
                    id: 10,
                    nom: 'IEPP KOUMASSI'
                },
                {
                    id: 11,
                    nom: 'IEPP PORT-BOUET'
                },
                {
                    id: 12,
                    nom: 'IEPP VRIDI'
                }
            ],
            '4': [ // DREN BOUAKE 1
                {
                    id: 13,
                    nom: 'IEPP BOUAKE CENTRE'
                },
                {
                    id: 14,
                    nom: 'IEPP BOUAKE NORD'
                },
                {
                    id: 15,
                    nom: 'IEPP KATIOLA'
                },
                {
                    id: 16,
                    nom: 'IEPP SAKASSOU'
                }
            ]
            // Structure basée sur les 295 IEPP de la DB SIDMAS
        };

        const ieppList = ieppByDren[drenId] || [];

        ieppSelect.innerHTML = '<option value="">-- Sélectionner une IEPP --</option>';
        ieppList.forEach(iepp => {
            const selected = iepp.id == currentIeppId ? 'selected' : '';
            ieppSelect.innerHTML += `<option value="${iepp.id}" ${selected}>${iepp.nom}</option>`;
        });

        // Notification de cohérence hiérarchique
        if (currentIeppId && !ieppList.find(iepp => iepp.id == currentIeppId)) {
            new PNotify({
                title: 'Incohérence détectée',
                text: 'L\'IEPP actuelle ne correspond pas à la DREN sélectionnée',
                type: 'warning',
                delay: 4000
            });
        }
    }
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

    .info-label {
        font-weight: 600;
        color: #5a5c69;
        font-size: 0.85rem;
        display: block;
        margin-bottom: 0.25rem;
    }

    .info-value {
        color: #6e707e;
        font-size: 0.9rem;
    }

    .info-group {
        margin-bottom: 1rem;
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

    .form-control:focus,
    .custom-file-input:focus~.custom-file-label {
        border-color: #4e73df;
        box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-text {
        font-size: 0.85rem;
    }

    .form-check {
        margin-bottom: 0.5rem;
    }

    .form-check-label {
        font-size: 0.9rem;
        color: #5a5c69;
    }

    .custom-file-label {
        color: #6e707e;
    }

    .custom-file-label::after {
        background-color: #f8f9fc;
        border-color: #d1d3e2;
        color: #5a5c69;
    }
</style>

@endsection