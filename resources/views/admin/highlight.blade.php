@extends('layouts.site')

@section('content')
<div class="container" style="padding-top: 100px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ตั้งค่ารูป Highlight</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/admin/highlight') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('image1') ? ' has-error' : '' }}">
                            <label for="image1" class="col-md-4 control-label">รูป ที่1</label>

                            <div class="col-md-6">
                                <input id="image1" type="file" class="form-control" name="image1" value="{{ old('image1') }}"  autofocus>
 
                                @if ($errors->has('image1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('image2') ? ' has-error' : '' }}">
                            <label for="image2" class="col-md-4 control-label">รูป ที่2</label>

                            <div class="col-md-6">
                                <input id="image2" type="file" class="form-control" name="image2" value="{{ old('image2') }}" autofocus>
 
                                @if ($errors->has('image2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <div class="form-group{{ $errors->has('image3') ? ' has-error' : '' }}">
                            <label for="image1" class="col-md-4 control-label">รูป ที่3</label>

                            <div class="col-md-6">
                                <input id="image3" type="file" class="form-control" name="image3" value="{{ old('image3') }}"  autofocus>
 
                                @if ($errors->has('image3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    บันทึก
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
