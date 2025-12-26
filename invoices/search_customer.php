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
                               <form action="" method="POST" autocomplete="off">

                               <div class="row">
                                        <div class="col">
                                            <label for="inputName" class="control-label">القسم</label>
                                         <select name="section_id" id="Section" class="form-control">
                                              
                                                
                                                <option value="" selected disabled>حدد القسم</option>
                                                <?php foreach($sections as $section){?>
                                                <option value="<?php echo $section['id'];?>"><?php echo $section['section_name'];?></option>
                                                <?php }?>
                                                
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="inputName" class="control-label">المنتج</label>
                                            <select id="product" name="product" class="form-control">
                                                                                     
                                        </select>
                                        </div>
                                         <div class="col-lg-3" id="start_at">
                            <label for="exampleFormControlSelect1">من تاريخ</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                </div><input class="form-control fc-datepicker" value=""
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
                                </div><input class="form-control fc-datepicker" value=""
                                    name="end_at" placeholder="YYYY-MM-DD" type="text">
                            </div><!-- input-group -->
                        </div> 
                    </div>
                    <br>
                               <div class="row">
                               <div class="col-sm-1 col-md-1">
                            <button class="btn btn-primary btn-block">بحث</button>
                        </div>
                    </div>
                                                    
                                           

                               </form>
								</div>
								<div class="card-body">
									<div class="table-responsive">
                                        <?php if($_SERVER['REQUEST_METHOD'] == "POST"){?>
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
                                                <?php foreach($shows as $show){?>
												<tr>
													<td><?php echo $show['id']?></td>
													<td><?php echo $show['invoice_number']?></td>
													<td><?php echo $show['invoice_date']?></td>
													<td><?php echo $show['Due_date']?></td>
													<td><?php echo $show['product']?></td>
													<td> <a href="invoicesDetalis.php?id=<?php echo $show['id']?>"><?php echo $show['section_name'];?></a></td>
                                                    <td><?php echo $show['Discount']?></td>
                                                    <td><?php echo $show['Rate_VAT']?></td>
                                                    <td><?php echo $show['Value_VAT']?></td>
                                                    <td><?php echo $show['Total']?></td>
                                                    <td>
														<?php if($show['Value_Status'] == 1){?>
														<span class="badge badge-pill badge-success"><?php echo $show['Status']?></span>
														<?php }else if($show['Value_Status'] == 2){ ?>
															<span class="badge badge-pill badge-danger"><?php echo $show['Status']?></span>
														<?php }else{?>
															<span class="badge badge-pill badge-warning"><?php echo $show['Status']?></span>
														<?php }?>		
													</td>
													<td><?php echo $show['Note'];?></td>
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