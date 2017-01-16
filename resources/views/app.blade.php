<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Robo-Bid</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/paperstyles.css">
    <link rel="stylesheet" href="css/site-styles.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="app-header row">
        @yield('navBar')
        @yield('logo')
    </div>
    <div class="app-container row">
        @yield('content')
        @yield('youtubeVideos')
    </div>
    <div class="app-form row">
        @yield('featuresList')
        @yield('signUpForm')
    </div>
    <div class="app-footer row">
        @yield('featuresGrid')
        @yield('footer')
    </div>

    <div class="modal fade" id="modal-container-signup" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Start your FREE trial!
                    </h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['action' => 'AccountsController@store']) !!}
                    @include('accounts._form', ['submitButtonText' => 'Create Account Now'])
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="modal-container-login" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Log into your account.
                    </h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['action' => 'AccountsController@store']) !!}
                    @include('accounts._login', ['submitButtonText' => 'Create Account Now'])
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>