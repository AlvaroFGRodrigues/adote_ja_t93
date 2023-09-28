<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('StatusAdocaos', function (Blueprint $table) {
            $table->increments('id_status_adocao');
            $table->timestamps();
        });

        \App\Models\StatusAdocao::create([
            'id_status' => 1,
            'status' => 'Aprovado'
        ]);

        \App\Models\StatusAdocao::create([
            'id_status' => 2,
            'status' => 'Analisando'
        ]);

        \App\Models\StatusAdocao::create([
            'id_status' => 3,
            'status' => 'Reprovado'
        ]);




    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('StatusAdocaos');
    }
};
