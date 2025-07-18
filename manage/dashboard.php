<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}
include 'db.php';

// قراءة الجداول
$table = isset($_GET['table']) ? $_GET['table'] : 'users'; // جدول افتراضي

// التحقق من أن اسم الجدول آمن
$table = mysqli_real_escape_string($conn, $table);

$result = $conn->query("SELECT * FROM $table");

if (!$result) {
    die('Error: ' . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body dir="rtl" class="bg-light">
    <div class="container my-5">
        <h1 class="text-center mb-4">لوحة التحكم</h1>
        <h3 class="text-center mb-4">الجدول الحالي: <?= htmlspecialchars($table) ?></h3>

        <div class="d-flex justify-content-end mb-3">
            <a href="add.php?table=<?= $table ?>" class="btn btn-success">إضافة سجل جديد</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <?php while ($field = $result->fetch_field()) : ?>
                            <th><?= htmlspecialchars($field->name) ?></th>
                        <?php endwhile; ?>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <?php foreach ($row as $key => $value) : ?>
                                <td>
                                    <?php if ($key === 'profile_photo_url' && !empty($value)) : ?>
                                        <!-- عرض الصورة -->
                                        <img src="/Worke_ali_daaer/QuickFix2/QuickFix2/users_photo/<?= htmlspecialchars($value) ?>" 
                                             alt="صورة المستخدم" 
                                             style="width: 50px; height: 50px; border-radius: 50%;">
                                    <?php else : ?>
                                        <?= htmlspecialchars($value) ?>
                                    <?php endif; ?>
                                </td>
                            <?php endforeach; ?>
                            <td>
                                <a href="edit.php?table=<?= $table ?>&id=<?= $row['user_id'] ?>" class="btn btn-primary btn-sm">تعديل</a>
                                <a href="delete.php?table=<?= $table ?>&id=<?= $row['user_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد من الحذف؟')">حذف</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
