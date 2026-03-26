<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('vehicules', function (Blueprint $table) {
            $table->string('emplacement')->default('Marrakech'); 
            $table->enum('type_point_retrait', ['terminal', 'accueil', 'navette', 'centre_location', 'gare', 'agence']);
            $table->boolean('climatisation')->default(false);
            $table->integer('nombre_portes')->default(4);
            $table->enum('energie', ['essence', 'diesel', 'electrique', 'hybride', 'hybride_rechargeable']);
            //photo
            $table->string('photo')->nullable();
        });
    }
};
