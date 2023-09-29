<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Tipos;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tipos', function (Blueprint $table) {
            $table->increments('id_tipo');
            $table->string('tipo', 100);
            $table->timestamps();
            $table->softDeletes();
        });

        \App\Models\Tipos::create([
            'id_tipo' => 1,
            'tipo' => 'gato'
        ]);


        \App\Models\Tipos::create([
            'id_tipo' => 2,
            'tipo' => 'cachorro'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos');
    }
};
