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
            $table->integer('id_pet');
            $table->integer('data_atendimento');
            $table->text('descricao');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('atendimento');
    }
}
