<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destaque extends Model
{
    protected $table = "destaque";
    protected $fillable = [
        "background",
        "cor_primaria",
        "cor_secundaria",
        "id_personagem",
    ];

    public function personagem(){
        return $this->hasOne(Personagem::class,'id_personagem','id');
    }
}
