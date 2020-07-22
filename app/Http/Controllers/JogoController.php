<?php

namespace App\Http\Controllers;

use App\Models\Destaque;
use App\Models\Jogo;
use App\Models\Personagem;

use Illuminate\Http\Request;

class JogoController extends Controller
{
    public function index(){
        $jogo = Jogo::first();
        $destaques = Destaque::all();
        $personagens = Personagem::all();
        return view('page/index',compact('jogo','destaques','personagens'));

    }
}
