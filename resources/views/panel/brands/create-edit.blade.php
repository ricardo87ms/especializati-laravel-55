@extends('panel.layouts.app')

@section('content')
<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a> 
    <a href="{{ route('brands.index') }}" class="bred">Brands ></a>
    <a href="" class="bred">Gestão</a>

</div>

<div class="title-pg">
    <h1 class="title-pg">Gestão de Marcas de Aviões</h1>
</div>  

@include('panel.includes.errors')

<div class="content-din">
    @if (isset($brand))
    {{-- <form class="form form-search form-ds" action="{{ route('brands.update', $brand->id) }}" method="POST"> --}}
    {!! Form::model($brand, ['route' => ['brands.update', $brand->id], 'class'=> 'form form-search form-ds', 'method' => 'PUT']) !!}
    @else
    {{-- <form class="form form-search form-ds" action="{{ route('brands.store') }}" method="POST"> --}}
    {!! Form::open(['url' => route('brands.store')]) !!}
    @endif
        <div class="form-group">
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome:']) !!}
        </div>
        
        <div class="form-group">
            <button class="btn btn-search">Enviar </button>
        </div>
    {!! Form::close() !!}

</div><!--Content Dinâmico-->

@endsection