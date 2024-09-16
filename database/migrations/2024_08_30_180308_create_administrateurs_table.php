<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrateursTable extends Migration
{
    public function up()
    {
        Schema::create('administrateurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userID');
            $table->timestamps();
            $table->foreign('userID')->references('userID')->on('users');       

        });
    }

    public function down()
    {
        Schema::dropIfExists('administrateurs');
    }
};

