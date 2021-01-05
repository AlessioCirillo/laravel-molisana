<div class="home">

    @if(!empty($lunghe))
    <div class="container">
        <h1>LE LUNGHE</h1>
        <div class="posters">
            @foreach ($lunghe as $poster)
                <div class="poster">
                    <a href="{{ route('product', $poster['id']) }}"> 
                        <img src="{{ $poster['src'] }}" alt="{{ $poster['titolo'] }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    @endif
    
    @if(!empty($corte))
    <div class="container">
        <h1>LE CORTE</h1>
        <div class="posters">
            @foreach ($corte as $poster)
                <div class="poster">
                    <a href="{{ route('product', $poster['id']) }}">
                        <img src="{{ $poster['src'] }}" alt="{{ $poster['titolo'] }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    @endif
    
    @if(!empty($cortissime))
    <div class="container">
        <h1>LE CORTISSIME</h1>
        <div class="posters">
            @foreach ($cortissime as $poster)
                <div class="poster">
                    <a href="{{ route('product', $poster['id']) }}">
                        <img src="{{ $poster['src'] }}" alt="{{ $poster['titolo'] }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    @endif
    
</div>
