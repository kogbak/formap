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
            $table->text('description', 500);
            $table->char('siret', 17);
            $table->integer('age');
            $table->integer('km'); // float ou integer
            $table->string('diplome');
            $table->string('experience');
            $table->string('image');
            $table->boolean('disponible');
            $table->date('date_debut_dispo');
            $table->date('date_fin_dispo');
            
            
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