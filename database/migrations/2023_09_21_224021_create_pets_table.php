<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('id_pet');
            $table->integer('id_porte');
            $table->integer('id_genero');
            $table->integer('id_tipo');
            $table->integer('id_controle');
            $table->string('nome_pet',45);
            $table->integer('idade_pet');
            $table->string('raca_pet',45);
            $table->string('descricao',45);
            $table->string('vacinas',45);
            $table->string('racao',45);
            $table->string('historico',45);
            $table->softDeletes();
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
