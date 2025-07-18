<?php
$site = "HOME";
$icons = "support-a-symbol.jpg";
$services = "";
session_start();

try {
	require "connection/conn.php";
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		$sql = "SELECT *FROM users WHERE username = '$username'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['user_id'] = $row["user_id"];
			$_SESSION['select'] = $row['bio'];
			
			if ($_SESSION['select'] == 'Technical Services') {
				$_SESSION['serice_id'] = "1";
			} elseif ($_SESSION['select'] == 'Health Services') {
				$_SESSION['serice_id'] = "2";
			} elseif ($_SESSION['select'] == 'Car Services') {
				$_SESSION['serice_id'] = "3";
			} elseif ($_SESSION['select'] == 'University Services') {
				$_SESSION['serice_id'] = "4";
			} elseif ($_SESSION['select'] == 'Household Services') {
				$_SESSION['serice_id'] = "5";
			}



		}

	}


} catch (Exception $e) {
	echo $e->getMessage();
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Home</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">

    <style>



    </style>


</head>

<body class="single is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->

        <?php
     
            require "php/Header.php";
        
		?>

        <!-- Main -->
        <div id="main">
            <article class="post">
                <header>
                    <div class="title">
                        <H2>
                            <font color="#fdbd51">QuickAccess</font>
                        </H2><br>
                        <p>
                            <font color="black" size="2">We offer a variety of services to help solve your problems and
                                improve your quality of life.</font>
                        </p>

                    </div>
                    <div class="meta">

                        <img class="image featured" src="support-a-symbol.jpg" alt=""
                            style="margin: -47px 0px -9em 0px;">

                        <h3 class="Quick" style="margin-left: 23px;">QACS</h3>
                    </div>
                </header>
                <p class="We">We can connect you with specialists who can help you with your computer, network, and
                    program issues..
                    And We can provide resources that help you choose the appropriate universities based on your
                    academic qualification
                    and preferences. You can also benefit from consultation services available through the platform.
                    We can connect you with specialists who can help you with your computer, network, and program
                    issues..
                    And We can provide resources that help you choose the appropriate universities based on your
                    academic qualification
                    and preferences. You can also benefit from consultation services available through the platform.We
                    can connect you with specialists who can help you with your computer, network, and program issues..
                    And We can provide resources that help you choose the appropriate universities based on your
                    academic qualification
                    and preferences. You can also benefit from consultation services available through the platform.We
                    can connect you with specialists who can help you with your computer, network, and program issues..
                    And We can provide resources that help you choose the appropriate universities based on your
                    academic qualification
                    and preferences. You can also benefit from consultation services available through the platform.We
                    can connect you with specialists who can help you with your computer, network, and program issues..
                    And We can provide resources that help you choose the appropriate universities based on your
                    academic qualification
                    and preferences. You can also benefit from consultation services available through the platform.We
                    can connect you with specialists who can help you with your computer, network, and program issues..
                    And We can provide resources that help you choose the appropriate universities based on your
                    academic qualification
                    and preferences. You can also benefit from consultation services available through the platform.
                </p>
            </article>

            <h2 class="special-heading">
                <font color="#fdbd51">Services</font>
            </h2>
            <!-- Post -->
            <?php
			$sql = "SELECT * FROM home";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					?>

            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="pages/1.html">
                                <font color="#fdbd51"><?= $row["title"] ?></font>
                            </a></h2><br>

                        <p><?= $row["desc_1"] ?></p>

                    </div>

                </header>
                <a href="php/pages/1.php" class="image featured"><img src='img/<?= $row["image"] ?>' alt="" /></a>
                <p><?= $row["desc_2"] ?></p>
                <footer>
                    <ul class="actions">
                        <li><a href="single.html" class="button large">
                                <font color="blue">Continue Reading</font>
                            </a></li>
                    </ul>

                </footer>

            </article>
            <?php
				}
			}
			?>

        </div>

        <?php
		require "php/con_footer.php";
		?>
        <!--------------------------------------------------------------------------->

        <?php

		require "php/singin.php";

		?>
        <!-- Scripts -->
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
        <script src="script.js"></script>
        <script src="assets/js/main.js"></script>
        <!-- End Scripts -->
</body>

</html>