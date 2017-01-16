@extends('accountsTemplate')

@section('content')
    <h2>Hello, {{ $user->first_name }}</h2>
    <hr>
    <table class="table">
        <tbody class="table-striped">
            <tr>
                <td>Business</td>
                <td>{{ $user->business_name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $user->email }}</td>
            </tr>
        </tbody>
    </table>
@stop