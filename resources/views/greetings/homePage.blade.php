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
                <ul class="nav navbar-nav navbar-right">
                    @foreach($navItems as $navItem)
                            <li class=""><a id="{{ $navItem['id'] }}" href="{{ $navItem['href'] }}" role="button" class="{{ $navItem['class'] }}" data-toggle="{{ $navItem['data'] }}">{{ $navItem['title'] }}</a></li>
                    @endforeach
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
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
            <a id="account-login" href="#modal-container-signup" role="button" class="btn btn-block" data-toggle="modal">Start your Free trial today!</a>
        </div>
    </div>
@stop

@section('youtubeVideos')
    @foreach($videos as $video)
        <div class="video-container col-xs-12 col-md-4">
            <h3>{{ $video['title'] }}</h3>
            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/{{ $video['id'] }}" frameborder="0" allowfullscreen></iframe>
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
    <div id="view-packages">
        Packages
    </div>
@stop

@section('footer')

@stop