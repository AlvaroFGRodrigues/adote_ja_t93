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
        Schema::create('generos', function (Blueprint $table) {
            $table->increments('id_genero');

            $table->timestamps();

        });
        \App\Models\Genero::create([
            'id_genero' => 1,
            'genero' => 'masculino'
        ]);


        \App\Models\Genero::create([
            'id_genero' => 2,
            'genero' => 'feminino'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generos');
    }
};
