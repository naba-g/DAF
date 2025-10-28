<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'ref_formulaire', 'reponses'];

    protected $casts = [
        'reponses' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


