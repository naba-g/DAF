<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IeppController extends Controller
{
    /**
     * Afficher la liste des IEPP.
     */
    public function index()
    {
        try {
            // Logique pour récupérer toutes les IEPP
            $iepps = []; // À remplacer par la logique de récupération des données
            
            return view('espace.espace_super.iepp.liste', compact('iepps'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement des IEPP : ' . $e->getMessage());
        }
    }

    /**
     * Afficher le formulaire de cr�ation d'une nouvelle IEPP.
     */
    public function create()
    {
        try {
            return view('espace.espace_super.iepp.create');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement du formulaire : ' . $e->getMessage());
        }
    }

    /**
     * Enregistrer une nouvelle IEPP.
     */
    public function store(Request $request)
    {
        try {
            // Validation des données
            $validatedData = $request->validate([
                'nom_iepp' => 'required|string|max:255',
                'code_iepp' => 'required|string|unique:iepps|max:15',
                'dren_id' => 'required|integer|exists:drenas,id',
                'commune' => 'required|string|max:100',
                'sous_prefecture' => 'required|string|max:100',
                'inspecteur' => 'required|string|max:255',
                'telephone' => 'nullable|string|max:20',
                'email' => 'nullable|email|max:255',
                'adresse' => 'nullable|string|max:500',
                'date_creation' => 'required|date',
                'statut' => 'required|in:active,inactive',
                'observation' => 'nullable|string|max:1000'
            ]);

            // Logique de sauvegarde
            // $iepp = Iepp::create($validatedData);

            return redirect()->route('iepp.index')
                           ->with('success', 'IEPP créée avec succès');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la création : ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Afficher une IEPP sp�cifique.
     */
    public function show($id)
    {
        try {
            // Logique pour récupérer une IEPP spécifique
            // $iepp = Iepp::with('dren', 'epps')->findOrFail($id);
            
            $iepp = (object)[
                'id' => $id,
                'nom_iepp' => 'IEPP Abengourou 1',
                'code_iepp' => 'IEPP-ABG-01',
                'dren' => 'DREN Abengourou',
                'commune' => 'Abengourou',
                'sous_prefecture' => 'Abengourou',
                'inspecteur' => 'Mme BAMBA Fatou',
                'telephone' => '+225 35 91 45 67',
                'email' => 'iepp.abengourou1@men.gouv.ci',
                'statut' => 'active',
                'nombre_epp' => 65,
                'nombre_eleves' => 3800
            ];

            return view('espace.espace_super.iepp.show', compact('iepp', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'IEPP introuvable : ' . $e->getMessage());
        }
    }

    /**
     * Afficher le formulaire de modification d'une IEPP.
     */
    public function edit($id)
    {
        try {
            // Logique pour récupérer l'IEPP à modifier
            // $iepp = Iepp::findOrFail($id);
            
            $iepp = (object)[
                'id' => $id,
                'nom_iepp' => 'IEPP Abengourou 1',
                'code_iepp' => 'IEPP-ABG-01',
                'dren_id' => 1,
                'commune' => 'Abengourou',
                'sous_prefecture' => 'Abengourou',
                'inspecteur' => 'Mme BAMBA Fatou',
                'telephone' => '+225 35 91 45 67',
                'email' => 'iepp.abengourou1@men.gouv.ci',
                'statut' => 'active'
            ];

            return view('espace.espace_super.iepp.edit', compact('iepp', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'IEPP introuvable : ' . $e->getMessage());
        }
    }

    /**
     * Mettre � jour une IEPP.
     */
    public function update(Request $request, $id)
    {
        try {
            // Validation des données
            $validatedData = $request->validate([
                'nom_iepp' => 'required|string|max:255',
                'code_iepp' => 'required|string|max:15|unique:iepps,code_iepp,' . $id,
                'dren_id' => 'required|integer|exists:drenas,id',
                'commune' => 'required|string|max:100',
                'sous_prefecture' => 'required|string|max:100',
                'inspecteur' => 'required|string|max:255',
                'telephone' => 'nullable|string|max:20',
                'email' => 'nullable|email|max:255',
                'adresse' => 'nullable|string|max:500',
                'statut' => 'required|in:active,inactive',
                'observation' => 'nullable|string|max:1000'
            ]);

            // Logique de mise à jour
            // $iepp = Iepp::findOrFail($id);
            // $iepp->update($validatedData);

            return redirect()->route('iepp.show', $id)
                           ->with('success', 'IEPP mise à jour avec succès');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la mise à jour : ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Supprimer une IEPP.
     */
    public function destroy($id)
    {
        try {
            // Vérifier si l'IEPP peut être supprimée
            // $iepp = Iepp::findOrFail($id);
            
            // Vérifier les dépendances (EPP, distributions)
            // if ($iepp->epps()->exists()) {
            //     return back()->with('error', 'Impossible de supprimer une IEPP ayant des EPP associées');
            // }

            // $iepp->delete();

            return redirect()->route('iepp.index')
                           ->with('success', 'IEPP supprimée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la suppression : ' . $e->getMessage());
        }
    }

    /**
     * Display IEPP statistics.
     */
    public function statistiques($id)
    {
        try {
            // Récupérer les statistiques de l'IEPP
            // $iepp = Iepp::with('epps')->findOrFail($id);
            $statistiques = $this->getStatistiquesIepp($id);
            
            return view('espace.espace_super.iepp.statistiques', compact('statistiques', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement des statistiques : ' . $e->getMessage());
        }
    }

    /**
     * Get IEPP statistics.
     */
    private function getStatistiquesIepp($id)
    {
        return [
            'nombre_epp' => 65,
            'nombre_eleves' => 3800,
            'manuels_distribues' => 18500,
            'manuels_en_attente' => 2200,
            'taux_distribution' => 89.4,
            'distributions_validees' => 45,
            'distributions_en_cours' => 3,
            'repartition_par_niveau' => [
                'CP1' => ['eleves' => 640, 'manuels' => 2880],
                'CP2' => ['eleves' => 620, 'manuels' => 2790],
                'CE1' => ['eleves' => 630, 'manuels' => 2835],
                'CE2' => ['eleves' => 610, 'manuels' => 2745],
                'CM1' => ['eleves' => 650, 'manuels' => 2925],
                'CM2' => ['eleves' => 650, 'manuels' => 2925]
            ]
        ];
    }

    /**
     * List EPPs under this IEPP.
     */
    public function epps($id)
    {
        try {
            // Récupérer les EPP de cette IEPP
            // $iepp = Iepp::findOrFail($id);
            // $epps = $iepp->epps()->get();
            
            $epps = [
                ['id' => 1, 'nom' => 'EPP Abengourou Centre A', 'nombre_eleves' => 285, 'statut' => 'active'],
                ['id' => 2, 'nom' => 'EPP Abengourou Centre B', 'nombre_eleves' => 320, 'statut' => 'active'],
                ['id' => 3, 'nom' => 'EPP Abengourou Nord', 'nombre_eleves' => 195, 'statut' => 'active'],
                // ... autres EPP
            ];
            
            return view('espace.espace_super.iepp.epps', compact('epps', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement des EPP : ' . $e->getMessage());
        }
    }

    /**
     * List distributions for this IEPP.
     */
    public function distributions($id)
    {
        try {
            // Récupérer les distributions de cette IEPP
            // $iepp = Iepp::findOrFail($id);
            // $distributions = $iepp->distributions()->latest()->paginate(20);
            
            $distributions = []; // Données de test
            
            return view('espace.espace_super.iepp.distributions', compact('distributions', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement des distributions : ' . $e->getMessage());
        }
    }

    /**
     * Redistribute to EPPs under this IEPP.
     */
    public function redistribuer($id)
    {
        try {
            // Logique de redistribution vers les EPP
            // $iepp = Iepp::with('epps')->findOrFail($id);
            
            return redirect()->route('iepp.show', $id)
                           ->with('success', 'Redistribution vers les EPP initiée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la redistribution : ' . $e->getMessage());
        }
    }

    /**
     * Generate inspection report.
     */
    public function genererRapportInspection($id)
    {
        try {
            // Logique de génération de rapport d'inspection
            // $iepp = Iepp::with(['epps', 'distributions'])->findOrFail($id);
            
            return redirect()->route('iepp.show', $id)
                           ->with('success', 'Rapport d\'inspection généré avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la génération du rapport : ' . $e->getMessage());
        }
    }

    /**
     * Plan inspection visits.
     */
    public function planifierVisites(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'date_debut' => 'required|date|after:today',
                'date_fin' => 'required|date|after:date_debut',
                'epp_ids' => 'required|array|min:1',
                'epp_ids.*' => 'integer|exists:epps,id',
                'objectif' => 'required|string|max:500'
            ]);

            // Logique de planification des visites
            // $iepp = Iepp::findOrFail($id);

            return redirect()->route('iepp.show', $id)
                           ->with('success', 'Visites d\'inspection planifiées avec succès');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la planification : ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Generate IEPP report.
     */
    public function genererRapport($id)
    {
        try {
            // Logique de génération de rapport
            // $iepp = Iepp::with(['dren', 'epps', 'distributions'])->findOrFail($id);
            
            return redirect()->route('iepp.show', $id)
                           ->with('success', 'Rapport IEPP généré avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la génération du rapport : ' . $e->getMessage());
        }
    }

    /**
     * Export IEPP data.
     */
    public function export($id)
    {
        try {
            // Logique d'export
            // $iepp = Iepp::findOrFail($id);
            
            return redirect()->route('iepp.show', $id)
                           ->with('success', 'Export IEPP généré avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de l\'export : ' . $e->getMessage());
        }
    }

    /**
     * Synchronize IEPP data with DREN.
     */
    public function synchroniser($id)
    {
        try {
            // Logique de synchronisation
            // $iepp = Iepp::findOrFail($id);
            
            return redirect()->route('iepp.show', $id)
                           ->with('success', 'Synchronisation IEPP effectuée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la synchronisation : ' . $e->getMessage());
        }
    }

    /**
     * Evaluate IEPP performance.
     */
    public function evaluerPerformance($id)
    {
        try {
            // Logique d'évaluation de performance
            // $iepp = Iepp::with('epps', 'distributions')->findOrFail($id);
            $evaluation = $this->calculerPerformance($id);
            
            return view('espace.espace_super.iepp.evaluation', compact('evaluation', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de l\'évaluation : ' . $e->getMessage());
        }
    }

    /**
     * Calculate IEPP performance metrics.
     */
    private function calculerPerformance($id)
    {
        return [
            'score_global' => 85.5,
            'taux_distribution' => 89.4,
            'taux_satisfaction' => 92.0,
            'delai_moyen_distribution' => 3.2, // jours
            'couverture_epp' => 100.0,
            'note_inspection' => 'B+',
            'ameliorations_suggeres' => [
                'Réduire les délais de distribution',
                'Améliorer le suivi des livraisons',
                'Renforcer la communication avec les EPP'
            ]
        ];
    }
}
