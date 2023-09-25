<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Status;
use App\Models\Adocao;
use App\Models\DonoHasResidencia;
class Dono extends Model
{

    use HasFactory, SoftDeletes;

    protected $table = 'dono';
    protected $primaryKey = 'id_dono';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'id_status',
        'apto',
        'nome',
        'nascimento',
        'email',
        'telefone',
        'cpf',
        'motivo',
        'historico'

    ];

      // RELACIONAMENTOS

      public function status(){
        return $this->belongsTo(
            Pet::class,
            'id_status',
            'id_status'

        );
    }

    public function DonoHasResidencia(){
        return $this->belongsTo(
            Pet::class,
            'id_dono',
            'id_dono'

        );


    }


    public function adocao(){
        return $this->belongsTo(
            Pet::class,
            'id_dono',
            'id_dono'

        );


    }

















}
