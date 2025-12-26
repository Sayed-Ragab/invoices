   <?php @include("../php_controller/SectionController.php"); ?>
   <?php @include("../php_controller/check_membership.php");?>
   <!doctype html>
   <html lang="en" dir="ltr" style="font-family: cairo;">
   <?php include("../files_Dashboard/head.php"); ?>


   <body class="main-body app sidebar-mini">

       <!-- Loader -->
       <div id="global-loader">
           <img src="../assets/img/loader.svg" class="loader-img" alt="Loader">
       </div>
       <!-- /Loader -->

       <!-- Page -->
       <div class="page">

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
                   <div class="breadcrumb-header justify-content-between" style="font-family: cairo;">
                       <div class="my-auto">
                           <div class="d-flex">
                               <h4 class="content-title mb-0 my-auto">الاقسام</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة الاقسام</span>
                           </div>
                       </div>
                   
                   </div>
                   <!-- breadcrumb -->


                   <!-- row -->

                   <div class="row" style="font-family: cairo;">
                       <div class="col-xl-12">
                           <div class="card mg-b-20">
                               <div class="card-header pb-0">
                                   <div class="d-flex justify-content-between">
                                       <?php include("add.php"); ?>

                                       
                                           <a class="modal-effect btn btn-outline-primary btn-sm" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">اضافة قسم</a>
                                       
                                       <i class="mdi mdi-dots-horizontal text-gray"></i>
                                   </div>

                               </div>
                               <div class="card-body" >
                                   <div class="table-responsive">
                                       <table id="example1" class="table key-buttons text-md-nowrap" >
                                           <thead >
                                               <tr>
                                                   <th class="border-bottom-0">#</th>
                                                   <th class="border-bottom-0">اسم القسم</th>
                                                   <th class="border-bottom-0">الملاحظات</th>
                                                   <th class="border-bottom-0">العمليات</th>

                                               </tr>
                                           </thead>
                                           <tbody>
                                               <?php
                                                foreach ($shows as $show) {
                                                ?>
                                                   <tr>
                                                       <td><?php echo $show['id']; ?></td>
                                                       <td><?php echo $show['section_name']; ?></td>
                                                       <td><?php echo $show['Note']; ?></td>
                                                       <td>
                                                      
                                                               
                                                          <a class="modal-effect btn btn-outline-primary btn-sm" data-effect="effect-scale" data-toggle="modal" href="#update<?php echo $show['id'];?>">تعديل</a>
                                                          <a class="modal-effect btn btn-outline-danger btn-sm" data-effect="effect-scale" data-toggle="modal" href="#Delete<?php echo $show['id'];?>">حذف</a>
                                                       </td>
                                                 
                                                   </tr>
                                                  <?php 
                                                include("update.php");
                                                include("Delete.php");
                                                  ?>
                                                  
                                               <?php
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
  <?=  include("../files_Dashboard/main-rightbar.php")?>

           <!--/Sidebar-right-->

           <!-- Message Modal -->


           <!--Video Modal -->

           <!-- Audio Modal -->


           <!-- Footer opened -->
           <?php include("../files_Dashboard/footer.php"); ?>
           <!-- Footer closed -->

       </div>
       <!-- End Page -->

       <!-- Back-to-top -->
       <?php include("../files_Dashboard/main-js.php"); ?>

   </body>

   </html>