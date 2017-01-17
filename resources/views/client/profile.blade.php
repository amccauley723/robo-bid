@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>
                    <div class="panel-body">
                        {{ Auth::user()->name }}
                    </div>
                </div>
            </div>
        </div>
@endsection