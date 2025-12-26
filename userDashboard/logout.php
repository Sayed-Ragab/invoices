<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// مسح جميع متغيرات الجلسة
session_unset();

// إنهاء الجلسة
session_destroy();

// إعادة التوجيه إلى صفحة تسجيل الدخول
header("Location: signin.php");
exit();