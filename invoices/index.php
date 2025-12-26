
<?php include("../php_controller/InvoicesController.php"); ?>
<?php include("../php_controller/check_membership.php");?>


<?php 
$permissions = $_SESSION['admin_permissions'] ?? [];
?>
<!doctype html>
<html lang="en" dir="ltr">
	<?php include("../files_Dashboard/head.php")?>
	<body class="main-body app sidebar-mini">

		<!-- Loader -->
		<div id="global-loader">
			<img src="../assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
		
		<!-- Page -->
		<div class="page" style="font-family: cairo;">

			<!-- main-sidebar -->
             <?php include("../files_Dashboard/main-sidebar.php");?>
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
								<h4 class="content-title mb-0 my-auto">الفواتير</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة الفواتير</span>
							</div>
						</div>
					
					</div>
					<!-- breadcrumb -->

					<!-- row -->
					<div class="row" style="font-family: cairo;">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
							
								<div class="card-header pb-0">
						
								<a href="add.php" class="btn btn-primary btn-sm"> <i class="fas fa-plus"></i>&nbsp; اضافة فاتوره</a>
                                   
									
								</div>
								
								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table key-buttons text-md-nowrap">
											<thead>
												<tr>
													<th class="border-bottom-0">#</th>
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
													<th class="border-bottom-0">العمليات</th>
												</tr>
											</thead>
											<tbody>
												<?php 
												$i = 0;
												foreach($showAll as $x){
													$i++;
													?>
												<tr>
													<td><?php echo $i?></td>
													<td><?php echo $x['invoice_number'];?></td>
													<td><?php echo $x['invoice_date'];?></td>
													<td><?php echo $x['Due_date'];?></td>
													<td> <a href="invoicesDetalis.php?id=<?php echo $x['id']?>"><?php echo $x['section_name'];?></a></td>
													<td><?php echo $x['product'];?></td>
													<td><?php echo $x['Discount'];?></td>
													<td><?php echo $x['Rate_VAT'];?></td>
													<td><?php echo $x['Value_VAT'];?></td>
													<td><?php echo $x['Total'];?></td>
													<td>
														<?php if($x['Value_Status'] == 1){?>
														<span class="badge badge-pill badge-success"><?php echo $x['Status']?></span>
														<?php }else if($x['Value_Status'] == 2){ ?>
															<span class="badge badge-pill badge-danger"><?php echo $x['Status']?></span>
														<?php }else{?>
															<span class="badge badge-pill badge-warning"><?php echo $x['Status']?></span>
														<?php }?>		
													</td>
													<td><?php echo $x['Note'];?></td>
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
            <a class="dropdown-item d-flex align-items-center py-2" 
               href="edit_invoices.php?id=<?php echo $x['id']?>">
                <i class="fas fa-edit text-primary me-2">&nbsp;&nbsp;</i>
                تعديل الفاتوره
            </a>
        </li>
		
        <li>
            <a class="dropdown-item" 
               href="#" 
               data-bs-toggle="modal" 
               data-bs-target="#delete<?php echo $x['id']; ?>">
                <i class="text-danger fas fa-trash-alt me-2">&nbsp;&nbsp;</i>
                حذف الفاتوره
            </a>
        </li>
<?php if($x['Value_Status'] != 1): ?>
		   <li>
            <a class="dropdown-item" 
               href="show_status_payment.php?id=<?php echo $x['id']?>">
                <i  class="text-success fa-solid fa-money-bill">&nbsp;&nbsp;</i>
                حالة الفاتوره
            </a>
        </li>
		<?php endif; ?>

		<li>
            <a class="dropdown-item" 
               href="#" 
               data-bs-toggle="modal" 
               data-bs-target="#Add_to_archve<?php echo $x['id']; ?>">
                <i class="text-warning fa-solid fa-box-archive">&nbsp;&nbsp;</i>
                نقل الي الارشيف
            </a>
        </li>

		
		<li>
            <a class="dropdown-item" 
               href="print_invoices.php?id=<?php echo $x['id']?>">
                <i class="text-success fa-solid fa-print">&nbsp;&nbsp;</i>
               طباعه
            </a>
			
        </li>
    </ul>
</div>

												
											   </td>
														
												</tr>
											<?php 
												include("destroyInvoices.php");
												include("send_to_archve.php");
											}

										?>
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

		<!-- Button trigger modal -->


<!-- Modal -->

	</body>
</html>


