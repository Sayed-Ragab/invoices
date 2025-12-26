<?php
$permissions = $_SESSION['user_permissions'] ?? '';
?>
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
			<aside class="app-sidebar sidebar-scroll" style="font-family: cairo;">
				<div class="main-sidebar-header active">
					<a class="desktop-logo logo-light active" href="../userDashboard/UserAdminPanal.php"><img src="../assets/img/brand/logo.png" class="main-logo" alt="logo"></a>
					<a class="desktop-logo logo-dark active" href="index.html"><img src="../assets/img/brand/logo-white.png" class="main-logo dark-theme" alt="logo"></a>
					<a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="../assets/img/brand/favicon.png" class="logo-icon" alt="logo"></a>
					<a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="../assets/img/brand/favicon-white.png" class="logo-icon dark-theme" alt="logo"></a>
				</div>
				<div class="main-sidemenu">
					<div class="app-sidebar__user clearfix">
						<div class="dropdown user-pro-body">
							<div class="">
								<img alt="user-img" class="avatar avatar-xl brround" src="../assets/img/faces/6.png"><span class="avatar-status profile-status bg-green"></span>
							</div>
							<div class="user-info">
								<h4 class="font-weight-semibold mt-3 mb-0"><?php echo $_SESSION['name']??'';?></h4>
								
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li class="side-item side-item-category">نظام ادارة الفواتير</li>
						<li class="slide">
							<a class="side-menu__item" href="../userDashboard/UserAdminPanal.php"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">الرئسيه</span></a>
						</li>
           

           
            <?php if(isset($permissions['الاقسام']) || isset($permissions['المنتجات'])): ?>
                <li class="side-item side-item-category">ادارة الاقسام والمنتجات</li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#">
                        <span class="side-menu__label">الاقسام والمنتجات</span>
                        <i class="angle fe fe-chevron-down"></i>
                    </a>
                    <ul class="slide-menu">
                        <?php if(isset($permissions['الاقسام'])): ?>
                            <li><a class="slide-item" href="../Sections/index.php">اضافة قسم</a></li>
                        <?php endif; ?>

                        <?php if(isset($permissions['المنتجات'])): ?>
                            <li><a class="slide-item" href="../product/index.php">اضافة منتج</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

           
			<?php if(isset($permissions['الفواتير'])): ?>
                <li class="side-item side-item-category">الفواتير</li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#">
                        <span class="side-menu__label">الفواتير</span>
                        <i class="angle fe fe-chevron-down"></i>
                    </a>

                    <ul class="slide-menu">
                        <?php if(isset($permissions['قائمة الفواتير'])): ?>
                            
                            <li><a class="slide-item" href="../invoices/index.php">قائمة الفواتير</a></li>
                        <?php endif; ?>

                        <?php if(isset($permissions['الفواتير المدفوعة'])): ?>
                            <li><a class="slide-item" href="../invoices/Paid_Invoices.php">الفواتير المدفوعة</a></li>
                        <?php endif; ?>

                        <?php if(isset($permissions['الفواتير الغير مدفوعة'])): ?>
                            <li><a class="slide-item" href="../invoices/Unpaid_Invoices.php">الفواتير الغير مدفوعة</a></li>
                        <?php endif; ?>

                        <?php if(isset($permissions['الفواتير المدفوعة جزئيا'])): ?>
                            <li><a class="slide-item" href="../invoices/Partially_Paid Invoices.php">الفواتير جزئيا</a></li>
                        <?php endif; ?>

                        <?php if(isset($permissions['ارشيف الفواتير'])): ?>
                            <li><a class="slide-item" href="../invoices/archives.php">الأرشيف</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            
            <?php if(isset($permissions['التقارير'])): ?>
                <li class="side-item side-item-category">التقارير</li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#">
                        <span class="side-menu__label">التقارير</span>
                        <i class="angle fe fe-chevron-down"></i>
                    </a>

                    <ul class="slide-menu">
                        <?php if(isset($permissions['تقرير الفواتير'])): ?>
                            <li><a class="slide-item" href="../invoices/Reports.php">تقارير الفواتير</a></li>
                        <?php endif; ?>

                        <?php if(isset($permissions['تقرير العملاء'])): ?>
                            <li><a class="slide-item" href="../invoices/search_customer.php">تقارير العملاء</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

            
            <?php if(isset($permissions['المستخدمين'])): ?>
                <li class="side-item side-item-category">المستخدمين</li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="#">
                        <span class="side-menu__label">المستخدمين</span>
                        <i class="angle fe fe-chevron-down"></i>
                    </a>

                    <ul class="slide-menu">
                        <?php if(isset($permissions['قائمة المستخدمين'])): ?>
                            <li><a class="slide-item" href="../users/index.php">قائمة المستخدمين</a></li>
                        <?php endif; ?>

                        <?php if(isset($permissions['صلاحيات المستخدمين'])): ?>
                            <li><a class="slide-item" href="../role/index.php">صلاحيات المستخدمين</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>

        </ul>
    </div>
</aside>

	