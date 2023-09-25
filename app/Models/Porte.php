<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Pet;

class Porte extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'porte';
    protected $primaryKey = 'id_porte';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'portes'



    ];

      // RELACIONAMENTOS

      public function pet(){
        return $this->belongsTo(
            Pet::class,
            'id_porte',
            'id_porte'


        );
    }


}
