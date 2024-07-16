<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')


    <title>Document</title>
</head>
<body>
    <div id="container">
        <header>
            <nav>
                <div id="div-logo">
                    <a href="{{$MainLogo['href']}}">
                        <img src="{{$MainLogo['src']}}" alt="{{$MainLogo['alt']}}" id="img-logo">
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

        <main>
            <div id="div-black">
                <section id="jumbotron">
                    <div class="container">
                        <div>
                            Current Series
                        </div>
                    </div>
                </section>
                <section id="black">
                <div id="cards">
                    @foreach ($LiCardsJson as $card)
                    <div id="card">
                        <img src="{{$card['thumb']}}" alt="{{$card['series']}}">
                        <h3>
                            {{$card['series']}}
                        </h3>
                    </div>
                    @endforeach
                </div>
                <div id="button">
                    <button>
                        Load More
                    </button>
                </div>
            </section>
            </div>
            <div id="div-blu">
                <section id="blu">
                <section class="article">
                    <article v-for="article in ArticleImgLinks" :key="article.id">
                        <img :src="article.src" :alt="article.alt">
                        <h2>
                            ***
                        </h2>
                    </article>
                </section>
            </section>
            </div>
        </main>

        <footer>
            <div id="div-bg-img-footer">
                <section id="ul-links">
                <div id="ul">
                    <div>
                        <ul id="dc-comics">
                        <h2>
                            Dc Comics
                        </h2>
                        <li v-for="link in FooterUlLinksDCComics" :key="link.id">
                            <a :href="link.href">
                                ***
                            </a>
                        </li>
                    </ul>

                    <ul id="shop">
                        <h2>
                            Shop
                        </h2>
                        <li v-for="link in FooterUlLinksShop" :key="link.id">
                            <a :href="link.href">
                                ***
                            </a>
                        </li>
                    </ul>

                    </div>

                    <ul id="dc">
                        <h2>
                            Dc
                        </h2>
                        <li v-for="link in FooterUlLinksDC" :key="link.id">
                            <a :href="link.href">
                                ***
                            </a>
                        </li>
                    </ul>
                    <ul id="sites">
                        <h2>
                            Sites
                        </h2>
                        <li v-for="link in FooterUlLinksSites" :key="link.id">
                            <a :href="link.href">
                                ***
                            </a>
                        </li>
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
    </div>

</body>
</html>
