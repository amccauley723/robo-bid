@extends('app')

@section('header')
    {{ $good }}
@stop

@section('content')
    @if ($bad == 'dogs')
        {{ $bad }}
    @else
        {{ $bad }} {{ $bad }}
    @endif
@stop

@section('footer')
    {{ $good }}
@stop