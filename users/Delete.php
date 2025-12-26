<div class="modal fade" id="delete<?php echo $user['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">حذف المستخدم</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        <p>هل انت متاكد من حذف المستخدم</p>
        <form action="" method="POST">
        <input type="hidden" id="" name="id" value="<?php echo $user['id']?>">
        <input type="text"  class="form-control"  name="name" value="<?php echo $user['name']?>" readonly>
        <div class="modal-footer">
        <button type="submit" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline-danger btn-sm">حذف</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>