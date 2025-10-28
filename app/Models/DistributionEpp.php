<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistributionEpp extends Model
{
    use HasFactory;

    protected $table = 'distribution_epps';

    protected $fillable = [
        'Date',
        'Total_kit_fille',
        'Total_kit_garcon',
        'Total_kit_dist',
        'Ecart_distribution',
        'Niveau_id',
        'Epp_id',
        'Iepp_id',
        'commentaire',
    ];
}
