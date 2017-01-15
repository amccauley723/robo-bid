@extends('accountsTemplate')

@section('content')

    <h1>Sign Up Now!</h1>
    {!! Form::open(['action' => 'AccountsController@store']) !!}
        @include('accounts._form', ['submitButtonText' => 'Create Account Now'])
    {!! Form::close() !!}

    @include('errors.list')
@stop
