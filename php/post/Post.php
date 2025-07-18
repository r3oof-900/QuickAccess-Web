<?php
session_start();

$userpost = $_SESSION['username'];
$u_profile = $_SESSION['photo'];

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
}

$u_profile = $_SESSION['photo'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // الحصول على اسم الصورة والامتداد
    $photo_name = $_FILES["photo"]["name"];
    $photo_tmp_name = $_FILES["photo"]["tmp_name"];
    
    // استخراج امتداد الصورة
    $photo_extension = pathinfo($photo_name, PATHINFO_EXTENSION);
    
    // توليد اسم فريد باستخدام uniqid() وأضافة الامتداد
    $unique_photo_name = uniqid('photo_', true) . '.' . $photo_extension;
    
    // نقل الصورة إلى المجلد مع الاسم الجديد
    $upload_path = $_SERVER["DOCUMENT_ROOT"] . '/php_projct/php/post/photo_post/' . $unique_photo_name;
    move_uploaded_file($photo_tmp_name, $upload_path);
    
    $_SESSION['post'] = $unique_photo_name;

    require "../../connection/conn.php";

    if ($conn->connect_error) {
        die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
    }

    // تأمين النصوص باستخدام mysqli_real_escape_string
    if (isset($_POST['caption'])) {
        $caption = mysqli_real_escape_string($conn, $_POST['caption']);
    } else {
        $caption = '';
    }

    if (isset($_POST['location'])) {
        $location = mysqli_real_escape_string($conn, $_POST['location']);
    } else {
        $location = '';
    }

    if (isset($_POST['descrt'])) {
        $descrt = mysqli_real_escape_string($conn, $_POST['descrt']);
    } else {
        $descrt = '';
    }

    if (isset($_POST['post_title'])) {
        $post_title = mysqli_real_escape_string($conn, $_POST['post_title']);
    } else {
        $post_title = '';
    }

    // تأكد من أن $_SESSION['select'] موجودة قبل استخدامها
    if (isset($_SESSION['select'])) {
        $new_field_value = mysqli_real_escape_string($conn, $_SESSION['select']);
    } else {
        $new_field_value = '';
    }

    try {
        // الحصول على آخر user_id
        $query = "SELECT MAX(user_id) AS last_u_id FROM users";
        $stmt = $conn->query($query);

        if ($stmt) {
            $result = $stmt->fetch_assoc();
            $lastuseId = $result['last_u_id'];
        } else {
            echo "Error fetching last user ID: " . $conn->error;
            exit();
        }
        $stmt="";
if(isset( $_SESSION['Addr'] )){
    if( $_SESSION['Addr'] ==="Health Services"){
        $stmt = $conn->prepare("INSERT INTO posts_helth(user_id, photo_url, caption, location, descrt, post_title, service) 
                                VALUES (?, ?, ?, ?, ?, ?, ?)");
    }
    else{
        $stmt = $conn->prepare("INSERT INTO posts_tec (user_id, photo_url, caption, location, descrt, post_title, service) 
                                VALUES (?, ?, ?, ?, ?, ?, ?)");
    }
}
        // إدخال منشور جديد مع الصورة والحقل الجديد
        
        $stmt->bind_param("issssss", $lastuseId, $unique_photo_name, $caption, $location, $descrt, $post_title, $new_field_value);

        if ($stmt->execute()) {
            // التوجيه إلى الصفحة الرئيسية بعد الإدخال
            header("location:../pages/1.php");
        } else {
            echo "Error: " . $stmt->error;
        }
    } catch (mysqli_sql_exception $e) {
        echo $e->getMessage();
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <div id="main">
            <!-- Post -->
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a><input type="text" name="caption" placeholder="اسم النشاط"></a></h2>
                        <p><input type="text" name="post_title" placeholder=" عنوان النشر"></p>
                    </div>
                    <div class="meta">
                        <time class="published" datetime="2015-11-01">November 1, 2015</time>
                        <a href="#" class="author"><span class="name"><?= $userpost ?></span><img
                                src="../users_photo/<?= $u_profile ?>" alt="" /></a>
                    </div>
                </header>
                <a class="image featured">
                    <input type="file" name="photo"
                        onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])"><br>
                    <img id="img" src="" alt="image preview" />
                </a>
                <p><textarea name="descrt" id="" cols="30" rows="10" placeholder="وصف المنشور"></textarea></p>
                <footer>
                    <ul class="actions">

                        <li>


                    </ul>
                    <input type="submit" value="Register" name="register">

                </footer>
            </article>
        </div>
    </form>

    <!--------------------------------------------------------------------------------------->
    <!-- Scripts -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="../../script.js"></script>
    <script src="../../assets/js/main.js"></script>
    <!-- End Scripts -->
</body>

</html>