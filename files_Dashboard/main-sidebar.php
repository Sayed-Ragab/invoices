
<?php include("../php_controller/check_membership.php");?>
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
			<aside class="app-sidebar sidebar-scroll" style="font-family: cairo;">
				<div class="main-sidebar-header active">
					<a class="desktop-logo logo-light active" href="../Dashboard/AdminPanal.php"><img src="../assets/img/brand/logo.png" class="main-logo" alt="logo"></a>
					<a class="desktop-logo logo-dark active" href="index.html"><img src="../assets/img/brand/logo-white.png" class="main-logo dark-theme" alt="logo"></a>
					<a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="../assets/img/brand/logo.png" class="logo-icon" alt="logo"></a>
					<a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="../assets/img/brand/logo.png" class="logo-icon dark-theme" alt="logo"></a>
				</div>
				 <?php

   		 if(isset($_SESSION['type'])){

        if($_SESSION['type'] === "admin"){
			 $permissions = $_SESSION['admin_permissions'] ?? [];
            include("main-side-bar-all/admin-side-bar.php");
		
        }if($_SESSION['type'] === "users"){
			$permissions = $_SESSION['user_permissions'] ?? [];
			  include("user-side-bar/user-sidebar.php");	
					


		}
    }
	
    ?>
</aside>
