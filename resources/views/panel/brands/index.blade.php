@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a> <a href="" class="bred">Brands</a>
</div>

<a href="{{ route('brands.create') }}" class="btn btn-success">
    <i class="fa fa-plus-circle" aria-hidden="true"></i> Novo
</a>

<div class="title-pg">
    <h1 class="title-pg">Marcas de Aviões</h1>
</div>
    
@endsection