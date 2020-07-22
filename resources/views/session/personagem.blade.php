<section id="personagem">

@auth
<div class="text-center my-3">
    <button class="btn btn-primary">
        Adicionar personagem
    </button>
</div>
@endauth

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container mx-auto row d-flex justify-content-around">
        @for ($i = 0; $i < 3; $i++)
        <div class="col-md-4">
          <div class="card borda-redonda">
            <div class="card-cinza mx-auto">
              <img src="https://gamepedia.cursecdn.com/transistor_gamepedia/b/bc/Frontpagered.png" class="d-block w-100 game-card-img-contain" alt="...">
            </div>
            <div class="pb-5 container text-center">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic, neque, tempore id voluptatem harum qui eum ad odit nobis, nostrum vero ducimus. Totam laudantium architecto ipsum ipsa vero, consequuntur repellat?</p>
              @auth
              <div class="text-center my-3">
                  <button class="btn btn-primary">
                      Editar personagem
                  </button>
              </div>
              @endauth
            </div>
          </div>
        </div>
        @endfor
      </div>

    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
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
</section>