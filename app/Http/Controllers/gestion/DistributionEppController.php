<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DistributionEppController extends Controller
{
    /**
     * Afficher la liste des distributions EPP.
     */
    public function index()
    {
        try {
            // Logique pour récupérer toutes les distributions EPP
            $distributions = []; // À remplacer par la logique de récupération des données
            
            return view('espace.espace_super.distributioniepp.liste', compact('distributions'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement des distributions EPP : ' . $e->getMessage());
        }
    }

    /**
     * Afficher le formulaire de cr�ation d'une nouvelle distribution EPP.
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
     * Enregistrer une nouvelle distribution EPP.
     */
    public function store(Request $request)
    {
        try {
            // Validation des données
            $validatedData = $request->validate([
                'numero_distribution' => 'required|string|unique:distributions_epp|max:50',
                'dren_id' => 'required|integer',
                'iepp_id' => 'required|integer',
                'epp_id' => 'required|integer',
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
            // $distribution = DistributionEpp::create($validatedData);

            return redirect()->route('distribution_epp.index')
                           ->with('success', 'Distribution EPP créée avec succès');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la création : ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Afficher une distribution EPP sp�cifique.
     */
    public function show($id)
    {
        try {
            // Logique pour récupérer une distribution EPP spécifique
            // $distribution = DistributionEpp::with('dren', 'iepp', 'epp', 'details')->findOrFail($id);
            
            $distribution = (object)[
                'id' => $id,
                'numero_distribution' => 'DIST-EPP-2024-001',
                'date_distribution' => '2024-11-15',
                'responsable_distribution' => 'M. TRAORE Amadou',
                'statut' => 'en_cours',
                'priorite' => 'normale',
                'dren' => 'DREN Abengourou',
                'iepp' => 'IEPP Abengourou 1',
                'epp' => 'EPP Abengourou Centre'
            ];

            return view('espace.espace_super.distributioniepp.show', compact('distribution', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Distribution EPP introuvable : ' . $e->getMessage());
        }
    }

    /**
     * Afficher le formulaire de modification d'une distribution EPP.
     */
    public function edit($id)
    {
        try {
            // Logique pour récupérer la distribution EPP à modifier
            // $distribution = DistributionEpp::findOrFail($id);
            
            $distribution = (object)[
                'id' => $id,
                'numero_distribution' => 'DIST-EPP-2024-001',
                'date_distribution' => '2024-11-15',
                'responsable_distribution' => 'M. TRAORE Amadou',
                'statut' => 'en_cours',
                'priorite' => 'normale',
                'dren_id' => 1,
                'iepp_id' => 1,
                'epp_id' => 1
            ];

            return view('espace.espace_super.distributioniepp.edit', compact('distribution', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Distribution EPP introuvable : ' . $e->getMessage());
        }
    }

    /**
     * Mettre � jour une distribution EPP.
     */
    public function update(Request $request, $id)
    {
        try {
            // Validation des données
            $validatedData = $request->validate([
                'numero_distribution' => 'required|string|max:50|unique:distributions_epp,numero_distribution,' . $id,
                'dren_id' => 'required|integer',
                'iepp_id' => 'required|integer',
                'epp_id' => 'required|integer',
                'date_distribution' => 'required|date',
                'responsable_distribution' => 'required|string|max:255',
                'statut' => 'required|in:prevue,en_cours,terminee,annulee',
                'priorite' => 'required|in:normale,urgente,tres_urgente',
                'observation' => 'nullable|string|max:1000'
            ]);

            // Logique de mise à jour
            // $distribution = DistributionEpp::findOrFail($id);
            // $distribution->update($validatedData);

            return redirect()->route('distribution_epp.show', $id)
                           ->with('success', 'Distribution EPP mise à jour avec succès');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la mise à jour : ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Supprimer une distribution EPP.
     */
    public function destroy($id)
    {
        try {
            // Vérifier si la distribution peut être supprimée
            // $distribution = DistributionEpp::findOrFail($id);
            
            // Vérifier le statut
            // if ($distribution->statut === 'terminee') {
            //     return back()->with('error', 'Impossible de supprimer une distribution terminée');
            // }

            // $distribution->delete();

            return redirect()->route('distribution_epp.index')
                           ->with('success', 'Distribution EPP supprimée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la suppression : ' . $e->getMessage());
        }
    }

    /**
     * Update delivery status.
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
            // $distribution = DistributionEpp::findOrFail($id);
            // foreach ($validatedData['quantite_livree'] as $detailId => $quantite) {
            //     $distribution->details()->where('id', $detailId)->update(['quantite_livree' => $quantite]);
            // }

            return redirect()->route('distribution_epp.show', $id)
                           ->with('success', 'Quantités livrées mises à jour avec succès');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la mise à jour : ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Validate distribution.
     */
    public function valider($id)
    {
        try {
            // Logique de validation
            // $distribution = DistributionEpp::findOrFail($id);
            // $distribution->update(['statut' => 'terminee', 'date_validation' => now()]);

            return redirect()->route('distribution_epp.show', $id)
                           ->with('success', 'Distribution EPP validée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la validation : ' . $e->getMessage());
        }
    }

    /**
     * Cancel distribution.
     */
    public function annuler($id)
    {
        try {
            // Logique d'annulation
            // $distribution = DistributionEpp::findOrFail($id);
            // $distribution->update(['statut' => 'annulee', 'date_annulation' => now()]);

            return redirect()->route('distribution_epp.show', $id)
                           ->with('success', 'Distribution EPP annulée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de l\'annulation : ' . $e->getMessage());
        }
    }

    /**
     * Duplicate distribution.
     */
    public function dupliquer($id)
    {
        try {
            // Logique de duplication
            // $distribution = DistributionEpp::with('details')->findOrFail($id);
            // $nouvelleDistribution = $distribution->replicate();
            // $nouvelleDistribution->save();

            return redirect()->route('distribution_epp.show', $id)
                           ->with('success', 'Distribution EPP dupliquée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la duplication : ' . $e->getMessage());
        }
    }

    /**
     * Generate distribution report.
     */
    public function genererRapport($id)
    {
        try {
            // Logique de génération de rapport
            // $distribution = DistributionEpp::with(['dren', 'iepp', 'epp', 'details'])->findOrFail($id);
            
            return redirect()->route('distribution_epp.show', $id)
                           ->with('success', 'Rapport de distribution généré avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la génération du rapport : ' . $e->getMessage());
        }
    }

    /**
     * Export distribution data.
     */
    public function export($id)
    {
        try {
            // Logique d'export
            // $distribution = DistributionEpp::findOrFail($id);
            
            return redirect()->route('distribution_epp.show', $id)
                           ->with('success', 'Export généré avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de l\'export : ' . $e->getMessage());
        }
    }
}
