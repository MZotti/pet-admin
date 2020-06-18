<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAtendimento extends Migration
{
    public function up()
    {
        Schema::create('atendimento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pet_id');
            $table->date('data_atendimento');
            $table->text('descricao')->nullable();
            $table->timestamps();
            
            $table->foreign('pet_id')->references('id')->on('pets')->onDelete('cascade');;
        });
    }

    public function down()
    {
        Schema::dropIfExists('atendimento');
    }
}
