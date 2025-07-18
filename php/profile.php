<?php
session_start();
$username=$_SESSION['username'];
$Addr=$_SESSION['Addr'];
$Email=$_SESSION['Email'];
$Fname=$_SESSION['Fname'];
$bio=$_SESSION['select'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <style>
    .circle-container img {
        display: block;
        width: 225px;

        height: auto;
        border-radius: 50%;
        border: solid 2px tomato;
        -webkit-transition: .15s;
        transition: 0.15s;
        margin: 1%;
        margin-left: -7%;
    }

    .Infousers {
        margin-top: -36%;
        position: absolute;
        right: 2%;
    }
    </style>

</head>

<body>





    <!-- Modal -->
    <form action="insert_users.php" method="post" enctype="multipart/form-data">
        <div id="profile" class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            style="display: block;" aria-modal="true" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="carousel-inner">
                            <ul class="circle-container">
                                <li><img id="img" src="personal.gif"></li>
                        </div>
                        </ul>
                        <div class="Infousers">
                            <li><span class="name"><?=$Fname?></span></li>
                            <li><span class="name"><?=$username?></span></li>
                            <li> <time class="published" datetime="2015-11-01"><?=$Email?></time>
                            </li>
                            <li><span class="name"><?=$Addr?></span></li>
                            <li><span class="name"><?=$bio?></span></li>
                        </div>

                    </div>
                    <div class="modal-footer">


                        <button type='button' class='btn btn-primary'>
                            <input type='file' name='photo'
                                onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])">
                        </button>
                        </button>
                        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">
                            <input type="submit">

                        </button>

    </form>
    </div>
    </div>
    </div>
    </div>
    <!-- Scripts -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="../script.js"></script>
    <script src="../assets/js/main.js"></script>
    <!-- End Scripts -->



    <script>
    var loadFile = function(event) {
        var image = document.getElementById("output");
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    </script>
</body>

</html>