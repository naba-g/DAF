<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plainte extends Model
{
    use HasFactory;
    protected $fillable = ['code_suivi', 
                           //'nom_plaignant', 
                          // 'contact', 
                           'structure_id',
                           // 'drena_id',
                           // 'iepp_id',
                           // 'epp_id',
                            'motif',
                           'message', 
                           'suggestion',
                           'hors_delais',
                           'statut'];

    public function structure()
    {
        return $this->belongsTo(Structure::class);
    }
}
