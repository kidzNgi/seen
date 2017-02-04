@extends('layouts.site')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/allnews.css')}}">
@endpush
@section('content')
  <div class="container" style="padding-top: 100px;">

        <div class="panel panel-default">
          <div class="panel-heading">ข่าวสาร</div>
          <div class="panel-body">
          @foreach($news as $row)
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <a href="{{url('news/'.$row->id)}}">
                            <img src="{{asset('images/news/'.$row->image1.'')}}" class="img-responsive img-box img-thumbnail"> 
                        </a>
                    </div> 
                    <div class="col-xs-12 col-sm-9 col-md-9">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="row-picture">

                                        <img class="circle img-thumbnail img-box" src="{{asset('images/users/'.$row->imageUser.'')}}" alt="sintret">
  
                                </div>
                                <div class="row-content">
                                    <div class="list-group-item-heading">

                                            <small>{{$row->username}}</small>

                                    </div>
                                    <small>
                                        <i class="glyphicon glyphicon-time"></i> {{$row->created_at}}
                                        <br>
                                        
                                    </small>
                                </div>
                            </div>
                        </div>
                        <h4><a href="{{url('news/'.$row->id)}}">{{$row->title}}</a></h4>
                        <p>{{$row->detail}}...</p>
                    </div> 
               
                </div>
                 <hr>
            @endforeach
      </div>
      <div class="panel-footer" style="text-align: center;">{{ $news->links() }}</div>
    </div><!-- panel -->

</div>
@endsection
