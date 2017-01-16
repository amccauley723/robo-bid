@extends('accountsTemplate')

@section('content')
    <h2>All Accounts</h2>
    <hr>
    <div class="list-group">
    @foreach($accounts as $account)
            <div class="list-group-item"> <a href="accounts/{{$account->id}}">{{ $account->business_name }}</a> -  {{ $account->created_at->diffForHumans() }}</div>
    @endforeach
    </div>
@stop
