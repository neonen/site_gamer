<section id="destaque">
@auth
<div class="text-center my-3">
    <button class="btn btn-primary">
        Editar Destaque
    </button>
</div>
@endauth
<div class="background d-flex justify-content-center">
    <div class="card card-background text-center text-white">
        <h4 id="personagem_nome">Personagem</h4>
        <img id="personagem_card" 
        src="https://pm1.narvii.com/6630/cbe2edf93a631b1892d463bd2bfd5cf2bc847432_hq.jpg" 
        class="img-fluid game-card game-card-img" alt="Personagem">
        <div class="text-center mx-auto pb-4">
        <p id="personagem-frase" class="card-frase">"Lorem ipsum dolor sit amet consectetur, adipisicing elit."</p>
        </div>
    </div>
</div>
</section>