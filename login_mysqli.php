<?php
## باستخدام mysqli:
$servername = "localhost:88"; // localhost مع البورت 88
$username = "username"; // اسم المستخدم لقاعدة البيانات
$password = "password"; // كلمة مرور قاعدة البيانات
$dbname = "test2"; // اسم قاعدة البيانات

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
echo "تم الاتصال بنجاح";

// أغلق الاتصال
$conn->close();

?>
<html>
    <body>
        <form method ="post">
            user_name :<input name ="name"><br>
            password :<input pass ="password"><br>
            <input type="submit" value="add user" name =" add">

        </form>
    </body>
</html>
