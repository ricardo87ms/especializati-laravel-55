@extends('panel.layouts.app')

@section('content')
<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a> 
    <a href="{{ route('planes.index') }}" class="bred">Aviões ></a>
    <a href="" class="bred">Cadastrar</a>

</div>

<div class="title-pg">
    <h1 class="title-pg">Adicionar Novo Avião</h1>
</div>  

@include('panel.includes.errors')

<div class="content-din">

    {!! Form::open(['url' => route('planes.store')]) !!}

        @include('panel.planes.form')
        
        <div class="form-group">
            <button class="btn btn-search">Cadastrar </button>
        </div>
    {!! Form::close() !!}

</div><!--Content Dinâmico-->

@endsection