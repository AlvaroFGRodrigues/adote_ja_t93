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
        Schema::create('tipos', function (Blueprint $table) {
            $table->increments('id_porte');
            $table->timestamps();
            $table->softDeletes('');


        \App\Models\Porte::create([
            'id_tipo' => 1,
            'tipos' => 'gato'
        ]);


        \App\Models\Genero::create([
            'id_tipo' => 2,
            'tipos' => 'cachorro'
        ]);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos');
    }
};
