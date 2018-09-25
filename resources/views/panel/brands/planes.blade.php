@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a> 
    <a href="{{ route('brands.index') }}" class="bred">Marcas ></a>
    <a href="{{ route('brands.planes', $brand->id) }}" class="bred">Aviões</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Aviões da Marca: {{ $brand->name }} </h1>
</div>

<div class="content-din bg-white">

    @include('panel.includes.alerts')
    
    <table class="table table-striped">
        <tr>
            <th>#id</th>
            <th>Classe</th>
            <th>Total de Passageiros</th>
            <th width="150">Ações</th>
        </tr>

        @forelse ($planes as $plane)
            <tr>
                <td>{{ $plane->id }}</td>
                <td>{{ $plane->classes($plane->class) }}</td>
                <td>{{$plane->qty_passangers}}</td>
                <td>
                    <a href="{{ route('planes.edit', $plane->id) }}" class="edit">Edit</a>
                    <a href="{{ route('planes.show', $plane->id) }}" class="delete">View</a>
                </td>
            </tr>
        @empty
        <tr>
            <td colspan="3">Não existem registros.</td>
            <td></td>
        </tr>
            
        @endforelse
    </table>
    

</div><!--Content Dinâmico-->
    
@endsection