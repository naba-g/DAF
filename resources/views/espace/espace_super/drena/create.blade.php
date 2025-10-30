@extends('layouts.layouts_super.master')
@section('title', 'Créer une DRENA')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-plus"></i> Créer une nouvelle DRENA</h5>
                            <p class="m-b-0">Créer une nouvelle direction régionale de l'éducation nationale</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Accueil</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('drena.index') }}">DRENA</a>
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
                    <form id="createDrenaForm" action="{{ route('drena.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Informations de base -->
                        <div class="card">
                            <div class="card-header">
                                <h5><i class="feather icon-edit"></i> Informations de base de la DRENA</h5>
                            </div>
                            <div class="card-block">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nom_drena" class="form-label required">Nom de la DREN</label>
                            <input type="text"
                                   class="form-control"
                                   id="nom_drena"
                                   name="nom_drena"
                                   placeholder="Ex: DREN ABIDJAN 1"
                                   required>
                            <small class="form-text text-muted">Dénomination officielle selon SIDMAS</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="code_drena" class="form-label required">Code DREN</label>
                            <input type="text"
                                   class="form-control"
                                   id="code_drena"
                                   name="code_drena"
                                   placeholder="Ex: DREN-ABJ1"
                                   pattern="DREN-[A-Z0-9]+"
                                   required>
                            <small class="form-text text-muted">Format: DREN-{CODE} selon structure SIDMAS</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="region" class="form-label required">Région administrative</label>
                            <select class="form-control" id="region" name="region" required>
                                <option value="">Sélectionner une région</option>
                                <!-- Régions de la structure SIDMAS -->
                                <option value="autonome_abidjan">Autonome d'Abidjan</option>
                                <option value="haut_sassandra">Haut-Sassandra</option>
                                <option value="poro">Poro</option>
                                <option value="gbeke">Gbêkê</option>
                                <option value="indenie_djuablin">Indénié-Djuablin</option>
                                <option value="tonkpi">Tonkpi</option>
                                <option value="lacs">Lacs</option>
                                <option value="lagunes">Lagunes</option>
                                <option value="goh_djiboua">Gôh-Djiboua</option>
                                <option value="tchologo">Tchologo</option>
                                <option value="san_pedro">San-Pédro</option>
                                <option value="kabadougou">Kabadougou</option>
                                <option value="nawa">Nawa</option>
                                <option value="marahoue">Marahoué</option>
                                <option value="sud_comoe">Sud-Comoé</option>
                                <option value="worodougou">Worodougou</option>
                                <option value="loh_djiboua">Lôh-Djiboua</option>
                                <option value="agneby_tiassa">Agnéby-Tiassa</option>
                                <option value="gontougo">Gontougo</option>
                                <option value="grands_ponts">Grands-Ponts</option>
                                <option value="cavally">Cavally</option>
                                <option value="bafing">Bafing</option>
                                <option value="bagoue">Bagoué</option>
                                <option value="belier">Bélier</option>
                                <option value="bounkani">Bounkani</option>
                                <option value="folon">Folon</option>
                                <option value="gbokle">Gbôklé</option>
                                <option value="guemon">Guémon</option>
                                <option value="hambol">Hambol</option>
                                <option value="iffou">Iffou</option>
                                <option value="la_me">La Mé</option>
                                <option value="moronou">Moronou</option>
                            </select>
                            <small class="form-text text-muted">Région administrative selon le découpage SIDMAS</small>
                        </div>
                    </div>
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ville_siege" class="form-label required">Ville du siège</label>
                            <input type="text"
                                   class="form-control"
                                   id="ville_siege"
                                   name="ville_siege"
                                   placeholder="Ex: Abidjan"
                                   required>
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
                                      placeholder="Adresse complète du siège de la DRENA"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Direction et Personnel -->
        <div class="card">
            <div class="card-header">
                <h5><i class="feather icon-users"></i> Direction et Personnel</h5>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="directeur_regional" class="form-label required">Directeur Régional</label>
                            <input type="text"
                                   class="form-control"
                                   id="directeur_regional"
                                   name="directeur_regional"
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="directeur_adjoint" class="form-label">Directeur Adjoint</label>
                            <input type="text"
                                   class="form-control"
                                   id="directeur_adjoint"
                                   name="directeur_adjoint"
                                   placeholder="Nom complet du directeur adjoint">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="secretaire_general" class="form-label">Secrétaire Général</label>
                            <input type="text"
                                   class="form-control"
                                   id="secretaire_general"
                                   name="secretaire_general"
                                   placeholder="Nom complet du secrétaire général">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email_drena" class="form-label">Email DRENA</label>
                            <input type="email"
                                   class="form-control"
                                   id="email_drena"
                                   name="email_drena"
                                   placeholder="contact@drena-lagunes.edu.ci">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telephone_drena" class="form-label">Téléphone DRENA</label>
                            <input type="tel"
                                   class="form-control"
                                   id="telephone_drena"
                                   name="telephone_drena"
                                   placeholder="Ex: +225 27 XX XX XX XX">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Organisation et Statut -->
        <div class="card">
            <div class="card-header">
                <h5><i class="feather icon-settings"></i> Organisation et Statut</h5>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nombre_iepp" class="form-label">Nombre d'IEPP supervisées</label>
                            <input type="number"
                                   class="form-control"
                                   id="nombre_iepp"
                                   name="nombre_iepp"
                                   min="0"
                                   placeholder="0">
                            <small class="form-text text-muted">Inspections Enseignement Primaire Préscolaire</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nombre_epp" class="form-label">Nombre d'EPP</label>
                            <input type="number"
                                   class="form-control"
                                   id="nombre_epp"
                                   name="nombre_epp"
                                   min="0"
                                   placeholder="0">
                            <small class="form-text text-muted">Écoles Primaires Publiques</small>
                        </div>
                    </div>
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
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="statut" class="form-label required">Statut</label>
                            <select class="form-control" id="statut" name="statut" required>
                                <option value="">Sélectionner un statut</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                                <option value="en_creation">En création</option>
                                <option value="en_restructuration">En restructuration</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="date_creation" class="form-label">Date de création</label>
                            <input type="date"
                                   class="form-control"
                                   id="date_creation"
                                   name="date_creation">
                        </div>
                    </div>
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
                </div>
            </div>
        </div>

        <!-- Observations -->
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
                            <label for="logo_drena" class="form-label">Logo DRENA</label>
                            <input type="file"
                                   class="form-control-file"
                                   id="logo_drena"
                                   name="logo_drena"
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
                            <i class="feather icon-save"></i> Enregistrer la DREN
                        </button>
                        <button type="reset" class="btn btn-warning btn-lg">
                            <i class="feather icon-refresh-cw"></i> Réinitialiser
                        </button>
                        <a href="{{ route('drena.index') }}" class="btn btn-inverse btn-lg">
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
    const form = document.getElementById('createDrenaForm');
    const regionSelect = document.getElementById('region');
    const zoneSelect = document.getElementById('zone_geographique');
    const villeInput = document.getElementById('ville_siege');
    const codeInput = document.getElementById('code_drena');
    const nomInput = document.getElementById('nom_drena');

    // Correspondances région-zone selon SIDMAS
    const regionZoneMap = {
        'autonome_abidjan': 'Zone Abidjan',
        'lagunes': 'Zone Abidjan',
        'la_me': 'Zone Abidjan',
        'agneby_tiassa': 'Zone Abidjan',
        'grands_ponts': 'Zone Abidjan',
        'lacs': 'Zone Centre',
        'gbeke': 'Zone Centre',
        'belier': 'Zone Centre',
        'iffou': 'Zone Centre',
        'marahoue': 'Zone Centre',
        'poro': 'Zone Nord',
        'tchologo': 'Zone Nord',
        'bagoue': 'Zone Nord',
        'kabadougou': 'Zone Nord',
        'hambol': 'Zone Nord',
        'bounkani': 'Zone Nord',
        'folon': 'Zone Nord',
        'bafing': 'Zone Nord',
        'tonkpi': 'Zone Ouest',
        'cavally': 'Zone Ouest',
        'guemon': 'Zone Ouest',
        'haut_sassandra': 'Zone Ouest',
        'gbokle': 'Zone Ouest',
        'nawa': 'Zone Ouest',
        'san_pedro': 'Zone Ouest',
        'indenie_djuablin': 'Zone Est',
        'gontougo': 'Zone Est',
        'moronou': 'Zone Est',
        'sud_comoe': 'Zone Sud',
        'goh_djiboua': 'Zone Sud',
        'loh_djiboua': 'Zone Sud',
        'worodougou': 'Zone Centre'
    };

    // Auto-sélection de zone selon région
    regionSelect.addEventListener('change', function() {
        const selectedRegion = this.value;
        if (regionZoneMap[selectedRegion]) {
            zoneSelect.value = regionZoneMap[selectedRegion];
        }
        generateCode();
    });

    // Auto-génération du code DREN basé sur SIDMAS
    function generateCode() {
        const region = regionSelect.value;
        const nom = nomInput.value;

        if (region && nom) {
            let regionCode = '';
            switch(region) {
                case 'autonome_abidjan': regionCode = 'ABJ'; break;
                case 'lagunes': regionCode = 'LAG'; break;
                case 'lacs': regionCode = 'LAC'; break;
                case 'gbeke': regionCode = 'GBK'; break;
                case 'poro': regionCode = 'POR'; break;
                case 'tonkpi': regionCode = 'TON'; break;
                case 'haut_sassandra': regionCode = 'HSS'; break;
                case 'indenie_djuablin': regionCode = 'IDJ'; break;
                case 'tchologo': regionCode = 'TCH'; break;
                case 'san_pedro': regionCode = 'SPD'; break;
                case 'kabadougou': regionCode = 'KAB'; break;
                case 'nawa': regionCode = 'NAW'; break;
                case 'marahoue': regionCode = 'MAR'; break;
                case 'sud_comoe': regionCode = 'SCO'; break;
                case 'worodougou': regionCode = 'WOR'; break;
                case 'loh_djiboua': regionCode = 'LOH'; break;
                case 'agneby_tiassa': regionCode = 'AGT'; break;
                case 'gontougo': regionCode = 'GON'; break;
                case 'grands_ponts': regionCode = 'GPT'; break;
                case 'cavally': regionCode = 'CAV'; break;
                case 'bafing': regionCode = 'BAF'; break;
                case 'bagoue': regionCode = 'BAG'; break;
                case 'belier': regionCode = 'BEL'; break;
                case 'bounkani': regionCode = 'BOU'; break;
                case 'folon': regionCode = 'FOL'; break;
                case 'gbokle': regionCode = 'GBO'; break;
                case 'guemon': regionCode = 'GUE'; break;
                case 'hambol': regionCode = 'HAM'; break;
                case 'iffou': regionCode = 'IFF'; break;
                case 'la_me': regionCode = 'LME'; break;
                case 'moronou': regionCode = 'MOR'; break;
                case 'goh_djiboua': regionCode = 'GOH'; break;
                default: regionCode = 'XXX'; break;
            }

            // Extraction du numéro si présent dans le nom
            const numeroMatch = nom.match(/(\d+)$/);
            const numero = numeroMatch ? numeroMatch[1] : '1';

            codeInput.value = `DREN-${regionCode}${numero}`;
        }
    }

    nomInput.addEventListener('input', generateCode);

    // Validation avec PNotify
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

        // Confirmation avant soumission
        e.preventDefault();
        new PNotify({
            title: 'Confirmation',
            text: 'Êtes-vous sûr de vouloir créer cette DREN ?',
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

    // Validation temps réel avec PNotify
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

    // Validation du format d'année scolaire
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
</style>

@endsection
