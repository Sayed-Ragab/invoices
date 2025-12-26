<?php include("../php_controller/check_membership.php");?>
<div class="modal" id="update<?php echo $show['id'];?>">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content modal-content-demo">
						<div class="modal-header">
							<h6 class="modal-title">تعديل القسم</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						 <div class="modal-body">
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <label for="section_name">اسم القسم</label>
                        <input type="hidden" name="id" value="<?php echo $show['id'];?>">
                        <input type="text" class="form-control"  name="section_name" value="<?php echo $show['section_name'];?>">
                    </div>

                    <div class="form-group">
                        <label for="Note">ملاحظات</label>
                        <textarea class="form-control"  name="Note" rows="3"><?php echo $show['Note'];?></textarea>
                      
                        
                    </div>

                    <div class="modal-footer">
                        <button class="btn ripple btn-primary" type="submit" name="edit">تاكيد</button>
                        <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">الغاء</button>
                    </div>
                </form>
            </div>
				
					</div>
				</div>
			</div>