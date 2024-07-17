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
        Schema::create('colis', function (Blueprint $table) {
            $table->id();
            $table->text('Description');
            $table->integer('Qte');
            $table->float('Prix');
            $table->string('Nom_Client');
            $table->string('Email_Client');
            $table->string('Tel_Client');
            $table->string('Adresse_Client');
            $table->string('Etat');
            $table->string('Password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colis');
    }
};
