<?php
session_start();
require "../../connection/conn.php"; // تأكد من المسار الصحيح

if (!isset($_SESSION['user_id'])) {
    die(json_encode(["status" => "error", "message" => "يجب تسجيل الدخول أولاً"]));
}

$user_id = $_SESSION['user_id'];
$post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;
$comment_text = trim($_POST['comment_text']);

if ($post_id == 0 || empty($comment_text)) {
    die(json_encode(["status" => "error", "message" => "تعليق غير صالح"]));
}

$insert_comment = $conn->prepare("INSERT INTO comments (user_id, post_id, comment_text) VALUES (?, ?, ?)");
$insert_comment->bind_param("iis", $user_id, $post_id, $comment_text);

if ($insert_comment->execute()) {
    echo json_encode(["status" => "success", "comment_text" => htmlspecialchars($comment_text)]);
} else {
    echo json_encode(["status" => "error", "message" => "فشل إدخال التعليق"]);
}

$conn->close();
?>
