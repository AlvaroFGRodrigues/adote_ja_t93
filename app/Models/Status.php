<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Dono;

class Status extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'status';
    protected $primaryKey = 'id_status';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'status'




    ];

      // RELACIONAMENTOS

      public function dono(){
        return $this->belongsTo(
            Pet::class,
            'id_status',
            'id_status'


        );
    }

}
