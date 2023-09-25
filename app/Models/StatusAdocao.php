<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Adocao;

class StatusAdocao extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'StatusAdocao';
    protected $primaryKey = 'id_StatusAdocao';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'status'



    ];

      // RELACIONAMENTOS

      public function adocao(){
        return $this->belongsTo(
            Pet::class,
            'id_StatusAdocao',
            'id_StatusAdocao'


        );
    }
}
