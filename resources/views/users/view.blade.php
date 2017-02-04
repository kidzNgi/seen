@extends('layouts.site')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/users.css')}}">.
@endpush
@section('content')
<div class="container" style="margin-top: 100px;">
<div class="row">

<section>

<div class="container" style="margin-top: 30px;">
<div class="profile-head">
<div class="col-md-4 col-sm-4 col-xs-12">
<img src="{{asset("images/users/".$objs->image)}}" class="img-responsive" />
<h6>{{$objs->first_name.' '.$objs->last_name}}</h6>
</div><!--col-md-4 col-sm-4 col-xs-12 close-->


<div class="col-md-6 col-sm-6 col-xs-12">
<h5>{{$objs->first_name.' '.$objs->last_name}}</h5>
<p>{{$objs->first_name_eng.' '.$objs->last_name_eng}}</p>
<hr>
<ul>
<li><span class="glyphicon glyphicon-phone"></span> <a href="#" title="call">{{$objs->tel}}</a></li>
<li><span class="glyphicon glyphicon-envelope"></span><a href="#" title="mail">{{$objs->email}}</a></li>

</ul>


</div><!--col-md-8 col-sm-8 col-xs-12 close-->

</div><!--profile-head close-->
</div><!--container close-->


<div id="sticky" class="container">
    
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-menu" role="tablist">
      <li class="active">
          <a href="#profile" role="tab" data-toggle="tab" >
              <i class="fa fa-male"></i> ข้อมูลส่วนตัว
          </a>
      </li>
      <li><a href="#change" role="tab" data-toggle="tab">
          <i class="fa fa-key"></i> แก้ไข ข้อมูลส่วนตัว
          </a>
      </li>

      <li><a href="#published" role="tab" data-toggle="tab">
          <i class="fa fa-key"></i> ผลงาน
          </a>
      </li>
    </ul><!--nav-tabs close-->
    
    <!-- Tab panes -->
    <div class="tab-content">
    <div class="tab-pane fade active in" id="profile">
    <div class="container">
<br clear="all" />
<div class="row">
<div class="col-md-12">
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"> 
@if ($errors->has('password'))
                                  <div class="col-md-offset-1 col-md-10">
                                    <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                  </div>
@endif
@if ($message = Session::get('success'))
    <div class="col-md-offset-1 col-md-10">
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
    </div>
    </div>
    @endif
@if (count($errors) > 0)
<div class="col-md-offset-1 col-md-10">
  <div class="alert alert-danger alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Whoops!</strong>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  </div>
@endif
</div>
    
</div><!--col-md-12 close-->


<div class="col-md-6">

<div class="table-responsive responsiv-table">
  <table class="table bio-table">
      <tbody>
     <tr>      
        <td>ชื่อ</td>
        <td>: {{$objs->first_name}}</td> 
     </tr>
     <tr>    
        <td>นามสกุล</td>
        <td>: {{$objs->last_name}}</td>       
     </tr>
     <tr>      
        <td>Firstname</td>
        <td>: {{$objs->first_name_eng}}</td> 
     </tr>
     <tr>    
        <td>Lastname</td>
        <td>: {{$objs->last_name_eng}}</td>       
     </tr>
    <tr>
        <td>Position</td>
        <td>: {{$objs->privileges_name}}</td> 
     </tr>
     

    </tbody>
  </table>
  </div><!--table-responsive close-->
</div><!--col-md-6 close-->

<div class="col-md-6">

<div class="table-responsive responsiv-table">
  <table class="table bio-table">
      <tbody>
      
     <tr>  
        <td>Email</td>
        <td>: {{$objs->email}}</td> 
     </tr>
     <tr>    
        <td>เบอร์โทร.</td>
        <td>: {{$objs->tel}}</td>       
     </tr>
     <tr>
        <td>เบอร์โทร. ภายใน</td>
        <td>: {{$objs->tel_in}}</td> 
     </tr>
    <tr>
        <td>ResearchGate</td>
        <td>: {{$objs->research_gate}}</td> 
     </tr>
     <tr>
        <td>ประวัติการศึกษา</td>
        <td>:{{$objs->education}}</td> 
     </tr>

    </tbody>
  </table>
  </div><!--table-responsive close-->
</div><!--col-md-6 close-->

</div><!--row close-->




</div><!--container close-->
</div><!--tab-pane close-->
      
      
@include('users.EditProfile')
<div class="tab-pane fade" id="published">

<div class="row">
<div class="col-sm-12">
<h2 class="register">Portfolio</h2>
</div><!--col-sm-12 close-->
<div class="col-md-12">
      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#Published" id='pub'>ผลงานตีพิมพ์</button>
      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#Book">ตำราหรือหนังสือ</button>
      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#Project">ผลงานวิชาการรับใช้สังคม</button>
</div>
</div><!--row close-->
<br />
<div class="row">
<div id="Published" class="collapse">
@include('users.Published')
</div>
<div id="Book" class="collapse">
@include('users.book')
</div>
</div><!--row close-->
   
</div><!--tab-pane close-->
</div><!--tab-content close-->
</div><!--container close-->

</section><!--section close-->
<br>
</div>
</div>
@endsection
