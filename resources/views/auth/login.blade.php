
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/dashrock/color-admin/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Nov 2018 06:54:01 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Hola-Hola | Login </title>
  <!--favicon-->
  <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet"/>
  
</head>

<body class="authentication-bg">
 <!-- Start wrapper-->
 <div id="wrapper">
	<div class="card card-authentication1 mx-auto my-5 animated zoomIn">
		<div class="card-body">
		 <div class="card-content p-2">
		  <div class="text-center">
                <div class="card-title text-uppercase text-center py-2" style="font-size:35px;color:#FF4B2B">Hola-Hola Catalog</div>
		 		<img src="{{ asset('assets/images/logo-icon.png') }}"/>
		 	</div>
          <div class="card-title text-uppercase text-center py-2">Sign In</div>
		    <form method="POST" action="{{ route('login') }}">
            @csrf
			  <div class="form-group">
			   <div class="position-relative has-icon-left">
				  <label for="exampleInputUsername" class="sr-only">Email</label>
                  <input type="text" id="exampleInputUsername" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email">
                  
                 @if ($errors->has('email'))
                
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                </span> @endif

				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <div class="position-relative has-icon-left">
				  <label for="exampleInputPassword" class="sr-only">Password</label>
				  <input type="password" id="exampleInputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password">
                  
                  @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			{{-- <div class="form-row mr-0 ml-0">
			 <div class="form-group col-6">
			   <div class="demo-checkbox">
                <input type="checkbox" id="user-checkbox" class="filled-in chk-col-danger" checked="" />
                <label for="user-checkbox">Remember me</label>
			  </div>
			 </div>
			 <div class="form-group col-6 text-right">
			  <a href="authentication-reset-password.html">Reset Password</a>
			 </div>
			</div> --}}
			
			 <div class="form-group">
			   <button type="submit" class="btn btn-danger shadow-danger btn-block waves-effect waves-light">Sign In</button>
			 </div>
			  <div class="form-group text-center">
			   {{-- <p class="text-muted">Not have account ? <a href="{{ route('register') }}"> Sign Up here</a></p> --}}
			 </div>
			 {{-- <div class="form-group text-center">
			    <hr>
				<h5>OR</h5>
			 </div>
			  <div class="form-group text-center">
				<button type="button" class="btn btn-facebook shadow-facebook text-white btn-block waves-effect waves-light"><i class="fa fa-facebook-square"></i> Sign In With Facebook</button>
			  </div> --}}
			 </form>
		   </div>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <!-- waves effect js -->
  <script src="{{ asset('assets/js/waves.js') }}"></script>
  <!-- Custom scripts -->
  {{-- <script src="{{ asset('assets/js/app-script.js') }}"></script> --}}

<!-- Mirrored from codervent.com/dashrock/color-admin/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Nov 2018 06:54:01 GMT -->
</html>



