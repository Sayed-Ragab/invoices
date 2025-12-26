<?php include("../php_controller/check_membership.php");?>

<div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true" style="font-family: cairo;">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">اضافة منتج</h6><button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="section_name">اسم المنتج</label>
                        <input type="text" class="form-control" id="product_name" name="product_name">
                    </div>
                    <div class="form-group">
                        <label for="section_name">القسم</label>
                        <select class="form-control" id="section_id" name="section_id">
                            <option value="" selected disabled>--حدد القسم--</option>
                            <?php foreach($sections as $section){?>
                            <option value="<?php echo $section['id'];?>"><?php echo $section['section_name'];?></option>
                            <?php 
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Note">ملاحظات</label>
                        <textarea class="form-control" id="Note" name="Note" rows="3"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-outline-success" type="submit" name="add">تاكيد</button>
                        <button class="btn btn-outline-danger" data-dismiss="modal" type="button">الغاء</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>