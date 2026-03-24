<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory ;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
        use HasFactory;

    protected $fillable = ['client_id', 'vehicule_id', 'date_debut', 'date_fin'];
}
