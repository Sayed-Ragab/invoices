<?php @include("../php_controller/userController.php")?>
<!doctype html>
<html lang="en" dir="ltr">
<?php include("../files_Dashboard/head.php") ?>
<?php @include("../php_controller/check_membership.php") ?>
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
                            <h4 class="content-title mb-0 my-auto">المستخدمين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة المستخدمين</span>
                        </div>
                    </div>

                </div>
                <!-- breadcrumb -->

                <!-- row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card mg-b-20">
                            <div class="card-header pb-0">

                                <a href="Add.php" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i>&nbsp;اضافة مستخدم جديد</a>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="table key-buttons text-md-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="wd-10p border-bottom-0">#</th>
                                                    <th class="wd-15p border-bottom-0">اسم المستخدم</th>
                                                    <th class="wd-20p border-bottom-0">البريد الالكتروني</th>
                                                    <th class="wd-15p border-bottom-0">حالة المستخدم</th>
                                                    <th class="wd-10p border-bottom-0">العمليات</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 0;
                                                foreach ($users as $user) {
                                                    $i++
                                                  ?>

                                                    <tr>


                                                        <td><?php echo $i ?></td>
                                                        <td><?php echo $user['name'] ?></td>
                                                        <td><?php echo $user['email'] ?></td>
                                                        <td>
                                                            <?php if ($user['status'] == "active") { ?>
                                                                <span class="label text-success d-flex">
                                                                    <div class="dot-label bg-success ml-1"></div><?php echo "مفعل"?>
                                                                </span>
                                                            <?php } else { ?>
                                                                <span class="label text-danger d-flex">
                                                                    <div class="dot-label bg-danger ml-1"></div>
                                                                     غير مفعل
                                                                </span>

                                                            <?php } ?>

                                                        </td>
                                                    

                                                        <td>
                                                          <a href="edit.php?id=<?php echo $user['id']?>" class="btn btn-outline-primary btn-rounded btn-sm">تعديل</a>
                                                          <a href="#" class="btn btn-outline-danger btn-rounded btn-sm" data-bs-toggle="modal" data-bs-target="#delete<?php echo $edit['id']?>">حذف</a>
                                                        </td>
                                                    </tr>

                                                    <?php
                                                       include("Delete.php"); 
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
        </div>
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
