<section id="destaque">
@auth
<div class="text-center my-3">
    <button id="btn_edit_destaque" class="btn btn-primary" value="{{$destaques}}">
        Mudar Destaque
    </button>
</div>
@endauth
@if($destaque)
<div class="background d-flex justify-content-center" style="background-image: url({{asset($destaque->background)}});background-repeat: round;">
    <div class="card text-center text-white" 
        style="background: rgb(254,0,0);
            background: linear-gradient( {{$destaque->cor_primaria}}bf 50%, rgba(0,0,0,0) 100%);">
        <h4 id="personagem_nome" class="mt-1">{{$destaque->personagem->nome}}</h4>
        <img id="personagem_card" 
        src="{{asset($destaque->personagem->card)}}" 
        class="img-fluid game-card game-card-img" alt="Personagem">
        <div class="text-center mx-auto pb-4">
        <p id="personagem-frase" class="card-frase">"{{$destaque->personagem->frase}}"</p>
        </div>
    </div>
</div>
@endif
</section>