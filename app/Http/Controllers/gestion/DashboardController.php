<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('espace.espace_super.dashboard.dashboard');
    }

    private function getStatistiquesGlobales()
    {
        return [
            'total_dren' => 56,
            'total_iepp' => 295,
            'total_epp' => 15000,
            'commandes_en_cours' => 15,
            'commandes_validees' => 48,
            'commandes_livrees' => 32,
            'manuels_distribues' => 125000,
            'manuels_en_attente' => 25000,
            'taux_distribution' => 83.3,
            'annee_active' => '2024-2025'
        ];
    }

    public function statistiquesDren()
    {
        return view('espace.espace_super.dashboard.dashboard');
    }

    private function getStatistiquesDren()
    {
        return view('espace.espace_super.dashboard.dashboard');
    }

    public function statistiquesIepp()
    {
        return view('espace.espace_super.dashboard.dashboard');
    }

    private function getStatistiquesIepp()
    {
       return view('espace.espace_super.dashboard.dashboard');
    }

    public function statistiquesDistribution()
    {
        return view('espace.espace_super.dashboard.dashboard');
    }

    private function getStatistiquesDistribution()
    {
       return view('espace.espace_super.dashboard.dashboard');
    }

    public function export(Request $request)
    {
       return view('espace.espace_super.dashboard.dashboard');
    }

    private function exportPdf()
    {
        return redirect()->route('dashboard.index')
                       ->with('success', 'Export PDF généré avec succès');
    }

    private function exportExcel()
    {
        return redirect()->route('dashboard.index')
                       ->with('success', 'Export Excel généré avec succès');
    }

    private function exportCsv()
    {
        return redirect()->route('dashboard.index')
                       ->with('success', 'Export CSV généré avec succès');
    }

    public function refresh()
    {
       return view('espace.espace_super.dashboard.dashboard');
    }
}
