import Helper from './helpers/helper';
import Jogo from './classe/Jogo';
import Personagem from './classe/Personagem';
import Destaque from './classe/Destaque';

const helper = new Helper();
const jogo = new Jogo();
const personagem = new Personagem();
const destaque = new Destaque();

$('#btn_edit_form').on('click',() =>{
    let texto = $('#text_form').text()
    $('.modal-title').text('Editar conteudo do formulario');
    let conteudo = jogo.inserir_form(texto);
    $('.modal-body').html(conteudo);
    $('#modal').modal('show');
});

$('#btn_add_persona').on('click',() =>{
    $('.modal-title').text('Adicionar personagem');
    let conteudo = personagem.inserir();
    $('.modal-body').html(conteudo);
    $('#modal').modal('show');
});

$('.btn_edit_persona').on('click',(e) =>{
    let obj = JSON.parse(e.target.value);
    $('.modal-title').text('Editar personagem');
    let conteudo = personagem.editar(obj);
    $('.modal-body').html(conteudo);
    $('#modal').modal('show');
});
$('.btn_destaque').on('click',(e) =>{
    let obj = e.target.value;
    $('.modal-title').text('Criar destaque');
    let conteudo = destaque.inserir(obj);
    $('.modal-body').html(conteudo);
    $('#modal').modal('show');
});

$('#btn_edit_destaque').on('click',(e) =>{
    let obj = JSON.parse(e.target.value);
    $('.modal-title').text('Mudar Destaque');
    let conteudo = destaque.mudar(obj);
    $('.modal-body').html(conteudo);
    $('#modal').modal('show');
});

$('#btn_edit_titulo').on('click',() =>{
    let titulo = $('#titulo_jogo').text()
    $('.modal-title').text('Editar Titulo');
    let conteudo = jogo.inserir(titulo);
    $('.modal-body').html(conteudo);
    $('#modal').modal('show');
});

