<section id='form' class="backgound-verde my-5">

<div class="container">
    <div class="card container py-2">
        <div class="card-body text-center">
            <h2 text-success>FORMULÁRIO</h2>
            @if($desc_form)
                {{$desc_form}}
            @else
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, quod sequi sint a obcaecati, deleniti animi laborum, magnam quam ab ut? Dolores quibusdam dicta pariatur nulla soluta! Reiciendis, nesciunt adipisci.</p>
            @endif
            @auth
            <div class="form-group">
            <button id="btn_edit_form" class="btn btn-primary">
                Editar Descrição do formulário
            </button>
            </div>
            @endauth
            <form class="row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="exampleInputnome" placeholder="Nome">
            </div>
            <div class="form-group col-md-6">
                <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Email">
            </div>
            <div class="form-group col-md-12">
                <textarea class="form-control" id="messagem"  placeholder="Mensagem"></textarea>
            </div>
            <div class="form-group col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            </form>
        </div>
    </div>
</div>

</section>