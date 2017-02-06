@extends('layouts.admin')
@section('sidebar')
    @parent
<aside id="side-menu" class="aside" role="navigation">            
        <ul class="nav nav-list accordion">                    
          <li class="nav-header">
            <div class="link"><i class="fa fa-lg fa-newspaper-o"></i>News<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <li><a href="#" onclick="chang('list')">Create</a></li>  
              <li><a href="#" onclick="chang('seach_list')">Settings</a></li>  
              <li><a href="#">Administration</a></li>  
            </ul>
          </li>
          
          <li class="nav-header">
            <div class="link"><i class="fa fa-lg fa-users"></i>Users<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <li><a href="#">Users</a></li>
              <li><a href="#">New User</a></li>
            </ul>
          </li>
          
          <li class="nav-header">
            <div class="link"><i class="fa fa-cloud"></i>Sites<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <li><a href="#">Search Sites</a></li>
              <li><a href="#">New Site</a></li>
              <li><a href="#">Jobs</a></li>
            </ul>
          </li>  
          
           <li class="nav-header">
            <div class="link"><i class="fa fa-lg fa-map-marker"></i>Zones<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <li><a href="#">Search Zones</a></li>
              <li><a href="#">New Zone</a></li>
            </ul>
          </li>
          
          <li class="nav-header">
            <div class="link"><i class="fa fa-lg fa-file-image-o"></i>Reports<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <li><a href="#">Entries</a></li> 
              <li><a href="#">Redirects</a></li> 
              <li><a href="#">Pingbacks</a></li>          
              <li><a href="#">Tags</a></li>
            </ul>
          </li>
          
      </ul>
  </aside>
  <!--Body content-->
  <div class="content">
    <div class="top-bar">       
      <a href="#menu" class="side-menu-link burger"> 
        <span class='burger_inside' id='bgrOne'></span>
        <span class='burger_inside' id='bgrTwo'></span>
        <span class='burger_inside' id='bgrThree'></span>
      </a>      
    </div>
@endsection
@section('content')
 <h2>Sample</h2>
<div id="list"></div>
@endsection
@push('scripts')
<script type="text/javascript">
	$("#list").load('seach_list');
	function chang($str){
	$("#list").load($str);
}
</script>
@endpush