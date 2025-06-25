<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerTable extends Migration
{
    public function up()
    {
        Schema::create('partner', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Nome do parceiro
            $table->string('logo')->nullable();  // Logo do parceiro (opcional)
            $table->string('site')->nullable();  // Site do parceiro (opcional)
            $table->text('description')->nullable();  // Descrição do parceiro (opcional)
            $table->timestamps();  // Colunas de data/hora
        });
    }

    public function down()
    {
        Schema::dropIfExists('partner');
    }
}
