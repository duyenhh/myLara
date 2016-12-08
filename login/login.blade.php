<!-- <!DOCTYPE html>
<html>
<head> -->
	<!-- <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{csrf_token()}}" />
	<title></title>
	<link rel="stylesheet" href="/public/css/login.css">
	<link href="/webarch/webarch/HTML/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	 <link href="/webarch/webarch/HTML/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet"
          type="text/css"/> -->
<!-- </head>
<body>
	<div class="container">
        <div class="card card-container"> -->
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" />
           <!--  <img id="profile-img" class="profile-img-card" src="/storage/app/public/images/coltech.jpg" />
            <form id="auth_login" method="post" class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <p class="text-success">{{$errors->first('reset_password')}}</p>
                <p class="text-error">
					{{$errors->first('username')}}
				</p>

				<input id="username" class="form-control" name="username" placeholder="Tên tài khoản" value="{{ old('username') }}">

                <p class="text-error">
					{{$errors->first('password')}}
				</p>
				<input type="password" id="password" class="form-control" name="password" placeholder="Mật khẩu" value="">
				@if($check_captcha == true)
				<div class="form-group">
					<img style="margin-top: -10px; width: 80%; border: 1px solid gray" id="login_captcha" src="{{ Captcha::src() }}">
					<i class="fa fa-refresh fa-2x" style="padding: 10px;cursor: pointer; margin: 20px 0 0 5px;" aria-hidden="true" id="re_login_captcha"></i>
					<p></p>
					<p id="captcha_null" class="text-error">
						{{$errors->first('captcha')}}
					</p>
					<input id="text_captcha" type="text" class="form-control" name="captcha" placeholder="Nhập mã bảo vệ">
				</div>
			@endif
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" value="1"> Ghi nhớ đăng nhập
                    </label>
                </div>
                <input name="_token" value="{{csrf_token()}}" hidden>
                <button id="dauth_login" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Đăng nhập</button>
            </form><!-- /form -->
            <!--<a href="/dat-lai-mat-khau" class="forgot-password">
                Bạn quên mật khẩu?
            </a>
        </div><!-- /card-container -->
   <!-- </div> <!-- /container -->
<!-- <script src="/public/js/lib/jquery-3.1.0.min.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="/public/js/my_jquery.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>

     -->
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Login</title>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{csrf_token()}}" />
	<title></title>
	<link rel="stylesheet" href="/public/css/login.css">
	<link href="/webarch/webarch/HTML/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	 <link href="/webarch/webarch/HTML/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet"
          type="text/css"/>
<script src="/public/js/lib/jquery-3.1.0.min.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="/public/js/my_jquery.js" type="text/javascript" charset="utf-8" async defer></script>
    <!-- Bootstrap core CSS -->
    <link href="/public/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="/public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="/public/assets/css/style.css" rel="stylesheet">
    <link href="/public/assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login"  method="POST">
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		        <p class="text-success">{{$errors->first('reset_password')}}</p>
                <p class="text-error">
					{{$errors->first('username')}}
				</p>
		        	
		            <input type="text" class="form-control" name="username"  placeholder="Username" value="{{old('email')}}">
		            <br>
		            
		        		{{$errors->first('password')}}
		        	
		            <input type="password" class="form-control" placeholder="Password" name ="password" value="">
		           <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
		
		                </span>
		            </label>

		            <input name="_token" value="{{csrf_token()}}" hidden>
		            <button class="btn btn-theme btn-block" href="/nhap" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            @if($check_captcha == true)
				<div class="form-group">
					<img style="margin-top: -10px; width: 80%; border: 1px solid gray" id="login_captcha" src="{{ Captcha::src() }}">
					<i class="fa fa-refresh fa-2x" style="padding: 10px;cursor: pointer; margin: 20px 0 0 5px;" aria-hidden="true" id="re_login_captcha"></i>
					<p></p>
					<p id="captcha_null" class="text-error">
						{{$errors->first('captcha')}}
					</p>
					<input id="text_captcha" type="text" class="form-control" name="captcha" placeholder="Nhập mã bảo vệ">
				</div>
			@endif
		            <div id="remember" class="checkbox">
                    <label>

                        <input type="checkbox" name="remember" value="1"> Ghi nhớ đăng nhập
                    </label>
                </div>
		            <div class="login-social-link centered">
		            <p>or you can sign in via your social network</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="#">
		                  
		                </a>
		            </div>
		
		        </div>
		</form>
		<form>
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                           <p> {{$errors->first('vnu_email')}}</p>
		                          <input type="text" name="username" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                       
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <input name="_token" value="{{csrf_token()}}" hidden>
		                          <button class="btn btn-theme" type="button" data-dismiss="modal">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="public/assets/js/jquery.js"></script>
    <script src="public/assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="public/assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("public/assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
