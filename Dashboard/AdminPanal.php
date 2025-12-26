<!DOCTYPE html>
<html lang="en" style="font-family: cairo;">
<?php include("../files_Dashboard/head.php"); ?>
<?php include("../php_controller/check_membership.php"); ?>
<?php include("../php_controller/DashboardController.php"); ?>

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
			<?php include("../files_Dashboard/headers.php") ?>
			<!-- /main-header -->

			<!-- container opened -->
			<div class="container-fluid">

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
							<h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Welcome : <?php echo $_SESSION['name'] ?></h2>
							<p class="mg-b-0"><?php echo $_SESSION['EMAIL'] ?></p>
						</div>
					</div>

				</div>
				<!-- /breadcrumb -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-primary-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">اجمالي الفواتير</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											
												<h4 class="tx-20 font-weight-bold mb-1 text-white"><?php echo $counts ?></h4>
												<a href="../invoices/index.php">
													<p class="mb-1 tx-12 text-white op-7">عرض</p>
												</a>
										
										</div>

									</div>
								</div>
							</div>
							<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-danger-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">الفواتير الغير مدفوعه</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											
												<h4 class="tx-20 font-weight-bold mb-1 text-white"><?php echo $totals_Unpaid ; ?></h4>
												<a href="../invoices/Unpaid_Invoices.php">
													<p class="mb-1 tx-12 text-white op-8">عرض</p>
												</a>
										
										</div>

									</div>
								</div>
							</div>
							<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-success-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<a href="../invoices/Paid_Invoices.php">
										<h6 class="mb-3 tx-12 text-white">الفواتير المدفوعه</h6>
									</a>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											
												<h4 class="tx-20 font-weight-bold mb-1 text-white"><?php echo $totals_paid ?></h4>
												<a href="../invoices/Paid_Invoices.php">
													<p class="mb-0 tx-12 text-white op-7">عرض</p>
												</a>
										
										</div>

									</div>
								</div>
							</div>
							<span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-warning-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">الفواتير المدفوعه جزئيا</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											
												<h4 class="tx-20 font-weight-bold mb-1 text-white"><?php echo $parts ?></h4>
												<a href="../invoices/Partially_Paid Invoices.php">
													<p class="mb-0 tx-12 text-white op-8">عرض</p>
												</a>
										
										</div>

									</div>
								</div>
							</div>
							<span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
				</div>
				<div class="col-xl-12">

					<div class="card mg-b-20" id="tabs-style2">
						<div class="card-body">

							<p class="mg-b-20">اخر العمليات علي النظام</p>
							<div class="text-wrap">
								<div class="example">
									<div class="panel panel-primary tabs-style-2">
										<div class=" tab-menu-heading">
											<div class="tabs-menu1">
												<!-- Tabs -->
												<ul class="nav panel-tabs main-nav-line">
													<li><a href="#tab4" class="nav-link active" data-toggle="tab">الفواتير</a></li>
													<li><a href="#tab5" class="nav-link" data-toggle="tab">الفواتر المدفوعه</a></li>
													<li><a href="#tab6" class="nav-link" data-toggle="tab">المدفوعه جزئيا</a></li>
												   <li><a href="#tab7" class="nav-link" data-toggle="tab">المدفوعه الغير مدفوعه</a></li>
												</ul>
											</div>
										</div>
										<div class="panel-body tabs-menu-body main-content-body-right border">
											<div class="tab-content">
												<div class="tab-pane active" id="tab4">
													<div class="col-xl-12">
														<div class="card">

															<div class="card-body">
																<div class="table-responsive">
																	<table class="table text-md-nowrap" id="example1">
																		<thead>
																			<tr>
																				<th class="border-bottom-0">م</th>
																				<th class="border-bottom-0">رقم الفاتوره</th>
																				<th class="border-bottom-0">تاريخ الاصدار</th>
																				<th class="border-bottom-0">تاريخ الاستحقاق</th>
																				<th class="border-bottom-0">القسم</th>
																				<th class="border-bottom-0">المنتح</th>
																				<th class="border-bottom-0">الخصم</th>
																				<th class="border-bottom-0">نسبة الضريبه</th>
																				<th class="border-bottom-0">قيمة الضريبه</th>
																				<th class="border-bottom-0">الاجمالي</th>
																				<th class="border-bottom-0">حالة الفاتوره</th>
																				<th class="border-bottom-0">الملاحظات</th>

																			</tr>
																		</thead>
																		<tbody>

																			<?php
																			$i = 0;
																			foreach ($invoices as $invoice) {
																				$i++;


																			?>
																				<tr>
																					<td><?php echo $i ?></td>
																					<td><?php echo $invoice['invoice_number'] ?></td>
																					<td><?php echo $invoice['invoice_date'] ?></td>
																					<td><?php echo $invoice['Due_date'] ?></td>
																					<td> <a href="../invoices/invoicesDetalis.php?id=<?php echo $invoice['id'] ?>"><?php echo $invoice['section_name']; ?></a></td>
																					<td><?php echo $invoice['product'] ?></td>
																					<td><?php echo $invoice['Discount'] ?></td>
																					<td><?php echo $invoice['Rate_VAT'] ?></td>
																					<td><?php echo $invoice['Value_VAT'] ?></td>
																					<td><?php echo $invoice['Total'] ?></td>
																					<td>
																						<?php if ($invoice['Value_Status'] == 1) { ?>
																							<span class="badge badge-pill badge-success"><?php echo $invoice['Status'] ?></span>
																						<?php } else if ($invoice['Value_Status'] == 2) { ?>
																							<span class="badge badge-pill badge-danger"><?php echo $invoice['Status'] ?></span>
																						<?php } else { ?>
																							<span class="badge badge-pill badge-warning"><?php echo $invoice['Status'] ?></span>
																						<?php } ?>
																					</td>
																					<td><?php echo $invoice['Note']; ?></td>
																					<td>

																				</tr>
																			<?php } ?>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="tab5">
													<div class="col-xl-12">
														<div class="card">

															<div class="card-body">
																<div class="table-responsive">
																	<table class="table text-md-nowrap" id="example2">
																		<thead>
																			<tr>
																				<th class="border-bottom-0">م</th>
																				<th class="border-bottom-0">رقم الفاتوره</th>
																				<th class="border-bottom-0">تاريخ الاصدار</th>
																				<th class="border-bottom-0">تاريخ الاستحقاق</th>
																				<th class="border-bottom-0">القسم</th>
																				<th class="border-bottom-0">المنتح</th>
																				<th class="border-bottom-0">الخصم</th>
																				<th class="border-bottom-0">نسبة الضريبه</th>
																				<th class="border-bottom-0">قيمة الضريبه</th>
																				<th class="border-bottom-0">الاجمالي</th>
																				<th class="border-bottom-0">حالة الفاتوره</th>
																				<th class="border-bottom-0">الملاحظات</th>

																			</tr>
																		</thead>
																		<tbody>

																			<?php
																			$i = 0;
																			foreach ($invoices_Paids as $invoices_Paid) {
																				$i++;


																			?>
																				<tr>
																					<td><?php echo $i ?></td>
																					<td><?php echo $invoices_Paid['invoice_number'] ?></td>
																					<td><?php echo $invoices_Paid['invoice_date'] ?></td>
																					<td><?php echo $invoices_Paid['Due_date'] ?></td>
																					<td> <a href="../invoices/invoicesDetalis.php?id=<?php echo $invoices_Paid['id'] ?>"><?php echo $invoices_Paid['section_name']; ?></a></td>
																					<td><?php echo $invoice['product'] ?></td>
																					<td><?php echo $invoices_Paid['Discount'] ?></td>
																					<td><?php echo $invoices_Paid['Rate_VAT'] ?></td>
																					<td><?php echo $invoices_Paid['Value_VAT'] ?></td>
																					<td><?php echo $invoices_Paid['Total'] ?></td>
																					<td>
																						<?php if ($invoices_Paid['Value_Status'] == 1) { ?>
																							<span class="badge badge-pill badge-success"><?php echo $invoices_Paid['Status'] ?></span>
																						<?php } else if ($invoices_Paid['Value_Status'] == 2) { ?>
																							<span class="badge badge-pill badge-danger"><?php echo $invoices_Paid['Status'] ?></span>
																						<?php } else { ?>
																							<span class="badge badge-pill badge-warning"><?php echo $invoices_Paid['Status'] ?></span>
																						<?php } ?>
																					</td>
																					<td><?php echo $invoices_Paid['Note']; ?></td>
																					<td>

																				</tr>
																			<?php } ?>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="tab6">
													<div class="col-xl-12">
														<div class="card">

															<div class="card-body">
																<div class="table-responsive">
																	<table class="table text-md-nowrap" id="example3">
																		<thead>
																			<tr>
																				<th class="border-bottom-0">م</th>
																				<th class="border-bottom-0">رقم الفاتوره</th>
																				<th class="border-bottom-0">تاريخ الاصدار</th>
																				<th class="border-bottom-0">تاريخ الاستحقاق</th>
																				<th class="border-bottom-0">القسم</th>
																				<th class="border-bottom-0">المنتح</th>
																				<th class="border-bottom-0">الخصم</th>
																				<th class="border-bottom-0">نسبة الضريبه</th>
																				<th class="border-bottom-0">قيمة الضريبه</th>
																				<th class="border-bottom-0">الاجمالي</th>
																				<th class="border-bottom-0">حالة الفاتوره</th>
																				<th class="border-bottom-0">الملاحظات</th>

																			</tr>
																		</thead>
																		<tbody>

																			<?php
																			$i = 0;
																			foreach ($invoices_parts as $invoices_part) {
																				$i++;


																			?>
																				<tr>
																					<td><?php echo $i ?></td>
																					<td><?php echo $invoices_part['invoice_number'] ?></td>
																					<td><?php echo $invoices_part['invoice_date'] ?></td>
																					<td><?php echo $invoices_part['Due_date'] ?></td>
																					<td> <a href="../invoices/invoicesDetalis.php?id=<?php echo $invoices_part['id'] ?>"><?php echo $invoices_part['section_name']; ?></a></td>
																					<td><?php echo $invoice['product'] ?></td>
																					<td><?php echo $invoices_part['Discount'] ?></td>
																					<td><?php echo $invoices_part['Rate_VAT'] ?></td>
																					<td><?php echo $invoices_part['Value_VAT'] ?></td>
																					<td><?php echo $invoices_part['Total'] ?></td>
																					<td>
																						<?php if ($invoices_part['Value_Status'] == 1) { ?>
																							<span class="badge badge-pill badge-success"><?php echo $invoices_part['Status'] ?></span>
																						<?php } else if ($invoices_part['Value_Status'] == 2) { ?>
																							<span class="badge badge-pill badge-danger"><?php echo $invoices_part['Status'] ?></span>
																						<?php } else { ?>
																							<span class="badge badge-pill badge-warning"><?php echo $invoices_part['Status'] ?></span>
																						<?php } ?>
																					</td>
																					<td><?php echo $invoices_part['Note']; ?></td>
																					<td>

																				</tr>
																			<?php } ?>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane" id="tab7">
													<div class="col-xl-12">
														<div class="card">

															<div class="card-body">
																<div class="table-responsive">
																	<table class="table text-md-nowrap" id="example3">
																		<thead>
																			<tr>
																				<th class="border-bottom-0">م</th>
																				<th class="border-bottom-0">رقم الفاتوره</th>
																				<th class="border-bottom-0">تاريخ الاصدار</th>
																				<th class="border-bottom-0">تاريخ الاستحقاق</th>
																				<th class="border-bottom-0">القسم</th>
																				<th class="border-bottom-0">المنتح</th>
																				<th class="border-bottom-0">الخصم</th>
																				<th class="border-bottom-0">نسبة الضريبه</th>
																				<th class="border-bottom-0">قيمة الضريبه</th>
																				<th class="border-bottom-0">الاجمالي</th>
																				<th class="border-bottom-0">حالة الفاتوره</th>
																				<th class="border-bottom-0">الملاحظات</th>

																			</tr>
																		</thead>
																		<tbody>

																			<?php
																			$i = 0;
																			foreach ($invoices_unPaids as $invoices_unPaid) {
																				$i++;


																			?>
																				<tr>
																					<td><?php echo $i ?></td>
																					<td><?php echo $invoices_unPaid['invoice_number'] ?></td>
																					<td><?php echo $invoices_unPaid['invoice_date'] ?></td>
																					<td><?php echo $invoices_unPaid['Due_date'] ?></td>
																					<td> <a href="../invoices/invoicesDetalis.php?id=<?php echo $invoices_unPaid['id'] ?>"><?php echo $invoices_unPaid['section_name']; ?></a></td>
																					<td><?php echo $invoices_unPaid['product'] ?></td>
																					<td><?php echo $invoices_unPaid['Discount'] ?></td>
																					<td><?php echo $invoices_unPaid['Rate_VAT'] ?></td>
																					<td><?php echo $invoices_unPaid['Value_VAT'] ?></td>
																					<td><?php echo $invoices_part['Total'] ?></td>
																					<td>
																						<?php if ($invoices_unPaid['Value_Status'] == 1) { ?>
																							<span class="badge badge-pill badge-success"><?php echo $invoices_unPaid['Status'] ?></span>
																						<?php } else if ($invoices_unPaid['Value_Status'] == 2) { ?>
																							<span class="badge badge-pill badge-danger"><?php echo $invoices_unPaid['Status'] ?></span>
																						<?php } else { ?>
																							<span class="badge badge-pill badge-warning"><?php echo $invoices_unPaid['Status'] ?></span>
																						<?php } ?>
																					</td>
																					<td><?php echo $invoices_unPaid['Note']; ?></td>
																					<td>

																				</tr>
																			<?php } ?>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</div>
												</div>
											</div>
										</div>
									</div>
								</div>
																								

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- Container closed -->

		<!-- Sidebar-right-->
		<?php include('../files_Dashboard/main-rightbar.php'); ?>
		<!--/Sidebar-right-->

		<!-- Message Modal -->
		<!-- action-header end -->

		<!-- msg_card_body -->


		<!--Video Modal -->
		<!-- modal -->

		<!-- Audio Modal -->

		<!-- Footer opened -->
		<?php include("../files_Dashboard/footer.php"); ?>
		<!-- Footer closed -->

	</div>
	<!-- End Page -->

	<!-- Back-to-top -->
	<?php include("../files_Dashboard/main-js.php"); ?>

</body>

</html>