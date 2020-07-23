<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonagemRequest;
use App\Models\Personagem;
use Illuminate\Http\Request;

class PersonagemController extends Controller
{
    public function salvar(PersonagemRequest $request){

        $path_person = $request->file('personagem')->store('img');
        $path_card = $request->file('card')->store('img');


        $personagem = new Personagem($request->input());
        $personagem->personagem = $path_person;
        $personagem->card = $path_card;
        $personagem->save();
        

        return redirect('/');
    }
}
