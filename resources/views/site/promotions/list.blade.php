@extends('site.layouts.app')

@section('content-site')

<div class="content">

    <section class="container">
        <h1 class="title">Promoções</h1>


        <div class="row">
            @forelse ($promotions as $promotion)
            <article class="result col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="image-promo">
                    @if ($promotion->image)
                    <img src=" {{ url("storage/flights/{$promotion->image}") }} " alt="{{$promotion->id}}" srcset="">
                    @else
                    <img src=" {{ url("assets/panel/imgs/no-image.png") }} " alt="{{$promotion->id}}" srcset="" >
                    @endif
                    

                    <div class="legend">
                        <h1> {{ $promotion->destination->city->name }} </h1>
                        <h2> Saída:  {{ $promotion->origin->city->name }} </h2>
                        <span>Ida e Volta</span>
                    </div>
                </div><!--image-promo-->

                <div class="details">
                    <p>Data: {{ formatDateAndTime($promotion->date) }}</p>

                    <div class="price">
                        <span>R$ {{ number_format($promotion->price, 2, ',', '.') }}</span>
                        <strong>Em até {{$promotion->total_plots}}x</strong>
                    </div>

                    <a href="{{ route('details.flight', $promotion->id)  }}" class="btn btn-buy">Comprar</a>
                </div><!--details-->

            </article><!--result-->
            @empty
                <p>Não existem promoções.</p>
            @endforelse
        </div><!--Row-->
    </section><!--Container-->

</div>

@endsection