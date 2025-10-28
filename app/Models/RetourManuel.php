<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RetourManuel extends Model
{
    use HasFactory;

    protected $table = 'retour_manuels';

    protected $fillable = [
        'date',
        'matricule',
        'Etat_math',
        'Etat_fr',
        'Etat_edhc',
        'Etat_his',
        'Etat_geo',
        'Etat_st',
        'Epp_id',
        'Niveau_id',
    ];
}
