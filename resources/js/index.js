import Helper from './helpers/helper';
import Jogo from './classe/Jogo';

const helper = new Helper();
const jogo = new Jogo();

$('#btn_edit_form').on('click',() =>{
    $('.modal-title').text('Editar conteudo do formulario');
    let conteudo = ``;
    $('.modal-body').html(conteudo);
    $('#modal').modal('show');
});

$('#btn_add_persona').on('click',() =>{
    $('.modal-title').text('Adicionar personagem');
    let conteudo = ``;
    $('.modal-body').html(conteudo);
    $('#modal').modal('show');
});

$('#btn_edit_persona').on('click',() =>{
    $('.modal-title').text('Editar personagem');
    let conteudo = ``;
    $('.modal-body').html(conteudo);
    $('#modal').modal('show');
});

$('#btn_edit_destaque').on('click',() =>{
    $('.modal-title').text('Editar Destaque');
    let conteudo = ``;
    $('.modal-body').html(conteudo);
    $('#modal').modal('show');
});

$('#btn_edit_titulo').on('click',() =>{
    $('.modal-title').text('Editar Titulo');
    let conteudo = jogo.inserir();
    $('.modal-body').html(conteudo);
    $('#modal').modal('show');
});

