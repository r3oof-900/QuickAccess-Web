<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
       
require "../connection/conn.php";
extract($_POST);




$password = password_hash($password,PASSWORD_DEFAULT);

session_start();
$_SESSION['username']=$username;
$_SESSION['Addr']=$Addr;
$_SESSION['Email']=$Email;
$_SESSION['Fname']=$Fname;
$_SESSION['Lname']=$Lname;
$_SESSION['Phone']=$Phone;
$_SESSION['select']=$select;
$_SESSION['password']=$password;

header("location:profile.php");


}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
    <style>
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
    }

    .card-registration .select-arrow {
        top: 13px;
    }

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
        left: 53%;
        top: 66px;

        position: absolute;
        font-style: italic;
    }
    </style>
</head>

<body>

    <form action="" method="post" enctype="multipart/form-data">
        <section class="h-100 bg-dark">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card card-registration my-4">
                            <div class="row g-0">
                                <div class="col-xl-6 d-none d-xl-block">
                                    <img src="img4.webp" alt="Sample photo" class="img-fluid"
                                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                </div>
                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase">Student registration form</h3>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1m"
                                                        class="form-control form-control-lg" name="Fname" />
                                                    <label class="form-label" for="form3Example1m">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1n"
                                                        class="form-control form-control-lg" name="Lname" />
                                                    <label class="form-label" for="form3Example1n">Last name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example8" class="form-control form-control-lg"
                                                name="Addr" />
                                            <label class="form-label" for="form3Example8">Address</label>
                                        </div>

                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                            <h6 class="mb-0 me-4">Gender: </h6>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="femaleGender" value="Female" />
                                                <label class="form-check-label" for="femaleGender">Female</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="maleGender" value="Male" />
                                                <label class="form-check-label" for="maleGender">Male</label>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">

                                                <select class="select" name="select">
                                                    <option value="Technical Services">Technical Services</option>
                                                    <option value="Health Services">Health Services</option>
                                                    <option value="Car Services">Car Services</option>
                                                    <option value="University Services">University Services</option>
                                                    <option value="Household Services">Household Services</option>
                                                </select>

                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <label for="birthdate">birthdate</label>
                                                <input type="date" id="birthdate" name="birthdate">
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example9" class="form-control form-control-lg"
                                                name="username" />
                                            <label class="form-label" for="form3Example9">Username</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example90" class="form-control form-control-lg"
                                                name="Phone" />
                                            <label class="form-label" for="form3Example90">Phone Number</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form3Example97" class="form-control form-control-lg"
                                                name="Email" />
                                            <label class="form-label" for="form3Example97">Email</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="form3Example99"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example99">Password</label>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="button" class="btn btn-light btn-lg">Reset all</button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <input type="submit">
                                            </button>

    </form>

    </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Button trigger modal -->
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