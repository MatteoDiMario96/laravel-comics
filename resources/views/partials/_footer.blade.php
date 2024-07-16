
<footer>
    <div id="div-bg-img-footer">
        <section id="ul-links">
        <div id="ul">
            <div>
                <ul id="dc-comics">
                <h2>
                    Dc Comics
                </h2>
                @foreach ($FooterUlLinksDCComics as $link)
                <li>
                    <a href="{{$link['href']}}">
                        {{$link['title']}}
                    </a>
                </li>
                @endforeach
            </ul>

            <ul id="shop">
                <h2>
                    Shop
                </h2>
                @foreach ($FooterUlLinksShop as $link )
                <li>
                    <a href="{{$link['href']}}">
                        {{$link['title']}}
                    </a>
                </li>
                @endforeach
            </ul>

            </div>

            <ul id="dc">
                <h2>
                    Dc
                </h2>
                @foreach ($FooterUlLinksDC as $link )
                <li>
                    <a href="{{$link['href']}}">
                        {{$link['title']}}
                    </a>
                </li>
                @endforeach
            </ul>
            <ul id="sites">
                <h2>
                    Sites
                </h2>
                @foreach ($FooterUlLinksSites as $link)
                <li>
                    <a href="{{$link['href']}}">
                        {{$link['title']}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div id="img">

        </div>
    </section>
    </div>

    <nav id="footer">
        <div id="div-container-footer">
                <button>
                    Signup-Now
                </button>

            <section id="sign-up-social">
                <div id="follow_us">
                    <h2>
                    Follow us
                    </h2>
                </div>
                <div id="favicon">
                    <a href="#">
                        <img src="{{Vite::asset('/resources/img/footer-facebook.png')}}" alt="Facebook link">
                    </a>
                    <a href="#">
                        <img src="{{Vite::asset('/resources/img/footer-twitter.png')}}" alt="Twitter link">
                    </a>
                    <a href="#">
                        <img src="{{Vite::asset('/resources/img/footer-youtube.png')}}" alt="YouTube link">
                    </a>
                    <a href="#">
                        <img src="{{Vite::asset('/resources/img/footer-pinterest.png')}}" alt="Pinterest link">
                    </a>
                    <a href="#">
                        <img src="{{Vite::asset('/resources/img/footer-periscope.png')}}" alt="Periscope link">
                    </a>
                </div>
            </section>
        </div>

    </nav>

</footer>
