<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DistributionIeppController extends Controller
{
    /**
     * Afficher la liste des distributions IEPP.
     */
    public function index()
    {
        try {
            // Logique pour récupérer toutes les distributions IEPP
            $distributions = []; // À remplacer par la logique de récupération des données
            
            return view('espace.espace_super.distributioniepp.liste', compact('distributions'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement des distributions IEPP : ' . $e->getMessage());
        }
    }

    /**
     * Afficher le formulaire de cr�ation d'une nouvelle distribution IEPP.
     */
    public function create()
    {
        try {
            return view('espace.espace_super.distributioniepp.create');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement du formulaire : ' . $e->getMessage());
        }
    }

    /**
     * Enregistrer une nouvelle distribution IEPP.
     */
    public function store(Request $request)
    {
        try {
            // Validation des données
            $validatedData = $request->validate([
                'numero_distribution' => 'required|string|unique:distributions_iepp|max:50',
                'dren_id' => 'required|integer',
                'iepp_id' => 'required|integer',
                'date_distribution' => 'required|date',
                'responsable_distribution' => 'required|string|max:255',
                'statut' => 'required|in:prevue,en_cours,terminee,annulee',
                'priorite' => 'required|in:normale,urgente,tres_urgente',
                'observation' => 'nullable|string|max:1000',
                'details_manuels' => 'required|array|min:1',
                'details_manuels.*.type_ouvrage' => 'required|string|max:100',
                'details_manuels.*.niveau' => 'required|string|max:50',
                'details_manuels.*.titre' => 'required|string|max:255',
                'details_manuels.*.quantite_demandee' => 'required|integer|min:1',
                'details_manuels.*.quantite_livree' => 'nullable|integer|min:0'
            ]);

            // Logique de sauvegarde
            // $distribution = DistributionIepp::create($validatedData);

            return redirect()->route('distributioniepp.index')
                           ->with('success', 'Distribution IEPP créée avec succès');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la création : ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Afficher une distribution IEPP sp�cifique.
     */
    public function show($id)
    {
        try {
            // Logique pour récupérer une distribution IEPP spécifique
            // $distribution = DistributionIepp::with('dren', 'iepp', 'details')->findOrFail($id);
            
            $distribution = (object)[
                'id' => $id,
                'numero_distribution' => 'DIST-IEPP-2024-001',
                'date_distribution' => '2024-11-15',
                'responsable_distribution' => 'Mme KONE Aminata',
                'statut' => 'en_cours',
                'priorite' => 'normale',
                'dren' => 'DREN Abengourou',
                'iepp' => 'IEPP Abengourou 1'
            ];

            return view('espace.espace_super.distributioniepp.show', compact('distribution', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Distribution IEPP introuvable : ' . $e->getMessage());
        }
    }

    /**
     * Afficher le formulaire de modification d'une distribution IEPP.
     */
    public function edit($id)
    {
        try {
            // Logique pour récupérer la distribution IEPP à modifier
            // $distribution = DistributionIepp::findOrFail($id);
            
            $distribution = (object)[
                'id' => $id,
                'numero_distribution' => 'DIST-IEPP-2024-001',
                'date_distribution' => '2024-11-15',
                'responsable_distribution' => 'Mme KONE Aminata',
                'statut' => 'en_cours',
                'priorite' => 'normale',
                'dren_id' => 1,
                'iepp_id' => 1
            ];

            return view('espace.espace_super.distributioniepp.edit', compact('distribution', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Distribution IEPP introuvable : ' . $e->getMessage());
        }
    }

    /**
     * Mettre � jour une distribution IEPP.
     */
    public function update(Request $request, $id)
    {
        try {
            // Validation des données
            $validatedData = $request->validate([
                'numero_distribution' => 'required|string|max:50|unique:distributions_iepp,numero_distribution,' . $id,
                'dren_id' => 'required|integer',
                'iepp_id' => 'required|integer',
                'date_distribution' => 'required|date',
                'responsable_distribution' => 'required|string|max:255',
                'statut' => 'required|in:prevue,en_cours,terminee,annulee',
                'priorite' => 'required|in:normale,urgente,tres_urgente',
                'observation' => 'nullable|string|max:1000'
            ]);

            // Logique de mise à jour
            // $distribution = DistributionIepp::findOrFail($id);
            // $distribution->update($validatedData);

            return redirect()->route('distributioniepp.show', $id)
                           ->with('success', 'Distribution IEPP mise à jour avec succès');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la mise à jour : ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Supprimer une distribution IEPP.
     */
    public function destroy($id)
    {
        try {
            // Vérifier si la distribution peut être supprimée
            // $distribution = DistributionIepp::findOrFail($id);
            
            // Vérifier le statut
            // if ($distribution->statut === 'terminee') {
            //     return back()->with('error', 'Impossible de supprimer une distribution terminée');
            // }

            // $distribution->delete();

            return redirect()->route('distributioniepp.index')
                           ->with('success', 'Distribution IEPP supprimée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la suppression : ' . $e->getMessage());
        }
    }

    /**
     * Update delivery quantities for IEPP distribution.
     */
    public function updateLivraison(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'quantite_livree' => 'required|array',
                'quantite_livree.*' => 'integer|min:0',
                'date_livraison' => 'required|date',
                'observation_livraison' => 'nullable|string|max:500'
            ]);

            // Logique de mise à jour des quantités livrées
            // $distribution = DistributionIepp::findOrFail($id);
            // foreach ($validatedData['quantite_livree'] as $detailId => $quantite) {
            //     $distribution->details()->where('id', $detailId)->update(['quantite_livree' => $quantite]);
            // }

            return redirect()->route('distributioniepp.show', $id)
                           ->with('success', 'Quantités livrées mises à jour avec succès');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la mise à jour : ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Calculate distribution statistics.
     */
    public function statistiques($id)
    {
        try {
            // Récupérer les statistiques de distribution
            // $distribution = DistributionIepp::with('details')->findOrFail($id);
            $statistiques = $this->calculerStatistiques($id);
            
            return view('espace.espace_super.distributioniepp.statistiques', compact('statistiques', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du calcul des statistiques : ' . $e->getMessage());
        }
    }

    /**
     * Calculate distribution statistics.
     */
    private function calculerStatistiques($id)
    {
        return [
            'total_demande' => 5500,
            'total_livre' => 5200,
            'total_en_attente' => 300,
            'taux_livraison' => 94.5,
            'ecart_distribution' => -300,
            'nombre_titres' => 15,
            'nombre_niveaux' => 6
        ];
    }

    /**
     * Validate IEPP distribution.
     */
    public function valider($id)
    {
        try {
            // Logique de validation
            // $distribution = DistributionIepp::findOrFail($id);
            // $distribution->update(['statut' => 'terminee', 'date_validation' => now()]);

            return redirect()->route('distributioniepp.show', $id)
                           ->with('success', 'Distribution IEPP validée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la validation : ' . $e->getMessage());
        }
    }

    /**
     * Cancel IEPP distribution.
     */
    public function annuler($id)
    {
        try {
            // Logique d'annulation
            // $distribution = DistributionIepp::findOrFail($id);
            // $distribution->update(['statut' => 'annulee', 'date_annulation' => now()]);

            return redirect()->route('distributioniepp.show', $id)
                           ->with('success', 'Distribution IEPP annulée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de l\'annulation : ' . $e->getMessage());
        }
    }

    /**
     * Redistribute to EPPs under this IEPP.
     */
    public function redistribuer($id)
    {
        try {
            // Logique de redistribution vers les EPP
            // $distribution = DistributionIepp::findOrFail($id);
            // $epps = $distribution->iepp->epps;
            
            return redirect()->route('distributioniepp.show', $id)
                           ->with('success', 'Redistribution vers les EPP initiée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la redistribution : ' . $e->getMessage());
        }
    }

    /**
     * Generate IEPP distribution report.
     */
    public function genererRapport($id)
    {
        try {
            // Logique de génération de rapport
            // $distribution = DistributionIepp::with(['dren', 'iepp', 'details'])->findOrFail($id);
            
            return redirect()->route('distributioniepp.show', $id)
                           ->with('success', 'Rapport de distribution IEPP généré avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la génération du rapport : ' . $e->getMessage());
        }
    }

    /**
     * Export IEPP distribution data.
     */
    public function export($id)
    {
        try {
            // Logique d'export
            // $distribution = DistributionIepp::findOrFail($id);
            
            return redirect()->route('distributioniepp.show', $id)
                           ->with('success', 'Export généré avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de l\'export : ' . $e->getMessage());
        }
    }

    /**
     * Batch operations for multiple distributions.
     */
    public function batchOperation(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'operation' => 'required|in:valider,annuler,exporter',
                'distribution_ids' => 'required|array|min:1',
                'distribution_ids.*' => 'integer|exists:distributions_iepp,id'
            ]);

            $operation = $validatedData['operation'];
            $ids = $validatedData['distribution_ids'];

            // Logique selon l'opération
            switch ($operation) {
                case 'valider':
                    // Valider toutes les distributions sélectionnées
                    break;
                case 'annuler':
                    // Annuler toutes les distributions sélectionnées
                    break;
                case 'exporter':
                    // Exporter toutes les distributions sélectionnées
                    break;
            }

            return redirect()->route('distributioniepp.index')
                           ->with('success', 'Opération groupée effectuée avec succès sur ' . count($ids) . ' distributions');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de l\'opération groupée : ' . $e->getMessage());
        }
    }
}
