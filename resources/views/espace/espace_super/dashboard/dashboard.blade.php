
@extends('layouts.layouts_super.master')
@section('title', 'Tableau de Bord SIDMAS DAF')
@section('content')

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">
                                <i class="feather icon-bar-chart-2 text-primary"></i>
                                Tableau de Bord SIDMAS DAF
                            </h5>
                            <p class="m-b-0">Vue d'ensemble des statistiques et indicateurs de performance</p>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Tableau de Bord Super Utilisateur</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- Statistiques Principales SIDMAS -->
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-white mb-0">56</h4>
                                <p class="text-white mb-0">DREN Actives</p>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-map-pin f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-primary border-0 p-2">
                        <span class="text-white f-12">Couvrant toute la Côte d'Ivoire</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-white mb-0">295</h4>
                                <p class="text-white mb-0">IEPP Opérationnelles</p>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-users f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-success border-0 p-2">
                        <span class="text-white f-12">Inspections fonctionnelles</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-white mb-0">8,247</h4>
                                <p class="text-white mb-0">EPP Répertoriées</p>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-home f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-warning border-0 p-2">
                        <span class="text-white f-12">Écoles primaires publiques</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-white mb-0">89</h4>
                                <p class="text-white mb-0">Commandes Actives</p>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-package f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-info border-0 p-2">
                        <span class="text-white f-12">Budget: 2.8M FCFA</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vue d'ensemble des Modules -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="feather icon-grid text-primary"></i> État des Modules SIDMAS</h5>
                        <span class="d-block m-t-5">Synthèse de l'intégration et des données SIDMAS par module</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Module Année Scolaire -->
                            <div class="col-lg-6 col-md-12 mb-4">
                                <div class="card border-left-primary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <h6 class="text-primary mb-1">Module Année Scolaire</h6>
                                                <p class="mb-1">Année active: <strong>2024-2025</strong></p>
                                                <small class="text-muted">5 années configurées</small>
                                            </div>
                                            <div class="col-4 text-right">
                                                <span class="badge badge-success">Actif</span>
                                                <i class="feather icon-calendar f-24 text-primary mt-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Module Commande -->
                            <div class="col-lg-6 col-md-12 mb-4">
                                <div class="card border-left-info">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <h6 class="text-info mb-1">Module Commande DAF</h6>
                                                <p class="mb-1">89 commandes | <strong>2.8M FCFA</strong></p>
                                                <small class="text-muted">12 en préparation</small>
                                            </div>
                                            <div class="col-4 text-right">
                                                <span class="badge badge-primary">89</span>
                                                <i class="feather icon-package f-24 text-info mt-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Module Direction Centrale -->
                            <div class="col-lg-6 col-md-12 mb-4">
                                <div class="card border-left-warning">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <h6 class="text-warning mb-1">Direction Centrale</h6>
                                                <p class="mb-1">8 services | <strong>112 employés</strong></p>
                                                <small class="text-muted">5 services stratégiques</small>
                                            </div>
                                            <div class="col-4 text-right">
                                                <span class="badge badge-danger">4 Critiques</span>
                                                <i class="feather icon-briefcase f-24 text-warning mt-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Module Distribution EPP -->
                            <div class="col-lg-6 col-md-12 mb-4">
                                <div class="card border-left-success">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <h6 class="text-success mb-1">Distribution EPP</h6>
                                                <p class="mb-1">156 distributions | <strong>4.2M FCFA</strong></p>
                                                <small class="text-muted">23 en cours de livraison</small>
                                            </div>
                                            <div class="col-4 text-right">
                                                <span class="badge badge-success">156</span>
                                                <i class="feather icon-truck f-24 text-success mt-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Module Distribution IEPP -->
                            <div class="col-lg-6 col-md-12 mb-4">
                                <div class="card border-left-secondary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <h6 class="text-secondary mb-1">Distribution IEPP</h6>
                                                <p class="mb-1">73 distributions | <strong>1.9M FCFA</strong></p>
                                                <small class="text-muted">8 planifiées cette semaine</small>
                                            </div>
                                            <div class="col-4 text-right">
                                                <span class="badge badge-secondary">73</span>
                                                <i class="feather icon-send f-24 text-secondary mt-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Module DRENA -->
                            <div class="col-lg-6 col-md-12 mb-4">
                                <div class="card border-left-danger">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-8">
                                                <h6 class="text-danger mb-1">Module DRENA</h6>
                                                <p class="mb-1">56 DREN | <strong>295 IEPP</strong></p>
                                                <small class="text-muted">Structure hiérarchique complète</small>
                                            </div>
                                            <div class="col-4 text-right">
                                                <span class="badge badge-primary">56</span>
                                                <i class="feather icon-map f-24 text-danger mt-2"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Tableaux de Synthèse -->
        <div class="row">
            <!-- Top DREN par Performance -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="feather icon-trending-up text-success"></i> Top 5 DREN - Performance</h5>
                        <span class="d-block m-t-5">Classement par efficacité de distribution</span>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Rang</th>
                                        <th>DREN</th>
                                        <th>IEPP</th>
                                        <th>Distributions</th>
                                        <th>Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="badge badge-warning">1</span></td>
                                        <td><strong>DREN-ABJ</strong><br><small>Abidjan</small></td>
                                        <td>28</td>
                                        <td>67</td>
                                        <td><span class="badge badge-success">98%</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-secondary">2</span></td>
                                        <td><strong>DREN-BKE</strong><br><small>Bouaké</small></td>
                                        <td>15</td>
                                        <td>42</td>
                                        <td><span class="badge badge-success">95%</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-secondary">3</span></td>
                                        <td><strong>DREN-YAM</strong><br><small>Yamoussoukro</small></td>
                                        <td>12</td>
                                        <td>38</td>
                                        <td><span class="badge badge-success">92%</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-secondary">4</span></td>
                                        <td><strong>DREN-KOR</strong><br><small>Korhogo</small></td>
                                        <td>18</td>
                                        <td>45</td>
                                        <td><span class="badge badge-info">89%</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-secondary">5</span></td>
                                        <td><strong>DREN-SAN</strong><br><small>San-Pédro</small></td>
                                        <td>11</td>
                                        <td>29</td>
                                        <td><span class="badge badge-info">87%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Commandes Récentes -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="feather icon-clock text-info"></i> Commandes Récentes</h5>
                        <span class="d-block m-t-5">Dernières activités de commande DAF</span>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Code</th>
                                        <th>Type</th>
                                        <th>DREN</th>
                                        <th>Montant</th>
                                        <th>Statut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>CMD-2024-127</strong></td>
                                        <td>Manuel scolaire</td>
                                        <td>DREN-ABJ</td>
                                        <td>45,000 F</td>
                                        <td><span class="badge badge-warning">En cours</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>CMD-2024-126</strong></td>
                                        <td>Guide pédagogique</td>
                                        <td>DREN-BKE</td>
                                        <td>62,500 F</td>
                                        <td><span class="badge badge-success">Livrée</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>CMD-2024-125</strong></td>
                                        <td>Livre de lecture</td>
                                        <td>DREN-YAM</td>
                                        <td>38,000 F</td>
                                        <td><span class="badge badge-primary">Préparation</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>CMD-2024-124</strong></td>
                                        <td>Manuel Math</td>
                                        <td>DREN-KOR</td>
                                        <td>54,000 F</td>
                                        <td><span class="badge badge-success">Livrée</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>CMD-2024-123</strong></td>
                                        <td>Cahier d'activités</td>
                                        <td>DREN-SAN</td>
                                        <td>29,500 F</td>
                                        <td><span class="badge badge-warning">En cours</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alertes et Notifications SIDMAS -->
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="feather icon-bell text-warning"></i> Alertes et Notifications Système</h5>
                        <span class="d-block m-t-5">Notifications importantes du système SIDMAS</span>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <div class="media-object bg-danger text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <i class="feather icon-alert-triangle"></i>
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="mb-1">Retard Distribution IEPP</h6>
                                <p class="mb-0 text-muted">3 distributions IEPP en retard dans la DREN de Gagnoa</p>
                                <small class="text-danger">Il y a 2 heures</small>
                            </div>
                        </div>
                        <hr>
                        <div class="media">
                            <div class="media-object bg-warning text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <i class="feather icon-package"></i>
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="mb-1">Stock Faible - Manuels CP1</h6>
                                <p class="mb-0 text-muted">Stock de manuels CP1 français en dessous du seuil critique</p>
                                <small class="text-warning">Il y a 4 heures</small>
                            </div>
                        </div>
                        <hr>
                        <div class="media">
                            <div class="media-object bg-info text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <i class="feather icon-check-circle"></i>
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="mb-1">Livraison Complétée</h6>
                                <p class="mb-0 text-muted">Distribution DREN-ABJ terminée avec succès - 2,450 ouvrages</p>
                                <small class="text-info">Il y a 6 heures</small>
                            </div>
                        </div>
                        <hr>
                        <div class="media">
                            <div class="media-object bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <i class="feather icon-users"></i>
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="mb-1">Nouvelle IEPP Enregistrée</h6>
                                <p class="mb-0 text-muted">IEPP-MAN-16 ajoutée dans la DREN de Man</p>
                                <small class="text-success">Il y a 1 jour</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Indicateurs de Performance -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="feather icon-activity text-primary"></i> Indicateurs Clés</h5>
                        <span class="d-block m-t-5">KPI système SIDMAS</span>
                    </div>
                    <div class="card-body">
                        <!-- Taux de distribution -->
                        <div class="mb-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-muted">Taux de Distribution</span>
                                <span class="font-weight-bold text-success">94%</span>
                            </div>
                            <div class="progress mt-2" style="height: 6px;">
                                <div class="progress-bar bg-success" style="width: 94%"></div>
                            </div>
                        </div>

                        <!-- Couverture DREN -->
                        <div class="mb-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-muted">Couverture DREN</span>
                                <span class="font-weight-bold text-primary">100%</span>
                            </div>
                            <div class="progress mt-2" style="height: 6px;">
                                <div class="progress-bar bg-primary" style="width: 100%"></div>
                            </div>
                        </div>

                        <!-- Efficacité Commandes -->
                        <div class="mb-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-muted">Efficacité Commandes</span>
                                <span class="font-weight-bold text-info">87%</span>
                            </div>
                            <div class="progress mt-2" style="height: 6px;">
                                <div class="progress-bar bg-info" style="width: 87%"></div>
                            </div>
                        </div>

                        <!-- Satisfaction IEPP -->
                        <div class="mb-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-muted">Satisfaction IEPP</span>
                                <span class="font-weight-bold text-warning">91%</span>
                            </div>
                            <div class="progress mt-2" style="height: 6px;">
                                <div class="progress-bar bg-warning" style="width: 91%"></div>
                            </div>
                        </div>

                        <!-- Services Actifs -->
                        <div class="mb-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-muted">Services Direction Centrale</span>
                                <span class="font-weight-bold text-secondary">6/8</span>
                            </div>
                            <div class="progress mt-2" style="height: 6px;">
                                <div class="progress-bar bg-secondary" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graphique de Tendance -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="feather icon-trending-up text-success"></i> Évolution des Distributions - Derniers 6 Mois</h5>
                        <span class="d-block m-t-5">Tendance des activités de distribution par type d'ouvrage</span>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-md-2 mb-3">
                                <div class="card bg-light">
                                    <div class="card-body p-2">
                                        <h6 class="mb-0">Mai 2024</h6>
                                        <p class="mb-0 text-primary">1,245</p>
                                        <small class="text-muted">Manuels</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="card bg-light">
                                    <div class="card-body p-2">
                                        <h6 class="mb-0">Juin 2024</h6>
                                        <p class="mb-0 text-success">1,678</p>
                                        <small class="text-muted">Manuels</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="card bg-light">
                                    <div class="card-body p-2">
                                        <h6 class="mb-0">Juillet 2024</h6>
                                        <p class="mb-0 text-info">1,423</p>
                                        <small class="text-muted">Guides</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="card bg-light">
                                    <div class="card-body p-2">
                                        <h6 class="mb-0">Août 2024</h6>
                                        <p class="mb-0 text-warning">1,832</p>
                                        <small class="text-muted">Livres</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="card bg-light">
                                    <div class="card-body p-2">
                                        <h6 class="mb-0">Sept 2024</h6>
                                        <p class="mb-0 text-danger">1,567</p>
                                        <small class="text-muted">Cahiers</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="card bg-primary text-white">
                                    <div class="card-body p-2">
                                        <h6 class="mb-0 text-white">Oct 2024</h6>
                                        <p class="mb-0 text-white"><strong>1,945</strong></p>
                                        <small class="text-white">Total</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- [ Main Content ] end -->
    </div>
</div>

@endsection

@section('page-script')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Simulation de rafraîchissement des données en temps réel
    setInterval(function() {
        // Ici on pourrait ajouter des appels AJAX pour rafraîchir les données
        console.log('Rafraîchissement des données SIDMAS...');
    }, 30000); // Toutes les 30 secondes

    // Animation des barres de progression
    const progressBars = document.querySelectorAll('.progress-bar');
    progressBars.forEach(bar => {
        const width = bar.style.width;
        bar.style.width = '0%';
        setTimeout(() => {
            bar.style.transition = 'width 1s ease-in-out';
            bar.style.width = width;
        }, 500);
    });

    // Notification de bienvenue
    setTimeout(() => {
        if (typeof PNotify !== 'undefined') {
            new PNotify({
                title: 'Tableau de Bord SIDMAS',
                text: 'Bienvenue ! Toutes les données sont synchronisées.',
                type: 'success',
                delay: 4000
            });
        }
    }, 1000);
});
</script>
@endsection
