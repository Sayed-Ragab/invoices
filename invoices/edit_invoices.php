 <?php include("../php_controller/InvoicesController.php");?>

<!doctype html>
<html lang="en" dir="ltr">
<?php include("../files_Dashboard/head.php") ?>

<body class="main-body app sidebar-mini">

    <!-- Loader -->
    <div id="global-loader">
        <img src="../assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page" style="font-family: cairo;">

        <!-- main-sidebar -->
        <?php include("../files_Dashboard/main-sidebar.php"); ?>
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
                            <h3 class="content-title mb-0 my-auto">الفواتير</h3><span class="text-muted mt-1 tx-13 mr-2 mb-0">/<strong>تعديل فاتوره</strong></span>
                        </div>
                    </div>
                
                </div>
               
                <div class="row" style="font-family: cairo;">

                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="#" method="POST" autocomplete="off" enctype="multipart/form-data">
                                    <?php foreach($updates as $update){?>
                                    <div class="row">
                                        <div class="col">
                                            <label for="inputName" class="control-label">رقم الفاتورة</label>
                                            <input type="hidden" id="inputName" name="id" value="<?php echo $update['id']; ?>">
                                            <input type="text" class="form-control" id="inputName" name="invoice_number" value="<?php echo $update['invoice_number'];?>">
                                              
                                        </div>
                                        <div class="col">
                                            <label>تاريخ الفاتورة</label>
                                            <input class="form-control fc-datepicker" id="invoice_Date" name="invoice_date" placeholder="YYYY-MM-DD"
                                                type="text" value="<?php echo $update['invoice_date'];?>">
                                        </div>
                                        <div class="col">
                                            <label>تاريخ الاستحقاق</label>
                                            <input class="form-control fc-datepicker" id="Due_date" name="Due_date" placeholder="YYYY-MM-DD"
                                                type="text" value="<?php echo $update['Due_date']?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="inputName" class="control-label">القسم</label>
                                            <select name="section_id" id="Section" class="form-control SlectBox">
                                              
                                                  <?php foreach($shows as $show){?>
                                           
                                              <option value="<?php echo $show['id']?>"<?php echo($show['id'] == $update['section_id'])   ? 'selected' : ''?>><?php echo $show['section_name']; ?></option>
                   
                                                
                                                <?php }?>
                                                
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="inputName" class="control-label">المنتج</label>
                                            <select id="product" name="product" class="form-control">
                                            <option value="<?php echo $update['product']?>"> <?php echo $update['product']?></option>                                           
                                        </select>
                                        </div>
                                        <div class="col">
                                            <label for="inputName" class="control-label">مبلغ التحصيل</label>
                                            <input type="text" class="form-control" id="Amount_collection" name="Amount_collection" value="<?php echo $update['Amount_collection'];?>">
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col">
                                            <label for="inputName" class="control-label">مبلغ العمولة</label>
                                             <span id="error_commission"></span>
                                            <input type="text" class="form-control form-control-lg" id="Amount_Commission"
                                                name="Amount_Commission" value="<?php echo $update['Amount_Commission'];?>">
                                        </div>

                                        <div class="col">
                                            <label for="inputName" class="control-label">الخصم</label>
                                            <input type="text" class="form-control form-control-lg" id="Discount" name="Discount"
                                              
                                                value="<?php echo $update['Discount'];?>">
                                        </div>

                                        <div class="col">
                                            <label for="inputName" class="control-label">نسبة ضريبة القيمة المضافة</label>
                                            <select name="Rate_VAT" id="Rate_VAT" value="" class="form-control" onchange="myFunction()">

                                                <option value="<?php echo $update['Rate_VAT']?>"><?php echo $update['Rate_VAT']?></option>
                                                <option value="5%">5%</option>
                                                <option value="10%">10%</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="inputName" class="control-label">قيمة ضريبة القيمة المضافة</label>
                                            <input type="text" class="form-control" id="Value_VAT" name="Value_VAT" value="<?php echo $update['Value_VAT']?>" readonly>
                                        </div>

                                        <div class="col">
                                            <label for="inputName" class="control-label">الاجمالي شامل الضريبة</label>
                                            <input type="text" class="form-control" id="Total" name="Total" value="<?php echo $update['Total']?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleTextarea">ملاحظات</label>
                                            <textarea class="form-control" id="exampleTextarea" name="Note" rows="3" id="note"><?php echo $update['Note']?></textarea>
                                        </div>
                                    </div><br>

                                    <p class="text-danger">* صيغة المرفق txt, pdf, jpeg ,jpg , png </p>
                                    <h5 class="card-title">المرفقات</h5>

                    
                                         <div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									
									<div>
                                    <input type="file" name="pic" class="dropify"
       data-height="100"
       accept=".jpg, .png, image/jpeg, image/png, .pdf, .txt">
									</div>
                                  
								</div>
							</div>
						</div>
					</div>                
		   

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary" name="update">حفظ التغيرات</button>
                                    </div>
                                    <?php }?>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        </div>
                                                    
                <!-- breadcrumb -->

                <!-- row -->

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