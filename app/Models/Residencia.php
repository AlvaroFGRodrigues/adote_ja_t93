<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\TipoMoradia;
use App\Models\TamanhoResidencia;
use App\Models\DonoHasResidencia;

class Residencia extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'residencia';
    protected $primaryKey = 'id_residencia';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'id_TipoMoradia',
        'id_tamanho_resudencia',
        'endereco',
        'CEP',
        'moradores'





    ];

      // RELACIONAMENTOS

      public function DonoHasResidencia(){
        return $this->belongsTo(
            Pet::class,
            'id_residencia',
            'id_residencia'


        );
    }

    public function TipoMoradia(){
        return $this->belongsTo(
            Pet::class,
            'id_TipoMoradia',
            'id_TipoMoradia'


        );
    }


    public function tamaho_residencia(){
        return $this->belongsTo(
            Pet::class,
            'id_ TamanhoResidencia',
            'id_ TamanhoResidencia'


        );
    }


}
