<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    protected $table = "site";
    protected $fillable = [
        "jogo",
        "frase",
        "desc_form",
        "logo",
        "id_destaque",
    ];

    public function personagem(){
        return $this->hasOne(Personagem::class,'id_personagem','id');
    }
}
