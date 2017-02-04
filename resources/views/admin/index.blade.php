@extends('layouts.site')
@section('content')
	<div class="container" style="padding-top: 100px;">
		    <div class="row">
		        <div class="col-md-8 col-md-offset-2">
		            <div class="panel panel-default">
		            	<div class="panel-heading">ผู้ดูแลระบบ</div>
						<div class="panel-body">
							<ul>
								<li><a href="{{url('admin/highlight')}}">ตั้งค่ารูป Highlight</a></li>
								<li><a href="{{url('news/create')}}">สร้างข่าว</a></li>
							</ul>
						</div>
		            </div>
		        </div>
		    </div>    
	</div>
@endsection