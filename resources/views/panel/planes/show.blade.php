@extends('panel.layouts.app')

@section('content')
<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a> 
    <a href="{{ route('planes.index') }}" class="bred">Aviões ></a>
    <a href="" class="bred">{{ $plane->id }}</a>

</div>

<div class="title-pg">
    <h1 class="title-pg">Código do Avião: {{$plane->id}}</h1>
</div>  

@include('panel.includes.alerts')

<div class="content-din">

    <ul>
        <li>
            Código do Avião: <strong>{{ $plane->id }}</strong> <br>
            Marca: <strong>{{ $brand }}</strong> <br>
            Quantidade de Passageiros: <strong>{{ $plane->qty_passangers }}</strong>
        </li>
    </ul>

    {!! Form::model($plane, ['route' => ['planes.destroy', $plane->id], 'class'=> 'form form-search form-ds', 'method' => 'DELETE']) !!}
        <div class="form-group">
            <button class="btn btn-danger">Deletar o Avião: {{$plane->id}} </button>
        </div>
    {!! Form::close() !!}

</div><!--Content Dinâmico-->

@endsection