@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a> 
    <a href="" class="bred">Voos</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Listagem de Voos</h1>
</div>

<div class="content-din bg-white">

    <div class="form-search">

        {{-- {!! Form::open(['route' => 'brands.search', 'class' => 'form form-inline']) !!}
            {!! Form::text('key_search', null, ['class' => 'form-control', 'placeholder' => 'O que deseja pesquisar?']) !!}
            <button class="btn btn-search">Pesquisar</button>
        {!! Form::close() !!}

        @if (isset($dataForm['key_search']))
            <div class="alert alert-info">
                <p>
                    <a href="{{ route('brands.index') }}"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                    Resultados para: <strong>{{ $dataForm['key_search'] }}</strong>
                </p>
            </div>
        @endif --}}

    </div>

    @include('panel.includes.alerts')

    <div class="class-btn-insert">
        <a href="{{ route('flights.create') }}" class="btn-insert">
            <span class="glyphicon glyphicon-plus"></span>
            Cadastrar
        </a>
    </div>
    
    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Origem</th>
            <th>Destino</th>
            <th>Paradas</th>
            <th>Data</th>
            <th>Saída</th>
            <th width="200">Ações</th>
        </tr>

        @forelse ($flights as $flight)
            <tr>
                <td>{{$flight->id}}</td>
                <td>{{$flight->origin->name}}</td>
                <td>{{$flight->destination->name}}</td>
                <td>{{$flight->qty_stops}}</td>
                <td>{{ formatDateAndTime($flight->date) }}</td>
                <td>{{ formatDateAndTime($flight->hour_output, "H:s") }}</td>
                <td>
                    <a href="{{ route('flights.edit', $flight->id) }}" class="edit">Edit</a>
                    <a href="{{ route('flights.show', $flight->id) }}" class="delete">View</a>
                </td>
            </tr>
        @empty
        <tr>
            <td>Não existem registros.</td>
            <td></td>
        </tr>
            
        @endforelse
    </table>
    @if (isset($dataForm))
        {!! $flights->appends($dataForm)->links() !!}
    @else
        {!! $flights->links() !!}
    @endif
    

</div><!--Content Dinâmico-->
    
@endsection