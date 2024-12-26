<?php
$servername = "localhost"; // localhost
$port = "88"; // البورت 88
$username = "username"; // اسم المستخدم لقاعدة البيانات
$password = "password"; // كلمة مرور قاعدة البيانات
$dbname = "database_name"; // اسم قاعدة البيانات

try {
    // إنشاء DSN (Data Source Name)
    $dsn = "mysql:host=$servername;port=$port;dbname=$dbname";
    
    // إنشاء الاتصال باستخدام PDO
    $conn = new PDO($dsn, $username, $password);
    
    // تعيين نمط الخطأ
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "تم الاتصال بنجاح";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
