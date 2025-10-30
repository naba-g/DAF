@extends('layouts.layouts_super.master')
@section('title', 'Modifier DRENA')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-edit"></i> Modifier la DRENA</h5>
                            <p class="m-b-0">Modifier les informations de la DRENA</p>
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
                            <li class="breadcrumb-item">
                                <a href="{{ route('drena.show', 1) }}">Détails</a>
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
                    <form id="editDrenaForm" action="{{ route('drena.update', 1) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Informations de base -->
                        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-info-circle"></i> Informations de base de la DRENA
                </h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nom_drena" class="form-label required">Nom de la DRENA</label>
                            <input type="text"
                                   class="form-control"
                                   id="nom_drena"
                                   name="nom_drena"
                                   value="DRENA Lagunes"
                                   required>
                            <small class="form-text text-muted">Nom officiel de la Direction Régionale</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="code_drena" class="form-label required">Code DRENA</label>
                            <input type="text"
                                   class="form-control"
                                   id="code_drena"
                                   name="code_drena"
                                   value="DRENA-LAG-001"
                                   required>
                            <small class="form-text text-muted">Code unique d'identification</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="region" class="form-label required">Région</label>
                            <select class="form-control" id="region" name="region" required>
                                <option value="">Sélectionner une région</option>
                                <option value="lagunes" selected>Lagunes</option>
                                <option value="vallée_du_bandama">Vallée du Bandama</option>
                                <option value="lacs">Lacs</option>
                                <option value="savanes">Savanes</option>
                                <option value="montagnes">Montagnes</option>
                                <option value="bas_sassandra">Bas Sassandra</option>
                                <option value="comoe">Comoé</option>
                                <option value="denguele">Denguélé</option>
                                <option value="goh_djiboua">Gôh-Djiboua</option>
                                <option value="marahoue">Marahoué</option>
                                <option value="poro">Poro</option>
                                <option value="tchologo">Tchologo</option>
                                <option value="bagoue">Bagoué</option>
                                <option value="belier">Bélier</option>
                                <option value="haut_sassandra">Haut Sassandra</option>
                                <option value="iffou">Iffou</option>
                                <option value="la_me">La Mé</option>
                                <option value="nawa">Nawa</option>
                                <option value="san_pedro">San Pedro</option>
                                <option value="tonkpi">Tonkpi</option>
                                <option value="worodougou">Worodougou</option>
                                <option value="cavally">Cavally</option>
                                <option value="gbeke">Gbêkê</option>
                                <option value="gbokle">Gbôklé</option>
                                <option value="gontougo">Gontougo</option>
                                <option value="grand_pont">Grand Pont</option>
                                <option value="guemon">Guémon</option>
                                <option value="hambol">Hambol</option>
                                <option value="indenie_djuablin">Indénié-Djuablin</option>
                                <option value="kabadougou">Kabadougou</option>
                                <option value="loh_djiboua">Lôh-Djiboua</option>
                                <option value="moronou">Moronou</option>
                                <option value="sud_comoe">Sud Comoé</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ville_siege" class="form-label required">Ville du siège</label>
                            <input type="text"
                                   class="form-control"
                                   id="ville_siege"
                                   name="ville_siege"
                                   value="Abidjan"
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
                                      rows="3">Rue des Jardins, Plateau, BP 1234 Abidjan, Côte d'Ivoire</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Direction et Personnel -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-users"></i> Direction et Personnel
                </h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="directeur_regional" class="form-label required">Directeur Régional</label>
                            <input type="text"
                                   class="form-control"
                                   id="directeur_regional"
                                   name="directeur_regional"
                                   value="Dr. KOFFI Jean-Baptiste"
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
                                   value="+225 07 12 34 56 78">
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
                                   value="Mme OUATTARA Aminata">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="secretaire_general" class="form-label">Secrétaire Général</label>
                            <input type="text"
                                   class="form-control"
                                   id="secretaire_general"
                                   name="secretaire_general"
                                   value="M. YAO Kouassi">
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
                                   value="contact@drena-lagunes.edu.ci">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telephone_drena" class="form-label">Téléphone DRENA</label>
                            <input type="tel"
                                   class="form-control"
                                   id="telephone_drena"
                                   name="telephone_drena"
                                   value="+225 27 20 12 34 56">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Organisation et Statut -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-cogs"></i> Organisation et Statut
                </h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="statut" class="form-label required">Statut</label>
                            <select class="form-control" id="statut" name="statut" required>
                                <option value="">Sélectionner un statut</option>
                                <option value="active" selected>Active</option>
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
                                   name="date_creation"
                                   value="2020-01-15">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nombre_etablissements" class="form-label">Nombre d'établissements</label>
                            <input type="number"
                                   class="form-control"
                                   id="nombre_etablissements"
                                   name="nombre_etablissements"
                                   min="0"
                                   value="1250">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="zone_intervention" class="form-label">Zone d'intervention</label>
                            <select class="form-control" id="zone_intervention" name="zone_intervention">
                                <option value="">Sélectionner une zone</option>
                                <option value="urbaine">Urbaine</option>
                                <option value="rurale">Rurale</option>
                                <option value="mixte" selected>Mixte</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Observations et Documents -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-sticky-note"></i> Observations et Documents
                </h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="observations" class="form-label">Observations</label>
                            <textarea class="form-control"
                                      id="observations"
                                      name="observations"
                                      rows="4">La DRENA Lagunes couvre la région économique la plus importante du pays avec Abidjan comme chef-lieu. Elle supervise un nombre important d'établissements scolaires allant du primaire au secondaire. La direction régionale joue un rôle clé dans la coordination des politiques éducatives dans cette zone stratégique.</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="document_creation" class="form-label">Document de création</label>
                            <div class="custom-file">
                                <input type="file"
                                       class="custom-file-input"
                                       id="document_creation"
                                       name="document_creation"
                                       accept=".pdf,.doc,.docx">
                                <label class="custom-file-label" for="document_creation">Choisir un fichier</label>
                            </div>
                            <small class="form-text text-muted">
                                Formats acceptés: PDF, DOC, DOCX.
                                <a href="#" class="text-info">Fichier actuel: document_creation_drena_lagunes.pdf</a>
                            </small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="logo_drena" class="form-label">Logo DRENA</label>
                            <div class="custom-file">
                                <input type="file"
                                       class="custom-file-input"
                                       id="logo_drena"
                                       name="logo_drena"
                                       accept=".jpg,.jpeg,.png,.gif">
                                <label class="custom-file-label" for="logo_drena">Choisir un fichier</label>
                            </div>
                            <small class="form-text text-muted">
                                Formats acceptés: JPG, PNG, GIF.
                                <a href="#" class="text-info">Image actuelle: logo_drena_lagunes.png</a>
                            </small>
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
                            <div class="info-value">15 janvier 2020</div>
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
                                <button type="submit" class="btn btn-success btn-lg">
                                    <i class="feather icon-save"></i> Enregistrer les modifications
                                </button>
                                <button type="reset" class="btn btn-warning btn-lg">
                                    <i class="feather icon-refresh-cw"></i> Réinitialiser
                                </button>
                                <a href="{{ route('drena.show', 1) }}" class="btn btn-info btn-lg">
                                    <i class="feather icon-eye"></i> Voir les détails
                                </a>
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

<!-- Script pour la validation et l'interactivité -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('editDrenaForm');

    // Mise à jour des labels des fichiers
    const fileInputs = document.querySelectorAll('.custom-file-input');
    fileInputs.forEach(input => {
        input.addEventListener('change', function() {
            const fileName = this.files[0] ? this.files[0].name : 'Choisir un fichier';
            const label = this.nextElementSibling;
            label.textContent = fileName;
        });
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
            alert('Veuillez remplir tous les champs obligatoires.');
            return false;
        }

        // Confirmation avant soumission
        if (!confirm('Êtes-vous sûr de vouloir enregistrer ces modifications ?')) {
            e.preventDefault();
            return false;
        }
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
});
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

.form-control:focus, .custom-file-input:focus ~ .custom-file-label {
    border-color: #4e73df;
    box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-text {
    font-size: 0.85rem;
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
