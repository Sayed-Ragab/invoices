

<div class="sidebar sidebar-left sidebar-animate">
				<div class="panel panel-primary card mb-0 box-shadow">
					<div class="tab-menu-heading border-0 p-3">
						<div class="card-title mb-0" >الاشعارات</div>
						<div class="card-options mr-auto">
							<a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
						</div>
					</div>
					<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
						
						<div class="tab-content">
							<div class="tab-pane active " id="side1">
							
							
							
							
								
								
								
							<div class="tab-pane" id="side2">
							
								<div class="list-group list-group-flush ">
									<?php foreach($notifications as $notification){?>
											<a class="d-flex p-3 border-bottom" href="../invoices/invoicesDetalis.php?id=<?php echo $notification['id']?>">	
								<div class="list-group-item d-flex  align-items-center">

									
										<div class="ml-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../assets/img/faces/6.png"><span class="avatar-status bg-success"></span></span>
										</div>
											
										<div>
										
											<strong><?php echo $notification['message']?></strong> 
											<div class="small text-muted">
												 <?= date('d M Y H:i', strtotime($notification['created_at'])) ?>
											</div>
												
										</div>
								
									</div>
										<?php }?>
								
								
									</a>
								
								
									
								</div>
							</div>
						
						</div>
					</div>
				</div>
			</div>