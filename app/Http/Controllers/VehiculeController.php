<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicule;

class VehiculeController extends Controller
{
public function index()
{
    $vehicules = Vehicule::with(['categorie', 'options'])->get();
    return view('Reserve.index', compact('vehicules'));
}

}
