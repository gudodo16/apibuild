<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/webroot/webroot/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="/webroot/webroot/style.css" type="text/css" />
	<link rel="stylesheet" href="/webroot/webroot/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="/webroot/webroot/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="/webroot/webroot/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="/webroot/webroot/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="/webroot/webroot/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Login - Layout 5 | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nopadding">

				<div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('/webroot/webroot/images/parallax/home/1.jpg') center center no-repeat; background-size: cover;"></div>

				<div class="section nobg full-screen nopadding nomargin">
					<div class="container-fluid vertical-middle divcenter clearfix">

						<div class="center">
							<a href="/webroot/webroot/index.html"><img src="/webroot/webroot/images/logo-dark.png" alt="Canvas Logo"></a>
						</div>

						<div class="card divcenter noradius noborder" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
							<div class="card-body" style="padding: 40px;">
								<?= $this->Form->create() ?>
								<h3>Login to your Account</h3>

								<div class="col_full">
									<label for="login-form-username">Username:</label>
									<input type="text" id="username" name="username" value="" class="form-control not-dark" />

								</div>

								<div class="col_full">
									<label for="login-form-password">Password:</label>
									<input type="password" id="password" name="password" value="" class="form-control not-dark" />
								</div>

								<div class="col_full nobottommargin">
									<button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
									<a href="/Users/add" class="fright">สมัครสมาชิก</a>
								</div>
								<?= $this->Form->end() ?>
								<div class="line line-sm"></div>
							</div>
						</div>
						<div class="center dark"><small>Copyrights &copy; All Rights Reserved by Herricane Inc.</small></div>
					</div>
				</div>
			</div>

		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="/webroot/webroot/js/jquery.js"></script>
	<script src="/webroot/webroot/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="/webroot/webroot/js/functions.js"></script>

</body>
</html>