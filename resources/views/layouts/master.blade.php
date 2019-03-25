


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/dashrock/color-admin/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Nov 2018 06:58:10 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Hola Halo Catalog</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href=" {{asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href=" {{asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href=" {{asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href=" {{asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href=" {{asset('assets/css/sidebar-menu.css') }}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href=" {{asset('assets/css/app-style.css') }}" rel="stylesheet"/>

  {{-- IMPORT CSS --}}
  @yield('top')
  
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
@if(Auth::check())
    {{-- IMPORT SIDEBAR --}}
    @include('layouts.sidebar') 
@endif

{{-- IMPORT TOP BAR --}}
@include('layouts.topbar')

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">

        {{-- <div class="col-sm-9">
		    <h4 class="page-title">Blank Page</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">DashRock</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
         </ol>
       </div> --}}
       
     {{-- <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
        <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div>
      </div>
     </div> --}}

     </div>
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12"> <!--Please remove the height before using this page-->
            
          {{-- IMPORT CONTENT --}}
          @yield('content')

		  </div>
        </div>
      </div>

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

	{{-- IMPORT FOOTER --}}
	@include('layouts.footer')
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src=" {{asset('assets/js/jquery.min.js') }} "></script>
  <script src=" {{asset('assets/js/popper.min.js') }} "></script>
  <script src=" {{asset('assets/js/bootstrap.min.js') }} "></script>
	
  <!-- simplebar js -->
  <script src=" {{asset('assets/plugins/simplebar/js/simplebar.js') }} "></script>
  <!-- waves effect js -->
  <script src=" {{asset('assets/js/waves.js') }} "></script>
  <!-- sidebar-menu js -->
  <script src=" {{asset('assets/js/sidebar-menu.js') }} "></script>
  <!-- Custom scripts -->
  <script src=" {{asset('assets/js/app-script.js') }} "></script>

  @yield('bot')
{{-- <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bdLrCjqgQBIHkeE2CkaKZqXrK27Hpd4vqJx9EzF%2bgwA5kcw%2fOJnt6Zl%2fFnIW1%2fYuxhtEQ0zBuKHQNka%2f5mxyjsxMv5G2BtDx%2fCPbxYq4d4546YAWyTGwBjTc6h3uZGI%2bCE2kSDujU1D95F6czIT5etO1czV3OoZpfWjTHKps8hMqzZW%2bP3F4i%2fFr1xk4CkwBtHt5Xq1QpAR%2f%2bTf%2fur%2bUENEM89wtMt0K8jN0TBhbAiHb38nHRlb%2f0WklTJA6v7%2fgxtr%2fw2JiQZ3HKl230a6Rl0cai%2fDBso%2bUBn%2b1GGnQMc4O0K3bL190FnHoO0BT0rmq9ZOsxBFt1Evwqu1fyAyeDrPBl1D1R6dkWBFi%2bXgJkuolChgQMaSns0qMF%2b5uxdMaL9NM4FQWMlyoNnepjalgxL9zLYnyQiGRCvZkZmLzuU7K%2bEXRjjDsoenZ9pydzfh2x%2bA4%2btGALDypW4EbKT59tbEV5JoPrVEofASWSSnrcamW7%2bQhaPO3ceMUoWEK%2bheD5ruh1Fn6fmMLY%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body> --}}


<!-- Mirrored from codervent.com/dashrock/color-admin/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Nov 2018 06:58:10 GMT -->
</html>
