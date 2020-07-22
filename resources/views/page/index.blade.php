@extends('layouts.app')

@section('content')

    @include('session/destaque')
    @include('session/personagem')
    @include('session/form')

    <section class="container text-right">
        <button type="button" class="btn btn-primary my-3 right">Topo</button>
    </section>

    @include('componente.modal')
@endsection
