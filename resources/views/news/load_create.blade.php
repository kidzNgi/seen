        <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">เขียนข่าว</div>
                    <div class="panel-body">
                            <form class="form-horizontal" action="{{url('news')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="control-label col-sm-2">หัวข้อข่าว</label>

                            <div class="col-sm-10">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('detail') ? ' has-error' : '' }}">
                            <label for="detail" class="control-label col-sm-2">เนื้อหาข่าว</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" name="detail" id="detail">{{ old('detail') }}</textarea>

                                @if ($errors->has('detail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('detail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('image1') ? ' has-error' : '' }}">
                            <label for="image1" class="control-label col-sm-2">รูปภาพ</label>

                            <div class="col-sm-10">
                                <input id="image1" type="file" class="form-control" name="image1" value="{{ old('image1') }}" required autofocus>

                                @if ($errors->has('image1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('image2') ? ' has-error' : '' }}">
                            <label for="image2" class="control-label col-sm-2">รูปภาพ</label>

                            <div class="col-sm-10">
                                <input id="image2" type="file" class="form-control" name="image2" value="{{ old('image2') }}" autofocus>

                                @if ($errors->has('image2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('image3') ? ' has-error' : '' }}">
                            <label for="image3" class="control-label col-sm-2">รูปภาพ</label>

                            <div class="col-sm-10">
                                <input id="image3" type="file" class="form-control" name="image3" value="{{ old('image3') }}" autofocus>

                                @if ($errors->has('image3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><div class="form-group{{ $errors->has('image4') ? ' has-error' : '' }}">
                            <label for="image4" class="control-label col-sm-2">รูปภาพ</label>

                            <div class="col-sm-10">
                                <input id="image4" type="file" class="form-control" name="image4" value="{{ old('image4') }}" autofocus>

                                @if ($errors->has('image4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image4') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><div class="form-group{{ $errors->has('image5') ? ' has-error' : '' }}">
                            <label for="image5" class="control-label col-sm-2">รูปภาพ</label>

                            <div class="col-sm-10">
                                <input id="image5" type="file" class="form-control" name="image5" value="{{ old('image5') }}" autofocus>

                                @if ($errors->has('image5'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image5') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-offset-5 col-sm-7">
                                <button type="submit" class="btn btn-primary">บันทึก</button>
                        </div>

                            
                        </form>
                    </div>
                </div>
</div>