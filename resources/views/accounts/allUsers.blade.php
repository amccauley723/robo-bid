@extends('accountsTemplate')

@section('content')
    <h2>All Accounts</h2>
    <hr>
    <div class="list-group">
    @foreach($accounts as $account)
            <div class="list-group-item"> <a href="">{{ $account->business_name }}</a> -  {{ $account->created_at->diffForHumans() }}</div>
    @endforeach
    </div>
@stop
