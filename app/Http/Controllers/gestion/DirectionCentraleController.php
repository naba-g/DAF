<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DirectionCentraleController extends Controller
{
    /**
     * Afficher la liste des directions centrales.
     */
    public function index()
    {
        try {
            // Logique pour récupérer les données Direction Centrale
            $directions = []; // À remplacer par la logique de récupération des données
            
            return view('espace.espace_super.direction_centrale.liste', compact('directions'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement des directions centrales : ' . $e->getMessage());
        }
    }

    /**
     * Afficher le formulaire de cr�ation d'une nouvelle direction centrale.
     */
    public function create()
    {
        try {
            return view('espace.espace_super.direction_centrale.create');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement du formulaire : ' . $e->getMessage());
        }
    }

    /**
     * Enregistrer une nouvelle direction centrale.
     */
    public function store(Request $request)
    {
        try {
            // Validation des données
            $validatedData = $request->validate([
                'nom_direction' => 'required|string|max:255',
                'code_direction' => 'required|string|unique:directions_centrales|max:10',
                'responsable' => 'required|string|max:255',
                'telephone' => 'nullable|string|max:20',
                'email' => 'nullable|email|max:255',
                'adresse' => 'nullable|string|max:500',
                'date_creation' => 'required|date',
                'statut' => 'required|in:active,inactive',
                'description' => 'nullable|string|max:1000'
            ]);

            // Logique de sauvegarde
            // $direction = DirectionCentrale::create($validatedData);

            return redirect()->route('direction_centrale.index')
                           ->with('success', 'Direction centrale créée avec succès');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la création : ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Afficher une direction centrale sp�cifique.
     */
    public function show($id)
    {
        try {
            // Logique pour récupérer une direction centrale spécifique
            // $direction = DirectionCentrale::findOrFail($id);
            
            $direction = (object)[
                'id' => $id,
                'nom_direction' => 'Direction Centrale des Manuels Scolaires',
                'code_direction' => 'DCMS',
                'responsable' => 'M. KOUAME Jean',
                'telephone' => '+225 20 21 22 23',
                'email' => 'dcms@men.gouv.ci',
                'statut' => 'active'
            ];

            return view('espace.espace_super.direction_centrale.show', compact('direction', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Direction centrale introuvable : ' . $e->getMessage());
        }
    }

    /**
     * Afficher le formulaire de modification d'une direction centrale.
     */
    public function edit($id)
    {
        try {
            // Logique pour récupérer la direction centrale à modifier
            // $direction = DirectionCentrale::findOrFail($id);
            
            $direction = (object)[
                'id' => $id,
                'nom_direction' => 'Direction Centrale des Manuels Scolaires',
                'code_direction' => 'DCMS',
                'responsable' => 'M. KOUAME Jean',
                'telephone' => '+225 20 21 22 23',
                'email' => 'dcms@men.gouv.ci',
                'statut' => 'active'
            ];

            return view('espace.espace_super.direction_centrale.edit', compact('direction', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Direction centrale introuvable : ' . $e->getMessage());
        }
    }

    /**
     * Mettre � jour une direction centrale.
     */
    public function update(Request $request, $id)
    {
        try {
            // Validation des données
            $validatedData = $request->validate([
                'nom_direction' => 'required|string|max:255',
                'code_direction' => 'required|string|max:10|unique:directions_centrales,code_direction,' . $id,
                'responsable' => 'required|string|max:255',
                'telephone' => 'nullable|string|max:20',
                'email' => 'nullable|email|max:255',
                'adresse' => 'nullable|string|max:500',
                'statut' => 'required|in:active,inactive',
                'description' => 'nullable|string|max:1000'
            ]);

            // Logique de mise à jour
            // $direction = DirectionCentrale::findOrFail($id);
            // $direction->update($validatedData);

            return redirect()->route('direction_centrale.show', $id)
                           ->with('success', 'Direction centrale mise à jour avec succès');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la mise à jour : ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Supprimer une direction centrale.
     */
    public function destroy($id)
    {
        try {
            // Vérifier si la direction peut être supprimée
            // $direction = DirectionCentrale::findOrFail($id);
            
            // Vérifier les dépendances
            // if ($direction->commandes()->exists()) {
            //     return back()->with('error', 'Impossible de supprimer une direction ayant des commandes associées');
            // }

            // $direction->delete();

            return redirect()->route('direction_centrale.index')
                           ->with('success', 'Direction centrale supprimée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la suppression : ' . $e->getMessage());
        }
    }

    /**
     * Display statistics for Direction Centrale.
     */
    public function statistiques($id)
    {
        try {
            // Récupérer les statistiques de la direction
            // $direction = DirectionCentrale::findOrFail($id);
            $statistiques = $this->getStatistiquesDirection($id);
            
            return view('espace.espace_super.direction_centrale.statistiques', compact('statistiques', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement des statistiques : ' . $e->getMessage());
        }
    }

    /**
     * Get statistics for a specific direction.
     */
    private function getStatistiquesDirection($id)
    {
        return [
            'total_commandes' => 125,
            'commandes_validees' => 98,
            'commandes_en_cours' => 15,
            'commandes_livrees' => 83,
            'manuels_distribues' => 125000,
            'beneficiaires' => 85000,
            'ecoles_couvertes' => 1250
        ];
    }

    /**
     * Generate report for Direction Centrale.
     */
    public function genererRapport($id)
    {
        try {
            // Logique de génération de rapport
            // $direction = DirectionCentrale::with('commandes', 'allocations')->findOrFail($id);
            
            return redirect()->route('direction_centrale.show', $id)
                           ->with('success', 'Rapport généré avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la génération du rapport : ' . $e->getMessage());
        }
    }

    /**
     * Export Direction Centrale data.
     */
    public function export($id)
    {
        try {
            // Logique d'export
            // $direction = DirectionCentrale::findOrFail($id);
            
            return redirect()->route('direction_centrale.show', $id)
                           ->with('success', 'Export généré avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de l\'export : ' . $e->getMessage());
        }
    }
}
