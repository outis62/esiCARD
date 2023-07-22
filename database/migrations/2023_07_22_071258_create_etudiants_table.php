<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('cycle');
            $table->string('niveau');
            $table->string('filiere');
            $table->string('nationalite');
            $table->string('anneeuniversitaire');
            $table->string('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->date('datenaissance');
            $table->string('genre');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); 
            $table->string('numero');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
};
