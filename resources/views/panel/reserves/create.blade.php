@extends('panel.layouts.app')

@section('content')
<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a> 
    <a href="{{ route('reserves.index') }}" class="bred">Reservas ></a>
    <a href="" class="bred">Cadastrar</a>

</div>

<div class="title-pg">
    <h1 class="title-pg">Adicionar Nova Reserva</h1>
</div>  

@include('panel.includes.errors')

<div class="content-din">

    {!! Form::open(['route' => 'reserves.store', 'class' => 'form form-search form-ds']) !!}

        @include('panel.reserves.form')
        
        <div class="form-group">
            <button class="btn btn-search">Cadastrar </button>
        </div>
    {!! Form::close() !!}

</div><!--Content Dinâmico-->

@endsection