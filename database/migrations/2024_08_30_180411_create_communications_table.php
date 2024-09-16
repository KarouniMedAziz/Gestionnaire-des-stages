<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunicationsTable extends Migration
{
    public function up()
    {
        Schema::create('communications', function (Blueprint $table) {
            $table->id('messageID');
            $table->unsignedBigInteger('sender');
            $table->unsignedBigInteger('receiver');
            $table->foreign('sender')->references('userID')->on('users')->onDelete('cascade');   
            $table->foreign('receiver')->references('userID')->on('users')->onDelete('cascade'); 
            $table->text('messageContent');
            $table->timestamp('timestamp')->useCurrent();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('communications');
    }
}
