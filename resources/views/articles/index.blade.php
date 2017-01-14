@extends('accountWrapper')

@section('articles')
    <h1>Articles</h1>
    @foreach($articles as $article)
        <article>
            <a href=""><h2>{{ $article['title'] }}</h2></a>
            <p>{{ $article['body'] }}</p>
        </article>
    @endforeach
@stop()

