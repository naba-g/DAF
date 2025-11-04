@extends('layouts.layouts_super.master')
@section('title', 'Créer une Direction Centrale')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><i class="feather icon-plus"></i> Nouvelle Direction Centrale</h5>
                            <p class="m-b-0">Créer une nouvelle direction centrale SIDMAS</p>
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
                            <li class="breadcrumb-item active">Nouvelle Direction</li>
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
                            <h5><i class="feather icon-edit"></i> Informations de la Direction</h5>
                        </div>
                        <div class="card-block">
                            <form method="POST" action="#">
                                @csrf

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="nom_direction">Nom de la Direction <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="nom_direction" name="nom_direction"
                                                   placeholder="Ex: Direction des Affaires Administratives" required>
                                            <small class="form-text text-muted">Nom complet de la direction centrale</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="code_direction">Code Direction SIDMAS <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="code_direction" name="code_direction"
                                                   placeholder="Ex: DC-ADM" maxlength="10" readonly>
                                            <small class="form-text text-muted">Généré automatiquement : DC-XXX</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="type_direction">Type de Direction <span class="text-danger">*</span></label>
                                            <select class="form-control" id="type_direction" name="type_direction" required>
                                                <option value="">Sélectionner le type</option>
                                                <option value="administrative">Administrative</option>
                                                <option value="pedagogique">Pédagogique</option>
                                                <option value="logistique">Logistique</option>
                                                <option value="financiere">Financière</option>
                                                <option value="technique">Technique</option>
                                                <option value="ressources_humaines">Ressources Humaines</option>
                                                <option value="juridique">Juridique</option>
                                                <option value="communication">Communication</option>
                                            </select>
                                            <small class="form-text text-muted">Classification type direction</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="statut">Statut <span class="text-danger">*</span></label>
                                            <select class="form-control" id="statut" name="statut" required>
                                                <option value="actif" selected>Actif</option>
                                                <option value="inactif">Inactif</option>
                                                <option value="reorganisation">Réorganisation</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                
                                <!-- Responsable de la Direction -->
                                <div class="card mt-4">
                                    <div class="card-header bg-light">
                                        <h6 class="mb-0"><i class="feather icon-user text-primary"></i> Responsable de la Direction</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nom_responsable">Nom du Responsable <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="nom_responsable" name="nom_responsable"
                                                           placeholder="Ex: M. KOUASSI Albert" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="poste_responsable">Titre/Poste <span class="text-danger">*</span></label>
                                                    <select class="form-control" id="poste_responsable" name="poste_responsable" required>
                                                        <option value="">Sélectionner le poste</option>
                                                        <option value="directeur">Directeur</option>
                                                        <option value="directrice">Directrice</option>
                                                        <option value="directeur_adjoint">Directeur Adjoint</option>
                                                        <option value="directrice_adjointe">Directrice Adjointe</option>
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
                                                           placeholder="direction@men.gouv.ci">
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
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="date_creation">Date de Création <span class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" id="date_creation" name="date_creation"
                                                           value="{{ date('Y-m-d') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="adresse">Localisation <span class="text-danger">*</span></label>
                                                    <textarea class="form-control" id="adresse" name="adresse" rows="2"
                                                              placeholder="Adresse de la direction au sein du MEN..." required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Boutons d'action -->
                                <div class="form-group text-center mt-4">
                                    <a href="{{ route('direction_centrale.index') }}" class="btn btn-secondary waves-effect waves-light mr-2">
                                        <i class="feather icon-arrow-left"></i> Retour à la Liste
                                    </a>
                                    <button type="button" class="btn btn-warning waves-effect waves-light mr-2" onclick="resetForm()">
                                        <i class="feather icon-refresh-cw"></i> Réinitialiser
                                    </button>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        <i class="feather icon-save"></i> Créer la Direction
                                    </button>
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
<script>
// Génération automatique du code direction SIDMAS
function generateDirectionCode() {
    const nomDirection = document.getElementById('nom_direction').value;
    const typeDirection = document.getElementById('type_direction').value;
    const codeDirection = document.getElementById('code_direction');

    if (nomDirection.length > 0 && typeDirection) {
        let typeCode = '';
        switch(typeDirection) {
            case 'administrative': typeCode = 'ADM'; break;
            case 'pedagogique': typeCode = 'PED'; break;
            case 'logistique': typeCode = 'LOG'; break;
            case 'financiere': typeCode = 'FIN'; break;
            case 'technique': typeCode = 'TEC'; break;
            case 'ressources_humaines': typeCode = 'RH'; break;
            case 'juridique': typeCode = 'JUR'; break;
            case 'communication': typeCode = 'COM'; break;
            default: typeCode = 'GEN';
        }

        const code = `DC-${typeCode}`;
        codeDirection.value = code;
    }
}

function resetForm() {
    if (confirm('Êtes-vous sûr de vouloir réinitialiser le formulaire ?')) {
        document.querySelector('form').reset();
        document.getElementById('date_creation').value = new Date().toISOString().split('T')[0];
        document.getElementById('statut').value = 'actif';
        document.getElementById('code_direction').value = '';

        new PNotify({
            title: 'Formulaire réinitialisé',
            text: 'Le formulaire a été remis à zéro',
            type: 'info',
            delay: 3000
        });
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const nomDirection = document.getElementById('nom_direction');
    const typeDirection = document.getElementById('type_direction');

    // Génération automatique du code
    nomDirection.addEventListener('input', generateDirectionCode);
    typeDirection.addEventListener('change', generateDirectionCode);

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
        const directionData = {
            nom: nomDirection.value,
            code: document.getElementById('code_direction').value,
            type: typeDirection.value,
            responsable: document.getElementById('nom_responsable').value
        };

        if (confirm(`Créer la direction "${directionData.nom}" (${directionData.code}) ?`)) {
            new PNotify({
                title: 'Direction Centrale créée',
                text: `Direction "${directionData.nom}" créée avec succès dans SIDMAS`,
                type: 'success',
                delay: 4000
            });

            setTimeout(() => {
                window.location.href = '{{ route("direction_centrale.index") }}';
            }, 2000);
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
</style>
@endsection