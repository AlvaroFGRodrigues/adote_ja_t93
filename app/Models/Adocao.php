<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Pet;
use App\Models\StatusAdocao;
use App\Models\Funcionario;
use App\Models\Dono;

class Adocao extends Model
{
        use HasFactory, SoftDeletes;

        protected $table = 'adocao';
        protected $primaryKey = 'id_controle';
        protected $dates = [
            'created_at',
            'updated_at',
            'deleted_at'
        ];

        protected $fillable = [
            'id_funcionario',
            'adocao',
            'id_dono',
            'id_StatusAdocao'
        ];

        // RELACIONAMENTOS

        public function pet(){
            return $this->belongsTo(
                Pet::class,
                'id_controle',
                'id_controle'

            );
        }

        public function  dono(){
            return $this->belongsTo(
                Pet::class,
                'id_dono',
                'id_dono'

            );
        }

        public function status_da_adocao(){
            return $this->belongsTo(
                Pet::class,
                'id_StatusAdocao',
                'id_StatusAdocao'


            );
        }

        public function funcionario(){
            return $this->belongsTo(
                Pet::class,
                'id_funcionario',
                'id_funcionario'


            );
            }


    }
