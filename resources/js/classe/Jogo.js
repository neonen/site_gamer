import React from 'react';
import ReactDOM from 'react-dom';

export default class Jogo{
    listar(){}
    inserir(){
    /*html*/
        let form = `
        <form method="post" action="/jogo/inserir/titulo">
        <div class="form-group">
            <label for="jogo">Titulo</label>
            <input type="text" class="form-control" id="jogo" name="jogo"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
        </form>
        `;

        return form;
    }
    editar(){
        /*html*/
        let form = `
        <form method="post" action="/jogo/inserir/titulo">
        <input type="hidden" id="id" name="id" value/>
        <div class="form-group">
            <label for="jogo">Titulo</label>
            <input type="text" class="form-control" id="jogo" name="jogo" value/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
        </form>
        `;

        return form;
    }
    excluir(){}
    buscar(){}
}