@extends('panel.layouts.app')

@section('content')
<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a> 
    <a href="{{ route('flights.index') }}" class="bred">Voos ></a>
    <a href="" class="bred">Cadastrar</a>

</div>

<div class="title-pg">
    <h1 class="title-pg">Adicionar Novo Voo</h1>
</div>  

@include('panel.includes.errors')

<div class="content-din">

    {!! Form::open(['route' => 'flights.store', 'class' => 'form form-search form-ds', 'files' => true]) !!}

        @include('panel.flights.form')
        
        <div class="form-group">
            <button class="btn btn-search">Cadastrar </button>
        </div>
    {!! Form::close() !!}

</div><!--Content Dinâmico-->

@endsection