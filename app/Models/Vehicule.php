<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory ;

class Vehicule extends Model
{
        use HasFactory;

    protected $fillable = ['marque', 'modele','nb_places','categorie_id'];


}
