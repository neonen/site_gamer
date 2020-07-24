<?php

namespace App\Http\Controllers;

use App\Http\Requests\DestaqueRequest;
use App\Models\Destaque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestaqueController extends Controller
{
    public function salvar(DestaqueRequest $request){

        $path_person = $request->file('background')->store('img');
        
        $destaque = new Destaque($request->input());
        $destaque->background = $path_person;
        $destaque->save();
        

        return redirect('/');
    }

    public function editar(DestaqueRequest $request){
        
        $destaque = Destaque::find($request->id);
        $destaque->fill($request->input());
        if($request->background){
            $path_person = $request->file('background')->store('img');
            Storage::delete($destaque->background);
            $destaque->background = $path_person;
        }
        $destaque->update();
        

        return redirect('/');
    }
}
