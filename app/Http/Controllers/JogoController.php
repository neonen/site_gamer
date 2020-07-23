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
        $personagens = Personagem::all()->chunk(3);
        return view('page/index',compact('jogo','destaques','personagens'));

    }

    public function salvar(Request $request){
        $jogo = Jogo::first();
        if($jogo){
            $jogo->fill($request->post());
            $jogo->update();
        }else{
            $jogo = new Jogo($request->input());
            $jogo->save();
        }

        return redirect('/');
    }
}
