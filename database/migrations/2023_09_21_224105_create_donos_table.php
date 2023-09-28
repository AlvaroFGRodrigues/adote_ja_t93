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
        Schema::create('donos', function (Blueprint $table) {
            $table->increments('id_dono');
            $table->integer('id_status');
            $table->tinyInteger('apto');
            $table->string('nome',45);
            $table->date('nascimento');
            $table->string('email',45);
            $table->string('telefone',45);
            $table->string('cpf',45);
            $table->text('motivo');
            $table->text('historico');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donos');
    }
};
