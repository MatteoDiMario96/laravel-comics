@extends('layouts.app')

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
            @foreach ($LiCardsJson as $article )
            <div id="card">
                <article>
                    <img src="{{$article['thumb']}}" alt="{{$article['series']}}">
                    <h2>
                        {{$article['series']}}
                    </h2>
                </article>
            </div>
            @endforeach
        </div>
        <div id="button">
            <button>
                <a href="/SHOP">Load More</a>
            </button>
        </div>
    </section>
    </div>
    <div id="div-blu">
        <section id="blu">
        <section class="article">
            @foreach ($ArticleImgLinks as $article )
            <article class="book-article">
                <img src="{{$article['src']}}" alt="{{$article['alt']}}">
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



