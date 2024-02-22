<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
session_start();

include "koneksi.php";
$result = mysqli_query($konek, "SELECT * FROM tb_projek");
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit(); // Terminate script execution after the redirect
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Main Page</title>

    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- //google-fonts -->

    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">

</head>

<body>


    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand" href="index.html">
                        <i class="fab fa-asymmetrik"></i> Kals Projects
                    </a>
                </h1>
                <!-- if logo is image enable this   
            <a class="navbar-brand" href="#index.html">
                <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
            </a> -->
                <button class="navbar-toggler collapsed bg-gradient" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ms-lg-auto align-items-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#data">Data Projek</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tambah_projek.php">Tambah Projek</a>
                        </li>
                        

                        <!--/right-btn-->
                        <div class="header-btn mx-2">
                            <a class="btn btn-style btn-primary mr-lg-5" href="login.php"> Hi, <?php echo $_SESSION['username']; ?>!  </a>
                        </div>
                        <!--/right-btn-->
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>

                    </ul>
                </div>

                <!-- search -->
                <ul class="cd-header-buttons px-lg-2">
                    <li>
                    <a class="cd-search-trigger" href="#cd-search">
                        <span></span>
                    </a>
                    </li>
                </ul>
                <div id="cd-search" class="cd-search">
                    <form action="#url" method="post">
                        <input name="Search" type="search" placeholder="Click enter after typing...">
                    </form>
                </div>
                <!-- //search -->
                
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->




    <!-- banner section -->
    <section id="home" class="w3l-banner pt-5">
        <div class="container pt-lg-5 pt-md-4">
            <div class="row pt-lg-5 pt-4">
                <div class="col-lg-7 banner-info-grid pt-lg-0 pt-5">
                    <h1 class="mb-3">Hi, Aku Chikal!</h1>
                    <h3 class="mb-4"> <span class="typed-text"></span><span class="cursor">&nbsp</span> </h3>
                    <p>Aku suka buat projek</p>
                    
                    <a class="btn btn-primary btn-style mt-5 me-2" href="contact.html"> Join Kerja Sama </a>
                    <a class="btn btn-style transparent-btn mt-5" href="#portfolio"> My Portfolio </a>
                    
                </div>
                <div class="col-lg-5 text-lg-end my-image mt-lg-0 mt-4">
                    <img src="assets/images/bg.png" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>

    <!-- //banner section -->
<section class="about-section py-5" id="data">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row justify-content-center">
            
        <?php
$sql = "SELECT * FROM tb_projek";
$result = $konek->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
    <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
        <div class="about-single">
            <div class="about-icon mb-4">
                <i class="fab fa-app-store"></i>
            </div>
            <div class="about-content">
                <h5 class="mb-3"><a href="about.html"><?php echo $row["nama"]; ?></a></h5>
                <p><?php echo $row["deskripsi"]; ?></p>
                <br>
                <p>Harga : <?php echo $row["harga"]; ?></p>
                <p>Deadline : <?php echo $row["deadline"]; ?></p>
            </div>
        </div>
    </div>
<?php
    }
} else {
    echo "Tidak ada data dalam tabel.";
}
?>         
   
</section>



     <!-- footer -->
     <footer class="text-center">
        <div class="footer py-5">
            <div class="container py-md-4">
                <div clss="footer-logo">
                    <a class="logo" href="index.html">
                        <i class="fab fa-asymmetrik"></i> Kals Projects
                    </a>
                </div>
                <div class="footer-contact-info mt-4">
                    <ul>
                        <li>
                            <a href="tel:+12 345 678 900" class="contact-text-sub">
                                <span class="fas fa-phone me-2"></span>+18 02 1994</a>
                        </li>
                        <li>
                            <a href="mailto:info@example.com" class="contact-text-sub">
                                <span class="fas fa-envelope me-2"></span>kals@example.com </a>
                        </li>
                        <li>
                            <p class="contact-text-sub"> 
                                <span class="fas fa-map-marker me-2"></span>Jl. Inajadulu</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container py-4">
            <div class="row footer-grids">
                <div class="col-lg-6 copyright text-lg-start text-center align-center">
                    <p>© 2023 Kals Projects. All Rights Reserved | Design by <a href="http://w3layouts.com/"> Kals</a> </p>
                </div>
                <div class="col-lg-6 text-lg-end text-center mt-lg-0 mt-4">
                    <div class="social">
                        <ul>
                            <li><a href="#url"><span class="fab me-2 fa-facebook-f"></span></a></li>
                            <li><a href="#url"><span class="fab me-2 fa-twitter"></span></a></li>
                            <li><a href="#url"><span class="fab me-2 fa-google-plus"></span></a></li>
                            <li><a href="#url"><span class="fab me-2 fa-pinterest"></span></a></li>
                            <li><a href="#url"><span class="fab me-2 fa-vk"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->



    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!--search-bar-->
    <script src="assets/js/search.js"></script>
    <!--//search-bar-->

    <!--/stats-number-counter-->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();

    </script>
    <!--//stats-number-counter-->

    <!--/owlcarousel-->
    <script src="assets/js/owl.carousel.js"></script>
    <!-- //brands-->
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                loop: true,
                autoplay: true,
                autoplaySpeed: 1500,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 2,
                        nav: false
                    },
                    568: {
                        items: 3,
                        nav: false
                    },
                    768: {
                        items: 4,
                        nav: false
                    }
                }
            })
        })

    </script>
    <!-- //brands-->

    <!-- /typig-text-->
    <script>
        const typedTextSpan = document.querySelector(".typed-text");
        const cursorSpan = document.querySelector(".cursor");

        const textArray = ["Web Designer", "Web Developer", "Photographer", "Freelancer"];
        const typingDelay = 200;
        const erasingDelay = 10;
        const newTextDelay = 100; // Delay between current and next text
        let textArrayIndex = 0;
        let charIndex = 0;

        function type() {
            if (charIndex < textArray[textArrayIndex].length) {
                if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
                charIndex++;
                setTimeout(type, typingDelay);
            } else {
                cursorSpan.classList.remove("typing");
                setTimeout(erase, newTextDelay);
            }
        }

        function erase() {
            if (charIndex > 0) {
                // add class 'typing' if there's none
                if (!cursorSpan.classList.contains("typing")) {
                    cursorSpan.classList.add("typing");
                }
                typedTextSpan.textContent = textArray[textArrayIndex].substring(0, 0);
                charIndex--;
                setTimeout(erase, erasingDelay);
            } else {
                cursorSpan.classList.remove("typing");
                textArrayIndex++;
                if (textArrayIndex >= textArray.length) textArrayIndex = 0;
                setTimeout(type, typingDelay);
            }
        }

        document.addEventListener("DOMContentLoaded", function () { // On DOM Load initiate the effect
            if (textArray.length) setTimeout(type, newTextDelay + 250);
        });
    </script>
    <!-- //typig-text-->


    <!-- jQuery-Photo-filter-lightbox-portfolio-plugin -->
    <script src="assets/js/jquery-1.7.2.js"></script>
    <script src="assets/js/jquery.quicksand.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->

</body>

</html>