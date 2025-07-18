<?php

session_start();
$_SESSION["name"];
if (!isset($_SESSION["name"]))
{
    header("location:html.php");
}

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="movies.css">

    <title>movies photo </title>
    <!-- <link rel="stylesheet" href="aaa.css"> -->

</head>

<body>
    <header>
        <h2 class="logo">logo</h2>
        <nav class="navigation">
            <a href="page1.php">Home</a>
            <a href="../php/logout.php">logout</a>
        </nav>

    </header>


    <div class="card-list">
        <?php
require "proud_dp.php";
$sql = "SELECT * FROM create_movies";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()){
        
        ?>

        <a href="#" class="card-item">
            <img src="<?=$row["movei_photo"]?> " alt="Card Image" width="100%">
            <span class="developer"><?=$row["movie_date"]?></span>
            <h3><?=$row["movie_name"]?></h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>



        <?php
    }
}
?>
    </div>
</body>

</html>