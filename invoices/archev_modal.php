
<div class="modal fade" id="archve<?php echo $Archive['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">الغاء ارشفة الفاتوره</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <form action="#" method="POST">
      <div class="modal-body">
         هل انت متاكد من عملية الغاء الارشفة ؟
        <input type="hidden" id="id" name="id" value="<?php echo $Archive['id']?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">اغلاق</button>
        <button type="submit" class="btn btn-outline-success">تاكيد الارشفه </button>
      </div>
      </form>
    </div>
  </div>
</div>