
<?php @include("../php_controller/check_membership.php");?>
<!doctype html>
<html lang="en" dir="ltr">
<?php include("../files_Dashboard/head.php") ?>
<?php @include("../php_controller/userController.php");?>

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
                            <h3 class="content-title mb-0 my-auto">المستخدمنن</h3><span class="text-muted mt-1 tx-13 mr-2 mb-0">/<strong>اضافة مستخدم جديد</strong></span>
                        </div>
                    </div>
                
                </div>
                <div class="row" style="font-family: cairo;">

                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="POST"  autocomplete="off" onsubmit="myFunction()">
                                  
                                 
                    <div class="">

                        <div class="row mg-b-20">
                            <div class="parsley-input col-md-6" id="fnWrapper">
                                <label>اسم المستخدم: <span class="tx-danger">*</span></label>
                                <input class="form-control form-control-sm mg-b-20"
                                    data-parsley-class-handler="#lnWrapper" name="name" required="" type="text">
                            </div>

                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label>البريد الالكتروني: <span class="tx-danger">*</span></label>
                                <input class="form-control form-control-sm mg-b-20"
                                    data-parsley-class-handler="#lnWrapper" name="email" required="" type="email">
                            </div>
                        </div>

                    </div>
                          <div class="row mg-b-20">
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label>كلمة المرور: <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                name="password" required="" type="password">
                        </div>

                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label> تاكيد كلمة المرور: <span class="tx-danger">*</span></label>
                            <input class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                name="confirm-password" required="" type="password">
                        </div>
                    </div>

                     <div class="row row-sm mg-b-30">
                        <div class="col-lg-12">
                            <label class="form-label">حالة المستخدم</label>
                            <select name="status" id="select-beast" class="form-control  nice-select  custom-select" name="status">
                                <option value="active">مفعل</option>
                                <option value="inactive">غير مفعل</option>
                            </select>
                        </div>
                    </div>

                  
                    <div class="form-group col-lg-12 module-div">
                        <label> </label>
                        <div class="clearfix"></div>
                        <div class="row">
                                 <?php foreach ($modules as $module) { ?>
                                <div class="col-sm-4">
                                   
                                    <div class="custom-control custom-checkbox">
                                    
                                       <input type="checkbox" name="module_name[]" value="<?php echo $module['id']; ?>">
                                                                <?php echo $module['module_name']; ?>
                                    </div>
                                </div>
                                    <?php }?>
                        </div>
                    </div>
             
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button  name="add" class="btn btn-main-primary pd-x-20" type="submit">تاكيد</button>
                    </div>

                                      


                                    
                                </form>

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
    
  <?=  include("../files_Dashboard/main-rightbar.php")?>

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