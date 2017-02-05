@extends('layouts.site')
@push('styles')
  <link rel="stylesheet" type="text/css" href="{{asset('css/checkbox.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/offcanvas.css')}}">
@endpush
@section('content')
<style type="text/css">
#card {
  margin-top: 50px;
	
  line-height: 1.5em; } 
</style>
<div class="container">
	<div id="card">
<div class="row row-offcanvas row-offcanvas-right">
	<div class="col-sm-9">
		<form class="form-horizontal" action="{{url('Personal/'.$value)}}" method="post">
		{{csrf_field()}}
			<div class="panel panel-default">
				<div class="panel-heading" >บุคลากร
				<p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">MENU</button>
          		</p></div>
				<div class="panel-body" style="padding: 2em;">
					<div class="table-responsive">
					<table class="table table-striped">
						<tbody>
							<tr>
							@for($i=0;$i<sizeof($users);$i++)
							
								<td style="margin-left: 20px;">
									<div class="checkbox checkbox-success">
									<input type="hidden" name="userid[]" id="userid{{$i}}" value="{{$users[$i]->user_id}}"> 
                        			<input type="hidden" name="personal[]" id="personal{{$i}}" value="{{$users[$i]->personal}}">
                        			<input id="checkbox{{$i}}" name="checkid[]" type="checkbox" value="{{$users[$i]->user_id}}"                  
                        			onclick="Javascript:if(this.checked){document.getElementById('personal{{$i}}').value = 1;}else{document.getElementById('personal{{$i}}').value = 0;}"
                        			@if($users[$i]->personal==1)
										checked
                        			@endif
                        			data-toggle="checkbox">
                        			<label for="checkbox{{$i}}">

                            			{{$users[$i]->first_name .' '.$users[$i]->last_name}}
                        			</label>
                    				</div>
                
							   	</td>
							      @if($i==(sizeof($users)-1))@if($i%2==0)<td></td>@endif @endif
							    @if($i%2!=0)
							    	
							   		 </tr><tr>
							     @endif
							 @endfor
							 </tr>
							
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel-footer" style="text-align: center;">
				<input type="hidden" name="num" id="num" value="{{sizeof($users)}}">
				<button class="btn btn-primary" type="submit">ตกลง</button>
			</div>
		</div>
		</form>
	</div>


    <div class=" col-sm-3 sidebar-offcanvas" id="sidebar">
        <a id='executive' href="{{url('Personal/executive')}}" class="list-group-item">ผู้บริหาร</a>
        <a id='envi' href="{{url('Personal/envi')}}" class="list-group-item">วิศวกรรมสิ่งแวดล้อม</a>
        <a id='sci' href="{{url('Personal/sci')}}" class="list-group-item">วิทยาศาสตร์สิ่งแวดล้อม</a>
        <a id='energy' href="{{url('Personal/energy')}}" class="list-group-item">พลังงานทดแทน</a>
        <a id='office' href="{{url('Personal/office')}}" class="list-group-item">สำนักงาน</a>
      </div>

            </div>
        </div><!--/.sidebar-offcanvas-->

	</div>
</div>
@endsection 
@push('scripts')
<script type="text/javascript">
$(document).ready(function () {
  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
  });

});

</script>
@endpush