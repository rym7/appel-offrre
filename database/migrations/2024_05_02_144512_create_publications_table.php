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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('titre');
            $table->enum('etat', ['validee', 'annulee', 'en_attente']); // Ajoutez les autres états au besoin
            $table->string('type');
            $table->foreignId('secteur_id')->constrained('secteurs');
            $table->string('wilaya'); // Ajoutez la colonne pour la wilaya
            $table->date('date_publication');
            $table->date('date_limite');
            $table->date('date_prolongation')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
