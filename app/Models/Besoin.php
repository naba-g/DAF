<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Besoin extends Model
{
    use HasFactory;

    protected $fillable = ['structure_id', 'titre_id', 'niveau_id', 'effectif_estime', 'manuels_retournes', 'besoin_reel', 'statut'];

    public function structure()
    {
        return $this->belongsTo(Structure::class);
    }

    public function titre() // à verifier 
    {
        return $this->belongsTo(Titre::class);
    }

    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }
}

