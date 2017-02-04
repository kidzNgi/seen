@extends('layouts.site')
@push('styles')
    <meta name="description" content="คณะวิทยาลัยพลังงานและสิ่งแวดล้อม มหาวิทยาลัยพะเยา">
    <meta name="keywords" content="วิทยาลัยพลังงาน,พลังงาน,มหาวิทยาลัยพะเยา,สิ่งแวดล้อม">
  <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('fonts/PSLOmyimPro-Regular.css')}}">
@endpush
@section('content')
	<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
   <!--      <button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></button> -->
      </ol>
      <div class="carousel-inner" role="listbox">
      @foreach($objs2 as $row)
        <div class="item active">
          <img src="{{asset('images/highlight/'.$row->image1.'')}}" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <!-- <a href="#" style="color:#fff;">
                <p>Note Line</p>
              </a> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="{{asset('images/highlight/'.$row->image2.'')}}" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <!-- <a href="#" style="color:#fff;">
                <p>Note Line</p>
              </a> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="{{asset('images/highlight/'.$row->image3.'')}}" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <!-- <a href="#" style="color:#fff;"> 
                <p>Note Line</p>
              </a> -->
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
    <div class="container marketing">
<div class="row">
                <div class="col-xs-12 col-md-9 boxupdate-boxleft">
                    <div class="boxnews-group">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs text-center" role="tablist">
                        <li role="presentation" class="active"><a href="#allnews" aria-controls="allnews0" role="tab" data-toggle="tab">ข่าว-กิจกรรม</a></li>
                                                  @if(Auth::check())
                                                              <li role="presentation"><a href="#notice1" aria-controls="notice1" role="tab" data-toggle="tab">งานธุรการและสารบรรณ</a></li>

                                                              <li role="presentation"><a href="#notice2" aria-controls="notice2" role="tab" data-toggle="tab">งานบริการศึกษา</a></li>

                                                              <li role="presentation"><a href="#notice3" aria-controls="notice3" role="tab" data-toggle="tab">วิจัยและบริการวิชาการ</a></li>

                                                              <li role="presentation"><a href="#notice4" aria-controls="notice4" role="tab" data-toggle="tab">งานกิจการนิสิต</a></li>
                                                  @endif

                            
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="allnews">
                                <div class="row ">
                                 @foreach($objs as $row)

                                      <div class="col-sm-3">
                                               <a href="{{url('news/'.$row->id)}}" class="boxnews" target="_blank">
                                                    <div class="thumb-boxnews">
                                                       <img src="{{asset('images/news/'.$row->image1.'')}}" class="img-responsive" alt="">
                                                    </div>
                                                    <div class="titlenews" style="word-wrap: break-word;">{{$row->title}}</div>
                                                    <div class="lognews"><span class="label label-boxnews">patch</span>19-Jan-2017</div>
                                                    <div class="content-boxnews" style="word-wrap: break-word;">
                          <p><span style="font-family:tahoma,geneva,sans-serif">{{$row->detail}}...</span></p>
                          </div>
                                                </a>
                                        </div>

                                  @endforeach

                                 </div>
                                 <div class="row">
                                <div class="col-xs-12 text-center">
                                      <hr>
                                    <a href="{{url('news')}}" class="btn btn-readmore-boxnews">ดูทั้งหมด</a>
                                    <script>
                                    $('#loading-readmore-boxnews').on('click', function() {
                                        var $btn = $(this).button('loading')
                                             //business logic...
                                        $btn.button('reset')
                                    })
                                    </script>
                                </div>
                                </div>
                            </div>


                            <!-- งานธุรการและสารบรรณ -->
                            <div role="tabpane2" class="tab-pane fade in" id="notice1">
                                <div class="row ">
                                

                                 </div>
                                 <div class="row">
                                <div class="col-xs-12 text-center">

                                    <a href="{{url('news')}}" class="btn btn-readmore-boxnews">ดูทั้งหมด</a>
                                    <script>
                                    $('#loading-readmore-boxnews').on('click', function() {
                                        var $btn = $(this).button('loading')
                                             //business logic...
                                        $btn.button('reset')
                                    })
                                    </script>
                                </div>
                                </div>
                            </div>

                            <!-- งานบริการศึกษา -->
                            <div role="tabpanel" class="tab-pane fade in" id="notice2">
                                <div class="row ">
                                

                                 </div>
                                 <div class="row ">
                                <div class="col-xs-12 text-center">

                                    <a href="{{url('news')}}" class="btn btn-readmore-boxnews">ดูทั้งหมด</a>
                                    <script>
                                    $('#loading-readmore-boxnews').on('click', function() {
                                        var $btn = $(this).button('loading')
                                             //business logic...
                                        $btn.button('reset')
                                    })
                                    </script>
                                </div>
                                </div>
                            </div>

                            <!-- วิจัยและบริการวิชาการ -->
                            <div role="tabpanel" class="tab-pane fade in" id="notice3">
                                <div class="row ">
                                

                                 </div>
                                 <div class="row ">
                                <div class="col-xs-12 text-center">

                                    <a href="{{url('news')}}" class="btn btn-readmore-boxnews">ดูทั้งหมด</a>
                                    <script>
                                    $('#loading-readmore-boxnews').on('click', function() {
                                        var $btn = $(this).button('loading')
                                             //business logic...
                                        $btn.button('reset')
                                    })
                                    </script>
                                </div>
                                </div>
                            </div>

                            <!-- งานกิจการนิสิต -->
                            <div role="tabpanel" class="tab-pane fade in" id="notice4">
                                <div class="row ">
                                

                                 </div>
                                 <div class="row ">
                                <div class="col-xs-12 text-center">

                                    <a href="{{url('news')}}" class="btn btn-readmore-boxnews">ดูทั้งหมด</a>
                                    <script>
                                    $('#loading-readmore-boxnews').on('click', function() {
                                        var $btn = $(this).button('loading')
                                             //business logic...
                                        $btn.button('reset')
                                    })
                                    </script>
                                </div>
                                </div>
                            </div>

                                </div>
</div>

                    </div>

                    <div class="col-xs-12 col-md-3 boxupdate-boxright clearfix">
                          <!-- <button class="btn btn-primary"></button> -->
                    </div>
</div><!-- container marketing -->
@endsection
