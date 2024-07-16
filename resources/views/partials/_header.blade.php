<header>
    <nav>
        <div id="div-logo">
            <a href="{{$MainLogo['href']}}">
                <img src="{{Vite::asset($MainLogo['src'])}}" alt="{{$MainLogo['alt']}}" id="img-logo">
            </a>
        </div>

        <div id="ul-header">
            <ul>
                @foreach ($UlHeaderLinks as $link )
                    <li>
                        <a href="/{{$link['title']}}" class="{{$link['active'] ? 'active' : ''}}">
                            {{ $link['title'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>
