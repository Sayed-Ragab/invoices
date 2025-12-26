<?php
	
	 include('../php_controller/LoginController.php');
	
	 ?>
<!DOCTYPE html>
<html lang="en">
	
	
	<?php include('../files_Dashboard/head.php');?>
	<body class="main-body bg-light">

		<!-- Loader -->
		<div id="global-loader">
			<img src="../assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
		<div class="page" style="font-family: cairo;">
		
			<div class="container-fluid">
				<div class="row no-gutter">
					<!-- The image half -->
					<div class="col-md-7 col-lg-7 col-xl-7 d-none d-md-flex bg-primary-transparent">
						<div class="row wd-100p mx-auto text-center">
							<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
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
											<div class="mb-5 d-flex"> <a href="index.html"></a><h1 class="main-logo1 mr-1 mr-0 my-auto tx-28">نظام <span> ادارة</span> الفواتير</h1></div>
											<div class="card-sigin">
												<div class="main-signup-header">
													<h2>مرحبا بعوتك</h2>
													<h5 class="font-weight-semibold mb-4">قم بالدخول مجددا</h5>
													<form action="#" method="POST">
														<div class="form-group">
															<label>البريد الالكتروني</label> 
															<input class="form-control" placeholder="البريد الالكتروني" type="text" name="email">
														</div>
														<div class="form-group">
															<label>كلمة المرور</label>
															 <input class="form-control" placeholder="Enter your password" type="password" name="password">
														</div>
														<button class="btn btn-main-primary btn-block" type="submit" name="signin">الدخول</button>
																<div class="row row-xs">
													<div class="col-sm-6">
														<a href="https://www.facebook.com"
															class="btn text-white btn-block w-100"
															style="background:#1877F2;">
															<i class="fab fa-facebook-f me-2"></i>
															الدخول بواسطة فيسبوك
														</a>
													</div>
													<div class="col-sm-6 mg-t-10 mg-sm-t-0">
														<a href="https://www.x.com" class="btn btn-dark w-100" style="background-color:#000;">
															<i class="fab fa-x-twitter me-2"></i>
															الدخول بواسطة
														</a>
													</div>


												</div>
													</form>
													<div class="main-signin-footer mt-5">
														<p><a href="">نسيت كلمة المرور</a></p>
														<p>ليس لديك حساب? <a href="./signup.php">انشاء حساب</a></p>
													</div>
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
		<!-- Page -->
	
		<!-- End Page -->

		<!-- JQuery min js -->
		<?php include("../files_Dashboard/main-js.php");?>

	</body>
</html>