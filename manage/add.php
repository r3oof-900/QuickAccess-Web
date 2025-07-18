<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}

include 'db.php';
$table = $_GET['table'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $columns = array_keys($_POST);
    $values = array_map(function($value) use ($conn) {
        return "'" . $conn->real_escape_string($value) . "'";
    }, array_values($_POST));

    $query = "INSERT INTO $table (" . implode(',', $columns) . ") VALUES (" . implode(',', $values) . ")";
    if ($conn->query($query)) {
        header("Location: dashboard.php?table=$table");
        exit;
    } else {
        $error = "خطأ أثناء الإضافة: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة سجل</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <h1>إضافة سجل جديد في جدول <?= $table ?></h1>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST">
            <?php
            $result = $conn->query("DESCRIBE $table");
            while ($column = $result->fetch_assoc()) {
                if ($column['Field'] == 'id') continue; // تجاهل الحقل "id" لأنه غالبًا يتم توليده تلقائيًا
                echo "<label>" . $column['Field'] . "</label>";
                echo "<input type='text' name='" . $column['Field'] . "' required>";
            }
            ?>
            <button type="submit">إضافة</button>
        </form>
    </div>
</body>
</html>
