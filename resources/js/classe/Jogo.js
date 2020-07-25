import React from 'react';
import ReactDOM from 'react-dom';

export default class Jogo{
    constructor(){
        //super();
        this.token = $("meta[name='csrf-token']").attr('content');
    }
    listar(){}
    inserir(texto = null){
    /*html*/
        let form = `
        <form method="post" action="/jogo/salvar" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="${this.token}"/>
        <div class="form-group">
            <label for="jogo">Titulo</label>
            <input type="text" class="form-control" id="jogo" name="jogo" value="${texto}"/>
        </div>
        <div class="custom-file">
                <input type="file" class="custom-file-input" id="logo" name="logo">
                <label class="custom-file-label" for="logo" >Image da Logo</label>
            </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
        </form>
        `;

        return form;
    }
    inserir_form(texto = null){
        /*html*/
        let form = `
        <form method="post" action="/jogo/salvar">
            <input type="hidden" name="_token" value="${this.token}"/>
        <div class="form-group">
            <label for="desc_form">Descrição</label>
            <textarea class="form-control" id="desc_form" name="desc_form">${texto}</textarea>
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