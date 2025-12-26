<!DOCTYPE html>
<html lang="en">
<?php
session_start();

@include("../php_controller/adminController.php");
@include('../files_Dashboard/head.php');
?>

<body class="main-body app sidebar-mini">

	<!-- Loader -->
	<div id="global-loader">
		<img src="../assets/img/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

	<!-- Page -->
	<div class="page" style="font-family: cairo;">

		<div class="container-fluid">
			<div class="row no-gutter">
				<!-- The image half -->
				<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
					<div class="row wd-100p mx-auto text-center">
						<div class="col-md-20 col-lg-12 col-x2-12 my-auto mx-auto wd-300p">
							<img src="../assets/img/media/pattern.png" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
						</div>
					</div>
				</div>
				<!-- The content half -->
				<div class="col-md-6 col-lg-6 col-xl-5 bg-white">
					<div class="login d-flex align-items-center py-2">
						<!-- Demo content-->
						<div class="container p-0">
							<div class="row">
								<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
									<div class="card-sigin">
										<div class="mb-5 d-flex"> <a href="index.html"></a>
											<h1 class="main-logo1 mr-1 mr-0 my-auto tx-28">نظام <span>ادارة </span>الفواتير</h1>
										</div>
										<div class="main-signup-header">
											<h2 class="text-primary">مرحبا بك</h2>
											<h5 class="font-weight-normal mb-4">تسجيل الدخول </h5>
											<form action="" method="post" id="myform">
												<div class="form-group">
													<label>الاسم الاول &amp; الاسم الاخير</label>
													<div class="text-danger small mb-1" id="error_name">
													</div>
													<input class="form-control" placeholder="  الاسم الاول &amp;الاسم الاخير " type="text" name="name" id="name">
												</div>
												<div class="form-group">
													<label>البريد الالكتروني</label>
													<div class="text-danger small mb-1" id="error_email"></div>
													<input class="form-control" placeholder="البريد الالكتروني" type="text" name="email" id="email">
												</div>
												<div class="form-group">
													<label>كلمة المرور</label>
													<div class="text-danger small mb-1" id="error_password"></div>
													<input class="form-control" placeholder="كلمة المرور" type="password" name="password" id="password">
												</div><button type="submit" name="signup" class="btn btn-main-primary btn-block">انشاء حساب</button>
												<div class="row row-xs">
													<div class="col-sm-6">
														<a href="https://www.facebook.com"
															class="btn text-white btn-block w-100"
															style="background:#1877F2;">
															<i class="fab fa-facebook-f me-2"></i>
															التسجيل بواسطة فيسبوك
														</a>
													</div>
													<div class="col-sm-6 mg-t-10 mg-sm-t-0">
														<a href="https://www.x.com" class="btn btn-dark w-100" style="background-color:#000;">
															<i class="fab fa-x-twitter me-2"></i>
															التسجيل بواسطة
														</a>
													</div>


												</div>
											</form>
											<div class="main-signup-footer mt-5">
												<p>لديك حساب بالفعل ؟ <a href="signin.php">الدخول</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- End -->
					</div>
				</div><!-- End -->
			</div>
		</div>

	</div>
	<!-- End Page -->

	<!--- JQuery min js --->
	<?php
	@include("../files_Dashboard/main-js.php");
	?>


</body>

</html>