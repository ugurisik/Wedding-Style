<?php
include "database.php";
session_start();
if (isset($_SESSION['dil'])) {
    $dil = $_SESSION['dil'];
} else {
    $_SESSION['dil'] = 1;
}
$dil = $_SESSION['dil'];

if (isset($_GET['dildegistir'])) {
    $_SESSION['dil'] = $_GET['dildegistir'];
    header("location:index.php");
}

$home = $db->query("SELECT * from home where Dil=" . $dil)->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'code_here', 'auto');
        ga('send', 'pageview');


        function GetWidth() {
            var win = window,
                doc = document,
                docElem = doc.documentElement,
                body = doc.getElementsByTagName('body')[0],
                x = win.innerWidth || docElem.clientWidth || body.clientWidth,
                y = win.innerHeight || docElem.clientHeight || body.clientHeight;

            return x;
        }
        var img = document.getElementById("img_teammember");
        img.onload = function() {
            img.style.top = "100%";
        }
    </script>
    <title>Brideroom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="">
    <meta charset="UTF-8" />
    <link rel="icon" type="image/ico" href="favicon.ico" />
    <link href="style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body class="hidden hidden-ball" data-primary-color="#ff0000">
    <main>
        <!-- Preloader -->
        <?php include "Pieces/preloader.php"; ?>
        <!--/Preloader -->
        <div class="cd-index cd-main-content">
            <!-- Page Content -->
            <div id="page-content" class="light-content" data-bgcolor="#141414">
                <!-- Header -->
                <?php include "Pieces/header.php"; ?>
                <!--/Header -->
                <!-- Content Scroll -->
                <div id="content-scroll">
                    <!-- Main -->
                    <div id="main">
                        <!-- Main Content -->
                        <div id="main-content">
                            <!-- Showcase Slider Holder -->
                            <?php
                            $pattern = $db->query("SELECT * from data_pattern_image where ID=" . $home['data_pattern_img_id'])->fetch(PDO::FETCH_ASSOC);
                            if ($dil == 2) {
                                $home_slider1 = $db->query("SELECT * from home_slider where ID=4")->fetch(PDO::FETCH_ASSOC);
                                $home_slider2 = $db->query("SELECT * from home_slider where ID=5")->fetch(PDO::FETCH_ASSOC);
                                $home_slider3 = $db->query("SELECT * from home_slider where ID=6")->fetch(PDO::FETCH_ASSOC);
                            } else if($dil == 1) {
                                $home_slider1 = $db->query("SELECT * from home_slider where ID=1")->fetch(PDO::FETCH_ASSOC);
                                $home_slider2 = $db->query("SELECT * from home_slider where ID=2")->fetch(PDO::FETCH_ASSOC);
                                $home_slider3 = $db->query("SELECT * from home_slider where ID=3")->fetch(PDO::FETCH_ASSOC);
                            }else if($dil == 3){
                                $home_slider1 = $db->query("SELECT * from home_slider where ID=7")->fetch(PDO::FETCH_ASSOC);
                                $home_slider2 = $db->query("SELECT * from home_slider where ID=8")->fetch(PDO::FETCH_ASSOC);
                                $home_slider3 = $db->query("SELECT * from home_slider where ID=9")->fetch(PDO::FETCH_ASSOC);
                            }

                            ?>

                            <div id="showcase-slider-holder" data-pattern-img="<?php echo $pattern['ResimYolu']; ?>">
                                <div id="showcase-slider" class="swiper-container">
                                    <div id="trigger-slides" class="swiper-wrapper">

                                        <div class="swiper-slide" data-title="<?php echo $home_slider1['data_title'] ?>" data-subtitle="<?php echo $home_slider1['data_subtitle'] ?>">
                                            <div class="slide-wrap active" data-slide="0"></div>
                                            <div class="outer">
                                                <div class="inner">
                                                    <a class="slide-link" data-type="page-transition" data-firstline="<?php echo $home_slider1['data_firstline'] ?>" data-secondline="<?php echo $home_slider1['data_secondline'] ?>" href="<?php echo $home_slider1['href'] ?>">
                                                        <div class="slide-title-wrapper">
                                                            <div class="subtitle"><span><?php echo $home_slider1['data_subtitle'] ?></span></div>
                                                            <div class="slide-title"><span><?php echo $home_slider1['data_title'] ?></span></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-title="<?php echo $home_slider2['data_title'] ?>" data-subtitle="<?php echo $home_slider2['data_subtitle'] ?>">
                                            <!--- class black text change-header -->
                                            <div class="slide-wrap" data-slide="1"></div>
                                            <div class="outer">
                                                <div class="inner">
                                                    <a class="slide-link" data-type="page-transition" data-firstline="<?php echo $home_slider2['data_firstline'] ?>" data-secondline="<?php echo $home_slider2['data_secondline'] ?>" href="<?php echo $home_slider2['href'] ?>">
                                                        <div class="slide-title-wrapper">
                                                            <div class="subtitle"><span><?php echo $home_slider2['data_subtitle'] ?></span></div>
                                                            <div class="slide-title"><span><?php echo $home_slider2['data_title'] ?></span></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-title="<?php echo $home_slider3['data_title'] ?>" data-subtitle="<?php echo $home_slider3['data_subtitle'] ?>">
                                            <div class="slide-wrap" data-slide="2"></div>
                                            <div class="outer">
                                                <div class="inner">
                                                    <a class="slide-link" data-type="page-transition" data-firstline="<?php echo $home_slider3['data_firstline'] ?>" data-secondline="<?php echo $home_slider3['data_secondline'] ?>" href="<?php echo $home_slider3['href'] ?>">
                                                        <div class="slide-title-wrapper">
                                                            <div class="subtitle"><span><?php echo $home_slider3['data_subtitle'] ?></span></div>
                                                            <div class="slide-title"><span><?php echo $home_slider3['data_title'] ?></span></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Showcase Slider Holder -->
                            <!-- canvas slider -->
                            <div id="canvas-slider" class="canvas-slider">
                                <div class="slider-img" data-slide="0"><img class="slide-img" src="<?php echo $home_slider1['slide_img'] ?>" />
                                </div>
                                <div class="slider-img" data-slide="1"><img class="slide-img" src="<?php echo $home_slider2['slide_img'] ?>" />
                                </div>
                                <div class="slider-img" data-slide="2"><img class="slide-img" src="<?php echo $home_slider3['slide_img'] ?>" />
                                </div>
                            </div>
                            <!--/canvas slider -->
                        </div>
                        <!--/Main Content -->
                    </div>
                    <!--/Main -->

                    <!-- Footer -->
                    <footer class="hidden">
                        <div id="footer-container">
                            <div class="button-wrap left disable-drag swiper-prev">
                                <div class="icon-wrap parallax-wrap">
                                    <div class="button-icon parallax-element">
                                        <i class="fa fa-angle-left"></i>
                                    </div>
                                </div>
                                <div class="button-text sticky left"><span data-hover="<?php echo $home['sticky_left']; ?>"><?php echo $home['sticky_left']; ?></span></div>
                            </div>
                            <div class="button-wrap right disable-drag swiper-next">
                                <div class="icon-wrap parallax-wrap">
                                    <div class="button-icon parallax-element">
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </div>
                                <div class="button-text sticky right"><span data-hover="<?php echo $home['sticky_right']; ?>"><?php echo $home['sticky_right']; ?></span></div>
                            </div>
                        </div>
                    </footer>
                    <!--/Footer -->
                </div>
                <!--/Content Scroll -->
                <div class="showcase-pagination-wrap">
                    <div class="showcase-pagination"></div>
                </div>
                <div id="app"></div>
            </div>
            <!--/Page Content -->
        </div>
    </main>


    <div class="cd-cover-layer"></div>
    <div id="magic-cursor">
        <div id="ball">
            <div id="ball-drag-x"></div>
            <div id="ball-drag-y"></div>
            <div id="ball-loader"></div>
        </div>
    </div>
    <div id="clone-image"></div>
    <div id="rotate-device"></div>



    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r83/three.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.js'></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpK1sWi3J3EbUOkF_K4-UHzi285HyFX5M&sensor=false"></script>
    <script src="js/clapatwebgl.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/scripts.js"></script>



</body>

</html>