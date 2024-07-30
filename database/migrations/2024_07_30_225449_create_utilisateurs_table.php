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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('photo_profil');
            $table->string('prenom');
            $table->string('nom_postnom');
            $table->enum('sexe', ['F', 'M']);
            $table->string('naissance');
            $table->string('province_origine');
            $table->string('territoire_origine');
            $table->text('etudes');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('email')->unique();
            $table->string('mot_de_passe');
            $table->enum('role', ['utilisateur', 'administrateur'])->default('utilisateur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
