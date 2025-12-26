<!doctype html>
<html lang="en" dir="ltr">
	<?php include("../files_Dashboard/head.php")?>
    <?php include("../php_controller/check_membership.php");?>
	<body class="main-body app sidebar-mini">
		<?php @include("../php_controller/Invoices_statusController.php")?>
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
								<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Empty</span>
							</div>
						</div>
						<div class="d-flex my-xl-auto right-content">
							<div class="pr-1 mb-3 mb-xl-0">
								<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
							</div>
							<div class="pr-1 mb-3 mb-xl-0">
								<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
							</div>
							<div class="pr-1 mb-3 mb-xl-0">
								<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
							</div>
							<div class="mb-3 mb-xl-0">
								<div class="btn-group dropdown">
									<button type="button" class="btn btn-primary">14 Aug 2019</button>
									<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
										<a class="dropdown-item" href="#">2015</a>
										<a class="dropdown-item" href="#">2016</a>
										<a class="dropdown-item" href="#">2017</a>
										<a class="dropdown-item" href="#">2018</a>
									</div>
								</div>
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
										
										<table id="example-delete" class="table text-md-nowrap">
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
											<?php foreach($parts as $part){?>
											<tr>
											 <td><?= $part['id']; ?></td>
                                                <td><?php echo $part['invoice_number']; ?></td>
                                                <td><?php echo $part['invoice_date']; ?></td>
                                                <td><?php echo $part['Due_date']; ?></td>
                                                <td><a href="invoicesDetalis.php?id=<?php echo $part['id'] ?>"><?php echo $part['section_name']; ?></a></td>
                                                <td><?php echo $part['product']; ?></td>
                                                <td><?php echo $part['Discount']; ?></td>
                                                <td><?php echo $part['Rate_VAT']; ?></td>
                                                <td><?php echo $part['Value_VAT']; ?></td>
                                                <td><?php echo $part['Total']; ?></td>
                                                <td>
                                                    <?php if ($part['Value_Status'] == 1) { ?>
                                                        <span class="badge badge-pill badge-success"><?php echo $part['Status'] ?></span>
                                                    <?php } else if ($part['Value_Status'] == 2) { ?>
                                                        <span class="badge badge-pill badge-danger"><?php echo $part['Status'] ?></span>
                                                    <?php } else { ?>
                                                        <span class="badge badge-pill badge-warning"><?php echo $part['Status'] ?></span>
                                                    <?php } ?>
                                                </td>
                                                <td><?php echo $part['Note']; ?></td>
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
                                                                    href="edit_invoices.php?id=<?php echo $part['id'] ?>">
                                                                    <i class="fas fa-edit text-primary me-2">&nbsp;&nbsp;</i>
                                                                    تعديل الفاتوره
                                                                </a>
                                                            </li>
		
											</tr>
										    <?php }?>
									
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
			  <?=  include("../files_Dashboard/main-rightbar.php")?>

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