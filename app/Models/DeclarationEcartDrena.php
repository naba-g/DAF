<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeclarationEcartDrena extends Model
{
    use HasFactory;

    protected $table = 'declaration_ecart_drenas';

    protected $fillable = [
        'date',
        'Ecart_fr',
        'Ecart_math',
        'Ecart_edhc',
        'Ecart_his',
        'Ecart_geo',
        'Ecart_st',
        'drena_id',
        'Niveau_id',
        'Daf_id',
        'comentaire',
    ];
}
