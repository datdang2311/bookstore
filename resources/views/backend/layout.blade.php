<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
        Quản lý
      
    </title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic') }}" rel="stylesheet">
    
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">

    <link href="{{ asset('css/toolkit-inverse.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/application.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    
    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      
      
    </style>
  </head>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<body>
    <div class="header bw">
<<<<<<< HEAD
        <button type="button" class="btn btn-default btn-sm" >
               <a class="glyphicon glyphicon-cog"></a> Change password
        </button>
        <button type="button" class="btn btn-default btn-sm" >
                <span class="glyphicon glyphicon-log-out"></span> Log out
=======
        <a href="{{ url('admin/changePassword') }}">
          <button type="button" class="btn btn-default btn-sm btn-log" >
          <span class="glyphicon glyphicon-cog"></span> Change password
>>>>>>> 67cf2b8a075f0ab07eb486bdc524e79b7c8182f6
        </button>
        </a>
        <a href="{{ url('logout') }}">
          <button class="btn btn-default btn-sm btn-log">
            <span class="glyphicon glyphicon-log-out"></span>
            Logout
          </button>
        </a>
    </div>
  <div class="bw">
    <div class="di">
      <div class="em brh">
        <nav class="bro">
          <div class="bri">
            <button class="bqe bqg brj" type="button" data-toggle="collapse" data-target="#nav-toggleable-md">
              <span class="aep">Toggle nav</span>
            </button>
            <a class="brk bsi" href="{{url('admin/accounts')}}">
             <!--  <span class="bv bik brl"></span> -->
             <i class="fa fa-user fa-5x" aria-hidden="true"></i> ADMIN
            </a>
          </div>

          <div class="collapse bql" id="nav-toggleable-md">
            <form class="brm">
              <input class="form-control" type="text" placeholder="Tìm kiếm...">
              <button type="submit" class="po">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
            <ul class="nav qq nav-stacked xx">
              <li class="ayx">Quản lý website</li>
              <li class="qp">
                <a class="qn " href="{{ url('admin/products') }}">Sản phẩm</a>
              </li>
              <li class="qp">
                <a class="qn " href="{{ url('admin/news') }}">Tin tức</a>
              </li>
              <li class="qp">
                <a class="qn " href="{{ url('admin/categories') }}">Danh mục sản phẩm</a>
              </li>
              <li class="ayx">Quản lý bán hàng</li>
              <li class="qp">
                <a class="qn" href="{{ url('admin/orders') }}">
                  Đơn hàng
                </a>
              </li>
              <li class="ayx">Quản lý hệ thống</li>
              <li class="qp">
                <a class="qn" href="{{ url('admin/accounts') }}">Tài khoản Admin</a>
              </li>
            </ul>
            <hr class="bsj afx">
          </div>
        </nav>
      </div>
      <div class="es bsk">
      <div class="brv">
      <!-- Main -->
      <div class="Container">
        @yield('controller')
      </div>
  </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/tether.min.js') }}"></script>
    <script src="{{ asset('js/tablesorter.min.js') }}"></script>
    <script src="{{ asset('js/toolkit.js') }}"></script>
    <script src="{{ asset('js/application.js') }}"></script>
    <script>
      // execute/clear BS loaders for docs
      $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
    </script>
</body>
</html>

