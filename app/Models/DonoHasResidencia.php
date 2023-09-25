<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Dono;
use App\Models\Residencia;

class DonoHasResidencia extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'DonoHasResidencia';
    protected $primaryKey = 'id_dono_residencia';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'id_dono',
        'id_residencia',

    ];

      // RELACIONAMENTOS

      public function dono(){
        return $this->belongsTo(
            Pet::class,
            'id_dono',
            'id_dono'

        );
    }

    public function residencia(){
        return $this->belongsTo(
            Pet::class,
            'id_residencia',
            'id_residencia'

        );
    }



}
