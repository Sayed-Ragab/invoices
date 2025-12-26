<?php
include('ConnectController.php');

class premession extends connect_DataBase{

    public function premessions(){
        
            $permissions = [

        'الفواتير',
        'قائمة الفواتير',
        'الفواتير المدفوعة',
        'الفواتير المدفوعة جزئيا',
        'الفواتير الغير مدفوعة',
        'ارشيف الفواتير',
        'التقارير',
        'تقرير الفواتير',
        'تقرير العملاء',
        'المستخدمين',
        'قائمة المستخدمين',
        'صلاحيات المستخدمين',
        'الاعدادات',
        'المنتجات',
        'الاقسام',


        'اضافة فاتورة',
        'حذف الفاتورة',
        'تصدير EXCEL',
        'تغير حالة الدفع',
        'تعديل الفاتورة',
        'ارشفة الفاتورة',
        'طباعةالفاتورة',
        'اضافة مرفق',
        'حذف المرفق',

        'اضافة مستخدم',
        'تعديل مستخدم',
        'حذف مستخدم',

        'عرض صلاحية',
        'اضافة صلاحية',
        'تعديل صلاحية',
        'حذف صلاحية',

        'اضافة منتج',
        'تعديل منتج',
        'حذف منتج',

        'اضافة قسم',
        'تعديل قسم',
        'حذف قسم',

            ];

         foreach($permissions as $permission){
           
    
  
        mysqli_query($this->connect, "INSERT INTO modules (module_name) VALUES ('$permission')");
    
           
         }   

    }

}

$permission = new premession();
$permission->premessions();
?>