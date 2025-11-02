<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     
     * 
     * 
     */
    public function index()
    {
        try {
            // Logique pour récupérer toutes les commandes DAF
            $commandes = []; // À remplacer par la logique de récupération des données
            
            return view('espace.espace_super.commande_daf.liste', compact('commandes'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement des commandes : ' . $e->getMessage());
        }
    }

    /**
     *
     * 
     * 
     */
    public function create()
    {
        try {
            return view('espace.espace_super.commande_daf.create');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement du formulaire : ' . $e->getMessage());
        }
    }

    /**
     * S
     * 
     * 
     * 
     */
    public function store(Request $request)
    {
        try {
            // Validation des données
            $validatedData = $request->validate([
                'numero_commande' => 'required|string|unique:commandes|max:50',
                'date_commande' => 'required|date',
                'fournisseur' => 'required|string|max:255',
                'statut' => 'required|in:en_attente,validee,expediee,livree,annulee',
                'observation' => 'nullable|string|max:1000',
                'details_manuels' => 'required|array|min:1',
                'details_manuels.*.titre' => 'required|string|max:255',
                'details_manuels.*.niveau' => 'required|string|max:100',
                'details_manuels.*.quantite' => 'required|integer|min:1'
            ]);

            // Logique de sauvegarde
            // $commande = Commande::create($validatedData);

            return redirect()->route('commande_daf.index')
                           ->with('success', 'Commande créée avec succès');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la création : ' . $e->getMessage())->withInput();
        }
    }

    /**
     *
     * 
     * 
     * 
     */
    public function show($id)
    {
        try {
            // Logique pour récupérer une commande spécifique
            // $commande = Commande::with('details')->findOrFail($id);
            
            $commande = (object)[
                'id' => $id,
                'numero_commande' => 'CMD-2024-001',
                'date_commande' => '2024-11-01',
                'fournisseur' => 'Éditions Scolaires CI',
                'statut' => 'validee'
            ];

            return view('espace.espace_super.commande_daf.show', compact('commande', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Commande introuvable : ' . $e->getMessage());
        }
    }

    /**
     * 
     * 
     * 
     * 
     */
    public function edit($id)
    {
        try {
            // Logique pour récupérer la commande à modifier
            // $commande = Commande::findOrFail($id);
            
            $commande = (object)[
                'id' => $id,
                'numero_commande' => 'CMD-2024-001',
                'date_commande' => '2024-11-01',
                'fournisseur' => 'Éditions Scolaires CI',
                'statut' => 'validee'
            ];

            return view('espace.espace_super.commande_daf.edit', compact('commande', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Commande introuvable : ' . $e->getMessage());
        }
    }

    /**
     *
     * 
     * 
     * 
     * 
     */
    public function update(Request $request, $id)
    {
        try {
            // Validation des données
            $validatedData = $request->validate([
                'numero_commande' => 'required|string|max:50|unique:commandes,numero_commande,' . $id,
                'date_commande' => 'required|date',
                'fournisseur' => 'required|string|max:255',
                'statut' => 'required|in:en_attente,validee,expediee,livree,annulee',
                'observation' => 'nullable|string|max:1000'
            ]);

            // Logique de mise à jour
            // $commande = Commande::findOrFail($id);
            // $commande->update($validatedData);

            return redirect()->route('commande_daf.show', $id)
                           ->with('success', 'Commande mise à jour avec succès');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la mise à jour : ' . $e->getMessage())->withInput();
        }
    }

    /**
     * 
     * 
     * 
     */
    public function destroy($id)
    {
        try {
            // Vérifier si la commande peut être supprimée
            // $commande = Commande::findOrFail($id);
            
            // Vérifier le statut
            // if (in_array($commande->statut, ['expediee', 'livree'])) {
            //     return back()->with('error', 'Impossible de supprimer une commande expédiée ou livrée');
            // }

            // $commande->delete();

            return redirect()->route('commande_daf.index')
                           ->with('success', 'Commande supprimée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la suppression : ' . $e->getMessage());
        }
    }

    /**
     * 
     * 
     * 
     * 
     */
    public function valider($id)
    {
        try {
            // Logique de validation
            // $commande = Commande::findOrFail($id);
            // $commande->update(['statut' => 'validee', 'date_validation' => now()]);

            return redirect()->route('commande_daf.show', $id)
                           ->with('success', 'Commande validée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la validation : ' . $e->getMessage());
        }
    }

    /**
     * 
     * 
     * 
     * 
     */
    public function annuler($id)
    {
        try {
            // Logique d'annulation
            // $commande = Commande::findOrFail($id);
            // $commande->update(['statut' => 'annulee', 'date_annulation' => now()]);

            return redirect()->route('commande_daf.show', $id)
                           ->with('success', 'Commande annulée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de l\'annulation : ' . $e->getMessage());
        }
    }

    /**
     * 
     * 
     * 
     * 
     */
    public function exportPdf($id)
    {
        try {
            // Logique d'export PDF
            // $commande = Commande::with('details')->findOrFail($id);
            
            return redirect()->route('commande_daf.show', $id)
                           ->with('success', 'Export PDF généré avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de l\'export : ' . $e->getMessage());
        }
    }
}
