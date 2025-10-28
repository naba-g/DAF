<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'code_structure', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo(Structure::class, 'parent_id'); // structure sup 
    }

    public function enfants()
    {
        return $this->hasMany(Structure::class, 'parent_id'); // structure inf 
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function besoins()
    {
        return $this->hasMany(Besoin::class);  // un seul besoin exprimé en epp 
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function distributions()
    {
        return $this->hasMany(Distribution::class);
    }
    
}
