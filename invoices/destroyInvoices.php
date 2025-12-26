<div class="modal fade" id="delete<?php echo $x['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">حذف الفاتوره</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>هل انت متاكد من حذف الفاتوره</p>
        <form method="POST" action="#">
          <div class="form-group">
          <input type="hidden" name="id" id="id" value="<?php echo $x['id']?>">
           <input type="text" class="form-control" name="invoice_number"  value="<?php echo $x['invoice_number']?>" readonly>
          </div>
           <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn btn-outline-danger" name="delete">تاكيد الحذف</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
