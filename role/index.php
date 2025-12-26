<!doctype html>
<html lang="en" dir="ltr">
	<?php include("../files_Dashboard/head.php")?>
	<body class="main-body app sidebar-mini">
<?php @include('../php_controller/Rolecontroller.php')?>
		<!-- Loader -->
		<div id="global-loader">
			<img src="../assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- Page -->
		<div class="page" style="font-family: cairo;">

			<!-- main-sidebar -->
             <?php include("../files_Dashboard/main-sidebar.php")?>
				<!-- main-sidebar -->

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- main-header opened -->
				<?php include("../files_Dashboard/headers.php");?>
				<!-- /main-header -->

				<!-- container opened -->
				<div class="container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">الصلاحيات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ صلاحيات المستخدمين</span>
							</div>
						</div>

					</div>
					<!-- breadcrumb -->

					<!-- row -->
					<div class="row">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="d-flex justify-content-between">


									</div>
								<a href="Add.php" class="btn btn-info btn-sm">اضافة صلاحيه جديده</a>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example1" class="table key-buttons text-md-nowrap">
											<thead>
												<tr>
													<th class="border-bottom-0">#</th>
													<th class="border-bottom-0">الاسم</th>
													<th class="border-bottom-0">العمليات</th>

												</tr>
											</thead>
											<tbody>
												<?php foreach($show_Roles as $role){?>
												<tr>
													<td><?php echo $role['id']?></td>
														<td><?php echo $role['role_name']?></td>
													<td>
														<a href="#" class="btn btn-success btn-sm">عرض</a>
														<a href="#" class="btn btn-primary btn-sm">تعديل</a>
														<a class="btn btn-danger btn-sm">حذف</a>
													</td>

												</tr>
											<?php }?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->

			<!-- Sidebar-right-->

			<!--/Sidebar-right-->

			<!-- Message Modal -->


			<!--Video Modal -->

			<!-- Audio Modal -->


			<!-- Footer opened -->
		<?php include("../files_Dashboard/footer.php")?>
			<!-- Footer closed -->

		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<?php include("../files_Dashboard/main-js.php");?>

	</body>
</html>
