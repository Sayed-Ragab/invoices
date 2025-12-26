  <?php @include("../php_controller/check_membership.php");?>

<div class="modal" id="Delete<?php echo $show['id'];?>">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content modal-content-demo">
						<div class="modal-header">
							<h6 class="modal-title">حذف القسم</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
                            <div>
							<b>هل انت متاكد من حذف القسم</b>
                            </div>
                            <form action="" method="POST">
                                <div class="form-group">
                        <label for="section_name"><b>اسم القسم</b></label>
                        <input type="hidden" name="id" value="<?php echo $show['id'];?>">
                        <input type="text" class="form-control"  name="section_name" value="<?php echo $show['section_name'];?>" readonly>
                    </div>
                    <div class="modal-footer">
							<button class="btn ripple btn-danger" type="submit">تاكيد الحذف</button>
							<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">الغاء</button>
						</div>
               			 </form>
						</div>
						
					</div>
				</div>
			</div>