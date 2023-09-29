<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Residencia;




class  TamanhoResidencia extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = ' TamanhoResidencia';
    protected $primaryKey = 'id_ TamanhoResidencia';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        ' TamanhoResidencia'




    ];

      // RELACIONAMENTOS

      public function residencia(){
        return $this->belongsTo(
            Pet::class,
            'id_ TamanhoResidencia',
            'id_ TamanhoResidencia'


        );
    }

}
