<?php

namespace App\Http\Controllers;

use App\Models\Destaque;
use App\Models\Jogo;
use App\Models\Personagem;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        if($request->logo){
            $path_logo = $request->file('logo')->store('img');
            Storage::delete($jogo->logo);
            $jogo->logo = $path_logo;
            $jogo->save();
        }

        return redirect('/');
    }
}
