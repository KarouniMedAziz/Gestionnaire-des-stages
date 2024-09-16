<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagiairesTable extends Migration
{
    public function up()
    {
        Schema::create('stagiaires', function (Blueprint $table) { 
            $table->id();
            $table->foreignId('userID');
            $table->string('fieldOfStudy');
            $table->string('levelOfStudy');
            $table->timestamps();
            $table->foreign('userID')->references('userID')->on('users');       
         });
    }

    public function down()
    {
        Schema::dropIfExists('stagiaires'); 
    }
};
