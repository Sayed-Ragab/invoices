<?php include("../php_controller/check_membership.php");?>

<div class="modal fade" id="edit<?php echo $show['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false"
  tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">تعديل المنتجات</h1>
        <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <div class="form-group">
            <label for="section_name">اسم المنتج</label>
            <input type="hidden" name="id" value="<?php echo $show['id'] ?>">
            <input type="text" class="form-control" id="product_name" name="product_name"
              value="<?php echo $show['product_name'] ?>">
          </div>
          <div class="form-group">
            <select class="form-control" id="section_id" name="section_id">
              <?php
              foreach ($sections as $x) { ?>
                <option value="<?php echo $x['id']; ?>" <?php echo $x['id'] == $show['section_id'] ? 'selected' : ''; ?>>
                  <?php echo $x['section_name']; ?>
                </option>
              <?php
              }
              ?>
            </select>
            </input>
          </div>

          <div class="form-group">
            <label for="Note">ملاحظات</label>
            <textarea class="form-control" id="Note" name="Note"
              rows="3"><?php echo $show['Note']; ?></textarea>
          </div>
          <div class="modal-footer">
            <button class="btn btn-outline-success" type="submit" name="update">تاكيد</button>
            <button class="btn btn-outline-danger" data-dismiss="modal" type="button">الغاء</button>
          </div>
        </form>
      </div>
    </div>
  </div>