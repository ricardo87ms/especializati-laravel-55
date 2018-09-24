@extends('panel.layouts.app')

@section('content')
<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a> 
    <a href="{{ route('planes.index') }}" class="bred">Aviões ></a>
    <a href="" class="bred">Alterar</a>

</div>

<div class="title-pg">
    <h1 class="title-pg">{{ $title or 'Adicionar Novo Avião' }}</h1>
</div>  

@include('panel.includes.errors')

<div class="content-din">

        {!! Form::model($plane, ['route' => ['planes.update', $plane->id], 'class'=> 'form form-search form-ds', 'method' => 'PUT']) !!}

        @include('panel.planes.form')
        
        <div class="form-group">
            <button class="btn btn-search">Editar </button>
        </div>
    {!! Form::close() !!}

</div><!--Content Dinâmico-->

@endsection