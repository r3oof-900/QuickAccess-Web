<?php
$unique_photo_name="";
if (isset($_FILES["photo"])) {

    $photo_name = $_FILES["photo"]["name"];
    $photo_tmp_name = $_FILES["photo"]["tmp_name"];
  
   
    $photo_extension = pathinfo($photo_name, PATHINFO_EXTENSION);

// توليد اسم فريد باستخدام uniqid() وأضافة الامتداد
    $unique_photo_name = uniqid('photo_', true) . '.' . $photo_extension;
    
    // نقل الصورة إلى المجلد مع الاسم الجديد
    $upload_path = $_SERVER["DOCUMENT_ROOT"] . '/php_projct/php/users_photo/' . $unique_photo_name;
    move_uploaded_file($photo_tmp_name, $upload_path);
}
    
    
    
    


session_start();
$_SESSION['photo'] =  $unique_photo_name;

$username=$_SESSION['username'];
$Addr=$_SESSION['Addr'];
$Email=$_SESSION['Email'];
$Fname=$_SESSION['Fname'];
$Lname=$_SESSION['Lname'];
$Phone=$_SESSION['Phone'];
$bio=$_SESSION['select'];
$password=$_SESSION['password'];
$pro_photo=$_SESSION['photo'];

require "../connection/conn.php";
$sql = "INSERT INTO users(username,profile_photo_url,Address, Fname, Lname,bio,password,email,phone) 
VALUES ('$username','$unique_photo_name','$Addr','$Fname','$Lname','$bio','$password','$Email','$Phone')";
if($conn->query($sql)){
  header("location:pages/1.php");
}

?>