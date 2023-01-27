<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="Dashboard">
	<meta name="Author" content="NIC Durg">
	<meta name="Keywords" content="admin template, admin dashboard, bootstrap dashboard template, bootstrap 4 admin template, laravel, php framework, php laravel, laravel framework, php mvc, laravel admin panel, laravel admin panel, laravel template, laravel bootstrap, blade laravel, best php framework" />

	<!-- Title -->
	<title>राजीव युवा मितान क्लब (RYMC) | दुर्ग </title>

	<!-- Favicon -->
	<link rel="icon" href="{{ asset('assets/img/header photo/app_logo.png') }}" type="image/x-icon" />

	<!-- Bootstrap css -->
	<link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />

	<!-- Icons css -->
	<link href="{{ asset('assets/plugins/icons/icons.css') }}" rel="stylesheet">

	<!--  Right-sidemenu css -->
	<link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

	<!--  Left-Sidebar css -->
	<link rel="stylesheet" href="{{ asset('assets/css/sidemenu.css') }}">

	<!--- Dashboard-2 css-->
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/style-dark.css') }}" rel="stylesheet">

	<!--- Color css-->
	<link id="theme" href="{{ asset('assets/css/colors/color.css') }}" rel="stylesheet">



	<!---Skinmodes css-->
	<link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />

	<!--- Animations css-->
	<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">

</head>

<body class="main-body light-theme">

	<!-- Loader -->
	<div id="global-loader">
		<img src="{{ asset('assets/img/loader-2.svg') }}" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

	<!-- main-signin-wrapper -->

	<div class="my-auto page page-h">



		<!-- main-signin-wrapper -->
		<div class="my-auto page page-h">
			<div class="main-signin-wrapper error-wrapper">

				<div class="main-card-signin d-md-flex wd-100p">

					<div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white">

						<div class="my-auto authentication-pages">
							<div>

								<img src="assets/img/header photo/logo.png" class=" m-0 mb-4" alt="logo">
								<!--  <h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5> -->
								<p class="mb-5 text-center h4">युवा राष्ट्रस्य बलम् ।</p>
								<!-- <a href="login.blade.php" class="btn btn-danger">Learn More</a> -->
							</div>
						</div>
					</div>
					<div class="p-5 wd-md-50p">
						<div class="main-signin-header">
							<h2>Welcome back!</h2>
							<h4>Please Log in to continue</h4>
							<form action="home">
								<div class="form-group">
									<label>{{ __('login.username') }}</label><input class="form-control" placeholder="Enter your email" type="text" value="">
								</div>
								<div class="form-group">
									<label>{{ __('login.password') }}</label> <input class="form-control" placeholder="Enter your password" type="password" value="">
								</div>
								<!-- <a href="/index" class="btn btn-main-primary btn-block">Log In</a> -->
								<button class="btn btn-main-primary btn-block">Log In</button>
							</form>
						</div>
						<div class="main-signin-footer mt-3 mg-t-5">
							<p><a href="#">Forgot password?</a></p>
							<p>Don't have an account? <a href="#">Contact NIC</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /main-signin-wrapper -->


	</div>

	<!-- /main-signin-wrapper -->

	<!-- JQuery min js -->
	<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

	<!-- Bootstrap4 js-->
	<script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

	<!-- Ionicons js -->
	<script src="{{ asset('assets/plugins/ionicons/ionicons.js') }}"></script>

	<!-- Moment js -->
	<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>

	<!-- eva-icons js -->
	<script src="{{ asset('assets/plugins/eva-icons/eva-icons.min.js') }}"></script>

	<!-- Rating js-->
	<script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>
	<script src="{{ asset('assets/plugins/rating/jquery.barrating.js') }}"></script>




	<!-- custom js -->
	<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>