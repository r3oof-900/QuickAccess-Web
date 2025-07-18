<?php
session_start();
$conn = new mysqli("localhost","root","","social_media");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}// تأكد أن المسار صحيح

if (!isset($_SESSION['user_id'])) {
    die(json_encode(["status" => "error", "message" => "يجب تسجيل الدخول أولاً"]));
}

$user_id = $_SESSION['user_id'];
$post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;

if ($post_id == 0) {
    die(json_encode(["status" => "error", "message" => "رقم المنشور غير صالح"]));
}

// التحقق مما إذا كان المستخدم قد أعجب بالمنشور بالفعل
$check_like = $conn->prepare("SELECT * FROM post_likes WHERE user_id = ? AND post_id = ?");
$check_like->bind_param("ii", $user_id, $post_id);
$check_like->execute();
$result = $check_like->get_result();

if ($result->num_rows > 0) {
    // حذف الإعجاب
    $delete_like = $conn->prepare("DELETE FROM post_likes WHERE user_id = ? AND post_id = ?");
    $delete_like->bind_param("ii", $user_id, $post_id);
    $delete_like->execute();
    echo json_encode(["status" => "unliked"]);
} else {
    // إضافة إعجاب
    $add_like = $conn->prepare("INSERT INTO post_likes (user_id, post_id) VALUES (?, ?)");
    $add_like->bind_param("ii", $user_id, $post_id);
    $add_like->execute();
    echo json_encode(["status" => "liked"]);
}

$conn->close();
?>
