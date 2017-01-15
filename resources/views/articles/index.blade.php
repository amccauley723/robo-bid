@extends('accountWrapper')

@section('content')
    <div class="breadcrumb"><a href="./articles/create">Add new shirt -></a></div>

    <h1>Shirts</h1>
    @foreach($articles as $article)
        <article>
            <a href="{{ url('articles', $article->id) }}"><h2>{{ $article->shirtname }}</h2></a>
            <p>{{ $article->size }}</p>
            <p>{{ $article->color }}</p>
            <p>{{ $article->price }}</p>
            <p>{{ $article->published_at->diffForHumans() }}</p>
        </article>
    @endforeach
@stop()

