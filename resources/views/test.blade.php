 @extends('layouts.site')
 @section('content')
 <input type="text" class="from-control" name="" oninput="search()" id="search">
<div class="container">
 <div class="table-responsive">
          <table class="table table-striped">
              <tbody style="text-align: center;" id="list">
          </table>
 </div>
</div>

@endsection
@push('scripts')
<script type="text/javascript">
  $("#list").load('SearchUser',{ value : 0 ,_token:'{{csrf_token()}}'});
function search(){
    $("#list").load('SearchUser',{ value : $("#search").val(),_token:'{{csrf_token()}}'});
  }
/*function search(){
  $("#list").load('search_sync',{ id : $("#sel").val(), value : $("#search").val()},function(){
    $("#page").load('page',{ pagePresent : $("#Page").val(), pageLast : $("#countPage").val()},function(m){
      for(i=0 ;i<=8;i++){
        if($("[id=pageNum]").eq(i).val()==$("#Page").val()){
          $("[id=pageNum]").eq(i).addClass("active");
        }
      }
    });
  });
}*/
</script>
@endpush