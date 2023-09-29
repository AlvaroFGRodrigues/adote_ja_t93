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
            $table->increments('id_porte');
            $table->string('porte',45);
            $table->timestamps();
            $table->softDeletes();
        });

        \App\Models\Porte::create([
            'id_porte' => 1,
            'porte' => 'pequeno'
        ]);


        \App\Models\Porte::create([
            'id_porte' => 2,
            'porte' => 'médio'
        ]);
        \App\Models\Porte::create([
            'id_porte' => 3,
            'porte' => 'grande'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portes');
    }
};
