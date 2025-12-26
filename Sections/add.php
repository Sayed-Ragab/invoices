<div class="modal" id="modaldemo8">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">اضافة قسم</h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" id="Add_form">
                    <div class="form-group">
                        <label for="section_name">اسم القسم</label>
                        <input type="text" class="form-control" id="section_name" name="section_name">
                        
                        <div id="error_section_name" class="form-text text-danger"></div>
                    </div>

                    <div class="form-group">
                        <label for="Note">ملاحظات</label>
                        <textarea class="form-control" id="Note" name="Note" rows="3"></textarea>
                      
                        <div id="error_note" class="form-text text-danger"></div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn ripple btn-primary" type="submit" name="add">تاكيد</button>
                        <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">الغاء</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
