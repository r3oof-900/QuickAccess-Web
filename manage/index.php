<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "db.php";
    extract($_POST);

   
    if ($username === 'admin' && $password === 'admin') {
        $_SESSION['loggedin'] = true;
        $_SESSION["user_name"] = $username;
        header('Location: dashboard.php');
        exit;
    }


    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
           
            $_SESSION["user_name"] = $row["username"];
            $_SESSION["per_number"] = $row["per_number"];
            $_SESSION["username"] = $row["username"];
            $_SESSION['create'] = $row["created_at"];
            $_SESSION['Email'] = $row["email"];
            $_SESSION['photo'] = $row["profile_photo_url"];
            $_SESSION['Phone'] = $row["phone"];
            $_SESSION['Addr'] = $row["bio"];
            $_SESSION['user_id'] = $row["user_id"];
            
            
            header('Location: ../index.php');
            exit;
        } else {
          
            $error = "كلمة المرور غير صحيحة";
        }
    } else {
      
        $error = "ليس لديك حساب";
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <form method="POST" action="">
            <h2>تسجيل الدخول</h2>
            <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
            <input type="text" name="username" placeholder="اسم المستخدم" required>
            <input type="password" name="password" placeholder="كلمة المرور" required>
            <button type="submit">تسجيل الدخول</button>
            <p>ليس لديك حساب؟ <a href="../php/sign_up.php">تسجيل حساب جديد</a></p>
        </form>
    </div>
</body>
</html>
