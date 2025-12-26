<?php  @include("../php_controller/check_membership.php")?>
<div class="modal" id="delete<?php echo $Attachment['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">حذف القسم</h6><button aria-label="Close" class="close" data-dismiss="modal"
                type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="#" method="post">
              
                <div class="modal-body">
                     <p class="text-center">
                        <h4 style="color:red"> هل انت متاكد من عملية حذف المرفق ؟</h4>
                        </p>
                    <input type="hidden" name="attachment_id" id="id" value="<?php echo $Attachment['id']; ?>">
                     
                        <input type="hidden" name="filename" id="file_name" value="<?php echo $Attachment['filename']; ?>">
                        <input type="hidden" name="invoice_number" id="invoice_number" value="<?php echo $Attachment['invoice_number']?>">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn btn-danger">تاكيد</button>
                </div>
        </div>
        </form>
    </div>
</div>