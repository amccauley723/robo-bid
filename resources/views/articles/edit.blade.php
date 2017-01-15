@extends('accountWrapper')

@section('content')
    <h1>Edit {{ $article->shirtname }}</h1>
    <h1>Add New Shirt</h1>
        {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
            @include('articles._form', ['submitButtonText' => 'Update Shirt'])
        {!! Form::close() !!}
    @include('errors.list')
@stop