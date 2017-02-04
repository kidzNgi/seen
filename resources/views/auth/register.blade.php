@extends('layouts.site')

@section('content')
<div class="container" style="padding-top: 100px; ">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                         <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">ชื่อ</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('firt_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">นามสกุล</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('first_name_eng') ? ' has-error' : '' }}">
                            <label for="first_name_eng" class="col-md-4 control-label">Firstname</label>

                            <div class="col-md-6">
                                <input id="first_name_eng" type="text" class="form-control" name="first_name_eng" value="{{ old('first_name_eng') }}" required autofocus>

                                @if ($errors->has('first_name_eng'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name_eng') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name_eng') ? ' has-error' : '' }}">
                            <label for="last_name_eng" class="col-md-4 control-label">Lastname</label>

                            <div class="col-md-6">
                                <input id="last_name_eng" type="text" class="form-control" name="last_name_eng" value="{{ old('last_name_eng') }}" required autofocus>

                                @if ($errors->has('last_name_eng'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name_eng') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('education') ? ' has-error' : '' }}">
                            <label for="education" class="col-md-4 control-label">ประวัติการศึกษา</label>

                            <div class="col-md-6">
                                <input id="education" type="text" class="form-control" name="education" value="{{ old('education') }}" required autofocus>

                                @if ($errors->has('education'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('education') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                            <label for="tel" class="col-md-4 control-label">เบอร์โทร</label>

                            <div class="col-md-6">
                                <input id="tel" type="text" class="form-control" name="tel" value="{{ old('tel') }}" autofocus>

                                @if ($errors->has('tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tel_in') ? ' has-error' : '' }}">
                            <label for="tel_in" class="col-md-4 control-label">เบอร์โทร-ภายใน</label>

                            <div class="col-md-6">
                                <input id="tel_in" type="text" class="form-control" name="tel_in" value="{{ old('tel_in') }}" autofocus>

                                @if ($errors->has('tel_in'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel_in') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('research_gate') ? ' has-error' : '' }}">
                            <label for="research_gate" class="col-md-4 control-label">ResearchGate</label>

                            <div class="col-md-6">
                                <input id="research_gate" type="text" class="form-control" name="research_gate" value="{{ old('research_gate') }}" autofocus>

                                @if ($errors->has('research_gate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('research_gate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-4 control-label">รูปโปรไฟล์</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control" name="image">

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
