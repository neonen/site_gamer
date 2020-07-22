@php
    $titulo = null;
    $destaque = null;
    $desc_form = null;
    if($jogo){
        $titulo = $jogo->jogo;
        $destaque = $jogo->destaque;
        $desc_form = $jogo->desc_form;
    }

@endphp
@extends('layouts.app')

@section('content')
    
    @include('session/destaque')
    @include('session/personagem')
    @include('session/form')

    <section class="container text-right">
        <button type="button" class="btn btn-primary my-3 right">Topo</button>
    </section>

@endsection
