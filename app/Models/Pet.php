<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Porte;
use App\Models\Tipos;
use App\Models\Genero;
use App\Models\Adocao;

class Pet extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pet';
    protected $primaryKey = 'id_pet';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'id_porte',
        'id_genero',
        'id_tipo',
        'id_controle',
        'nome_pet',
        'idade_pet',
        'descricao',
        'vacinas',
        'racao',
        'historico',



    ];

      // RELACIONAMENTOS

      public function tipos(){
        return $this->belongsTo(
            Pet::class,
            'id_tipo',
            'id_tipo'


        );
    }

    public function porte(){
        return $this->belongsTo(
            Pet::class,
            'id_porte',
            'id_porte'


        );
}

public function genero(){
    return $this->belongsTo(
        Pet::class,
        'id_genero',
        'id_genero'


    );






}
}
