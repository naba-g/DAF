<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeclarationEcartIepp extends Model
{
    use HasFactory;

    protected $table = 'declaration_ecart_iepps';

    protected $fillable = [
        'date',
        'Ecart_fr',
        'Ecart_math',
        'Ecart_edhc',
        'Ecart_his',
        'Ecart_geo',
        'Ecart_st',
        'Iepp_id',
        'Niveau_id',
        'Drena_id',
        'comentaire',
    ];
}
