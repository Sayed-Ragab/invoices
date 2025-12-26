<?php @include("../php_controller/check_membership.php"); ?>
<!doctype html>
<html lang="en" dir="ltr">
<?php include("../files_Dashboard/head.php") ?>
<?php include("../php_controller/Rolecontroller.php") ?>

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
                            <h3 class="content-title mb-0 my-auto">الصلاحيات</h3><span class="text-muted mt-1 tx-13 mr-2 mb-0">/<strong>اضافة صلاحيه</strong></span>
                        </div>
                    </div>

                </div>
                <div class="row" style="font-family: cairo;">

                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="Add.php" method="POST">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="inputName" class="control-label">اضافة صلاحيه </label>
                                            <input type="text" class="form-control" id="inputName" name="role_name">
                                        </div>
                                    </div>
                                    <br>


                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-lg-4">
                                            <ul id="treeview1">
                                                <li><a href="#">الصلاحيات</a>
                                                    <ul>
                                                        <?php foreach ($permissions as $permission) { ?>
                                                            <li style="margin-bottom: 8px;">
                                                                <input type="checkbox" name="module_name[]" value="<?php echo $permission['id']; ?>">
                                                                <?php echo $permission['module_name']; ?>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-sm" name="add"><b>حفظ البيانات</b></button>
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