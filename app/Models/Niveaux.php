<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Niveaux extends Model
{
    //
    use HasFactory;

    protected $fillable = ['description','code'];

      public function titre()
    {
        return $this->hasMany(Titre::class);
    }

}
