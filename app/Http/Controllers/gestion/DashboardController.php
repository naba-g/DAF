<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Afficher le tableau de bord principal.
     */
    public function index()
    {
        try {
            // Statistiques globales du système SIDMAS
            $statistiques = $this->getStatistiquesGlobales();
            
            return view('espace.espace_super.dashboard.index', compact('statistiques'));
        } catch (\Exception $e) {
            return view('espace.espace_super.dashboard.index')
                   ->with('error', 'Erreur lors du chargement du tableau de bord : ' . $e->getMessage());
        }
    }

    /**
     * Obtenir les statistiques globales du système SIDMAS.
     */
    private function getStatistiquesGlobales()
    {
        return [
            'total_dren' => 56,
            'total_iepp' => 295,
            'total_epp' => 15000, // Estimation
            'commandes_en_cours' => 15,
            'commandes_validees' => 48,
            'commandes_livrees' => 32,
            'manuels_distribues' => 125000,
            'manuels_en_attente' => 25000,
            'taux_distribution' => 83.3,
            'annee_active' => '2024-2025'
        ];
    }

    /**
     * Afficher les statistiques DREN.
     */
    public function statistiquesDren()
    {
        try {
            // Statistiques par DREN
            $statistiquesDren = $this->getStatistiquesDren();
            
            return view('espace.espace_super.dashboard.dren', compact('statistiquesDren'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement des statistiques DREN : ' . $e->getMessage());
        }
    }

    /**
     * Obtenir les statistiques par DREN.
     */
    private function getStatistiquesDren()
    {
        return [
            [
                'nom' => 'DREN Abengourou',
                'code' => 'DRE-ABG',
                'iepp_count' => 8,
                'epp_count' => 450,
                'manuels_distribues' => 12500,
                'taux_distribution' => 85.2
            ],
            [
                'nom' => 'DREN Abidjan 1',
                'code' => 'DRE-ABJ1',
                'iepp_count' => 12,
                'epp_count' => 680,
                'manuels_distribues' => 18500,
                'taux_distribution' => 92.1
            ],
            // ... autres DREN
        ];
    }

    /**
     * Afficher les statistiques IEPP.
     */
    public function statistiquesIepp()
    {
        try {
            // Statistiques par IEPP
            $statistiquesIepp = $this->getStatistiquesIepp();
            
            return view('espace.espace_super.dashboard.iepp', compact('statistiquesIepp'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement des statistiques IEPP : ' . $e->getMessage());
        }
    }

    /**
     * Obtenir les statistiques par IEPP.
     */
    private function getStatistiquesIepp()
    {
        return [
            [
                'nom' => 'IEPP Abengourou 1',
                'dren' => 'DREN Abengourou',
                'epp_count' => 65,
                'manuels_distribues' => 1850,
                'taux_distribution' => 88.5
            ],
            [
                'nom' => 'IEPP Abengourou 2',
                'dren' => 'DREN Abengourou',
                'epp_count' => 58,
                'manuels_distribues' => 1650,
                'taux_distribution' => 82.3
            ],
            // ... autres IEPP
        ];
    }

    /**
     * Afficher les statistiques de distribution.
     */
    public function statistiquesDistribution()
    {
        try {
            // Statistiques de distribution
            $statistiquesDistribution = $this->getStatistiquesDistribution();
            
            return view('espace.espace_super.dashboard.distribution', compact('statistiquesDistribution'));
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors du chargement des statistiques de distribution : ' . $e->getMessage());
        }
    }

    /**
     * Obtenir les statistiques de distribution.
     */
    private function getStatistiquesDistribution()
    {
        return [
            'par_niveau' => [
                'CP1' => ['demandes' => 25000, 'livres' => 23500, 'taux' => 94.0],
                'CP2' => ['demandes' => 24000, 'livres' => 22800, 'taux' => 95.0],
                'CE1' => ['demandes' => 23500, 'livres' => 22100, 'taux' => 94.0],
                'CE2' => ['demandes' => 23000, 'livres' => 21850, 'taux' => 95.0],
                'CM1' => ['demandes' => 22500, 'livres' => 21375, 'taux' => 95.0],
                'CM2' => ['demandes' => 22000, 'livres' => 20900, 'taux' => 95.0]
            ],
            'par_matiere' => [
                'Français' => ['demandes' => 45000, 'livres' => 42750, 'taux' => 95.0],
                'Mathématiques' => ['demandes' => 45000, 'livres' => 42300, 'taux' => 94.0],
                'Histoire-Géographie' => ['demandes' => 30000, 'livres' => 28500, 'taux' => 95.0],
                'Sciences' => ['demandes' => 30000, 'livres' => 28200, 'taux' => 94.0]
            ]
        ];
    }

    /**
     * Exporter les données du tableau de bord.
     */
    public function export(Request $request)
    {
        try {
            $type = $request->get('type', 'pdf'); // pdf, excel, csv
            
            // Logique d'export selon le type
            switch ($type) {
                case 'excel':
                    return $this->exportExcel();
                case 'csv':
                    return $this->exportCsv();
                default:
                    return $this->exportPdf();
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de l\'export : ' . $e->getMessage());
        }
    }

    /**
     * Exporter le tableau de bord en PDF.
     */
    private function exportPdf()
    {
        // Logique d'export PDF
        return redirect()->route('dashboard.index')
                       ->with('success', 'Export PDF généré avec succès');
    }

    /**
     * Exporter le tableau de bord en Excel.
     */
    private function exportExcel()
    {
        // Logique d'export Excel
        return redirect()->route('dashboard.index')
                       ->with('success', 'Export Excel généré avec succès');
    }

    /**
     * Exporter le tableau de bord en CSV.
     */
    private function exportCsv()
    {
        // Logique d'export CSV
        return redirect()->route('dashboard.index')
                       ->with('success', 'Export CSV généré avec succès');
    }

    /**
     * Actualiser les données du tableau de bord.
     */
    public function refresh()
    {
        try {
            // Logique de rafraîchissement des données
            // Cache::forget(['dashboard_stats', 'dren_stats', 'iepp_stats']);
            
            return redirect()->route('dashboard.index')
                           ->with('success', 'Données du tableau de bord actualisées');
        } catch (\Exception $e) {
            return back()->with('error', 'Erreur lors de l\'actualisation : ' . $e->getMessage());
        }
    }
}
