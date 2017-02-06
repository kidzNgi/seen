<div class="row">
<div class="col-sm-offset-1 col-sm-10">
		<form class="form-horizontal" action="{{url('Personal/'.$value)}}" method="post">
		{{csrf_field()}}
			<div class="panel panel-default">
				<div class="panel-heading" >บุคลากร
				<p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">MENU</button>
          		</p></div>
				<div class="panel-body" style="padding: 2em;">
				<div class="row">
				 	
<!-- 					<div class="table-responsive">
<table class="table table-striped">
	<tbody> -->
						@for($i=0;$i<sizeof($users);$i++)
<!-- 							<tr>
	<td style="margin-left: 20px;"> -->
	<div class="col-sm-6">
	<div class="form-group">
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
                   </div>
            </div>
                <div class="col-md-6">
<!-- 							   	</td>
<td> -->
							   	<div class="form-group">
                            		
                            		<select class="form-control" id="position_id[]" name="position_id[]" >
							   				<option value="">เลือกตำแหน่ง</option>
							   		   @foreach($position as $pos)
										    <option value=' {{$pos->id}}' 
										    @foreach($staff as $sta)
										    	@if($users[$i]->user_id==$sta->user_id)
										   		 @if($pos->id==$sta->position_id)
										    		selected
										    		@endif
										    	@endif
											 @endforeach
										    >
										    {{$pos->position_name}}
										    </option>
									    @endforeach
									 </select>

                                	
                            		</div>
                        		</div>
               				
<!-- 							   	</td>
							    
							
							 </tr> -->
							 @endfor
<!-- 						</tbody>
					</table> -->
</div>
				</div>
				
			
			<div class="panel-footer" style="text-align: center;">
				<input type="hidden" name="num" id="num" value="{{sizeof($users)}}">
				<button class="btn btn-primary" type="submit">ตกลง</button>
			</div>
		</div>
		</form>
		</div>
</div>