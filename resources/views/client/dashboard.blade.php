@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <h1>Dashboard</h1>
                <hr>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="panel panel-dark-blue">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3"><i class="fa fa-user fa-5x"></i></div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">6</div>
                                <div class="">Last 24 hours</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer"><span class="pull-left">View Details</span> <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="panel panel-light-blue">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3"><i class="fa fa-user fa-5x"></i></div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">12</div>
                                <div class="">Last 7 day</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer"><span class="pull-left">View Details</span> <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a></div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="panel panel-dark-gray">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3"><i class="fa fa-user fa-5x"></i></div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">6</div>
                                <div class="">Last 30 days</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer"><span class="pull-left">View Details</span> <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Messages</div>
                    <div class="panel-body">
                        {{ Auth::user()->name }}
                    </div>
                </div>
            </div>
        </div>
@endsection
