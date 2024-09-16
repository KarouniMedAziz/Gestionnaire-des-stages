<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTachesTable extends Migration
{
    public function up()
    {
        Schema::create('taches', function (Blueprint $table) {
            $table->id('taskID');
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('startDate');
            $table->date('endDate');
            $table->string('status');
            $table->foreignId('assigned_by');
            $table->foreignId('accomplished_by');

               
            $table->timestamps();
            $table->foreign('assigned_by')->references('id')->on('administrateurs');     
            $table->foreign('accomplished_by')->references('id')->on('stagiaires');   
        });
    }

    public function down()
    {
        Schema::dropIfExists('taches');
    }
};
