<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    protected $table = "personagem";
    protected $fillable = [
        "nome",
        "texto",
        "personagem",
        "card",
        "frase",
    ];
}
