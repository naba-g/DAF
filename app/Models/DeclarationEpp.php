<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeclarationEpp extends Model
{
    use HasFactory;

    protected $table = 'declaration_epps';

    protected $fillable = [
        'Epp_id',
        'Iepp_id',
        'Ecart_cp1',
        'Ecart_cp2',
        'Ecart_ce1',
        'Ecart_ce2',
        'Ecart_cm1',
        'Ecart_cm2',
    ];
}
