<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome.min.css')}}">
	@stack('styles')

<style type="text/css">
body {
  background-color: #f3f4fa;
  padding-bottom: 40px;
  color: #5a5a5a;
}

.featurette-divider {
  margin: 80px 0; /* Space out the Bootstrap <hr> more */
}

.navbar-wrapper{position:absolute;top:0;right:0;left:0;z-index:20;}
.navbar-wrapper > .container{padding-right:0;padding-left:0;}
.navbar-wrapper .navbar{padding-right:15px;padding-left:15px;}
.navbar-wrapper .navbar .container{width:auto;}
@media (min-width:768px){.navbar-wrapper{margin-top:20px;}
.navbar-wrapper .container{padding-right:15px;padding-left:15px;}
.navbar-wrapper .navbar{padding-right:0;padding-left:0;}
.navbar-wrapper .navbar{border-radius:4px;}
}

/*
 * Style tweaks
 * --------------------------------------------------
 */
html,
body {
  overflow-x: hidden; /* Prevent scroll on narrow devices */
}
body {

}
footer {
  padding: 30px 0;
}

/*
 * Off Canvas
 * --------------------------------------------------
 */
@media screen and (max-width: 767px) {
  .row-offcanvas {
    position: relative;
    -webkit-transition: all .25s ease-out;
         -o-transition: all .25s ease-out;
            transition: all .25s ease-out;
  }

  .row-offcanvas-right {
    right: 0;
  }

  .row-offcanvas-left {
    left: 0;
  }

  .row-offcanvas-right
  .sidebar-offcanvas {
    right: -50%; /* 6 columns */
  }

  .row-offcanvas-left
  .sidebar-offcanvas {
    left: -50%; /* 6 columns */
  }

  .row-offcanvas-right.active {
    right: 50%; /* 6 columns */
  }

  .row-offcanvas-left.active {
    left: 50%; /* 6 columns */
  }

  .sidebar-offcanvas {
    position: absolute;
    top: 0;
    width: 50%; /* 6 columns */
  }
}

  </style>
    <title>วิทยาลัยพลังงานและสิ่งแวดล้อม มหาวิทยาลัยพะเยา - Seen </title>

        <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<header>
	<div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #ff4500;">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{url('index')}}"><span class="glyphicon glyphicon-home"></span> SEEN</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
 
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ข้อมูลวิทยาลัย <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{url('about')}}">เกี่ยวกับวิทยาลัย</a></li>
                    <li><a href="{{url('Organization')}}">ผังโครงสร้างองค์กร</a></li>

                  </ul> 
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">บุคลากรคณะ <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                        <li><a href="{{url('Department/executive')}}">คณะผู้บริหาร</a></li>
                        <li><a href="{{url('Department/envi')}}">สาขาวิศวกรรมสิ่งแวดล้อม</a></li>
                        <li><a href="{{url('Department/sci')}}">สาขาวิทยาศาสตร์สิ่งแวกล้อม</a></li>
                        <li><a href="{{url('Department/energy')}}">สาขาพลังงานทดแทน</a></li>
                        <li><a href="{{url('Department/energy')}}">สำนักงานวิทยาลัยพลังงานและสิ่งแวดล้อม</a></li>
                  </ul>
                </li>



                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">งานวิจัยและบริการวิชาการ <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                        <li><a href="#">ศูนย์วิจัย</a></li>
                  </ul>
                </li>


                  <li><a href="{{url('Course')}}">หลักสูตร</a></li>

              </ul><!-- nav navbar-nav -->

              <ul class="nav navbar-nav navbar-right">
                 @if (Auth::guest())
                  <li><a href="#">ติดต่อเรา</a></li>
                 @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <span class="glyphicon glyphicon-user"></span>  {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>
                                
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/Profile') }}">Profile</a></li>
                                    @if(Auth::user()->privileges_name=='ผู้ดูแลระบบ')
                                      <li><a href="{{ url('/admin/setting') }}">Setting</a></li>
                                    @endif
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                @endif
              </ul><!-- nav navbar-nav navbar-right -->
            </div>
          </div>
        </nav>

      </div>
    </div>
</header>
<main>
@yield('content')
</main>
  <footer class="footer">
    <div class="container">
      <hr class="featurette-divider">
      <p class="pull-right"><a href="#">Back to top</a></p>

      <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p> 
      @if (Auth::guest())
            <p><a href="{{url('login')}}">Login</a></p>
      @endif 
    </div>

  </footer>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>  
    @stack('scripts')

</body>

</html>