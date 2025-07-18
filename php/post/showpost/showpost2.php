<?php
//session_start();

// تأكد من الاتصال بقاعدة البيانات
//require 'con.php';

// استعلام لجلب جميع المنشورات
$sql = "SELECT * FROM posts_helth ORDER BY post_id DESC";
$result = $conn->query($sql);

// جلب معلومات المستخدم من الجلسة
if (isset($_SESSION['username'])) {
	$userpost = $_SESSION['username'];
	$u_profile = $_SESSION['photo'];
	if(isset($_SESSION['post'])){
	$post = $_SESSION['post'];
	}
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/all.min.css" />
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>
    <?php
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			?>

    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2><a href="moreTec.html"><?= htmlspecialchars($row["caption"]) ?></a></h2>
                <p><?= htmlspecialchars($row["location"]) ?></p>
            </div>
            <div class="meta">
                <time class="published" datetime="2015-11-01"><?= $row["created_at"] ?></time>
                <a href="#" class="author"><span class="name">
                        <?php
$r = $row["user_id"];

// جلب اسم المستخدم
$sql = "SELECT username FROM users WHERE user_id = $r";
$results = $conn->query($sql);
$rows = $results->fetch_assoc(); // <-- هنا كان الخطأ، لم يكن هناك فاصلة منقوطة
                                
$pr = $row["post_id"];

// جلب عدد الإعجابات للمنشور
$like_count_sql = "SELECT COUNT(*) AS like_count FROM post_likes WHERE post_id = $pr";
$stmt = $conn->query($like_count_sql);
$like_result = $stmt->fetch_assoc(); // <-- هنا أيضًا يجب وضع فاصلة منقوطة

?>


                        <h2 style="font-size: 1rem;"><?= $rows["username"] ?></h2>
                    </span><img src="../users_photo/<?= htmlspecialchars($u_profile) ?>" alt="User Profile" /></a>
            </div>
        </header>
        <a href=""></a>
        <a href="moreTec.html" class="image featured"><img
                src='../post/photo_post/<?= htmlspecialchars($row["photo_url"]) ?>'></a>
        <p><?= htmlspecialchars($row["descrt"]) ?></p>
        <footer>
            <ul class="actions">
                <li><a href="moreTec.html" class="button large">Continue Reading</a></li>
            </ul>
            <ul class="stats">
                <li><a href="#">General</a></li>
                <li>
                    <a href="#" class="icon solid fa-heart" id="like-btn" data-post-id="<?= $row["post_id"] ?>"><?= $like_result['like_count'] ?></a>
                </li>
                <li><a href="#" class="icon solid fa-comment" id="comment">128</a></li>
            </ul>
        </footer>
    </article>

    <?php
		}
	}
	?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#like-btn').click(function(e) {
        e.preventDefault(); // منع السلوك الافتراضي للرابط

        var postId = $(this).data('post-id'); // الحصول على معرف المنشور

        $.ajax({
            url: 'like_post.php', // المسار إلى ملف PHP
            type: 'POST',
            data: { post_id: postId },
            dataType: 'json',
            success: function(response) {
                if (response.status === 'liked') {
                    alert('تم الإعجاب بالمنشور!');
                    // يمكنك تغيير لون الزر أو أي شيء آخر لإظهار الإعجاب
                } else if (response.status === 'unliked') {
                    alert('تم إلغاء الإعجاب بالمنشور!');
                    // يمكنك تغيير لون الزر أو أي شيء آخر لإظهار إلغاء الإعجاب
                } else {
                    alert('حدث خطأ: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                alert('حدث خطأ أثناء الاتصال بالخادم.');
            }
        });
    });
});
</script>
    <!--------------------------------------------------------------------------------------->
    <!-- Scripts -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="../../script.js"></script>
    <script src="../../assets/js/main.js"></script>
    <script src="../../js/bootstrap.bundle.min.js"></script>

    <!-- End Scripts -->
</body>

</html>