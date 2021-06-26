<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?= base_url('Assets/login-form-19/')?>css/style.css">

	<!-- Sweetalert CDN-->
	<script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


	</head>
	<body>
		<?php echo $this->session->flashdata('msg-succcess');?>
     	<?php
            if(isset($_SESSION['msg-succcess'])){
                unset($_SESSION['msg-succcess']);
            }
        ?>
		<?php echo $this->session->flashdata('msg');?>
     	<?php
            if(isset($_SESSION['msg'])){
                unset($_SESSION['msg']);
            }
        ?>
	<section class="ftco-section">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?= base_url('Assets/Image/Icon/icon_nahkoda.png')?>);"></div>
		      	<h3 class="text-center mb-0">LOGIN</h3>
		      	<p class="text-center">Sign in by entering the information below</p>

				<form action="<?= base_url('Login_c/Act_Login')?>" class="login-form" method="post">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" class="form-control" placeholder="Nomor Induk Taruna" name="nit" required>
		      		</div>

					<div class="form-group">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
						<input type="password" class="form-control" placeholder="Password" name="password" required>
					</div>

	            <div class="form-group">
	            	<button type="submit" class="btn form-control btn-primary rounded submit px-3">Login</button>
	            </div>
	          </form>
	          <div class="w-100 text-center mt-4 text">
	          	<p class="mb-0">Don't have an account?</p>
		          <a href="<?= base_url('Login_c/SignUp/');?>">Sign Up</a>
	          </div>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?= base_url('Assets/login-form-19/')?>js/jquery.min.js"></script>
  <script src="<?= base_url('Assets/login-form-19/')?>js/popper.js"></script>
  <script src="<?= base_url('Assets/login-form-19/')?>js/bootstrap.min.js"></script>
  <script src="<?= base_url('Assets/login-form-19/')?>js/main.js"></script>

	</body>
</html>

