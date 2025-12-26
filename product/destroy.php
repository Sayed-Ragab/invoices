<?php include("../php_controller/check_membership.php");?>

<div class="modal" id="destroy<?php echo $show['id'];?>">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content modal-content-demo">
						<div class="modal-header">
							<h6 class="modal-title">حذف المنتجات</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
						<h6>هل انت متاكد من حذف المنتج</h6>
						 <form action="" method="POST">
                                <div class="form-group">
                        <label for="section_name"><b>اسم المنتج</b></label>
                        <input type="hidden" name="id" value="<?php echo $show['id'];?>">
                        <input type="text" class="form-control"  name="product_name" value="<?php echo $show['product_name'];?>" readonly>
                    </div>
                    <div class="modal-footer">
							<button class="btn ripple btn-danger" type="submit" name="delete">تاكيد الحذف</button>
							<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">الغاء</button>
						</div>
                </form>
						</div>
					</div>
				</div>
			</div>