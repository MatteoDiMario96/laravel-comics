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
                <h2>
                    Vieni a scoprire i nuovi fumetti
                </h2>
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
                <article>
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
