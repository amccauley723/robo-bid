@extends('app')

@section('content')
    <div class="row">
        <div class="main-logo-image col-md-6 col-md-offset-3 centered">
            <img width="70%" src="https://www.robo-bid.com/img/animated_logo.gif">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                @if(Auth::guest())
                    <h2>
                        Lead management just got a lot easier!
                    </h2>
                    <p>
                        A RoboBID™ form is the smartest and most efficient investment you can make for your business! Get all your leads and bids in one easy-to-use, organized interface. It\'s like having a free assistant on the clock 24/7.
                    </p>
                    <p>
                        <a class="btn btn-robo btn-large" href="/register">Start your FREE trial now!</a>
                    </p>
                @else
                    <h2>
                        Earn a free month!
                    </h2>
                    <p>
                        Help spread the news by recommending RoboBID™ to a friend and get a $20 credit on your account!
                    </p>
                    <p>
                        <a class="btn btn-robo btn-large" href="/register">Share with friends now!</a>
                    </p>
                @endif
            </div>
        </div>
    </div>
    <div class="row videos">
        <div class="col-sm-6">
            <h2>Just paste your form!</h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/GacD0tF7GBA"></iframe>
            </div>
        </div>

            <div class="col-sm-6">
                <h2>Provide Online Estimates</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/8uT2CfAfgXA"></iframe>
                </div>
            </div>
    </div>
    <div class="features-list-items">
        <ul class="list-group borderless">
            @foreach ($featuresList as $featuresListItem)
                <li class="list-group-item col-md-4 featured-list-item borderless"><span class="glyph-pad glyphicon glyphicon-star"></span> {{ $featuresListItem }}</li>
            @endforeach
        </ul>
    </div>
@stop
