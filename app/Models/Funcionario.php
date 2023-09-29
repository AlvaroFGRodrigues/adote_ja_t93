<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Adocao;

class Funcionario extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'funcionario';
    protected $primaryKey = 'id_funcionario';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'nome',
        'email',
        'cpf'

    ];

      // RELACIONAMENTOS

      public function adocao(){
        return $this->belongsTo(
            Pet::class,
            'id_funcionario',
            'id_funcionario'


        );
    }


}
