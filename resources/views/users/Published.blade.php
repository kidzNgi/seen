
<div class="col-md-12">

<div class="table-responsive">
  <table class="table table-striped">
  	<thead>
  		<tr>
  			<th>No.</th>
  			<th>ประเภทผลงาน</th>
  			<th>ผู้แต่งร่วม</th>
  			<th>ชื่อบทความ</th>
  			<th>งานประชุม/วารสาร</th>
  			<th>ปีที่ตีพิมพ์</th>
  			<th>ฉบับที่/เล่มที่</th>
  			<th>หน้าที่ตีพิมพ์</th>
  			<th>Link(URL)</th>
  			<th>แก้ไข/ลบ</th>
  		</tr>
  	</thead>
    <tbody>
    @foreach($published as $row)
    	<tr>
			<td>{{$i++}}</td>
			<td>{{$row->type_portfolio}}</td>
			<td>{{$row->author_combined}}</td>
			<td>{{$row->article_name}}</td>
			<td>{{$row->conference_journal}}</td>
			<td>{{$row->year_published}}</td>
			<td>{{$row->vol_published}}</td>
			<td>{{$row->publication_duties}}</td>
      <td><a href="{{$row->published_link}}" target="_blank" data-toggle="tooltip" title="{{$row->published_link}}"></a></td>
			<td><button type="button" class="btn btn-warning btn-sm glyphicon glyphicon-edit" 
        data-id="{{$row->publisheds_id}}" data-typepub="{{$row->type_portfolio}}" 
        data-author="{{$row->author_combined}}" data-article="{{$row->article_name}}"
        data-journal="{{$row->conference_journal}}" data-yearpub="{{$row->year_published}}"
        data-volpub="{{$row->vol_published}}" data-pubpage="{{$row->publication_duties}}"
        data-plink="{{$row->published_link}}"
        data-toggle="modal" data-target="#editPublished">
        </button>
        <button type="button" class="btn btn-danger btn-sm glyphicon glyphicon-remove" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();"></button>
       
        </td>
			
    	</tr>
      <form id="delete-form" action="{{ url('Published/'.$row->publisheds_id) }}" method="POST" style="display: none;">
                      {{method_field('DELETE')}}
                      {{ csrf_field() }}
      </form>
  @endforeach
    </tbody>
  </table>
  </div><!--table-responsive close-->
</div><!--col-md-12 close-->
<form class="form-horizontal main_form text-left" action="{{url('addPublished')}}" method="post"  id="contact_form">

<div class="col-md-12"></div>
<div class="col-md-12"><hr><a href="#demo" class="btn btn-primary" data-toggle="collapse">เพิ่มผลงาน</a><hr></div>

{{csrf_field()}}
  <div id="demo" class="collapse">
<input type="hidden" name="userid" value='{{$objs->id}}'>
<div class="form-group col-md-12{{ $errors->has('TypePortfolio') ? ' has-error' : '' }}">
  <label class="col-md-2" for="TypePortfolio">ประเภทผลงาน</label>  
  <div class="col-md-10 inputGroupContainer">
  <div class="input-group">
  <input  name="TypePortfolio" placeholder="ประเภทผลงาน" class="form-control"  type="text" required>
    </div>
    @if ($errors->has('TypePortfolio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('TypePortfolio') }}</strong>
                                    </span>
                                @endif
  </div>
</div>

<div class="form-group col-md-12{{ $errors->has('AuthorCombined') ? ' has-error' : '' }}">
  <label class="col-md-2" for="AuthorCombined">ผู้แต่งร่วม</label>  
  <div class="col-md-10 inputGroupContainer">
  <div class="input-group">
  <input  name="AuthorCombined" placeholder="ผู้แต่งร่วม" class="form-control"  type="text">
    </div>
    @if ($errors->has('AuthorCombined'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('AuthorCombined') }}</strong>
                                    </span>
                                @endif
  </div>
</div>


<div class="form-group col-md-12{{ $errors->has('ArticleName') ? ' has-error' : '' }}">
  <label class="col-md-2" for="ArticleName">ชื่อบทความ</label>  
  <div class="col-md-10 inputGroupContainer">
  <div class="input-group">
  <input  name="ArticleName" placeholder="ชื่อบทความ" class="form-control"  type="text" required>
    </div>
    @if ($errors->has('ArticleName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ArticleName') }}</strong>
                                    </span>
                                @endif
  </div>
</div>

<div class="form-group col-md-12{{ $errors->has('ConferenceJournal') ? ' has-error' : '' }}">
  <label class="col-md-2" for="ConferenceJournal">งานประชุม/วารสาร</label>  
  <div class="col-md-10 inputGroupContainer">
  <div class="input-group">
  <input  name="ConferenceJournal" placeholder="งานประชุม/วารสาร" class="form-control"  type="text">
    </div>
    @if ($errors->has('ConferenceJournal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ConferenceJournal') }}</strong>
                                    </span>
                                @endif
  </div>
</div>

<div class="form-group col-md-12{{ $errors->has('YearPublished') ? ' has-error' : '' }}">
  <label class="col-md-2" for="ConferenceJournal">ปีที่ตีพิมพ์</label>  
  <div class="col-md-10 inputGroupContainer">
  <div class="input-group">
  <input  name="YearPublished" placeholder="ปีที่ตีพิมพ์" class="form-control"  type="number" required>
    </div>
    @if ($errors->has('YearPublished'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('YearPublished') }}</strong>
                                    </span>
                                @endif
  </div>
</div>

<div class="form-group col-md-12{{ $errors->has('VolPublished') ? ' has-error' : '' }}">
  <label class="col-md-2" for="ConferenceJournal">ฉบับที่/เล่มที่</label>  
  <div class="col-md-10 inputGroupContainer">
  <div class="input-group">
  <input  name="VolPublished" placeholder="ฉบับที่/เล่มที่" class="form-control"  type="number" required>
    </div>
    @if ($errors->has('VolPublished'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('VolPublished') }}</strong>
                                    </span>
                                @endif
  </div>
</div>

<div class="form-group col-md-12{{ $errors->has('PublicationDuties') ? ' has-error' : '' }}">
  <label class="col-md-2" for="PublicationDuties">หน้าที่ตีพิมพ์</label>  
  <div class="col-md-10 inputGroupContainer">
  <div class="input-group">
  <input  name="PublicationDuties" placeholder="หน้าที่ตีพิมพ์" class="form-control"  type="text" required>
    </div>
    @if ($errors->has('PublicationDuties'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PublicationDuties') }}</strong>
                                    </span>
                                @endif
  </div>
</div>

<div class="form-group col-md-12{{ $errors->has('PublishedLink') ? ' has-error' : '' }}">
  <label class="col-md-2" for="PublishedLink">Link(URL)</label>  
  <div class="col-md-10 inputGroupContainer">
  <div class="input-group">
  <input  name="PublishedLink" placeholder="URL" class="form-control"  type="text">
    </div>
    @if ($errors->has('PublishedLink'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PublishedLink') }}</strong>
                                    </span>
                                @endif
  </div>
</div>


<!-- Button -->
<div class="form-group col-md-10">
  <div class="col-md-6">
    <button type="submit" class="btn btn-warning submit-button" >Save</button>
  </div>
</div>
  </div>

</form>
 <!-- Modal -->
  <div class="modal fade" id="editPublished" role="dialog">
    <div class="modal-dialog modal-lg" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><h2 class="register">แก้ไขผลงาน</h2></h4>
        </div>
        <div class="modal-body">
        <table class="table table-striped">
        <tbody>
        <form class="form-horizontal" action="{{url('editPublished')}}" method="post"  id="edit_published_form" role='form'>
        {{csrf_field()}}
             <input type="hidden" class="form-control" id="pubid" name='pubid'/>
            <tr>
                  <td> 
                    <label class="control-label col-sm-6" for="typepub">ประเภทผลงาน:</label>
                  </td>
                  <td>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="typepub" name='typepub'/>
                    </div>
                  </td>
            </tr>
            <tr>
                  <td> 
                        <label class="control-label col-sm-6" for="author">ผู้แต่งร่วม:</label>
                  </td>
                  <td>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="author" name='author'/>
                    </div>
                  </td>
            </tr>
            <tr>
                  <td> 
                        <label class="control-label col-sm-6" for="article">ชื่อบทความ:</label>
                  </td>
                  <td>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="article" name='article'/>
                    </div>
                  </td>
            </tr>
            <tr>
                  <td> 
                        <label class="control-label col-sm-6" for="journal">งานประชุม/วารสาร:</label>
                  </td>
                  <td>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="journal"  name='journal'/>
                    </div>
                  </td>
            </tr>
             <tr>
                  <td> 
                        <label class="control-label col-sm-6" for="yearpub">ปีที่ตีพิมพ์:</label>
                  </td>
                  <td>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="yearpub"  name='yearpub'/>
                    </div>
                  </td>
            </tr>
            <tr>
                  <td> 
                        <label class="control-label col-sm-6" for="volpub">ฉบับที่/เล่มที่:</label>
                  </td>
                  <td>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="volpub"  name='volpub'/>
                    </div>
                  </td>
            </tr>
            <tr>
                  <td> 
                        <label class="control-label col-sm-6" for="pubpage">หน้าที่ตีพิมพ์:</label>
                  </td>
                  <td>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pubpage"  name='pubpage'/>
                    </div>
                  </td>
            </tr>
            <tr>
                  <td> 
                        <label class="control-label col-sm-6" for="plink">Link(URL):</label>
                  </td>
                  <td>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="plink"  name='plink'/>
                    </div>
                  </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><button type="submit" class="btn btn-warning submit-button" >Save</button></td>
            </tr>

          </form>
          </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  @push('scripts')
  <script>
    $('#editPublished').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data('id');
        var typepub = $(e.relatedTarget).data('typepub');
        var plink = $(e.relatedTarget).data('plink');
        var author = $(e.relatedTarget).data('author');
        var article = $(e.relatedTarget).data('article');
        var journal = $(e.relatedTarget).data('journal');
        var yearpub = $(e.relatedTarget).data('yearpub');
        var volpub = $(e.relatedTarget).data('volpub');
        var pubpage = $(e.relatedTarget).data('pubpage');
/*        var yearpub = $(e.relatedTarget).data('');*/
        $(e.currentTarget).find('input[id="pubid"]').val(id);
        $(e.currentTarget).find('input[id="typepub"]').val(typepub);
        $(e.currentTarget).find('input[id="author"]').val(author);
        $(e.currentTarget).find('input[id="article"]').val(article);
        $(e.currentTarget).find('input[id="journal"]').val(journal);
        $(e.currentTarget).find('input[id="yearpub"]').val(yearpub);
        $(e.currentTarget).find('input[id="volpub"]').val(volpub);
        $(e.currentTarget).find('input[id="pubpage"]').val(pubpage);
        $(e.currentTarget).find('input[id="plink"]').val(plink);
/*        $(e.currentTarget).find('input[id=""]').val();*/
    });
    
  
    $('#editPublished').on('hide.bs.modal', function(e1) {
        document.getElementById("edit_published_form").reset();
    });

</script>
@endpush

<!-- delete -->
