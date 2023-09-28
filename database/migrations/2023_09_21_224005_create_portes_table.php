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
        Schema::create('portes', function (Blueprint $table) {
            $table->increments('id_portes');
            $table->timestamps();
            $table->softDeletes();


            \App\Models\Porte::create([
                'id_porte' => 1,
                'portes' => 'pequeno'
            ]);


            \App\Models\Genero::create([
                'id_porte' => 2,
                'portes' => 'médio'
            ]);
            \App\Models\Genero::create([
                'id_porte' => 3,
                'portes' => 'grande'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portes');
    }
};
