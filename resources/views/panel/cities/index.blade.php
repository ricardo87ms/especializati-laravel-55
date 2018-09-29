@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{ route('panel') }}" class="bred">Home  ></a> 
    <a href="{{ route('states.index') }}" class="bred">{{ $state->name }}  ></a> 
    <a href="" class="bred">Cidades</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Cidades do Estado ({{ $cities->count() }} de {{ $cities->total() }}) {{ $state->name }}</h1>
</div>

<div class="content-din bg-white">

    <div class="form-search">

        {!! Form::open(['route' => ['state.cities.search', $state->initials], 'class' => 'form form-inline']) !!}
            {!! Form::text('key_search', null, ['class' => 'form-control', 'placeholder' => 'O que deseja pesquisar?']) !!}
            <button class="btn btn-search">Pesquisar</button>
        {!! Form::close() !!}

        @if (isset($dataForm['key_search']))
            <div class="alert alert-info">
                <p>
                    <a href="{{ route('state.cities', $state->initials) }}"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                    Resultados para: <strong>{{ $dataForm['key_search'] }}</strong>
                </p>
            </div>
        @endif

    </div>

    @include('panel.includes.alerts')

    {{-- <div class="class-btn-insert">
        <a href="{{ route('states.create') }}" class="btn-insert">
            <span class="glyphicon glyphicon-plus"></span>
            Cadastrar
        </a>
    </div> --}}
    
    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th width="200">Ações</th>
        </tr>

        @forelse ($cities as $city)
            <tr>
                <td>{{$city->name}}</td>
                <td>
                    {{-- <a href="{{ route('states.edit', $state->id) }}" class="edit">Edit</a>
                    <a href="{{ route('states.show', $state->id) }}" class="delete">View</a>
                    <a href="{{ route('states.planes', $state->id) }}" class="edit">
                        <i class="fa fa-plane" aria-hidden="true"></i>
                    </a> --}}
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
        {!! $cities->appends($dataForm)->links() !!}
    @else
        {!! $cities->links() !!}
    @endif

</div><!--Content Dinâmico-->
    
@endsection