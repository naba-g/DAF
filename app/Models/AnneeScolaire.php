<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class AnneeScolaire extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'libelle',
        'description',
        'date_debut',
        'date_fin',
        'statut',
        'is_active',
        'nombre_eleves_max',
        'frais_inscription',
        'frais_scolarite',
        'created_by',
        'updated_by'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date_debut' => 'date',
        'date_fin' => 'date',
        'is_active' => 'boolean',
        'nombre_eleves_max' => 'integer',
        'frais_inscription' => 'decimal:2',
        'frais_scolarite' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'deleted_at'
    ];

    /**
     * Boot method pour définir les événements du modèle
     */
    protected static function boot()
    {
        parent::boot();

        // Avant la création, s'assurer qu'une seule année est active
        static::creating(function ($anneeScolaire) {
            if ($anneeScolaire->is_active) {
                static::where('is_active', true)->update(['is_active' => false]);
            }
        });

        // Avant la mise à jour, s'assurer qu'une seule année est active
        static::updating(function ($anneeScolaire) {
            if ($anneeScolaire->is_active && $anneeScolaire->isDirty('is_active')) {
                static::where('is_active', true)
                      ->where('id', '!=', $anneeScolaire->id)
                      ->update(['is_active' => false]);
            }
        });
    }

    /**
     * Scope pour récupérer l'année active
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope pour récupérer les années par statut
     */
    public function scopeByStatut($query, $statut)
    {
        return $query->where('statut', $statut);
    }

    /**
     * Scope pour récupérer les années en cours (entre date début et fin)
     */
    public function scopeEnCours($query)
    {
        $today = Carbon::today();
        return $query->where('date_debut', '<=', $today)
                     ->where('date_fin', '>=', $today);
    }

    /**
     * Scope pour récupérer les années futures
     */
    public function scopeFutures($query)
    {
        return $query->where('date_debut', '>', Carbon::today());
    }

    /**
     * Scope pour récupérer les années passées
     */
    public function scopePassees($query)
    {
        return $query->where('date_fin', '<', Carbon::today());
    }

    /**
     * Relation avec le créateur
     */
    public function createur()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Relation avec le modificateur
     */
    public function modificateur()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    /**
     * Relation avec les élèves (si vous avez un modèle Eleve)
     */
    public function eleves()
    {
        return $this->hasMany(Eleve::class);
    }

    /**
     * Relation avec les classes (si vous avez un modèle Classe)
     */
    public function classes()
    {
        return $this->hasMany(Classe::class);
    }

    /**
     * Relation avec les inscriptions (si vous avez un modèle Inscription)
     */
    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }

    /**
     * Accessor pour obtenir le nombre d'élèves
     */
    public function getNombreElevesAttribute()
    {
        return $this->eleves()->count();
    }

    /**
     * Accessor pour obtenir le nombre de classes
     */
    public function getNombreClassesAttribute()
    {
        return $this->classes()->count();
    }

    /**
     * Accessor pour obtenir le nombre de professeurs
     */
    public function getNombreProfesseursAttribute()
    {
        // Logique pour compter les professeurs uniques dans cette année
        return $this->classes()->with('professeurs')->get()
                   ->pluck('professeurs')->flatten()->unique('id')->count();
    }

    /**
     * Accessor pour calculer les recettes totales
     */
    public function getRecettesTotalesAttribute()
    {
        $nombreEleves = $this->nombre_eleves ?? 0;
        $fraisInscription = $this->frais_inscription ?? 0;
        $fraisScolarite = $this->frais_scolarite ?? 0;

        return $nombreEleves * ($fraisInscription + $fraisScolarite);
    }

    /**
     * Accessor pour obtenir la durée en jours
     */
    public function getDureeJoursAttribute()
    {
        if ($this->date_debut && $this->date_fin) {
            return $this->date_debut->diffInDays($this->date_fin);
        }
        return 0;
    }

    /**
     * Accessor pour obtenir la durée en mois
     */
    public function getDureeMoisAttribute()
    {
        if ($this->date_debut && $this->date_fin) {
            return round($this->date_debut->diffInMonths($this->date_fin), 1);
        }
        return 0;
    }

    /**
     * Accessor pour vérifier si l'année est en cours
     */
    public function getIsEnCoursAttribute()
    {
        $today = Carbon::today();
        return $this->date_debut <= $today && $this->date_fin >= $today;
    }

    /**
     * Accessor pour vérifier si l'année est future
     */
    public function getIsFutureAttribute()
    {
        return $this->date_debut > Carbon::today();
    }

    /**
     * Accessor pour vérifier si l'année est passée
     */
    public function getIsPasseeAttribute()
    {
        return $this->date_fin < Carbon::today();
    }

    /**
     * Accessor pour obtenir le taux de remplissage
     */
    public function getTauxRemplissageAttribute()
    {
        if ($this->nombre_eleves_max > 0) {
            return round(($this->nombre_eleves / $this->nombre_eleves_max) * 100, 2);
        }
        return 0;
    }

    /**
     * Accessor pour formater le libellé complet
     */
    public function getLibelleCompletAttribute()
    {
        $libelle = $this->libelle;
        if ($this->is_active) {
            $libelle .= ' (Active)';
        }
        return $libelle;
    }

    /**
     * Mutator pour le libellé (format automatique)
     */
    public function setLibelleAttribute($value)
    {
        $this->attributes['libelle'] = strtoupper(trim($value));
    }

    /**
     * Mutator pour la description
     */
    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = $value ? trim($value) : null;
    }

    /**
     * Méthode statique pour récupérer l'année active
     */
    public static function getAnneeActive()
    {
        return static::where('is_active', true)->first();
    }

    /**
     * Méthode pour activer cette année
     */
    public function activer()
    {
        // Désactiver toutes les autres années
        static::where('id', '!=', $this->id)->update(['is_active' => false]);

        // Activer cette année
        $this->update(['is_active' => true]);
    }

    /**
     * Méthode pour vérifier si l'année peut être supprimée
     */
    public function peutEtreSuprimee()
    {
        // Une année active ne peut pas être supprimée
        if ($this->is_active) {
            return false;
        }

        // Une année avec des élèves inscrits ne peut pas être supprimée
        if ($this->nombre_eleves > 0) {
            return false;
        }

        return true;
    }

    /**
     * Méthode pour dupliquer une année scolaire
     */
    public function dupliquer($nouveauLibelle, $nouvelleDateDebut, $nouvelleDateFin)
    {
        $nouvelleAnnee = $this->replicate();
        $nouvelleAnnee->libelle = $nouveauLibelle;
        $nouvelleAnnee->date_debut = $nouvelleDateDebut;
        $nouvelleAnnee->date_fin = $nouvelleDateFin;
        $nouvelleAnnee->is_active = false;
        $nouvelleAnnee->statut = 'planifiee';
        $nouvelleAnnee->save();

        return $nouvelleAnnee;
    }

    /**
     * Méthode pour obtenir les statistiques de l'année
     */
    public function getStatistiques()
    {
        return [
            'nombre_eleves' => $this->nombre_eleves,
            'nombre_classes' => $this->nombre_classes,
            'nombre_professeurs' => $this->nombre_professeurs,
            'recettes_totales' => $this->recettes_totales,
            'taux_remplissage' => $this->taux_remplissage,
            'duree_jours' => $this->duree_jours,
            'duree_mois' => $this->duree_mois,
            'is_en_cours' => $this->is_en_cours,
            'is_future' => $this->is_future,
            'is_passee' => $this->is_passee
        ];
    }

    /**
     * Méthode pour valider les dates
     */
    public function validerDates()
    {
        $errors = [];

        if ($this->date_debut >= $this->date_fin) {
            $errors[] = 'La date de début doit être antérieure à la date de fin';
        }

        // Vérifier les chevauchements avec d'autres années
        $chevauchement = static::where('id', '!=', $this->id ?? 0)
            ->where(function ($query) {
                $query->whereBetween('date_debut', [$this->date_debut, $this->date_fin])
                      ->orWhereBetween('date_fin', [$this->date_debut, $this->date_fin])
                      ->orWhere(function ($subQuery) {
                          $subQuery->where('date_debut', '<=', $this->date_debut)
                                   ->where('date_fin', '>=', $this->date_fin);
                      });
            })->exists();

        if ($chevauchement) {
            $errors[] = 'Les dates se chevauchent avec une autre année scolaire';
        }

        return $errors;
    }
}
