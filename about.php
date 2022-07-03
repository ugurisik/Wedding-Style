<?php
session_start();
if (isset($_SESSION['dil'])) {
    $dil = $_SESSION['dil'];
} else {
    $_SESSION['dil'] = 1;
}
$dil = $_SESSION['dil'];
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
    </script>

    <title>Brideroom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <link rel="icon" type="image/ico" href="favicon.ico" />
    <link href="style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>


<?php
include "database.php";
$_METHOD = $_SERVER['REQUEST_METHOD'];
$type = false;
if ($_METHOD == "GET") {
    if (isset($_GET['photoroom'])) {
        $type = true;
    }
}


?>


<body class="hidden hidden-ball" data-primary-color="#ff0000">


    <main>

        <!-- Preloader -->
        <?php include "Pieces/preloader.php"; ?>
        <!--/Preloader -->

        <div class="cd-index cd-main-content">

            <!-- Page Content -->
            <div id="page-content" class="light-content" data-bgcolor="#171717">

                <!-- Header -->
                <?php include "Pieces/header.php"; ?>
                <!--/Header -->


                <!-- Content Scroll -->
                <div id="content-scroll">


                    <!-- Main -->
                    <?php if ($type == false) {
                        include "Pieces/brideroom.php";
                    } else {
                        include "Pieces/photoroom.php";
                    } ?>
                    <!--/Main -->

                    <!-- Footer -->
                    <?php include "Pieces/footer.php"; ?>
                    <!--/Footer -->


                </div>
                <!--/Content Scroll -->


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