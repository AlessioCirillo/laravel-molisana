<header>
    <a href="{{ route('home') }}">
        <img src="{{ asset('img/logo.png')}}" alt="">
    </a>

    <nav>
        <ul>
            <li>
                <a href="{{ route('home') }}">HOME</a>
            </li>
            {{-- <li>
                <a href="{{ route('products') }}">PROUCTS</a>
            </li> --}}
            <li>
                <a href="{{ route('news') }}">NEWS</a>
            </li>
        </ul>
    </nav>
</header>