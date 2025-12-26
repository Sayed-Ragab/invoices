
<div class="modal fade" id="Add_to_archve<?php echo $x['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> ارشفة الفاتوره</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <form action="#" method="POST">
      <div class="modal-body">
     <div>هل انت متاكد من ارشفة الفاتوره ؟ </div>
        <input type="hidden" id="id" name="id" value="<?php echo $x['id']?>" ><br>
        <input type="text" id="id" class="form-control" name="invoice_number" value="<?php echo $x['invoice_number']?>" readonly>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn btn-outline-success">تاكيد الارشفه </button>
      </div>
      </form>
    </div>
  </div>
</div>