@extends('app')

@section('content')
    <h1>Account Login</h1>
    @foreach($username as $user)
    <p>Hello, {{$user}}</p>
    @endforeach
@stop