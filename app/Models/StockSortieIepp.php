<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockSortieIepp extends Model
{
    use HasFactory;

    protected $table = 'stock_sortie_iepps';

    protected $fillable = [
        'Date',
        'Qte_FR_cp1', 'Qte_Math_cp1', 'Qte_EDHC_cp1', 'Qte_HIS_cp1', 'Qte_GEO_cp1', 'Qte_ST_cp1',
        'Qte_FR_cp2', 'Qte_Math_cp2', 'Qte_EDHC_cp2', 'Qte_HIS_cp2', 'Qte_GEO_cp2', 'Qte_ST_cp2',
        'Qte_FR_ce1', 'Qte_Math_ce1', 'Qte_EDHC_ce1', 'Qte_HIS_ce1', 'Qte_GEO_ce1', 'Qte_ST_ce1',
        'Qte_FR_ce2', 'Qte_Math_ce2', 'Qte_EDHC_ce2', 'Qte_HIS_ce2', 'Qte_GEO_ce2', 'Qte_ST_ce2',
        'Qte_FR_Cm1', 'Qte_Math_cm1', 'Qte_EDHC_cm1', 'Qte_HIS_cm1', 'Qte_GEO_cm1', 'Qte_ST_cm1',
        'Qte_FR_Cm2', 'Qte_Math_cm2', 'Qte_EDHC_cm2', 'Qte_HIS_cm2', 'Qte_GEO_cm2', 'Qte_ST_cm2',
        'Type_ouvrage',
        'Id_iepp', 'Id_epp', 'Lien_upload_bl', 'Statut_reception',
    ];

     public function iepp()
    {
    return $this->belongsTo(Iepp::class, 'Id_iepp');
    }

    public function epp()
    {
    return $this->belongsTo(Epp::class, 'Id_epp');
    }

    public function ouvrage()
    {
    return $this->belongsTo(Ouvrage::class, 'Type_ouvrage');
    }
}
