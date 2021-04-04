<?php include "../config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="sty.css">
</head>

<body>
    <header>
        <img src="../assets/Untitled-1.png" class="logo" width="80px">
        <!-- <a href="" class="logo">Harley Davidson</a> -->
        <div class="toggle" onclick="toggleMenu();"></div>
        <ul class="menu">
            <li><a href="index.html" onclick="toggleMenu();">Home</a></li>
            <li><a href="#" onclick="toggleMenu();">About</a></li>
            <li><a href="#" onclick="toggleMenu();">Article</a></li>
            <li><a href="#" onclick="toggleMenu();">Contact</a></li>
        </ul>
    </header>

    <section class="banner">
        <div class="textBx">
            <h2>WELCOME TO<br><span>MOTORCYCLE COMMUNITY</span></h2>
            <a href="#" class="btn">More >>></a>
        </div>
    </section>

    <!-- ------Berita----- -->
    <div class="container">
        <div class="row text-center">
            <div class="col pt-3">
                <h2>LATEST NEWS</h2>
            </div>
        </div>
        <div class="row">
        <?php

        $result = mysqli_connect($servername, $username, $password) or die("Could not connect to database." . mysqli_error());
        mysqli_select_db($result, $dbname) or die("Could not select the databse." . mysqli_error());
        $image_query = mysqli_query($result, "select judul,image,article from news");
        while ($rows = mysqli_fetch_array($image_query)) {

            $img_name = $rows['judul'];
            $img_src = $rows['image'];
            $article = $rows['article'];

        ?>
            <div class="col-md-4 pt-5 pb-3">
                    <div class="card w-100 h-auto d-inline-block" style="height: 100px;">
                        <h3><strong><?php echo $img_name; ?></strong></h3>
                        <img src="<?php echo $img_src; ?>" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text"><?php echo $article; ?></p>
                            <a href="#" class="btn btn-primary fixed-bottom">Go somewhere</a>
                        </div>
                    </div>
                </div>
            

            <?php
        }
            ?>
        </div>
    </div>

<!-- -----vidio----- -->
<div class="container">
<div class="row text-center">
<div class="col">
<h2>Vidio Activity</h2>
</div>
</div>
<div class="row">
<div class="col-md-4 mt-5 pr-3 pl-3 pb-5">
<iframe width="360" height="315" src="https://www.youtube.com/embed/UvmFABoTj_A" 
frameborder="0" allow="accelerometer; 
autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="col-md-4 mt-5 pr-3 pl-3 pb-5">
<iframe width="360" height="315" src="https://www.youtube.com/embed/znwzzLOxef4" 
frameborder="0" allow="accelerometer;
autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="col-md-4 mt-5 pr-3 pl-3 pb-5">
<iframe width="360" height="315" src="https://www.youtube.com/embed/e3T8RB4jv6A" 
frameborder="0" allow="accelerometer; 
autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
</div>

<!-- -----!vidio----- -->


        <!-- --------footer------ -->
            <footer>
                <div class="container">
                    <div class="sec aboutus">
                        <h2>About Us</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Consequatur expedita aut commodi blanditiis id esse, tenetur,
                            sapiente corrupti quasi excepturi illum nesciunt accusantium minima.
                            Ab corporis accusantium modi voluptatibus eveniet!
                        </p>
                        <ul class="sci">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCIO3PWx7jutj9T5MBq6H_9Q"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="sec quickLink">
                        <h2>Quick Links</h2>
                        <ul>
                            <li><a href="">About</a></li>
                            <li><a href="">Faq</a></li>
                            <li><a href="">Terms & Conditions</a></li>
                            <li><a href="">Help</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                    <div class="sec contact">
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                <span>nbnsb streat Dc <br>
                                    kdkjvsdkvjksja, PA 99289,<br>USA</span>
                            </li>
                            <li>
                                <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <p><a href="12345673276">+76 3294372732</a><br>
                                    <a href="12345673276">+76 3294372732</a>
                                </p>
                            </li>
                            <li>
                                <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                <p><a href="saya@gmail.com">Komunitas@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
            <div class="copyrightText">
                <p>CopyRight 2021 Muhammad Aldy Alfarish & Muhammad Ridho Hauzan. ALL Rights Reserved</p>
            </div>

            <!-- <div class="footer">
        <p class="copyright text-center">&#169; Made With MUHAMMAD ALDY ALFARISH </p>
    </div> -->

            <script type="text/javascript">
                window.addEventListener('scroll', function() {
                    var header = document.querySelector('header');
                    header.classList.toggle('sticky', window.scrollY > 0);
                });

                function toggleMenu() {
                    var menuToggle = document.querySelector('.toggle');
                    var menu = document.querySelector('.menu');
                    menuToggle.classList.toggle('active');
                    menu.classList.toggle('active');
                }
            </script>
</body>

</html>