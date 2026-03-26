<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory ;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
use hasfactory;
    
    protected $fillable = ['libelle', 'prix_jour'];

    public function vehicules()
    {
        return $this->hasMany(Vehicule::class);
    }
}
