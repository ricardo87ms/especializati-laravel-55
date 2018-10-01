@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home > </a>
    <a href="{{route('flights.index')}}" class="bred">Voos > </a>
    <a href="" class="bred">{{$flight->id}}</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Detalhes do voo: {{$flight->id}}</h1>
</div>

<div class="content-din">
    <ul>
        <li>
            Código: <strong>{{$flight->id}}</strong>
        </li>
        <li>
            Origem: <strong>{{$flight->origin->name}}</strong>
        </li>
        <li>
            Destino: <strong>{{$flight->destination->name}}</strong>
        </li>
        <li>
            Data: <strong>{{$flight->date}}</strong>
        </li>
        <li>
            Duração: <strong>{{$flight->time_duration}}</strong>
        </li>
        <li>
            Saída: <strong>{{$flight->hour_output}}</strong>
        </li>
        <li>
            Chegada: <strong>{{$flight->arrival_time}}</strong>
        </li>
        <li>
            Valor Anterior: <strong>{{$flight->old_price}}</strong>
        </li>
        <li>
            Valor Atual: <strong>{{$flight->price}}</strong>
        </li>
        <li>
            Total de Parcelas: <strong>{{$flight->total_plots}}</strong>
        </li>
        <li>
            Promoção: <strong>{{$flight->is_promotion}}</strong>
        </li>
        <li>
            Paradas: <strong>{{$flight->qty_stops}}</strong>
        </li>
        <li>
            Descrição: <strong>{{$flight->description}}</strong>
        </li>        
    </ul>

@include('panel.includes.alerts')

{!! Form::open(['route' => ['flights.destroy', $flight->id], 'class' => 'form form-search form-ds', 'method' => 'DELETE']) !!}
    <div class="form-group">
        <button class="btn btn-danger">Deletar o voo {{$flight->id}}</button>
    </div>
{!! Form::close() !!}

</div><!--Content Dinâmico-->

@endsection