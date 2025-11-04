<?php

namespace App\Http\Controllers\parametre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnneeScolaireController extends Controller
{
    /**
     * Afficher la liste des années scolaires.
     */
    public function index()
    {
        try {
            // Logique pour récupérer toutes les années scolaires
            $anneesScolaires = []; // À remplacer par la logique de récupération des données
            
            return view('espace.espace_super.annee_scolaire.liste', compact('anneesScolaires'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement des années scolaires : ' . $e->getMessage());
        }
    }

    /**
     * Afficher le formulaire de création d'une nouvelle année scolaire.
     */
    public function create()
    {
        try {
            return view('espace.espace_super.annee_scolaire.create');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement du formulaire : ' . $e->getMessage());
        }
    }

    /**
     * Enregistrer une nouvelle ann�e scolaire.
     * 
     * 
     * 
     */
    public function store(Request $request)
    {
        try {
            // Validation des données
            $validatedData = $request->validate([
                'annee_debut' => 'required|integer|min:2020|max:2030',
                'annee_fin' => 'required|integer|min:2021|max:2031',
                'libelle' => 'required|string|max:255',
                'date_debut' => 'required|date',
                'date_fin' => 'required|date|after:date_debut',
                'statut' => 'required|in:active,inactive,future',
                'description' => 'nullable|string|max:1000'
            ]);

            // Logique de sauvegarde
            // $anneeScolaire = AnneeScolaire::create($validatedData);

            return redirect()->route('annee_scolaire.index')
                           ->with('success', 'Année scolaire créée avec succès');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la création : ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Afficher une ann�e scolaire sp�cifique.
     * 
     * 
     * 
     */
    public function show($id)
    {
        try {
            // Logique pour récupérer une année scolaire spécifique
            // $anneeScolaire = AnneeScolaire::findOrFail($id);
            
            $anneeScolaire = (object)[
                'id' => $id,
                'libelle' => '2024-2025',
                'date_debut' => '2024-09-01',
                'date_fin' => '2025-08-31',
                'statut' => 'active',
                'is_active' => true
            ];

            return view('espace.espace_super.annee_scolaire.show', compact('anneeScolaire', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Année scolaire introuvable : ' . $e->getMessage());
        }
    }

    /**
     * Afficher le formulaire de modification d'une ann�e scolaire.
     * 
     * 
     * 
     */
    public function edit($id)
    {
        try {
            // Logique pour récupérer l'année scolaire à modifier
            // $anneeScolaire = AnneeScolaire::findOrFail($id);
            
            $anneeScolaire = (object)[
                'id' => $id,
                'libelle' => '2024-2025',
                'date_debut' => '2024-09-01',
                'date_fin' => '2025-08-31',
                'statut' => 'active'
            ];

            return view('espace.espace_super.annee_scolaire.edit', compact('anneeScolaire', 'id'));
        } catch (\Exception $e) {
            return back()->with('error', 'Année scolaire introuvable : ' . $e->getMessage());
        }
    }

    /**
     * Mettre � jour une ann�e scolaire.
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
                'annee_debut' => 'required|integer|min:2020|max:2030',
                'annee_fin' => 'required|integer|min:2021|max:2031',
                'libelle' => 'required|string|max:255',
                'date_debut' => 'required|date',
                'date_fin' => 'required|date|after:date_debut',
                'statut' => 'required|in:active,inactive,future',
                'description' => 'nullable|string|max:1000'
            ]);

            // Logique de mise à jour
            // $anneeScolaire = AnneeScolaire::findOrFail($id);
            // $anneeScolaire->update($validatedData);

            return redirect()->route('annee_scolaire.show', $id)
                           ->with('success', 'Année scolaire mise à jour avec succès');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la mise à jour : ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Supprimer une ann�e scolaire.
     * 
     * 
     * 
     */
    public function destroy($id)
    {
        try {
            // Vérifier si l'année peut être supprimée
            // $anneeScolaire = AnneeScolaire::findOrFail($id);
            
            // Vérifier si l'année n'est pas active
            // if ($anneeScolaire->statut === 'active') {
            //     return back()->with('error', 'Impossible de supprimer une année scolaire active');
            // }

            // $anneeScolaire->delete();

            return redirect()->route('annee_scolaire.index')
                           ->with('success', 'Année scolaire supprimée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la suppression : ' . $e->getMessage());
        }
    }

    /**
     * Activer une ann�e scolaire sp�cifique.
     * 
     * 
     * 
     */
    public function activate($id)
    {
        try {
            // Désactiver toutes les autres années
            // AnneeScolaire::where('statut', 'active')->update(['statut' => 'inactive']);
            
            // Activer l'année sélectionnée
            // $anneeScolaire = AnneeScolaire::findOrFail($id);
            // $anneeScolaire->update(['statut' => 'active']);

            return redirect()->route('annee_scolaire.show', $id)
                           ->with('success', 'Année scolaire activée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de l\'activation : ' . $e->getMessage());
        }
    }

    /**
     * Dupliquer une ann�e scolaire.
     * 
     * 
     * 
     */
    public function duplicate($id)
    {
        try {
            // Logique de duplication
            // $anneeScolaire = AnneeScolaire::findOrFail($id);
            // $nouvelleAnnee = $anneeScolaire->replicate();
            // $nouvelleAnnee->save();

            return redirect()->route('annee_scolaire.show', $id)
                           ->with('success', 'Année scolaire dupliquée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de la duplication : ' . $e->getMessage());
        }
    }

    /**
     * Exporter les donn�es d'une ann�e scolaire.
     * 
     * 
     * 
     */
    public function export($id)
    {
        try {
            // Logique d'export (Excel, PDF, etc.)
            // $anneeScolaire = AnneeScolaire::findOrFail($id);
            
            return redirect()->route('annee_scolaire.show', $id)
                           ->with('success', 'Export généré avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de l\'export : ' . $e->getMessage());
        }
    }
}
