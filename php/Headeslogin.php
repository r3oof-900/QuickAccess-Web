<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<?php if(!isset($_SESSION["username"])){
	
}else{?>
<style>
#header h1 {
    height: inherit;
    line-height: inherit;
    padding: 0 0 0 1.5em;
    padding-left: 1.5em;
    white-space: nowrap;
    border-left: solid 1px rgba(160, 160, 160, 0.3);
    padding-left: 46px;
    margin-left: -20px;
}

.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    color: var(--bs-modal-color);
    pointer-events: auto;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.8)50%, rgba(0, 0, 0, 0.8)50%);
    background-clip: padding-box;
    border: var(--bs-modal-border-width) solid var(--bs-modal-border-color);
    border-radius: var(--bs-modal-border-radius);
    outline: 0;
}
</style>
<?php
}
?>

<body>
    <header id="header">
        <img src=<?=$icons?> alt="" style="margin: 5px;width: 3%;height: auto;position: absolute;">

        <h1><a href="../../">Home </a></h1>
        <nav class="links">
            <ul>
                <li><a href="1.php">Technical Services</a></li>
                <li><a href="2.php">Health Services</a></li>
                <li><a href="3.php">Car Services</a></li>
                <li><a href="4.php">University Services</a></li>
                <li><a href="5.php">Household Services</a></li>
            </ul>
        </nav>
        <nav class="main">
            <ul>
                <li class="search">
                    <a class="fa-search" href="#search">Search</a>
                    <form id="search" method="get" action="#">
                        <input type="text" name="query" placeholder="Search" />
                    </form>
                </li>
                <li class="menu">
                    <a></a>

                    <?php
                      if(!isset($_SESSION["username"])){
                     ?>
                    <a href="../../manage/index.php"><i id="" class="fa-solid fa-right-to-bracket"></i></a>
                    <?php
                          }else{
                            $name=$_SESSION['photo'];
                       ?>

                    <i class="circle-container">>
                        <img src='../users_photo/<?php echo $name; ?>'
                            onclick="document.getElementById('profile').style.display = 'flex';"></i>
                    <?php
                                 }
							           	?>


                </li>
            </ul>
        </nav>
    </header>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>