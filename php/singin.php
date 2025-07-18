



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.InFousers {
    margin-top: -36%;
    display: block;
    position: absolute;
    right: 2%;
    color: wheat;
    border: solid 4px;
    border-radius: var(--bs-modal-border-radius);

}
</style>

<body>

    <?php  
if(!isset($_SESSION["username"])){
	?>
    <!--------------------------------------------------------------------------------------->
    <form action="" method="post" enctype="multipart/form-data">
        <div id="modal" class="modal" style="display: none;">
            <div class="form">
                <span class="close" id="closeBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                        <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" fill="#ff7200" />
                    </svg>
                </span>
                <h2>Login Here</h2>
                <input type="text" name="username" placeholder="Enter Email Here">
                <input type="password" name="password" placeholder="Enter Password Here">
                <button class="btnn">Login</button>
    </form>
    <p class="link">Don't have an account<br>
        <?php
		if ($site=="HOME"){
            echo "<a href='php/sign_up.php'>Sign up</a> here</p>";
			}else
			echo "<a href='php/sign_up.php'>Sign up</a> here</p>";
		?>

    <p class="liw">Log in with</p>
    <div class="icons">
        <a href="#">
            <ion-icon name="logo-facebook"></ion-icon>
        </a>
        <a href="#">
            <ion-icon name="logo-instagram"></ion-icon>
        </a>
        <a href="#">
            <ion-icon name="logo-twitter"></ion-icon>
        </a>
        <a href="#">
            <ion-icon name="logo-google"></ion-icon>
        </a>
        <a href="#">
            <ion-icon name="logo-skype"></ion-icon>
        </a>
        <a href="#">
            <ion-icon name="logo-login"></ion-icon>
        </a>

    </div>
    </div>
    </div>
    <?php
}else{
	?>
    <div id="profile" class="modal" tabindex="-1" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">YOUR PROFILE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        onclick="document.getElementById('profile').style.display = 'none';"></button>
                </div>
                <div class="modal-body">
                    <div class="circle-Containers">
                        <?php
          // تحقق من وجود الصورة الشخصية في الجلسة قبل عرضها
          if (isset($_SESSION['photo'])) {
            $photo = $_SESSION['photo'];
			if ($site=="HOME"){
            echo "<img src='users_photo/$photo'>";
			}else
			echo "<img src='../users_photo/$photo'>";
          }
          ?>
                    </div>
                    <div class="InFousers">
                        <?php
          // تحقق من وجود بيانات المستخدم في الجلسة قبل طباعتها
 if (isset($_SESSION['username']) && isset($_SESSION['Addr']) && isset($_SESSION['Email']) && isset($_SESSION['Phone'])) {
            $username = $_SESSION['username'];
            $create = $_SESSION['Addr'];
            $email = $_SESSION['Email'];
            $phoneNumber =  $_SESSION['Phone'];

            echo "<p>Username: $username</p>";
            echo "<p>Address: $create</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Phone Number: $phoneNumber</p>";
          }
          ?>
                    </div>
                </div>
                <div class="modal-footer" style="display: inline;">
                    <a href="#" class="icon solid fa-comment" id="comment" style="margin-right: 10px;">128</a>
                    <a href="#" class="icon solid fa-heart" style="margin-right: -172px;"></a>
                    <?php
 if ($site=="HOME") {
  echo "<a href='php/logout.php' ><i class='fa-solid fa-arrow-right-from-bracket'></i></a>";
  echo "<a href='post/Post.php'>POST</a>";
  	
 }else{
	echo "<a href='../logout.php' ><i class='fa-solid fa-arrow-right-from-bracket'></i></a>";

	echo "<a href='../post/Post.php'>POST</a>";

 }
 ?>
                </div>
            </div>
        </div>
    </div>

    <?php
}
?>



	
</body>

</html>