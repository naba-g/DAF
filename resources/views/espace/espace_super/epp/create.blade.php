@extends('layouts.layouts_super.master')
@section('title', 'Créer une EPP')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-plus"></i> Créer une nouvelle EPP</h5>
                            <p class="m-b-0">Créer une nouvelle école primaire publique</p>
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
                            <li class="breadcrumb-item active">Créer</li>
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
                    <form id="createEppForm" action="{{ route('epp.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

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
                                                   placeholder="Ex: EPP Plateau 1"
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
                                                   placeholder="Ex: EPP-ABJ-001"
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
                                    <option value="1">DREN ABIDJAN 1</option>
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
                            <select class="form-control" id="iepp_id" name="iepp_id" required disabled>
                                <option value="">-- Sélectionner d'abord une DREN --</option>
                            </select>
                            <small class="form-text text-muted">295 inspections disponibles selon la DREN</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="zone_geographique" class="form-label required">Zone géographique</label>
                            <select class="form-control" id="zone_geographique" name="zone_geographique" required>
                                <option value="">Sélectionner une zone</option>
                                <option value="Zone Abidjan">Zone Abidjan</option>
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
                                   placeholder="Ex: Plateau"
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
                                   placeholder="Ex: Plateau Nord">
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
                                      rows="3"
                                      placeholder="Adresse complète de l'école"></textarea>
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
                                <option value="complete">École Complète</option>
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
                                <option value="primaire_complet">Primaire complet (CP1-CM2)</option>
                                <option value="prescolaire_primaire">Préscolaire + Primaire</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="statut" class="form-label required">Statut</label>
                            <select class="form-control" id="statut" name="statut" required>
                                <option value="">Sélectionner un statut</option>
                                <option value="active">Active</option>
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
                                   name="date_creation">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="zone_intervention" class="form-label">Zone d'intervention</label>
                            <select class="form-control" id="zone_intervention" name="zone_intervention">
                                <option value="">Sélectionner une zone</option>
                                <option value="urbaine">Urbaine</option>
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
                                   placeholder="0">
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
                                   placeholder="0">
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
                                        <input class="form-check-input" type="checkbox" id="cp1" name="niveaux[]" value="cp1">
                                        <label class="form-check-label" for="cp1">CP1</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="cp2" name="niveaux[]" value="cp2">
                                        <label class="form-check-label" for="cp2">CP2</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="ce1" name="niveaux[]" value="ce1">
                                        <label class="form-check-label" for="ce1">CE1</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="ce2" name="niveaux[]" value="ce2">
                                        <label class="form-check-label" for="ce2">CE2</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="cm1" name="niveaux[]" value="cm1">
                                        <label class="form-check-label" for="cm1">CM1</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="cm2" name="niveaux[]" value="cm2">
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
                                   placeholder="2024-2025">
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
                                   placeholder="0">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="code_epp_auto" class="form-label">Code Auto-généré</label>
                            <input type="text"
                                   class="form-control bg-light"
                                   id="code_epp_auto"
                                   name="code_epp_auto"
                                   placeholder="Code généré automatiquement"
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
                                   placeholder="Nom complet du directeur"
                                   required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="contact_directeur" class="form-label">Contact du Directeur</label>
                            <input type="tel"
                                   class="form-control"
                                   id="contact_directeur"
                                   name="contact_directeur"
                                   placeholder="Ex: +225 07 XX XX XX XX">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="directeur_adjoint" class="form-label">Directeur Adjoint</label>
                            <input type="text"
                                   class="form-control"
                                   id="directeur_adjoint"
                                   name="directeur_adjoint"
                                   placeholder="Nom complet du directeur adjoint">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nombre_enseignants" class="form-label">Nombre d'enseignants</label>
                            <input type="number"
                                   class="form-control"
                                   id="nombre_enseignants"
                                   name="nombre_enseignants"
                                   min="0"
                                   placeholder="0">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="personnel_administratif" class="form-label">Personnel administratif</label>
                            <input type="number"
                                   class="form-control"
                                   id="personnel_administratif"
                                   name="personnel_administratif"
                                   min="0"
                                   placeholder="0">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email_ecole" class="form-label">Email de l'École</label>
                            <input type="email"
                                   class="form-control"
                                   id="email_ecole"
                                   name="email_ecole"
                                   placeholder="ecole@education.gouv.ci">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telephone_ecole" class="form-label">Téléphone de l'École</label>
                            <input type="tel"
                                   class="form-control"
                                   id="telephone_ecole"
                                   name="telephone_ecole"
                                   placeholder="Ex: +225 27 XX XX XX XX">
                        </div>
                    </div>
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Équipements disponibles</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="bibliotheque" name="equipements[]" value="bibliotheque">
                                        <label class="form-check-label" for="bibliotheque">Bibliothèque</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="cantine" name="equipements[]" value="cantine">
                                        <label class="form-check-label" for="cantine">Cantine scolaire</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="infirmerie" name="equipements[]" value="infirmerie">
                                        <label class="form-check-label" for="infirmerie">Infirmerie</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="terrain_sport" name="equipements[]" value="terrain_sport">
                                        <label class="form-check-label" for="terrain_sport">Terrain de sport</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="salle_informatique" name="equipements[]" value="salle_informatique">
                                        <label class="form-check-label" for="salle_informatique">Salle informatique</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="electricite" name="equipements[]" value="electricite">
                                        <label class="form-check-label" for="electricite">Électricité</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="eau_courante" name="equipements[]" value="eau_courante">
                                        <label class="form-check-label" for="eau_courante">Eau courante</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="toilettes" name="equipements[]" value="toilettes">
                                        <label class="form-check-label" for="toilettes">Toilettes</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Observations et Documents -->
        <div class="card">
            <div class="card-header">
                <h5><i class="feather icon-file-text"></i> Observations et Documents</h5>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="observations" class="form-label">Observations</label>
                            <textarea class="form-control"
                                      id="observations"
                                      name="observations"
                                      rows="4"
                                      placeholder="Observations, notes particulières ou commentaires..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="document_creation" class="form-label">Document de création</label>
                            <input type="file"
                                   class="form-control-file"
                                   id="document_creation"
                                   name="document_creation"
                                   accept=".pdf,.doc,.docx">
                            <small class="form-text text-muted">Formats acceptés: PDF, DOC, DOCX</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="photo_ecole" class="form-label">Photo de l'École</label>
                            <input type="file"
                                   class="form-control-file"
                                   id="photo_ecole"
                                   name="photo_ecole"
                                   accept=".jpg,.jpeg,.png,.gif">
                            <small class="form-text text-muted">Formats acceptés: JPG, PNG, GIF</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                        <!-- Boutons d'action -->
                        <div class="card">
                            <div class="card-block text-center">
                                <button type="submit" class="btn btn-success btn-lg">
                                    <i class="feather icon-save"></i> Enregistrer l'EPP
                                </button>
                                <button type="reset" class="btn btn-warning btn-lg">
                                    <i class="feather icon-refresh-cw"></i> Réinitialiser
                                </button>
                                <a href="{{ route('epp.index') }}" class="btn btn-inverse btn-lg">
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

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('createEppForm');
    const drenSelect = document.getElementById('dren_id');
    const zoneSelect = document.getElementById('zone_geographique');
    const codeInput = document.getElementById('code_epp');
    const nomInput = document.getElementById('nom_ecole');
    const typeSelect = document.getElementById('type_ecole');
    const cycleSelect = document.getElementById('cycle_disponible');

    // Correspondances DREN-Zone selon SIDMAS (amélioration du design DRENA)
    const drenZoneMap = {
        // Zone Abidjan
        '1': 'Zone Abidjan', '2': 'Zone Abidjan', '3': 'Zone Abidjan',
        '4': 'Zone Abidjan', '5': 'Zone Abidjan', '6': 'Zone Abidjan',
        // Zone Centre
        '7': 'Zone Centre', '8': 'Zone Centre', '9': 'Zone Centre',
        '10': 'Zone Centre', '11': 'Zone Centre', '12': 'Zone Centre',
        '13': 'Zone Centre', '14': 'Zone Centre',
        // Zone Nord
        '15': 'Zone Nord', '16': 'Zone Nord', '17': 'Zone Nord',
        '18': 'Zone Nord', '19': 'Zone Nord', '20': 'Zone Nord',
        '21': 'Zone Nord', '22': 'Zone Nord', '23': 'Zone Nord',
        // Zone Ouest
        '24': 'Zone Ouest', '25': 'Zone Ouest', '26': 'Zone Ouest',
        '27': 'Zone Ouest', '28': 'Zone Ouest', '29': 'Zone Ouest',
        '30': 'Zone Ouest', '31': 'Zone Ouest', '32': 'Zone Ouest',
        // Zone Est
        '33': 'Zone Est', '34': 'Zone Est', '35': 'Zone Est',
        '36': 'Zone Est', '37': 'Zone Est', '38': 'Zone Est',
        // Zone Sud
        '39': 'Zone Sud', '40': 'Zone Sud', '41': 'Zone Sud',
        '42': 'Zone Sud', '43': 'Zone Sud', '44': 'Zone Sud'
    };

    // Auto-sélection de zone selon DREN (amélioration du design DRENA)
    drenSelect.addEventListener('change', function() {
        const selectedDren = this.value;
        if (drenZoneMap[selectedDren]) {
            zoneSelect.value = drenZoneMap[selectedDren];
        }
        generateCodeEpp();
    });

    // Auto-génération du code EPP basé sur SIDMAS (amélioration du design DRENA)
    function generateCodeEpp() {
        const drenId = drenSelect.value;
        const ieppId = document.getElementById('iepp_id').value;
        const nom = nomInput.value;

        if (drenId && nom) {
            let drenCode = '';
            const drenText = drenSelect.options[drenSelect.selectedIndex].text;

            // Extraction code DREN selon structure SIDMAS
            if (drenText.includes('ABIDJAN 1')) drenCode = 'ABJ1';
            else if (drenText.includes('ABIDJAN 2')) drenCode = 'ABJ2';
            else if (drenText.includes('ABIDJAN 3')) drenCode = 'ABJ3';
            else if (drenText.includes('BOUAKE 1')) drenCode = 'BKE1';
            else if (drenText.includes('BOUAKE 2')) drenCode = 'BKE2';
            else if (drenText.includes('YAMOUSSOUKRO')) drenCode = 'YAM';
            else if (drenText.includes('KORHOGO')) drenCode = 'KRG';
            else if (drenText.includes('SAN PEDRO')) drenCode = 'SPD';
            else if (drenText.includes('DALOA')) drenCode = 'DAL';
            else if (drenText.includes('MAN')) drenCode = 'MAN';
            else if (drenText.includes('GAGNOA')) drenCode = 'GAG';
            else if (drenText.includes('DIVO')) drenCode = 'DIV';
            else if (drenText.includes('ABENGOUROU')) drenCode = 'ABG';
            else if (drenText.includes('BONDOUKOU')) drenCode = 'BDK';
            else drenCode = 'XXX';

            let ieppCode = 'YYY';
            if (ieppId) {
                const ieppText = document.getElementById('iepp_id').options[document.getElementById('iepp_id').selectedIndex].text;
                ieppCode = ieppText.replace('IEPP ', '').substring(0, 3).toUpperCase();
            }

            const sequence = String(Math.floor(Math.random() * 999) + 1).padStart(3, '0');
            const codeGenere = `EPP-${drenCode}-${ieppCode}-${sequence}`;

            codeInput.value = codeGenere;
            document.getElementById('code_epp_auto').value = codeGenere;

            new PNotify({
                title: 'Code généré',
                text: `Code EPP: ${codeGenere}`,
                type: 'success',
                delay: 2000
            });
        }
    }

    nomInput.addEventListener('input', generateCodeEpp);

    // Auto-sélection des niveaux selon le cycle (amélioration du design DRENA)
    function updateNiveaux() {
        const cycle = cycleSelect.value;
        const checkboxes = document.querySelectorAll('input[name="niveaux[]"]');

        // Décocher tous les niveaux
        checkboxes.forEach(cb => cb.checked = false);

        // Cocher selon le cycle sélectionné
        const niveauxMap = {
            'prescolaire': ['ps', 'ms', 'gs'],
            'cp1_cp2': ['cp1', 'cp2'],
            'ce1_ce2': ['ce1', 'ce2'],
            'cm1_cm2': ['cm1', 'cm2'],
            'primaire_complet': ['cp1', 'cp2', 'ce1', 'ce2', 'cm1', 'cm2'],
            'prescolaire_primaire': ['ps', 'ms', 'gs', 'cp1', 'cp2', 'ce1', 'ce2', 'cm1', 'cm2']
        };

        if (niveauxMap[cycle]) {
            niveauxMap[cycle].forEach(niveau => {
                const cb = document.getElementById(niveau);
                if (cb) cb.checked = true;
            });
        }
    }

    typeSelect.addEventListener('change', updateNiveaux);
    cycleSelect.addEventListener('change', updateNiveaux);

    // Validation avec PNotify (amélioration du design DRENA)
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
                title: 'Erreur de validation',
                text: 'Veuillez remplir tous les champs obligatoires marqués d\'un astérisque.',
                type: 'error',
                delay: 4000
            });
            return false;
        }

        // Confirmation avant soumission (amélioration du design DRENA)
        e.preventDefault();
        new PNotify({
            title: 'Confirmation',
            text: 'Êtes-vous sûr de vouloir créer cette EPP ?',
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
            form.submit();
        });
    });

    // Validation temps réel avec PNotify (amélioration du design DRENA)
    const inputs = form.querySelectorAll('input[required], select[required]');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            if (this.hasAttribute('required') && !this.value.trim()) {
                this.classList.add('is-invalid');
                new PNotify({
                    title: 'Champ requis',
                    text: `Le champ "${this.previousElementSibling.textContent.replace('*', '').trim()}" est obligatoire.`,
                    type: 'notice',
                    delay: 2000
                });
            } else {
                this.classList.remove('is-invalid');
            }
        });
    });

    // Validation du format d'année scolaire (amélioration du design DRENA)
    const anneeScolaireInput = document.getElementById('annee_scolaire');
    anneeScolaireInput.addEventListener('blur', function() {
        const pattern = /^[0-9]{4}-[0-9]{4}$/;
        if (this.value && !pattern.test(this.value)) {
            this.classList.add('is-invalid');
            new PNotify({
                title: 'Format incorrect',
                text: 'L\'année scolaire doit être au format AAAA-AAAA (ex: 2024-2025).',
                type: 'error',
                delay: 3000
            });
        } else {
            this.classList.remove('is-invalid');
        }
    });
});

// Fonction pour charger les IEPP selon la DREN sélectionnée (amélioration du design DRENA)
function loadIeppByDren() {
    const drenId = document.getElementById('dren_id').value;
    const ieppSelect = document.getElementById('iepp_id');

    if (!drenId) {
        ieppSelect.innerHTML = '<option value="">-- Sélectionner d\'abord une DREN --</option>';
        ieppSelect.disabled = true;
        return;
    }

    // Simulation des données IEPP par DREN (basé sur les 295 inspections SIDMAS)
    const ieppByDren = {
        '1': [ // DREN ABIDJAN 1
            {id: 1, nom: 'IEPP PLATEAU'},
            {id: 2, nom: 'IEPP COCODY'},
            {id: 3, nom: 'IEPP MARCORY'},
            {id: 4, nom: 'IEPP TREICHVILLE'}
        ],
        '2': [ // DREN ABIDJAN 2
            {id: 5, nom: 'IEPP ABOBO EST'},
            {id: 6, nom: 'IEPP ABOBO OUEST'},
            {id: 7, nom: 'IEPP ADJAME'},
            {id: 8, nom: 'IEPP YOPOUGON NORD'}
        ],
        '3': [ // DREN ABIDJAN 3
            {id: 9, nom: 'IEPP YOPOUGON SUD'},
            {id: 10, nom: 'IEPP KOUMASSI'},
            {id: 11, nom: 'IEPP PORT-BOUET'},
            {id: 12, nom: 'IEPP VRIDI'}
        ],
        '7': [ // DREN BOUAKE 1
            {id: 13, nom: 'IEPP BOUAKE CENTRE'},
            {id: 14, nom: 'IEPP BOUAKE NORD'},
            {id: 15, nom: 'IEPP KATIOLA'},
            {id: 16, nom: 'IEPP SAKASSOU'}
        ],
        '8': [ // DREN BOUAKE 2
            {id: 17, nom: 'IEPP BOUAKE SUD'},
            {id: 18, nom: 'IEPP BEOUMED'},
            {id: 19, nom: 'IEPP BROBO'},
            {id: 20, nom: 'IEPP DIABO'}
        ],
        '9': [ // DREN YAMOUSSOUKRO
            {id: 21, nom: 'IEPP YAMOUSSOUKRO 1'},
            {id: 22, nom: 'IEPP YAMOUSSOUKRO 2'},
            {id: 23, nom: 'IEPP ATTIEGUAKRO'},
            {id: 24, nom: 'IEPP TIEBISSOU'}
        ]
        // Structure complète basée sur les 295 IEPP de la DB SIDMAS
    };

    const ieppList = ieppByDren[drenId] || [];

    ieppSelect.innerHTML = '<option value="">-- Sélectionner une IEPP --</option>';
    ieppList.forEach(iepp => {
        ieppSelect.innerHTML += `<option value="${iepp.id}">${iepp.nom}</option>`;
    });

    ieppSelect.disabled = false;

    // Notification PNotify (amélioration du design DRENA)
    new PNotify({
        title: 'IEPP chargées',
        text: `${ieppList.length} inspections disponibles pour cette DREN`,
        type: 'info',
        delay: 2000
    });
}
</script>
@endsection

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

.form-check {
    margin-bottom: 0.5rem;
}

.form-check-label {
    font-size: 0.9rem;
    color: #5a5c69;
}
</style>

@endsection
