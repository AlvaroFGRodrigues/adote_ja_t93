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
        Schema::create('status', function (Blueprint $table) {
            $table->increments('id_status');
            $table->string('status',45);
            $table->timestamps();
            $table->softDeletes();

        });
        \App\Models\Status::create([
            'id_status' => 1,
            'status' => 'Aprovado'
        ]);


        \App\Models\Status::create([
            'id_status' => 2,
            'status' => 'reprovado'
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status');
    }
};
