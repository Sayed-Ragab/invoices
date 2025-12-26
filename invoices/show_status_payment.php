
<!doctype html>
<html lang="en" dir="ltr">
	<?php include("../files_Dashboard/head.php")?>
	<body class="main-body app sidebar-mini">

		<!-- Loader -->
		<div id="global-loader">
			<img src="../assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
		<?php @include("../php_controller/Invoices_statusController.php");?>
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
						<div class="card">
                            <div class="card-body">
                                <form action="#" method="POST">
                                    <?php foreach($show_Alls as $stat){?>
                                    <div class="row">
                                        <div class="col">
                                           
                                            <label for="inputName" class="control-label">رقم الفاتورة</label>
                                             <input type="hidden" name="id" value="<?php echo $stat['id']?>">
                                            <input type="text" class="form-control" id="inputName" name="invoice_number" value="<?php echo $stat['invoice_number']; ?>" readonly>
                                        </div>
                                        <div class="col">
                                            <label>تاريخ الفاتورة</label>
                                            <input class="form-control fc-datepicker" id="invoice_Date" name="invoice_date" placeholder="YYYY-MM-DD"
                                                type="text" value="<?php echo $stat['invoice_date']?>" readonly>
                                        </div>
                                        <div class="col">
                                            <label>تاريخ الاستحقاق</label>
                                            <input class="form-control fc-datepicker" id="Due_date" name="Due_date" placeholder="YYYY-MM-DD"
                                                type="text" value="<?php echo $stat['Due_date']?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="inputName" class="control-label">القسم</label>
                                            <select name="section_id" id="Section" class="form-control SlectBox" readonly>
                                              
                                                
                                                <option value="" >حدد القسم</option>
                                                <?php foreach($shows as $show){?>
                                                <option value="<?php echo $show['id'];?>"><?php echo $show['section_name'];?></option>
                                                <?php }?>
                                                
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="inputName" class="control-label">المنتج</label>
                                            <select id="product" name="product"  class="form-control" readonly>
                                                 <option value="<?php echo $stat['product']?>"> <?php echo $stat['product']?></option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="inputName" class="control-label">مبلغ التحصيل</label>
                                            <input type="text" class="form-control" id="Amount_collection" name="Amount_collection" value="<?php echo $stat['Amount_collection'];?>"readonly>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col">
                                            <label for="inputName" class="control-label">مبلغ العمولة</label>
                                             <span id="error_commission"></span>
                                            <input type="text" class="form-control form-control-lg" id="Amount_Commission"
                                                name="Amount_Commission" value="<?php echo $stat['Amount_Commission'];?>" readonly>
                                        </div>

                                        <div class="col">
                                            <label for="inputName" class="control-label">الخصم</label>
                                            <input type="text" class="form-control form-control-lg" id="Discount" name="Discount" value="<?php echo $stat['Discount']?>" readonly>
                                        </div>

                                        <div class="col">
                                            <label for="inputName" class="control-label">نسبة ضريبة القيمة المضافة</label>
                                            <select name="Rate_VAT" id="Rate_VAT" class="form-control" onchange="myFunction()" readonly>

                                                <option value="<?php echo $stat['Rate_VAT'];?>" ><?php echo $stat['Rate_VAT'];?></option>
                                                <option value="5%">5%</option>
                                                <option value="10%">10%</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="inputName" class="control-label">قيمة ضريبة القيمة المضافة</label>
                                            <input type="text" class="form-control" id="Value_VAT" value="<?php echo $stat['Value_VAT']?>" name="Value_VAT" readonly>
                                        </div>

                                        <div class="col">
                                            <label for="inputName" class="control-label">الاجمالي شامل الضريبة</label>
                                            <input type="text" class="form-control" id="Total" value="<?php echo $stat['Total']?>" name="Total" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleTextarea">ملاحظات</label>
                                            <textarea class="form-control" id="exampleTextarea" name="Note" rows="3" id="note" readonly><?php echo $stat['Note']?></textarea>
                                        </div>
                                    </div><br>
                                    <div class="row">
                            <div class="col">
                                <label for="exampleTextarea">حالة الدفع</label>
                                <select class="form-control" id="Status" name="Status" required>
                                    <option selected="true" disabled="disabled">-- حدد حالة الدفع --</option>
                                    <option value="مدفوعة">مدفوعة</option>
                                    <option value="مدفوعة جزئيا">مدفوعة جزئيا</option>
                                </select>
                            </div>

                            <div class="col">
                                <label>تاريخ الدفع</label>
                                <input class="form-control fc-datepicker" name="Payment_Date" placeholder="YYYY-MM-DD"
                                    type="text" required>
                            </div>
                        </div><br>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary" name="status_update"><b>حفظ البيانات</b></button>
                                    </div>
                                   <?php }?>
                                </form>

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