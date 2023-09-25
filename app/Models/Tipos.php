<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipos extends Model
{
    use HasFactory;

    protected $table = 'tipos';
    protected $primaryKey = 'id_tipo';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'tipos',


    ];

      // RELACIONAMENTOS

      public function pet(){
        return $this->belongsTo(
            Pet::class,
            'id_tipo',
            'id_tipo'


        );
    }



}
