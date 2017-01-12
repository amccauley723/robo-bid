@extends('app')

@section('navBar')
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">{{ $callToAction }}</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                {{--<ul class="nav navbar-nav">--}}
                    {{--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>--}}
                    {{--<li><a href="#">Link</a></li>--}}
                    {{--<li class="dropdown">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="#">Action</a></li>--}}
                            {{--<li><a href="#">Another action</a></li>--}}
                            {{--<li><a href="#">Something else here</a></li>--}}
                            {{--<li role="separator" class="divider"></li>--}}
                            {{--<li><a href="#">Separated link</a></li>--}}
                            {{--<li role="separator" class="divider"></li>--}}
                            {{--<li><a href="#">One more separated link</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<form class="navbar-form navbar-left">--}}
                    {{--<div class="form-group">--}}
                        {{--<input type="text" class="form-control" placeholder="Search">--}}
                    {{--</div>--}}
                    {{--<button type="submit" class="btn btn-default">Submit</button>--}}
                {{--</form>--}}
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    {{--<div id="header-nav-outside">--}}
        {{--<div id="header-nav-inside" class="desktop">--}}
            {{--<div class="header-cta col-md-6">--}}
                {{--{{ $callToAction }}--}}
            {{--</div>--}}
            {{--<nav class="header-navigation col-md-6">--}}
                {{--<ul class="nav nav-pills">--}}
                    {{--@foreach ($navItems as $navItem)--}}
                        {{--<li class="active"><a href="{{ $navItem['link'] }}">{{ $navItem['title'] }}</a></li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</nav>--}}
        {{--</div>--}}
    {{--</div>--}}
@stop

@section('logo')
    <div class="main-logo-image col-md-6 col-md-offset-3">
        <img src="{{ $logoImage }}">
    </div>
@stop

@section('content')
    <div class="intro-area clearfix">
        <div class="intro-copy col-md-8">
            {{ $introCopy }}
        </div>
        <div class="start-account-button col-md-4">
            <button class="btn">{{ $startAccountButton }}</button>
        </div>
    </div>
@stop

@section('youtubeVideos')
    @foreach($videos as $video)
        <div class="video-container col-xs-12 col-md-4">
            <h3>{{ $video['title'] }}</h3>
            <iframe width="300" height="169" src="https://www.youtube.com/embed/{{ $video['id'] }}" frameborder="0" allowfullscreen></iframe>
            <p>{{ $video['desc'] }}</p>
        </div>
    @endforeach
@stop

@section('featuresList')
    <div class="features-list-items">
        <ul class="list-group borderless">
            @foreach ($featuresList as $featuresListItem)
                <li class="list-group-item col-md-4 "><span class="glyph-pad glyphicon glyphicon-star"></span> {{ $featuresListItem }}</li>
            @endforeach
        </ul>
    </div>
@stop

@section('signUpForm')
    <div class="signup-form col-md-12">
        <form id="signup-form">
            @foreach($formFields as $formField)
                <div class="form-group">
                    <label for="{{ $formField['id'] }}">{{ $formField['placeholder'] }}</label>
                    <input id="{{ $formField['id'] }}" class="form-control" placeholder="{{ $formField['placeholder'] }}" type="{{ $formField['type'] }}" title="{{ $formField['placeholder'] }}" {{ $formField['required'] }}>
                </div>
            @endforeach
            <button class="btn" type="submit">Sign Up</button>
        </form>
    </div>
@stop

@section('featuresGrid')

@stop

@section('footer')

@stop