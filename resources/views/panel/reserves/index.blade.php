@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a> 
    <a href="{{ route('reserves.index') }}" class="bred">Reservas</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Reservas</h1>
</div>

<div class="content-din bg-white">

    <div class="form-search">

        {!! Form::open(['route' => 'planes.search', 'class' => 'form form-inline']) !!}
            {!! Form::text('key_search', null, ['class' => 'form-control', 'placeholder' => 'O que deseja pesquisar?']) !!}
            <button class="btn btn-search">Pesquisar</button>
        {!! Form::close() !!}

        @if (isset($dataForm['key_search']))
            <div class="alert alert-info">
                <p>
                    <a href="{{ route('reserves.index') }}"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                    Resultados para: <strong>{{ $dataForm['key_search'] }}</strong>
                </p>
            </div>
        @endif

    </div>

    @include('panel.includes.alerts')

    <div class="class-btn-insert">
        <a href="{{ route('reserves.create') }}" class="btn-insert">
            <span class="glyphicon glyphicon-plus"></span>
            Fazer Nova Reserva
        </a>
    </div>
    
    <table class="table table-striped">
        <tr>
            <th>#id</th>
            <th>Usuário</th>
            <th>Voo</th>
            <th>Status</th>
            <th width="150">Ações</th>
        </tr>

        @forelse ($reserves as $reserve)
            <tr>
                <td>{{ $reserve->id }}</td>
                <td>{{ $reserve->user->name }}</td>
                <td> {{ $reserve->flight->id }} </td>
                {{-- <td> {{ $reserve->flight->orgin->name }} </td> --}}
                <td>{{$reserve->status($reserve->status)}}</td>
                <td>
                    <a href="{{ route('reserves.edit', $reserve->id) }}" class="edit">Edit</a>
                </td>
            </tr>
        @empty
        <tr>
            <td colspan="3">Não existem registros.</td>
            <td></td>
        </tr>
            
        @endforelse
    </table>
    @if (isset($dataForm))
        {!! $reserves->appends($dataForm)->links() !!}
    @else
        {!! $reserves->links() !!}
    @endif
    

</div><!--Content Dinâmico-->
    
@endsection