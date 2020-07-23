@php
@endphp
<section id="personagem">

@auth
<div class="text-center my-3">
    <button id="btn_add_persona" class="btn btn-primary">
        Adicionar personagem
    </button>
</div>
@endauth
@if(count($personagens)>0)
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
@foreach($personagens as $personagem)

    <div class="carousel-item active">
      <div class="container mx-auto row d-flex justify-content-around">
        @foreach ($personagem as $persona)
        <div class="col-md-4">
          <div class="card borda-redonda">
            <div class="card-cinza mx-auto">
              <img src='{{asset("$persona->personagem")}}' class="d-block w-100 game-card-img-contain" alt="...">
            </div>
            <div class="pb-5 container text-center">
              <h3>{{$persona->nome}}</h3>
              <p>{{$persona->texto}}</p>
              @auth
              <div class="text-center my-3">
                  <button id="btn_edit_persona" class="btn btn-primary">
                      Editar personagem
                  </button>
              </div>
              @endauth
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>

    @endforeach
 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endif
</section>