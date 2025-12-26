<!doctype html>
<html lang="en" dir="ltr">
	<?php include("../files_Dashboard/head.php")?>
	<?php include("../php_controller/check_membership.php");?>
	<body class="main-body app sidebar-mini">
  <style>
        @media print {
            #print_Button {
                display: none;
            }
        }

    </style>
		<!-- Loader -->
		<div id="global-loader">
			<img src="../assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
		<?php @include("../php_controller/InvoicesController.php");?>
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
								<h4 class="content-title mb-0 my-auto">الفواتير</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ طباعة الفاتوره</span>
							</div>
						</div>
					
					</div>
					<!-- breadcrumb -->

					<!-- row -->
					<div class="row row-sm">
						<div class="col-md-12 col-xl-12">
							<div class=" main-content-body-invoice" id="print">
								<div class="card card-invoice">
									<div class="card-body">
										<div class="invoice-header">
											<h1 class="invoice-title">فاتورة تحصيل</h1>
											<div class="billed-from">
												<h6>BootstrapDash, Inc.</h6>
												<p>201 Something St., Something Town, YT 242, Country 6546<br>
												Tel No: 324 445-4544<br>
												Email: youremail@companyname.com</p>
											</div><!-- billed-from -->
										</div><!-- invoice-header -->
										<div class="row mg-t-20">
											<div class="col-md">
												<label class="tx-gray-600">Billed To</label>
												<div class="billed-to">
													<h6>Juan Dela Cruz</h6>
													<p>4033 Patterson Road, Staten Island, NY 10301<br>
													Tel No: 324 445-4544<br>
													Email: youremail@companyname.com</p>
												</div>
											</div>
											<?php foreach($prints as $print){?>
											<div class="col-md">
												
												<label class="tx-gray-600">معلومات الفاتوره</label>
												<p class="invoice-info-row"><span>رقم الفاتوره</span> <span><?php echo $print['invoice_number']?></span></p>
												<p class="invoice-info-row"><span>تاريخ الصدار</span> <span><?php echo $print['invoice_date']?></span></p>
												<p class="invoice-info-row"><span>تاريخ الاستحقاق</span> <span><?php echo $print['Due_date']?></span></p>
												<p class="invoice-info-row"><span>الاقسام</span> <span><?php echo $print['section_name']?></span></p>
												
											</div>
												
										</div>
										<div class="table-responsive mg-t-40">
											<table class="table table-invoice border text-md-nowrap mb-0">
												<thead>
												  <tr>
                                     			   <th class="wd-20p">#</th>
                                        			<th class="wd-40p">المنتج</th>
                                     			   <th class="tx-center">مبلغ التحصيل</th>
                                      				  <th class="tx-right">مبلغ العمولة</th>
                                      				  <th class="tx-right">الاجمالي</th>
                               					     </tr>
												</thead>
												<tbody>
													<tr>
														<?php $total_sum = $print['Amount_collection'] + $print['Amount_Commission'];?>
														<td><?php echo $print['id']?></td>
														<td class="tx-12"><?php echo $print['product']?></td>
														<td class="tx-center"><?php echo $print['Amount_collection']?></td>
														<td class="tx-right"><?php echo $print['Amount_Commission']; ?></td>
													<td class="tx-right"><?php echo number_format($total_sum,0,'',',') ?></td>
													</tr>
													
													<tr>
														<td class="valign-middle" colspan="2" rowspan="4">
															<div class="invoice-notes">
															
																
															</div><!-- invoice-notes -->
														</td>
														<td class="tx-right">الاجمالي</td>
														<td class="tx-right" colspan="2"><?php echo number_format($total_sum,0,'',',') ?></td>
													</tr>
													<tr>
														<td class="tx-right">نسبة الضريبة</td>
														<td class="tx-right" colspan="2"><?php print($print['Rate_VAT'])?></td>
													</tr>
													<tr>
														<td class="tx-right">الخصم</td>
														<td class="tx-right" colspan="2"><?php echo $print['Discount']?></td>
													</tr>
													<tr>
														<td class="tx-right tx-uppercase tx-bold tx-inverse">الاجمالي شامل الضريبه</td>
														<td class="tx-right" colspan="2">
															<h4 class="tx-primary tx-bold"><?php echo $print['Total']?></h4>
														</td>
													
													</tr>
														
												</tbody>
											</table>
										
										</div>
										<?php  }?>
										<hr class="mg-b-40">
										
										 <button class="btn btn-danger  float-left mt-3 mr-2" id="print_Button" onclick="printDiv()"> <i
                                class="mdi mdi-printer ml-1"></i>طباعة</button>
										
									</div>
								</div>
							</div>
						</div><!-- COL-END -->
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
		<?php include("../files_Dashboard/footer.php")?>
			<!-- Footer closed -->
			
		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<?php include("../files_Dashboard/main-js.php");?>
 	
	</body>
		<script type="text/javascript">
        function printDiv() {
            var printContents = document.getElementById('print').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }

    </script>
</html>