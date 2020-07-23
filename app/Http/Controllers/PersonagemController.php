<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonagemRequest;
use App\Models\Personagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function editar(Request $request){
        
        $personagem = Personagem::find($request->id);
        $personagem->fill($request->input());
        if($request->personagem){
            $path_person = $request->file('personagem')->store('img');
            Storage::delete($personagem->personagem);
            $personagem->personagem = $path_person;
            //$personagem->save();
            //dd($path_person);
        }
        if($request->card){
            $path_card = $request->file('card')->store('img');
            Storage::delete($personagem->card);
            $personagem->card = $path_card;
            //$personagem->save();
        }
        $personagem->update();
        

        return redirect('/');
    }
}
