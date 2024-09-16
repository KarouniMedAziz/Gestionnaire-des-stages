<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidaturesTable extends Migration
{
    public function up()
    {
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id('applicationID');
            $table->foreignId('stagiaire_id');       
            $table->date('submissionDate');
            $table->string('status');
            $table->string('CV');
            $table->json('keywords')->nullable();
            $table->timestamps();
            $table->foreign('stagiaire_id')->references('id')->on('stagiaires');
                });
    }

    public function down()
    {
        Schema::dropIfExists('candidatures');
    }
};


