<?php
$site="Technical Services";
$icons ="../../support-a-symbol.jpg";

session_start();
if(isset($_SESSION['username'])){
$userpost=$_SESSION['username'];
}
require "../../connection/conn.php";





?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Technical Services</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../header.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">

</head>

<body>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <?php
			require "../Headeslogin.php";
			?>

        <!-- Menu -->


        <!-- Main -->
        <div id="main">










            <!-- Post -->
            <?php
			require "../post/showpost/showpost.php";
							?>

            <!-- Post -->




            <!-- Pagination -->


        </div>

        <!-- Sidebar -->
        <section id="sidebar">

            <!-- Intro -->
            <section id="intro">
                <header>
                    <h2>QuickAccess</h2>
                    <p>services to help solve your problems and improve your quality of life </p>
                </header>
            </section>

            <!-- Mini Posts -->
            <section>
                <div class="mini-posts">

                    <!-- Mini Post -->
                    <article class="mini-post">
                        <header>
                            <h3><a href="single.html">@G-Maintenance</a></h3>
                            <time class="published" datetime="2015-10-20">
                                <ul class="cards-body-stars u-clearfix">
                                    <li class="frist">
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                    <li class="frist">
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                    <li class="frist">
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">

                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                    <li class="frist">
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                </ul>

                            </time>
                            <a href="#" class="author"><img src="../../img/lobalMaintenance‏.jpg" alt="" /></a>
                        </header>
                        <a href="single.html" class="image"><img src="../../images/pic04.jpg" alt="" /></a>
                    </article>

                    <!-- Mini Post -->
                    <article class="mini-post">
                        <header>
                            <h3><a href="moreTec.html">@Tariq-Tel</a></h3>
                            <time class="published" datetime="2015-10-20">
                                <ul class="cards-body-stars u-clearfix">
                                    <li class="frist">
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                    <li class="frist">
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                    <li class="frist">
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                    <li class="frist">
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                </ul>

                            </time>
                            <a href="#" class="author"><img src="../../img/TARG.jpg" alt="" /></a>
                        </header>
                        <a href="single.html" class="image"><img src="../../images/pic04.jpg" alt="" /></a>
                    </article>


                    <!-- Mini Post -->
                    <article class="mini-post">
                        <header>
                            <h3><a href="moreTec.html">@ALTAKMUL</a></h3>
                            <time class="published" datetime="2015-10-20">
                                <ul class="cards-body-stars u-clearfix">
                                    <li class="frist">
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                    <li class="frist">
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                    <li class="frist">
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                    <li class="frist">
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                </ul>

                            </time>
                            <a href="#" class="author"><img src="../../img/altkamlsh.png" alt="" /></a>
                        </header>
                        <a href="single.html" class="image"><img src="../../images/pic04.jpg" alt="" /></a>
                    </article>


                    <!-- Mini Post -->
                    <article class="mini-post">
                        <header>
                            <h3><a href="moreTec.html">@NEW/USER</a></h3>
                            <time class="published" datetime="2015-10-20">
                                <ul class="cards-body-stars u-clearfix">
                                    <li class="frist">
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                    <li class="frist">
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                    <li class="frist">
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                    <li class="frist">
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg fill="#D3BCA2" height="28" viewBox="0 0 18 18" width="28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 11.3l3.71 2.7-1.42-4.36L15 7h-4.55L9 2.5 7.55 7H3l3.71 2.64L5.29 14z">
                                            </path>
                                            <path d="M0 0h18v18H0z" fill="none"></path>
                                        </svg>
                                    </li>
                                </ul>

                            </time>
                            <a href="#" class="author"><img src="../../img/evaluation.png" alt="" /></a>
                        </header>
                        <a href="single.html" class="image"><img src="../../images/pic04.jpg" alt="" /></a>
                    </article>


                </div>
            </section>

            <!-- Posts List -->
            <section>
                <ul class="posts">
                    <li>
                        <article>
                            <header>
                                <h3><a href="single.html">Engineer and assistant lecturer at Damietta University with 12
                                        years of experience</a></h3>
                                <time class="published" datetime="2015-10-20">October 20, 2015</time>
                            </header>
                            <a href="single.html" class="image"><img src="../../img/personal.gif" alt="" />@Ahmoud</a>
                        </article>
                    </li>
                    <li>
                        <article>
                            <header>
                                <h3><a href="single.html">
                                        Amin Al-Aqrabi has successfully delivered software products and developed
                                        solutions to companies around the world. He is passionate about technology and
                                        loves what he does. </a></h3>
                                <time class="published" datetime="2015-10-15">October 15, 2015</time>
                            </header>
                            <a href="single.html" class="image"><img src="../../img/person2.png" alt="" />@Amin</a>
                        </article>
                    </li>
                    <li>
                        <article>
                            <header>
                                <h3><a href="single.html">
                                        Lecturer and certified engineer at the Faculty of Engineering, Cairo University,
                                        specializing in electricity - communications, electronics and control.</a></h3>
                                <time class="published" datetime="2015-10-10">October 10, 2015</time>
                            </header>
                            <a href="single.html" class="image"><img src="../../img/persn3.png" alt="" />@Mohamed</a>
                        </article>
                    </li>
                    <li>
                        <article>
                            <header>
                                <h3><a href="single.html">
                                        10 years of experience in explaining computer programs, ICDL, and Photoshop in
                                        many centers in Egypt. I have trained many companies and own a YouTube </a></h3>
                                <time class="published" datetime="2015-10-08">October 8, 2015</time>
                            </header>
                            <a href="single.html" class="image"><img src="../../img/person4.png" alt="" />@Mostafa</a>
                        </article>
                    </li>
                    <li>
                        <article>
                            <header>
                                <h3><a href="single.html">
                                        A doctoral researcher in sociology, holds a master’s degree in sociology, and
                                        holds a specialized diploma in social development and planning, in addition</a>
                                </h3>
                                <time class="published" datetime="2015-10-06">October 7, 2015</time>
                            </header>
                            <a href="single.html" class="image"><img src="../../img/personal.gif" alt="" />@Ali</a>
                        </article>
                    </li>
                </ul>
            </section>

            <!-- About -->
            <section class="blurb">
                <h2>About</h2>
                <p>We are a team of experts dedicated to providing high-quality solutions to our clients. Jordan
                    Please note that you may need to modify the logic inside the open method according to the actual
                    opening hours of the college.
                </p>
                <ul class="actions">
                    <li><a href="#" class="button">Learn More</a></li>
                </ul>
            </section>
            <section>
                <h3>We care about Your SUGGEST</h3>
                <form method="post" action="#">
                    <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                            <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name">
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <textarea name="demo-message" id="demo-message" placeholder="Enter your message"
                                rows="6"></textarea>
                        </div>
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Send Message"></li>
                                <li><input type="reset" value="Reset"></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </section>





        </section>



    </div>

    <!--------------------------------------------------------------------------->


    <!--------------------------------------------------------------------------------------->
   
    <!--------------------------------------------------------------------------------------->
    <!--------------------------------------------------------------------------------------->
    <div id="modals" class="comments-container" style="display: none;top: 0;left: 0;position: fixed;margin: 11% 25% 15px;">
        <h1>Comments</h1>

        <ul id="comments-list" class="comments-list">
            <li>
                <div class="comment-main-level">

                    <div class="comment-avatar">
                        <img src="../../img/person2.png" alt="">
                    </div>

                    <div class="comment-box">
                        <div class="comment-head">
                            <h6 class="comment-name by-author"><a href="#">Agustin Ortiz</a></h6>
                            <span>20 minutes ago</span>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="comment-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure
                            laudantium vitae, praesentium optio, sapiente distinctio illo?
                        </div>
                    </div>
                </div>

                <ul class="comments-list reply-list">
                    <li>

                        <div class="comment-avatar"><img src="../../img/girlperson.jpeg" alt=""></div>

                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name"><a href="#">Lorena Rojero</a></h6>
                                <span>10 minutes ago</span>
                                <i class="fa fa-reply"></i>
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure
                                laudantium vitae, praesentium optio, sapiente distinctio illo?
                            </div>
                        </div>
                    </li>

                    <li>

                        <div class="comment-avatar"><img src="../../img/person2.png" alt=""></div>

                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name by-author"><a href="#">Agustin Ortiz</a></h6>
                                <span>10 minutes ago</span>
                                <i class="fa fa-reply"></i>
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure
                                laudantium vitae, praesentium optio, sapiente distinctio illo?
                            </div>
                        </div>
                    </li>
                </ul>
            </li>

            <li>
                <div class="comment-main-level">

                    <div class="comment-avatar"><img src="../../img/girlperson.jpeg" alt=""></div>

                    <div class="comment-box">
                        <div class="comment-head">
                            <h6 class="comment-name"><a href="#">Lorena Rojero</a></h6>
                            <span>10 minutes ago</span>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="comment-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure
                            laudantium vitae, praesentium optio, sapiente distinctio illo?
                        </div>
                    </div>
                </div>
            </li>

        </ul>
        <ul>
            <li>
                <div class="comment-main-level">

                    <div class="comment-avatar">
                        <img class="pors" src="../../img/personal.gif" alt="">
                    </div>



                    <div class="comment-content">
                        <input class="incom" type="text">


                    </div>
                </div>
            </li>
        </ul>
        <button id="closeBtns" class="close-button">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" fill="#ff7200"></path>
            </svg>
        </button>
        <button id="posts">
            post
        </button>
    </div>

    <?php
					require "../con_footer.php";
					?>
    <!--------------------------------------------------------------------------->

    <?php

         require "../singin.php";

	   ?>

    <!--------------------------------------------------------------------------------------->
    <!-- Scripts -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="../../script.js"></script>
    <script src="../../assets/js/main.js"></script>
    <!-- End Scripts -->

</body>

</html>