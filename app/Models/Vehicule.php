<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory ;

class Vehicule extends Model
{
        use HasFactory;

protected $fillable = [
    'marque', 
    'modele', 
    'nb_places', 
    'categorie_id',
    'emplacement',
    'type_point_retrait', 
    'climatisation',     
    'nombre_portes',      // ex: 4, 5
    'energie',            // electrique, hybride, etc.
];
public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function options()
    {
        return $this->belongsToMany(Option::class, 'options_vehicules');
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
