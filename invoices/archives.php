<!doctype html>
<html lang="en" dir="ltr">
<?php include("../files_Dashboard/head.php") ?>
<?php include("../php_controller/check_membership.php"); ?>
<?php @include("../php_controller/Invoices_statusController.php"); ?>

<body class="main-body app sidebar-mini">

	<!-- Loader -->
	<div id="global-loader">
		<img src="../assets/img/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

	<!-- Page -->
	<div class="page" style="font-family: cairo;">

		<!-- main-sidebar -->
		<?php include("../files_Dashboard/main-sidebar.php") ?>
		<!-- main-sidebar -->

		<!-- main-content -->
		<div class="main-content app-content">

			<!-- main-header opened -->
			<?php include("../files_Dashboard/headers.php"); ?>
			<!-- /main-header -->

			<!-- container opened -->
			<div class="container-fluid">

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Empty</span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->

				<!-- row -->
				<div class="row">
					<div class="col-xl-12">
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header pb-0">


								</div>
								<div class="card-body">
									<div class="table-responsive hoverable-table">

										<table id="example1" class="table text-md-nowrap">
											<thead>
												<tr>
													<th>#</th>
													<th>رقم الفاتوره</th>
													<th>تاريخ الاصدار</th>
													<th>تاريخ الاستحقاق</th>
													<th>القسم</th>
													<th>المنتج</th>
													<th>الخصم</th>
													<th>نسبة الضريبه</th>
													<th>قيمة الضريبه</th>
													<th>الاجمالي</th>
													<th>حالة الفاتوره</th>
													<th>الملاحظات</th>
													<th>العمليات</th>
												</tr>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($Archives as $Archive) { ?>
													<tr>
														<td><?php echo $Archive['id'] ?></td>
														<td><?php echo $Archive['invoice_number'] ?></td>
														<td><?php echo $Archive['invoice_date'] ?></td>
														<td><?php echo $Archive['Due_date'] ?></td>
														<td> <a href="invoicesDetalis.php?id=<?php echo $Archive['id'] ?>"><?php echo $Archive['section_name']; ?></a></td>
														<td><?php echo $Archive['product'] ?></td>
														<td><?php echo $Archive['Discount'] ?></td>
														<td><?php echo $Archive['Rate_VAT'] ?></td>
														<td><?php echo $Archive['Value_VAT'] ?></td>
														<td><?php echo $Archive['Total'] ?></td>
														<td>
															<?php if ($Archive['Value_Status'] == 1) { ?>
																<span class="badge badge-pill badge-success"><?php echo $Archive['Status'] ?></span>
															<?php } else if ($Archive['Value_Status'] == 2) { ?>
																<span class="badge badge-pill badge-danger"><?php echo $Archive['Status'] ?></span>
															<?php } else { ?>
																<span class="badge badge-pill badge-warning"><?php echo $Archive['Status'] ?></span>
															<?php } ?>
														</td>
														<td><?php echo $Archive['Note'] ?></td>
														<td>

															<div class="dropdown">
																<button class="btn ripple btn-primary btn-sm dropdown-toggle"
																	type="button"
																	data-bs-toggle="dropdown"
																	aria-expanded="false">
																	العمليات <i class="fas fa-caret-down ms-1"></i>
																</button>

																<ul class="dropdown-menu shadow-sm border-0 rounded-2" style="min-width: 180px;">

																	<li>
																		<a class="dropdown-item"
																			href="#"
																			data-bs-toggle="modal"
																			data-bs-target="#destroy<?php echo $Archive['id']; ?>">
																			<i class="text-danger fas fa-trash-alt me-2">&nbsp;&nbsp;</i>
																			حذف الفاتوره
																		</a>
																	</li>


																	<li>
																		<a class="dropdown-item"
																			href="#"
																			data-bs-toggle="modal"
																			data-bs-target="#archve<?php echo $Archive['id']; ?>">
																			<i class="text-warning fas fa-exchange-alt"></i>&nbsp;&nbsp;</i>
																			الغاء الارشفه
																		</a>
																	</li>




																</ul>
															</div>

														</td>
													</tr>
												<?php
													include('destroyArchve.php');
													include("archev_modal.php");
													
												}

												?>
										</table>
									</div>
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
 <?php include("../files_Dashboard/main-rightbar.php")?>
		<!--/Sidebar-right-->

		<!-- Message Modal -->


		<!--Video Modal -->

		<!-- Audio Modal -->


		<!-- Footer opened -->
		<?php include("../files_Dashboard/footer.php") ?>
		<!-- Footer closed -->

	</div>
	<!-- End Page -->

	<!-- Back-to-top -->
	<?php include("../files_Dashboard/main-js.php"); ?>

</body>

</html>