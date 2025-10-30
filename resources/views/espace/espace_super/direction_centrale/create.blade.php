@extends('layouts.layouts_super.master')
@section('title', 'Créer un Service - Direction Centrale')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-plus"></i> Nouveau Service - Direction Centrale</h5>
                            <p class="m-b-0">Créer un nouveau service de direction centrale</p>
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
                            <li class="breadcrumb-item active">Nouveau Service</li>
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
                            <h5><i class="feather icon-edit"></i> Informations du Service</h5>
                        </div>
                        <div class="card-block">
                            <form method="POST" action="#">
                                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nom_service">Nom du Service <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nom_service" name="nom_service"
                                   placeholder="Ex: Direction des Affaires Administratives" required>
                            <small class="form-text text-muted">Nom complet du service de direction centrale</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="code_service">Code Service SIDMAS <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="code_service" name="code_service"
                                   placeholder="Ex: DC-ADM" maxlength="10" readonly>
                            <small class="form-text text-muted">Généré automatiquement : DC-XXX</small>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="numero_ordre">Ordre Hiérarchique <span class="text-danger">*</span></label>
                            <select class="form-control" id="numero_ordre" name="numero_ordre" required>
                                <option value="">Sélectionner position</option>
                                <option value="1">1 - Direction Générale</option>
                                <option value="2">2 - Direction Adjointe</option>
                                <option value="3">3 - Service Principal</option>
                                <option value="4">4 - Service Spécialisé</option>
                                <option value="5">5 - Service Support</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="type_service">Type de Service <span class="text-danger">*</span></label>
                            <select class="form-control" id="type_service" name="type_service" required>
                                <option value="">Sélectionner un type</option>
                                <option value="administrative">Administrative</option>
                                <option value="pedagogique">Pédagogique</option>
                                <option value="logistique">Logistique</option>
                                <option value="financiere">Financière</option>
                                <option value="technique">Technique</option>
                                <option value="ressources_humaines">Ressources Humaines</option>
                                <option value="juridique">Juridique</option>
                                <option value="planification">Planification</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="priorite">Niveau de Priorité <span class="text-danger">*</span></label>
                            <select class="form-control" id="priorite" name="priorite" required>
                                <option value="critique">Critique</option>
                                <option value="elevee">Élevée</option>
                                <option value="importante" selected>Importante</option>
                                <option value="normale">Normale</option>
                            </select>
                            <small class="form-text text-muted">Impact sur les opérations MEN</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="statut">Statut <span class="text-danger">*</span></label>
                            <select class="form-control" id="statut" name="statut" required>
                                <option value="actif" selected>Actif</option>
                                <option value="inactif">Inactif</option>
                                <option value="en_cours">En cours de création</option>
                                <option value="reorganisation">Réorganisation</option>
                                <option value="en_attente">En attente</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Description et Missions <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="description" name="description" rows="3"
                                      placeholder="Décrivez les missions principales, responsabilités et objectifs du service..." required></textarea>
                            <small class="form-text text-muted">Détaillez le rôle du service dans l'organigramme MEN</small>
                        </div>
                    </div>
                </div>

                <!-- Responsable du Service -->
                <div class="card mt-4">
                    <div class="card-header bg-light">
                        <h6 class="mb-0"><i class="feather icon-user text-primary"></i> Responsable du Service</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nom_responsable">Nom du Responsable <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nom_responsable" name="nom_responsable"
                                           placeholder="Ex: M. KOUASSI Albert" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="poste_responsable">Titre/Poste <span class="text-danger">*</span></label>
                                    <select class="form-control" id="poste_responsable" name="poste_responsable" required>
                                        <option value="">Sélectionner le poste</option>
                                        <option value="directeur">Directeur</option>
                                        <option value="directeur_adjoint">Directeur Adjoint</option>
                                        <option value="chef_service">Chef de Service</option>
                                        <option value="chef_service_adjoint">Chef de Service Adjoint</option>
                                        <option value="responsable">Responsable</option>
                                        <option value="coordinateur">Coordinateur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="niveau_responsable">Niveau Hiérarchique</label>
                                    <select class="form-control" id="niveau_responsable" name="niveau_responsable">
                                        <option value="direction_generale">Direction Générale</option>
                                        <option value="sous_direction">Sous-Direction</option>
                                        <option value="service" selected>Service</option>
                                        <option value="bureau">Bureau</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telephone">Téléphone</label>
                                    <input type="tel" class="form-control" id="telephone" name="telephone"
                                           placeholder="+225 XX XX XX XX XX">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email Professionnel</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="service@men.gouv.ci">
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
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date_creation">Date de Création <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="date_creation" name="date_creation"
                                           value="{{ date('Y-m-d') }}" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nombre_employes">Effectif Prévu <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="nombre_employes" name="nombre_employes"
                                           min="1" max="100" placeholder="Ex: 15" required>
                                    <small class="form-text text-muted">Nombre d'employés du service</small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="budget_annuel">Budget Annuel (FCFA)</label>
                                    <input type="number" class="form-control" id="budget_annuel" name="budget_annuel"
                                           min="0" placeholder="Ex: 50000000">
                                    <small class="form-text text-muted">Budget estimé du service</small>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="code_budgetaire">Code Budgétaire</label>
                                    <input type="text" class="form-control" id="code_budgetaire" name="code_budgetaire"
                                           placeholder="Ex: MEN-DC-001">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Localisation et Relations -->
                <div class="card mt-4">
                    <div class="card-header bg-light">
                        <h6 class="mb-0"><i class="feather icon-map-pin text-primary"></i> Localisation et Relations</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="adresse">Adresse/Localisation <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="adresse" name="adresse" rows="2"
                                              placeholder="Adresse physique du service au sein du MEN..." required></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="service_parent">Service Parent</label>
                                    <select class="form-control" id="service_parent" name="service_parent">
                                        <option value="">Service indépendant</option>
                                        <option value="direction_generale">Direction Générale</option>
                                        <option value="secretariat_general">Secrétariat Général</option>
                                        <option value="inspection_generale">Inspection Générale</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="objectifs">Objectifs Stratégiques <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="objectifs" name="objectifs" rows="3"
                                              placeholder="Décrivez les objectifs principaux et missions stratégiques du service dans le cadre des politiques MEN..." required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Options Avancées -->
                <div class="card mt-4">
                    <div class="card-header bg-light">
                        <h6 class="mb-0"><i class="feather icon-sliders text-primary"></i> Options Avancées</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="service_strategique" name="service_strategique">
                                    <label class="form-check-label" for="service_strategique">
                                        <strong>Service Stratégique</strong>
                                        <small class="d-block text-muted">Service crucial pour les opérations MEN</small>
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="service_transversal" name="service_transversal">
                                    <label class="form-check-label" for="service_transversal">
                                        <strong>Service Transversal</strong>
                                        <small class="d-block text-muted">Intervient dans plusieurs directions</small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="acces_externe" name="acces_externe">
                                    <label class="form-check-label" for="acces_externe">
                                        <strong>Accès Public</strong>
                                        <small class="d-block text-muted">Accessible aux usagers externes</small>
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="service_24h" name="service_24h">
                                    <label class="form-check-label" for="service_24h">
                                        <strong>Service 24h/24</strong>
                                        <small class="d-block text-muted">Opérationnel en continu</small>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <hr>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <a href="{{ route('direction_centrale.index') }}" class="btn btn-inverse waves-effect">
                                                    <i class="feather icon-arrow-left"></i> Retour
                                                </a>
                                                <button type="button" class="btn btn-outline-primary waves-effect" onclick="resetForm()">
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

<script>
function resetForm() {
    (new PNotify({
        title: 'Réinitialisation du formulaire',
        text: 'Êtes-vous sûr de vouloir réinitialiser le formulaire Direction Centrale ?',
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
        document.querySelector('form').reset();
        // Remettre les valeurs par défaut
        document.getElementById('date_creation').value = new Date().toISOString().split('T')[0];
        document.getElementById('statut').value = 'actif';
        document.getElementById('priorite').value = 'importante';
        document.getElementById('niveau_responsable').value = 'service';
        document.getElementById('code_service').value = '';

        new PNotify({
            title: 'Formulaire réinitialisé',
            text: 'Le formulaire Direction Centrale a été remis à zéro',
            type: 'info',
            delay: 3000
        });
    });
}

// Génération automatique du code service SIDMAS
function generateServiceCode() {
    const nomService = document.getElementById('nom_service').value;
    const typeService = document.getElementById('type_service').value;
    const codeService = document.getElementById('code_service');

    if (nomService.length > 0 && typeService) {
        // Générer un code basé sur le type et les premières lettres
        let typeCode = '';
        switch(typeService) {
            case 'administrative': typeCode = 'ADM'; break;
            case 'pedagogique': typeCode = 'PED'; break;
            case 'logistique': typeCode = 'LOG'; break;
            case 'financiere': typeCode = 'FIN'; break;
            case 'technique': typeCode = 'TEC'; break;
            case 'ressources_humaines': typeCode = 'RH'; break;
            case 'juridique': typeCode = 'JUR'; break;
            case 'planification': typeCode = 'PLN'; break;
            default: typeCode = 'GEN';
        }

        const code = `DC-${typeCode}`;
        codeService.value = code;
    }
}

// Calcul automatique du budget selon l'effectif et le type
function calculateBudget() {
    const effectif = parseInt(document.getElementById('nombre_employes').value) || 0;
    const typeService = document.getElementById('type_service').value;
    const budgetField = document.getElementById('budget_annuel');

    let budgetBase = 0;
    switch(typeService) {
        case 'administrative': budgetBase = 2500000; break;
        case 'pedagogique': budgetBase = 3000000; break;
        case 'logistique': budgetBase = 2000000; break;
        case 'financiere': budgetBase = 3500000; break;
        case 'technique': budgetBase = 2200000; break;
        case 'ressources_humaines': budgetBase = 2800000; break;
        case 'juridique': budgetBase = 2600000; break;
        case 'planification': budgetBase = 3200000; break;
        default: budgetBase = 2000000;
    }

    const budgetTotal = budgetBase + (effectif * 1200000); // 1.2M par employé
    if (effectif > 0) {
        budgetField.value = budgetTotal;
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const nomService = document.getElementById('nom_service');
    const typeService = document.getElementById('type_service');
    const effectif = document.getElementById('nombre_employes');

    // Génération automatique du code
    nomService.addEventListener('input', generateServiceCode);
    typeService.addEventListener('change', function() {
        generateServiceCode();
        calculateBudget();
    });

    // Calcul automatique du budget
    effectif.addEventListener('input', calculateBudget);

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

        // Validation spécifique effectif
        const effectifValue = parseInt(effectif.value);
        if (effectifValue && (effectifValue < 1 || effectifValue > 100)) {
            effectif.classList.add('is-invalid');
            errors.push('L\'effectif doit être entre 1 et 100 employés');
            valid = false;
        }

        // Validation email
        const emailField = document.getElementById('email');
        if (emailField.value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailField.value)) {
                emailField.classList.add('is-invalid');
                errors.push('Format email invalide');
                valid = false;
            }
        }

        // Validation téléphone
        const telField = document.getElementById('telephone');
        if (telField.value) {
            const telRegex = /^(\+225|0)[0-9\s]{8,}$/;
            if (!telRegex.test(telField.value)) {
                telField.classList.add('is-invalid');
                errors.push('Format téléphone invalide');
                valid = false;
            }
        }

        if (!valid) {
            new PNotify({
                title: 'Erreurs de validation',
                text: errors.join('<br>'),
                type: 'error',
                delay: 5000
            });
            return;
        }

        // Confirmation de création
        const serviceData = {
            nom: nomService.value,
            code: document.getElementById('code_service').value,
            type: typeService.value,
            effectif: effectif.value,
            responsable: document.getElementById('nom_responsable').value,
            priorite: document.getElementById('priorite').value
        };

        (new PNotify({
            title: 'Confirmation de création',
            text: `Créer le service "${serviceData.nom}" (${serviceData.code}) ?<br>
                   Type: ${serviceData.type}<br>
                   Effectif: ${serviceData.effectif} employés<br>
                   Responsable: ${serviceData.responsable}`,
            icon: 'feather icon-plus',
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
                title: 'Service Direction Centrale créé',
                text: `Service "${serviceData.nom}" créé avec succès dans SIDMAS<br>Code: ${serviceData.code}`,
                type: 'success',
                delay: 4000
            });

            // Simulation de redirection après 2 secondes
            setTimeout(() => {
                window.location.href = '{{ route("direction_centrale.index") }}';
            }, 2000);
        });
    });

    // Validation en temps réel
    const emailField = document.getElementById('email');
    emailField.addEventListener('blur', function() {
        const email = this.value;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (email && !emailRegex.test(email)) {
            this.classList.add('is-invalid');
        } else {
            this.classList.remove('is-invalid');
        }
    });

    const telField = document.getElementById('telephone');
    telField.addEventListener('blur', function() {
        const tel = this.value;
        const telRegex = /^(\+225|0)[0-9\s]{8,}$/;

        if (tel && !telRegex.test(tel)) {
            this.classList.add('is-invalid');
        } else {
            this.classList.remove('is-invalid');
        }
    });

    // Gestion des services stratégiques
    const strategiqueCheckbox = document.getElementById('service_strategique');
    const prioriteSelect = document.getElementById('priorite');

    strategiqueCheckbox.addEventListener('change', function() {
        if (this.checked) {
            prioriteSelect.value = 'critique';
            new PNotify({
                title: 'Service Stratégique',
                text: 'Priorité automatiquement définie à "Critique"',
                type: 'info',
                delay: 2000
            });
        }
    });

    // Auto-génération du code budgétaire
    const codeBudgetaire = document.getElementById('code_budgetaire');
    typeService.addEventListener('change', function() {
        if (this.value && !codeBudgetaire.value) {
            const ordreValue = document.getElementById('numero_ordre').value || '001';
            codeBudgetaire.value = `MEN-DC-${ordreValue.padStart(3, '0')}`;
        }
    });
});
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
