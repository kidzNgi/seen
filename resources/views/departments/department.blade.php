@extends('layouts.site')
@push('styles')
<style type="text/css">
    
</style>
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
</style>
@endpush
@section('content')
    <div class="container" style="padding-top: 100px;">
    
    <div class="panel panel-default">
    <div class="panel-heading">{{$department}}</div>
    <div class="panel-body">
    <div class="row">
    @foreach($user as $row)
        <div class="col-sm-12 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="{{asset("images/users/".$row->image)}}" alt="" class="img-rounded img-responsive" style="height: 200;" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>{{$row->first_name.' '.$row->last_name}}</h4>
                        <small>{{$row->first_name_eng.' '.$row->last_name_eng}}
                        </small>
                        <hr style="margin-top: 10;margin-bottom: 10">
                        <p>
                            <span class="glyphicon glyphicon-user"></span> {{$row->position_name}}
                            <br />
                            <span class="glyphicon glyphicon-envelope"></span> {{$row->email}}
                            <br />
                            <span class="glyphicon glyphicon-phone"></span> {{$row->tel}}
                            <br />
                            <span class="glyphicon glyphicon-phone-alt"></span> {{$row->tel_in}}</p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Social</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Twitter</a></li>
                                <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Github</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         @endforeach
      </div>
      </div>
    </div>
</div>
  