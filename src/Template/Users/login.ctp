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
			<!-- 	<div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('/webroot/webroot/images/parallax/bgpattern.png') center center no-repeat; background-size: cover;"></div> -->
				
				<div class="content-wrap">

					<div class="container clearfix">

						<div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">

							<div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-unlock"></i>Login to your Account</div>
							<div class="acc_content clearfix">
								<?= $this->Form->create() ?>
								<div class="col_full">
									<label for="login-form-username">Username:</label>
									<input type="text" id="username" name="username" value="" class="form-control" />
								</div>

								<div class="col_full">
									<label for="login-form-password">Password:</label>
									<input type="password" id="password" name="password" value="" class="form-control" />
								</div>

								<div class="col_full nobottommargin">
									<button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
								</div>
								<?= $this->Form->end() ?>
							</div>

							<div class="acctitle"><i class="acc-closed icon-user4"></i><i class="acc-open icon-ok-sign"></i>New Signup? Register for an Account</div>
							<div class="acc_content clearfix">
								<?php echo $this->Form->create('Users', array('url' => array('controller' => 'Users', 'action' => 'add'))); ?>
								<div class="col_full">
									<label for="register-form-name">Name:</label>
									<input type="text" id="name" name="name" value="" class="form-control" required />
								</div>

								<div class="col_full">
									<label for="register-form-email">Email Address:</label>
									<input type="email" id="email" name="email" value="" class="form-control" required />
								</div>

								<div class="col_full">
									<label for="register-form-username">Choose a Username:</label>
									<input type="text" id="username" name="username" value="" class="form-control" required />
								</div>

								<div class="col_full">
									<label for="register-form-phone">Phone:</label>
									<input type="text" id="phone" name="phone" value="" class="form-control" />
								</div>

								<div class="col_full">
									<label for="register-form-password">Choose Password:</label>
									<input type="password" id="password" name="password" value="" class="form-control" required   />
								</div>

								<div class="col_full">
									<label for="register-form-repassword">Re-enter Password:</label>
									<input type="password" id="re-password" name="re-password" value="" class="form-control" required />
								</div>

								<div class="col_full nobottommargin">
									<button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
								</div>
								<?= $this->Form->end() ?>
							</div>

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