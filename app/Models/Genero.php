<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Pet;

class Genero extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'genero';
    protected $primaryKey = 'id_genero';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'genero'


    ];

      // RELACIONAMENTOS

      public function pet(){
        return $this->belongsTo(
            Pet::class,
            'id_genero',
            'id_genero'


        );
    }

    public function adocao(){
        return $this->belongsTo(
            Pet::class,
            'id_controle',
            'id_controle'


        );
    }

}
