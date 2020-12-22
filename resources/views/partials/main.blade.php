@if(!empty($lunghe))
<div class="container">
    <h1>LE LUNGHE</h1>
    <div class="posters">
        @foreach ($lunghe as $poster)
            <div class="poster">
                <img src="{{ $poster['src'] }}" alt="{{ $poster['titolo'] }}">
                <h3>{{ $poster['titolo'] }}</h3>
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
                <img src="{{ $poster['src'] }}" alt="{{ $poster['titolo'] }}">
                <h3>{{ $poster['titolo'] }}</h3>
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
                <img src="{{ $poster['src'] }}" alt="{{ $poster['titolo'] }}">
                <h3>{{ $poster['titolo'] }}</h3>
            </div>
        @endforeach
    </div>
</div>
@endif