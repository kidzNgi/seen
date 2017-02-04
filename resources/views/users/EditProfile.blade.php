<div class="tab-pane fade" id="change">
<div class="container fom-main">
<div class="row">
<div class="col-sm-12">
<h2 class="register">Edit Your Profile</h2>
</div><!--col-sm-12 close-->

</div><!--row close-->
<br />
<div class="row">

<form class="form-horizontal main_form text-left" action="{{url('Profile/'.$objs->id)}}" method="post"  id="contact_form" enctype="multipart/form-data">
<fieldset>
{{method_field('put')}}
{{csrf_field()}}
<input type="hidden" name="username" value='{{$objs->username}}'>
<div class="form-group col-md-12">
  <label class="col-md-10 control-label">ชื่อ</label>  
  <div class="col-md-12 inputGroupContainer">
  <div class="input-group">
  <input  name="f_name" value="{{$objs->first_name}}" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group col-md-12">
  <label class="col-md-10 control-label" >นามสกุล</label> 
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <input name="l_name" value="{{$objs->last_name}}" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group col-md-12">
  <label class="col-md-10 control-label">Firstname</label>  
  <div class="col-md-12 inputGroupContainer">
  <div class="input-group">
  <input  name="f_name_eng" value="{{$objs->first_name_eng}}" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group col-md-12">
  <label class="col-md-10 control-label" >Lastname</label> 
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <input name="l_name_eng" value="{{$objs->last_name_eng}}" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group col-md-12">
  <label class="col-md-10 control-label">E-Mail</label>  
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <input name="email" value="{{$objs->email}}" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group col-md-12">
  <label class="col-md-10 control-label" >ประวัติการศึกษา</label> 
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <input name="education" value="{{$objs->education}}" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group col-md-12">
  <label class="col-md-10 control-label">เบอร์โทร. #</label>  
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <input name="phone" value="{{$objs->tel}}" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       
<div class="form-group col-md-12">
  <label class="col-md-10 control-label">เบอร์โทร. ภายใน #</label>  
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
  <input name="phone_in" value="{{$objs->tel_in}}" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
 <div class="form-group col-md-12">
  <label class="col-md-10 control-label">ResearchGate</label>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
            <input name="research_gate" value="{{$objs->research_gate}}" class="form-control" type="text">
  </div>
  </div>
</div>


<div class="form-group col-md-12{{ $errors->has('password') ? ' has-error' : '' }}">
  <label class="col-md-10 control-label">Choose Password</label>  
  <div class="col-md-12 inputGroupContainer">
  <div class="input-group">
  <input  name="password" placeholder="Choose Password" class="form-control"  type="password">
    </div>
    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
  </div>
</div>



<div class="form-group col-md-12">
  <label class="col-md-10 control-label">Confiram Password</label>  
  <div class="col-md-12 inputGroupContainer">
  <div class="input-group">
  <input  name="password_confirmation" placeholder="Confiram Password" class="form-control"  type="password">
    </div>
  </div>
</div>



<!-- upload profile picture -->
	<div class="col-md-12 text-left">
	<div class="uplod-picture">
	<span class="btn btn-default uplod-file">
	    Upload Photo <input type="file" name="image"/>
	</span>
	</div><!--uplod-picture close-->
	</div><!--col-md-12 close-->
<!-- Button -->
<div class="form-group col-md-10">
  <div class="col-md-6">
    <button type="submit" class="btn btn-warning submit-button" >Save</button>
  </div>
</div>
</fieldset>
</form>
</div><!--row close-->
</div><!--container close -->          
</div><!--tab-pane close-->