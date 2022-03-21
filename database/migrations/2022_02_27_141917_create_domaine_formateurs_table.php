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
        Schema::create('domaine_formateurs', function (Blueprint $table) {
           

            $table->unsignedBigInteger('domaine_id');
            $table->foreign('domaine_id')->references('id')->on('domaines')->onDelete('cascade');

            $table->unsignedBigInteger('formateur_id');
            $table->foreign('formateur_id')->references('id')->on('formateurs')->onDelete('cascade');
            $table->primary(['domaine_id', 'formateur_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domaine_formateurs');
    }
};
