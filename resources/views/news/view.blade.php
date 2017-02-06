@extends('layouts.site')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/viewnews.css')}}">
@endpush
@section('content')
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
<!-- 				  @//foreach($objs as $row)	 -->
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="{{asset('images/news/'.$objs->image1)}}" /></div>
              @if($objs->image2!='')
						  <div class="tab-pane" id="pic-2"><img src="{{asset('images/news/'.$objs->image2)}}" /></div>
              @endif
              @if($objs->image3!='')
						  <div class="tab-pane" id="pic-3"><img src="{{asset('images/news/'.$objs->image3)}}" /></div>
              @endif
              @if($objs->image4!='')
						  <div class="tab-pane" id="pic-4"><img src="{{asset('images/news/'.$objs->image4)}}" /></div>
              @endif
              @if($objs->image5!='')
						  <div class="tab-pane" id="pic-5"><img src="{{asset('images/news/'.$objs->image5)}}" /></div>
              @endif
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{asset('images/news/'.$objs->image1)}}" /></a></li>
						  @if($objs->image2!='')
              <li><a data-target="#pic-2" data-toggle="tab"><img src="{{asset('images/news/'.$objs->image2)}}" /></a></li>
              @endif
              @if($objs->image3!='')
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="{{asset('images/news/'.$objs->image3)}}" /></a></li>
              @endif
              @if($objs->image4!='')
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="{{asset('images/news/'.$objs->image4)}}" /></a></li>
              @endif
              @if($objs->image5!='')
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="{{asset('images/news/'.$objs->image5)}}" /></a></li>
              @endif
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$objs->title}}</h3>
						<div class="rating">

	

							<span class="review-no"><i class="glyphicon glyphicon-calendar"></i> {{date("Y-m-d", strtotime($objs->created_at))}} 
							<i class="glyphicon glyphicon-time"></i> {{date("H:m", strtotime($objs->created_at))}}</span>
						</div>
						<p class="product-description">{!!$objs->detail!!}</p>
            @if(Auth::check())
						@if(Auth::user()->privileges_name=='ผู้ดูแลระบบ')
						<h5 class="colors">manage:
							<button class="add-to-cart btn btn-warning" type="button" style="margin-left: 10px;"><span class="glyphicon glyphicon-edit"></span></button>

              <button class="add-to-cart btn btn-danger" type="button" style="margin-left: 10px;"><span class="glyphicon glyphicon-remove"></span></button>
						</h5>
            @endif
            @endif
					</div>
<!-- 				  @//endforeach -->
				</div>
			</div>
		</div>
	</div>
@endsection