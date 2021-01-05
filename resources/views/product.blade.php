@extends('layout.main')

@section('content')
    <section>
        <div class="container">
            <h1>
                {{ $product['titolo'] }}
            </h1>
        
            <img src="{{$product['src-h'] }}" alt="">
            <img src="{{$product['src-p'] }}" alt="">
    
            <div class="description">
                <p>
                    {!! $product['descrizione'] !!}
                </p>
            </div>
        </div>
    </section>
@endsection