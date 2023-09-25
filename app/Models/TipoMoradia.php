<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Residencia;
class TipoMoradia extends Model
{
    use HasFactory;

    use HasFactory, SoftDeletes;

    protected $table = 'TipoMoradia';
    protected $primaryKey = 'id_tipo_morandia';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [

        'tipo_morandia',




    ];

      // RELACIONAMENTOS

      public function residencia(){
        return $this->belongsTo(
            Pet::class,

            'id_TipoMoradia',



        );
    }






}
