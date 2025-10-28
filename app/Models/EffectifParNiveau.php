<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EffectifParNiveau extends Model
{
    use HasFactory;

    protected $table = 'effectif_par_niveaux';

    protected $fillable = [
        'date',
        'nbr_f_cp1', 'nbr_g_cp1', 'total_cp1',
        'nbr_f_cp2', 'nbr_g_cp2', 'total_cp2',
        'nbr_f_ce1', 'nbr_g_ce1', 'total_ce1',
        'nbr_f_ce2', 'nbr_g_ce2', 'total_ce2',
        'nbr_f_cm1', 'nbr_g_cm1', 'total_cm1',
        'nbr_f_cm2', 'nbr_g_cm2', 'total_cm2',
        'Id_iepp'
    ];
}
