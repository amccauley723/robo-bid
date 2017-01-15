@extends('accountWrapper')

@section('content')
    <h2>Shirts</h2>
    <h3>{{ $article->shirtname }}</h3>
    <p>{{ $article->color }}</p>
    <p>{{ $article->size }}</p>
    <p>{{ $article->price }}</p>
@stop