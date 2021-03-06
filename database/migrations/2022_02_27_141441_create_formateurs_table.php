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
        Schema::create('formateurs', function (Blueprint $table) {
           
            $table->id();
            $table->char('siret', 17)->nullable();
            $table->integer('age');
            $table->string('sexe');
            $table->integer('kms');
            $table->string('diplomes');
            $table->text('experiences');
            $table->integer('annees_experience');
            $table->string('image')->nullable();
            $table->boolean('disponible')->default(true);
            $table->date('date_debut_dispo')->nullable();
            $table->date('date_fin_dispo')->nullable();
            $table->timestamps();
            
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formateurs');
    }
};
