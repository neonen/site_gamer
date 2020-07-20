<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atributo extends Model
{
    protected $table = "destaque";
    protected $fillable = [
        "vida",
        "ataque",
        "defesa",
    ];

    public function personagem(){
        return $this->hasOne(Personagem::class,'id_personagem','id');
    }
}
