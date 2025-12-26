<!doctype html>
<html lang="en" dir="ltr">
	<?php include("../files_Dashboard/head.php")?>
	<body class="main-body app sidebar-mini">
	<?php @include("../php_controller/ReportsController.php")?>
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
						
					</div>
					<!-- breadcrumb -->

					<!-- row -->
					<div class="row">
                        <div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									
							
                                    <form method="POST" action="" autocomplete="off">
                                <div class="col-lg-3">
                                <label class="rdiobox">
                                    <input checked name="radio" type="radio" value="1"  id="type_div">
							        <span>بحث بنوع الفاتورة</span></label>
                                 </div>



                                 <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                               <label class="rdiobox"><input name="radio" value="2" type="radio" ><span>بحث برقم الفاتورة
                            </span></label>
                             </div><br><br>

                             <div class="row">
                                 <div class="col-lg-3 mg-t-20 mg-lg-t-0" id="type">
                            <p class="mg-b-10">تحديد نوع الفواتير</p><select class="form-control select2" name="type"
                                required>
                              
								     <option value="<?= $type ??'حدد نوع الفاتوره' ?>" ><?= $type ??'حدد نوع الفاتوره' ?></option>
                                <option value="الكل">الكل</option>
								<option value="مدفوعة">الفواتير المدفوعة</option>
                                <option value="غير مدفوعه">الفواتير الغير مدفوعة</option>
                                <option value="مدفوعة جزئيا">الفواتير المدفوعة جزئيا</option>
                            </select>
                        </div><!-- col-4 -->
                            <div class="col-lg-3 mg-t-20 mg-lg-t-0" id="invoice_number">
                            <p class="mg-b-10">البحث برقم الفاتورة</p>
                            <input type="text" class="form-control" id="invoice_number" name="invoice_number">

                        </div><!-- col-4 -->
                             <div class="col-lg-3" id="start_at">
                            <label for="exampleFormControlSelect1">من تاريخ</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                </div><input class="form-control fc-datepicker" value="<?= $start_at ??'' ?>"
                                    name="start_at" placeholder="YYYY-MM-DD" type="text">
                            </div><!-- input-group -->
                        </div>

                        <div class="col-lg-3" id="end_at">
                            <label for="exampleFormControlSelect1">الي تاريخ</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                </div><input class="form-control fc-datepicker" name="end_at"
                                     value="<?=  $end_at ?? '' ?>" placeholder="YYYY-MM-DD" type="text">
                            </div><!-- input-group -->
                        </div>
                    </div><br>
                            <div class="row">
                        <div class="col-sm-1 col-md-1">
                            <button class="btn btn-primary btn-sm">بحث</button>
                        </div>
                    </div>
                             
                     
                                    </form>
									
							</div>		
								<div class="card-body">
									<div class="table-responsive">
										<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){?>
										<table id="example" class="table key-buttons text-md-nowrap">
											<thead>
												
												<tr>
											   	<th class="border-bottom-0">#</th>
                                 			   	<th class="border-bottom-0">رقم الفاتورة</th>
                                    		  	<th class="border-bottom-0">تاريخ القاتورة</th>
                                    		 	<th class="border-bottom-0">تاريخ الاستحقاق</th>
                                    			<th class="border-bottom-0">المنتج</th>
                                		    	<th class="border-bottom-0">القسم</th>
                                   			 	<th class="border-bottom-0">الخصم</th>
												<th class="border-bottom-0">نسبة الضريبة</th>
												<th class="border-bottom-0">قيمة الضريبة</th>
												<th class="border-bottom-0">الاجمالي</th>
												<th class="border-bottom-0">الحالة</th>
												<th class="border-bottom-0">ملاحظات</th>
											  </tr>
											</thead>
											<tbody>
												<?php foreach($invoices as $invo){?>
												<tr>
													<td><?=  $invo['id']?></td>
													<td><?=  $invo['invoice_number']?></td>
													<td><?=  $invo['invoice_date']?></td>
													<td><?=  $invo['Due_date']?></td>
													<td><?=  $invo['product']?></td>
													<td> <a href="invoicesDetalis.php?id=<?php echo $invo['id']?>"><?php echo $invo['section_name'];?></a></td>
													<td><?=  $invo['Amount_collection']?></td>
													<td><?=  $invo['Amount_Commission']?></td>
													<td><?=  $invo['Discount']?></td>
													<td><?=  $invo['Value_VAT']?></td>
													<td><?=  $invo['Rate_VAT']?></td>
													<td><?=  $invo['Total']?></td>
													<td><?=  $invo['Value_VAT']?></td>
													<td>
														<?php if($invo['Value_Status'] == 1){?>
														<span class="badge badge-pill badge-success"><?php echo $invo['Status']?></span>
														<?php }else if($invo['Value_Status'] == 2){ ?>
															<span class="badge badge-pill badge-danger"><?php echo $invo['Status']?></span>
														<?php }else{?>
															<span class="badge badge-pill badge-warning"><?php echo $invo['Status']?></span>
														<?php }?>		
													</td>
													<td><?php echo $invo['Note'];?></td>
													<td>
									
												</tr>
											<?php }?>
											</tbody>
										</table>
										<?php }?>
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

	</body>
</html>
