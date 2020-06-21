<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('judul') </title>
  <script src="https://kit.fontawesome.com/c7bab09a99.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{asset('css/nprogress.css')}}" rel="stylesheet">
  <!-- jQuery custom content scroller -->
  <link href="{{asset('css/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet" />

  <!-- Custom Theme Style -->
  <link href="{{asset('css/custom.min.css')}}" rel="stylesheet">

</head>

          <body class="nav-md footer_fixed">
            <div class="container body">
              <div class="main_container">
                <div class="col-md-3 left_col">
                  <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                      <a href="#" class="site_title"><i class="fab fa-playstation"></i> <span> @yield('judul')</span></a>
                    </div>
                    <i class=""></i>
                    <div class="clearfix"></div>
          
                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                      <div class="profile_pic">
                        <img src="{{auth()->user()->asaKau()}}" alt="..." class="img-circle profile_img">
                      </div>
                      <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{auth()->user()->name}}</h2>
                      </div>
                    </div>
                    <!-- /menu profile quick info -->
          
                    <br />
        
            <!-- Topbar -->
            @include('layouts.sidebar')
            @include('layouts.topbar')

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        @yield('container')
        <!-- /.container-fluid -->

       <!-- page content -->
           <!-- /page content -->
<br><br>
      <!-- footer content -->
      <footer>
        <div class="pull-right">
          aslamalya tea</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

    <!-- jQuery -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
  <script src="{{asset('js/fastclick.js')}}"></script>
    <!-- NProgress -->
  <script src="{{asset('js/nprogress.js')}}"></script>
    <!-- jQuery custom content scroller -->
  <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
  <script src="{{asset('js/custom.min.js')}}"></script>
 <script>
        $('.custom-file-input').on('change', function() {
         let fileName = $(this).val().split('\\').pop();
         $(this).next('.custom-file-label').addClass("selected").html(fileName);
     });
 </script>
  @yield('footer')
  </body>
</html>