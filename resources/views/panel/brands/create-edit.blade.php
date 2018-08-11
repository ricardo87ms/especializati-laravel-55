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

<div class="content-din">
    @if (isset($errors) && $errors->any())
        <div class="alert alert-warning">
            <ul>
                @foreach ($errors->all() as $errors)
                <li>{{$errors}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<div class="content-din">
    @if (isset($brand))
    <form class="form form-search form-ds" action="{{ route('brands.update', $brand->id) }}" method="POST">
        {!! method_field('PUT') !!}    
    @else
    <form class="form form-search form-ds" action="{{ route('brands.store') }}" method="POST">
    @endif
        
        {{ csrf_field() }}

        <div class="form-group">
            <input type="text" name="name"  
                    placeholder="Nome:" class="form-control" 
                    value="{{ old('name', isset($brand->name) ? $brand->name : '') }}">
        </div>
        

        <div class="form-group">
            <button class="btn btn-search">Enviar </button>
        </div>
    </form>

</div><!--Content Dinâmico-->

@endsection