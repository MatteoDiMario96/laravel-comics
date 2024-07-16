@extends('layouts.app')

@section('main-section')
@section('main-content')
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
            <h2>
                Quanti Film in uscita...
            </h2>
            <ul>
                <li>
                    Batman volerà
                </li>
                <li>
                    Robin diventerà batman
                </li>
                <li>
                    Joker presidente
                </li>
                <li>
                    Enigmista prende una decisione
                </li>
            </ul>
        </div>
        <div id="button">
            <button>
                <a href="/SHOP">Shop</a>
            </button>
        </div>
    </section>
    </div>
    <div id="div-blu">
        <section id="blu">
        <section class="article">
            @foreach ($ArticleImgLinks as $article )
            <article>
                <img src="{{Vite::asset($article['src'])}}" alt="{{$article['alt']}}">
                <h2>
                    {{$article['title']}}
                </h2>
            </article>
            @endforeach
        </section>
    </section>
    </div>
</main>
@endsection
@endsection
