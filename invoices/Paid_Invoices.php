<!doctype html>
<html lang="en" dir="ltr">
<?php include("../files_Dashboard/head.php") ?>
<?php include("../php_controller/check_membership.php"); ?>

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
        <?php @include("../php_controller/Invoices_statusController.php"); ?>
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
                            <h4 class="content-title mb-0 my-auto">الفواتير</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ الفواتير</span>
                        </div>
                    </div>

                </div>
                <!-- breadcrumb -->
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header pb-0">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive hoverable-table">

                                <table id="example1" class="table text-md-nowrap">
                                    <thead>

                                        <tr>
                                            <th>#</th>
                                            <th>رقم الفاتوره</th>
                                            <th>تاريخ الاصدار</th>
                                            <th>تاريخ الاستحقاق</th>
                                            <th>القسم</th>
                                            <th>المنتح</th>
                                            <th>الخصم</th>
                                            <th>نسبة الضريبه</th>
                                            <th>قيمة الضريبه</th>
                                            <th>الاجمالي</th>
                                            <th>حالة الفاتوره</th>
                                            <th>الملاحظات</th>
                                            <th>العمليات</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php foreach ($invoices as $invoice) { ?>
                                            <tr>
                                                <td><?= $invoice['id']; ?></td>
                                                <td><?php echo $invoice['invoice_number']; ?></td>
                                                <td><?php echo $invoice['invoice_date']; ?></td>
                                                <td><?php echo $invoice['Due_date']; ?></td>
                                                <td><a href="invoicesDetalis.php?id=<?php echo $invoice['id'] ?>"><?php echo $invoice['section_name']; ?></a></td>
                                                <td><?php echo $invoice['product']; ?></td>
                                                <td><?php echo $invoice['Discount']; ?></td>
                                                <td><?php echo $invoice['Rate_VAT']; ?></td>
                                                <td><?php echo $invoice['Value_VAT']; ?></td>
                                                <td><?php echo $invoice['Total']; ?></td>
                                                <td>
                                                    <?php if ($invoice['Value_Status'] == 1) { ?>
                                                        <span class="badge badge-pill badge-success"><?php echo $invoice['Status'] ?></span>
                                                    <?php } else if ($invoice['Value_Status'] == 2) { ?>
                                                        <span class="badge badge-pill badge-danger"><?php echo $invoice['Status'] ?></span>
                                                    <?php } else { ?>
                                                        <span class="badge badge-pill badge-warning"><?php echo $invoice['Status'] ?></span>
                                                    <?php } ?>
                                                </td>
                                                <td><?php echo $invoice['Note']; ?></td>
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
                                                                    href="edit_invoices.php?id=<?php echo $invoice['id'] ?>">
                                                                    <i class="fas fa-edit text-primary me-2">&nbsp;&nbsp;</i>
                                                                    تعديل الفاتوره
                                                                </a>
                                                            </li>

                                                            <?php if ($invoice['Value_Status'] != 1): ?>
                                                                <li>
                                                                    <a class="dropdown-item"
                                                                        href="show_status_payment.php?id=<?php echo $invoice['id'] ?>">
                                                                        <i class="text-success fa-solid fa-money-bill">&nbsp;&nbsp;</i>
                                                                        حالة الفاتوره
                                                                    </a>
                                                                </li>
                                                            <?php endif ?>

                                                        </ul>
                                                </td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row closed -->
            </div>
            <!-- Container closed -->
        </div>
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