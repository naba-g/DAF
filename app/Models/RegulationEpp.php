<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegulationEpp extends Model
{
    use HasFactory;

    protected $table = 'regulation_epps';

    protected $fillable = [
        'date',
        'Id_epp_source',
        'Id_epp_destination',
        'qte_mat_cp1', 'qte_fr_cp1', 'qte_edhc_cp1', 'qte_hist_cp1', 'qte_geo_cp1', 'qte_st_cp1',
        'qte_mat_cp2', 'qte_fr_cp2', 'qte_edhc_cp2', 'qte_hist_cp2', 'qte_geo_cp2', 'qte_st_cp2',
        'qte_mat_ce1', 'qte_fr_ce1', 'qte_edhc_ce1', 'qte_hist_ce1', 'qte_geo_ce1', 'qte_st_ce1',
        'qte_mat_ce2', 'qte_fr_ce2', 'qte_edhc_ce2', 'qte_hist_ce2', 'qte_geo_ce2', 'qte_st_ce2',
        'qte_mat_cm1', 'qte_fr_cm1', 'qte_edhc_cm1', 'qte_hist_cm1', 'qte_geo_cm1', 'qte_st_cm1',
        'qte_mat_cm2', 'qte_fr_cm2', 'qte_edhc_cm2', 'qte_hist_cm2', 'qte_geo_cm2', 'qte_st_cm2',
        'Id_iepp',
    ];
}
