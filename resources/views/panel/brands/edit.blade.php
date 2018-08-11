@extends('panel.layouts.app')

@section('content')
<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a> 
    <a href="{{ route('brands.index') }}" class="bred">Brands</a>
    <a href="{{ route('brands.edit', $brand->id) }}" class="bred">Editar</a>

</div>

<div class="title-pg">
    <h1 class="title-pg">Editar Marca: {{ $brand->name }}</h1>
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

    <form class="form form-search form-ds" action="{{ route('brands.update', $brand->id) }}" method="POST">
        
        {!! csrf_field() !!}
        

        {{-- <input type="hidden" name="id" value="{{ $brand->id }}"> --}}

        <div class="form-group">
            <input type="text" name="name" value="{{ old('name', $brand->name) }}" placeholder="Nome:" class="form-control">
        </div>
        

        <div class="form-group">
            <button class="btn btn-search">Enviar </button>
        </div>
    </form>

</div><!--Content Dinâmico-->

@endsection