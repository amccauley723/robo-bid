@extends('accountWrapper')

@section('content')

    <h1>Add New Shirt</h1>
    {!! Form::open(['url' => 'articles']) !!}
        @include('articles._form', ['submitButtonText' => 'Create Account'])
    {!! Form::close() !!}

    @include('errors.list')
@stop
