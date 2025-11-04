<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DrenaController extends Controller
{
    /**
     * Afficher la liste des DREN.
     */
    public function index()
    {
        try {
            // Logique pour récupérer toutes les DREN
            $drenas = []; // À remplacer par la logique de récupération des données
            
            return view('espace.espace_super.drena.liste', compact('drenas'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement des DREN : ' . $e->getMessage());
        }
    }

    /**
     * Afficher le formulaire de cr�ation d'une nouvelle DREN.
     */
    public function create()
    {
        try {
            return view('espace.espace_super.drena.create');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement du formulaire : ' . $e->getMessage());
        }
    }

    /**
     * Enregistrer une nouvelle DREN.
     */
    public function store(Request $request)
    {
        try {
            // Validation des données
            $validatedData = $request->validate([
                'nom_dren' => 'required|string|max:255',
                'code_dren' => 'required|string|unique:drenas|max:10',
                'region' => 'required|string|max:100',
                'commune' => 'required|string|max:100',
                'directeur' => 'required|string|max:255',
                'telephone' => 'nullable|string|max:20',
                'email' => 'nullable|email|max:255',
                'adresse' => 'nullable|string|max:500',
                'date_creation' => 'required|date',
                'statut' => 'required|in:active,inactive',
                'observation' => 'nullable|string|max:1000'
            ]);

            // Logique de sauvegarde
            // $drena = Drena::create($validatedData);

            return redirect()->route('drena.index')
                           ->with('success', 'DREN créée avec succès');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la création : ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Afficher une DREN sp�cifique.
     */
    public function show($id)
    {
        try {
            // Logique pour récupérer une DREN spécifique
            // $drena = Drena::with('iepps')->findOrFail($id);
            
            $drena = (object)[
                'id' => $id,
                'nom_dren' => 'DREN Abengourou',
                'code_dren' => 'DRE-ABG',
                'region' => 'Indénié-Djuablin',
                'commune' => 'Abengourou',
                'directeur' => 'M. KOUASSI Pierre',
                'telephone' => '+225 35 91 12 34',
                'email' => 'dren.abengourou@men.gouv.ci',
                'statut' => 'active',
                'nombre_iepp' => 8,
                'nombre_epp' => 450
            ];

            return view('espace.espace_super.drena.show', compact('drena', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'DREN introuvable : ' . $e->getMessage());
        }
    }

    /**
     * Afficher le formulaire de modification d'une DREN.
     */
    public function edit($id)
    {
        try {
            // Logique pour récupérer la DREN à modifier
            // $drena = Drena::findOrFail($id);
            
            $drena = (object)[
                'id' => $id,
                'nom_dren' => 'DREN Abengourou',
                'code_dren' => 'DRE-ABG',
                'region' => 'Indénié-Djuablin',
                'commune' => 'Abengourou',
                'directeur' => 'M. KOUASSI Pierre',
                'telephone' => '+225 35 91 12 34',
                'email' => 'dren.abengourou@men.gouv.ci',
                'statut' => 'active'
            ];

            return view('espace.espace_super.drena.edit', compact('drena', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'DREN introuvable : ' . $e->getMessage());
        }
    }

    /**
     * Mettre � jour une DREN.
     */
    public function update(Request $request, $id)
    {
        try {
            // Validation des données
            $validatedData = $request->validate([
                'nom_dren' => 'required|string|max:255',
                'code_dren' => 'required|string|max:10|unique:drenas,code_dren,' . $id,
                'region' => 'required|string|max:100',
                'commune' => 'required|string|max:100',
                'directeur' => 'required|string|max:255',
                'telephone' => 'nullable|string|max:20',
                'email' => 'nullable|email|max:255',
                'adresse' => 'nullable|string|max:500',
                'statut' => 'required|in:active,inactive',
                'observation' => 'nullable|string|max:1000'
            ]);

            // Logique de mise à jour
            // $drena = Drena::findOrFail($id);
            // $drena->update($validatedData);

            return redirect()->route('drena.show', $id)
                           ->with('success', 'DREN mise à jour avec succès');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la mise à jour : ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Supprimer une DREN.
     */
    public function destroy($id)
    {
        try {
            // Vérifier si la DREN peut être supprimée
            // $drena = Drena::findOrFail($id);
            
            // Vérifier les dépendances (IEPP, distributions)
            // if ($drena->iepps()->exists()) {
            //     return back()->with('error', 'Impossible de supprimer une DREN ayant des IEPP associées');
            // }

            // $drena->delete();

            return redirect()->route('drena.index')
                           ->with('success', 'DREN supprimée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la suppression : ' . $e->getMessage());
        }
    }

    /**
     * Display DREN statistics.
     */
    public function statistiques($id)
    {
        try {
            // Récupérer les statistiques de la DREN
            // $drena = Drena::with('iepps.epps')->findOrFail($id);
            $statistiques = $this->getStatistiquesDren($id);
            
            return view('espace.espace_super.drena.statistiques', compact('statistiques', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement des statistiques : ' . $e->getMessage());
        }
    }

    /**
     * Get DREN statistics.
     */
    private function getStatistiquesDren($id)
    {
        return [
            'nombre_iepp' => 8,
            'nombre_epp' => 450,
            'nombre_eleves' => 28500,
            'manuels_distribues' => 125000,
            'manuels_en_attente' => 15000,
            'taux_distribution' => 89.3,
            'distributions_validees' => 245,
            'distributions_en_cours' => 12,
            'repartition_par_niveau' => [
                'CP1' => ['eleves' => 4800, 'manuels' => 21600],
                'CP2' => ['eleves' => 4600, 'manuels' => 20700],
                'CE1' => ['eleves' => 4700, 'manuels' => 21150],
                'CE2' => ['eleves' => 4500, 'manuels' => 20250],
                'CM1' => ['eleves' => 4950, 'manuels' => 22275],
                'CM2' => ['eleves' => 4950, 'manuels' => 22275]
            ]
        ];
    }

    /**
     * List IEPPs under this DREN.
     */
    public function iepps($id)
    {
        try {
            // Récupérer les IEPP de cette DREN
            // $drena = Drena::findOrFail($id);
            // $iepps = $drena->iepps()->with('epps')->get();
            
            $iepps = [
                ['id' => 1, 'nom' => 'IEPP Abengourou 1', 'nombre_epp' => 65, 'statut' => 'active'],
                ['id' => 2, 'nom' => 'IEPP Abengourou 2', 'nombre_epp' => 58, 'statut' => 'active'],
                ['id' => 3, 'nom' => 'IEPP Agnibilékrou', 'nombre_epp' => 72, 'statut' => 'active'],
                // ... autres IEPP
            ];
            
            return view('espace.espace_super.drena.iepps', compact('iepps', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement des IEPP : ' . $e->getMessage());
        }
    }

    /**
     * List distributions for this DREN.
     */
    public function distributions($id)
    {
        try {
            // Récupérer les distributions de cette DREN
            // $drena = Drena::findOrFail($id);
            // $distributions = $drena->distributions()->latest()->paginate(20);
            
            $distributions = []; // Données de test
            
            return view('espace.espace_super.drena.distributions', compact('distributions', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement des distributions : ' . $e->getMessage());
        }
    }

    /**
     * Redistribute to IEPPs under this DREN.
     */
    public function redistribuer($id)
    {
        try {
            // Logique de redistribution vers les IEPP
            // $drena = Drena::with('iepps')->findOrFail($id);
            
            return redirect()->route('drena.show', $id)
                           ->with('success', 'Redistribution vers les IEPP initiée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la redistribution : ' . $e->getMessage());
        }
    }

    /**
     * Generate DREN report.
     */
    public function genererRapport($id)
    {
        try {
            // Logique de génération de rapport
            // $drena = Drena::with(['iepps.epps', 'distributions'])->findOrFail($id);
            
            return redirect()->route('drena.show', $id)
                           ->with('success', 'Rapport DREN généré avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la génération du rapport : ' . $e->getMessage());
        }
    }

    /**
     * Export DREN data.
     */
    public function export($id)
    {
        try {
            // Logique d'export
            // $drena = Drena::findOrFail($id);
            
            return redirect()->route('drena.show', $id)
                           ->with('success', 'Export DREN généré avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de l\'export : ' . $e->getMessage());
        }
    }

    /**
     * Synchronize DREN data with central system.
     */
    public function synchroniser($id)
    {
        try {
            // Logique de synchronisation
            // $drena = Drena::findOrFail($id);
            
            return redirect()->route('drena.show', $id)
                           ->with('success', 'Synchronisation DREN effectuée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la synchronisation : ' . $e->getMessage());
        }
    }
}
