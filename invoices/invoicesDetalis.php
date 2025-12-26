<!doctype html>
<html lang="en" dir="ltr">
<?php include("../files_Dashboard/head.php") ?>
<?php @include("../php_controller/InvoicesDetailsController.php");?>
<?=  @include("../php_controller/check_membership.php")?>

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
							<h4 class="content-title mb-0 my-auto">المرفقات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ مرفقات  الفاتوره</span>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->

				<!-- row -->
				<div class="row" style="font-family: cairo;">
					<div class="col-xl-12">
						<!-- div -->
						<div class="card mg-b-20" id="tabs-style2">
							<div class="card-body">
								<div class="text-wrap">
									<div class="example">
										<div class="panel panel-primary tabs-style-2">
											<div class=" tab-menu-heading">
												<div class="tabs-menu1">
													<!-- Tabs -->
													<ul class="nav panel-tabs main-nav-line">
														<li><a href="#tab4" class="nav-link active" data-toggle="tab">معلومات الفاتوره</a></li>
														<li><a href="#tab5" class="nav-link" data-toggle="tab">حالات الدفع</a></li>
														<li><a href="#tab6" class="nav-link" data-toggle="tab">المرفقات</a></li>
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
																		<table class="table table-striped mg-b-0 text-md-nowrap">
																			<thead>
																				<tr>
																					<th>م</th>
																					<th>رقم الفاتوره</th>
																					<th>تاريخ الاصدار</th>
																					<th>تاريخ الاستحقاق</th>
																					<th>القسم</th>
																					<th>المنتج</th>
																					<th>مبلغ التحصيل</th>
																					<th>مبلغ العموله</th>
																					<th>الخصم</th>
																					<th>نسبة الضريبه</th>
																					<th>قيمة الضريبه</th>
																					<th>الاجمالي مع الضريبه</th>
																					<th>حالة الفاتوره</th>
																				</tr>
																			</thead>
																			<tbody>
																				<?php foreach ($shows as $show) { ?>
																					<tr>
																						<th scope="row"><?php echo $show['id']; ?></th>
																						<td><?php echo $show['invoice_number']; ?></td>
																						<td><?php echo $show['invoice_date']; ?></td>
																						<td><?php echo $show['Due_date']; ?></td>
																						<td><?php echo $show['section_name'] ?></td>
																						<td><?php echo $show['product']; ?></td>
																						<td><?php echo $show['Amount_collection']; ?></td>
																						<td><?php echo $show['Amount_Commission']; ?></td>
																						<td><?php echo $show['Discount']; ?></td>
																						<td><?php echo $show['Rate_VAT']; ?></td>
																						<td><?php echo $show['Value_VAT']; ?></td>
																						<td><?php echo $show['Total']; ?></td>
																						<td>
																							<?php if ($show['Value_Status'] == 1) { ?>
																								<span class="badge badge-pill badge-success"><?php echo $show['Status'] ?></span>
																							<?php } else if ($show['Value_Status'] == 2) { ?>
																								<span class="badge badge-pill badge-danger"><?php echo $show['Status'] ?></span>
																							<?php } else { ?>
																								<span class="badge badge-pill badge-warning"><?php echo $show['Status'] ?></span>
																							<?php } ?>
																						</td>

																					</tr>
																				<?php } ?>
																			</tbody>
																		</table>
																	</div><!-- bd -->
																</div><!-- bd -->
															</div><!-- bd -->
														</div>


													</div>
													<div class="tab-pane" id="tab5">
																<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-bordered mg-b-0 text-md-nowrap">
											<thead>
												<tr>
													 <th>م</th>
                                                     <th>رقم الفاتورة</th>
                                                     <th>نوع المنتج</th>
                                                     <th>القسم</th>
                                                     <th>حالة الدفع</th>
                                                     <th>تاريخ الدفع </th>
                                                     <th>ملاحظات</th>
                                                     <th>تاريخ الاضافة </th>
                                                    <th>المستخدم</th>
												</tr>
											</thead>
											<tbody>
											    <?php foreach($details as $detail){?>
												<tr>
													<th scope="row"><?php echo $detail['id'];?></th>
													<td><?php echo $detail['invoice_number'];?></td>
													<td><?php echo $detail['product'];?></td>
													<td><?php echo $detail['section_name'];?></td>
													<td>
														<?php if($detail['value_status']==1){?>
															<span class="badge badge-pill badge-success"><?php echo $detail['status'] ?></span>
														<?php }elseif($detail['value_status']==2){?>
															<span class="badge badge-pill badge-danger"><?php echo $detail['status'] ?></span>
														<?php }else{ ?>	
														<span class="badge badge-pill badge-warning"><?php echo $detail['status'] ?></span>

														<?php } ?>		
												</td>
												<td>
													<?php echo  $detail['Payment_Date']?>
												</td>
												<td>
													<?php echo  $detail['note']?>
												</td>
												<td>
													<?php echo $detail['Created_at']?>
												</td>
												<td>
													<?php echo  $detail['users']?>
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
						</div>

						<div class="tab-pane" id="tab6">
							<div class="col-xl-12">
				        	<div class="col-xl-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped mg-b-0 text-md-nowrap">
											<thead>
												<tr>
													<th>م</th>
													<th>اسم الملف</th>
													<th>قام بالاضافه</th>
													<th>تاريخ الاضافه</th>
													<th>العمليات</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($Attachments as $Attachment){?>
												<tr>
													<th scope="row"><?php echo $Attachment['id'];?></th>
													<td><?php echo $Attachment['filename'];?></td>
													<td><?php echo $Attachment['create_by'];?></td>
													<td><?php echo $Attachment['Created_at'];?></td>
													<td>
														<a class="btn btn-outline-success btn-sm" href="invoices_upload/<?= $Attachment['invoice_number']; ?>/<?= $Attachment['filename']; ?>" target="_blank" role="button">&nbsp; عرض</a>
                                                       <a class="btn btn-outline-info btn-sm" href="invoicesDetalis.php?download_id=<?=  $Attachment['id']; ?>" role="button"><i class="fas fa-download"></i>&nbsp; تحميل</a>														 
													 <a class="modal-effect btn btn-sm btn-outline-danger" data-effect="effect-scale" data-toggle="modal" href="#delete<?php echo $Attachment['id']; ?>"><i class="las la-trash">&nbsp; حذف</i></a>

												    <?php
													 include("destroyAttachment.php");
											      	  }
											        ?>
												
													</td>
											</tbody>
										</table>
									</div><!-- bd -->
								</div><!-- bd -->
							</div><!-- bd -->
						</div>
					</div>					
					</div>
					</div>
	
	
				
					</div>

									<!---Prism Pre code-->
					</div>
								<!---Prism Pre code-->
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
		</div>
	<!-- Sidebar-right-->

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