<?php include "database.php";
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

        $(document).ready(function() {
            $(document).mousemove(function(event) {
                $(".temporary-hero").css("visibility", "hidden");
                $("#canvas-slider").css("visibility", "hidden");
            });
        });

        function visible() {
            var x = document.getElementsByClassName('temporary-hero')[0].style.visibility = 'hidden';
            var xy = document.getElementById('canvas-slider').style.visibility = 'hidden';
        }

        document.addEventListener(
            'scroll',
            (event) => {
                visible();
            }, {
                passive: true
            }
        );

        $(window).scroll(function() {
            var height = $(window).scrollTop();

            if (height < 100) {
                jQuery('.black-logo').css('opacity', '1');
                jQuery('.white-logo').css('opacity', '0');
            }
        });
    </script>

    <title>Brideroom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Download the best Creative Portfolio HTML Template in 2021" />
    <meta name="author" content="ClaPat Studio">
    <meta charset="UTF-8" />
    <link rel="icon" type="image/ico" href="favicon.ico" />
    <link href="style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>


<body class="hidden hidden-ball" onmousemove="visible()" onmousewheel="visible()" data-primary-color="#ff0000" onscroll="var xy = document.getElementById('canvas-slider').style.visibility = 'hidden';var x = document.getElementsByClassName('temporary-hero')[0].style.visibility = 'hidden';" onload="var xy = document.getElementById('canvas-slider').style.visibility = 'hidden';visible(); var a = document.getElementById('images'); var b = document.getElementById('video'); b.height=a.height; $('.temporary-hero').remove();">


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

                <?php
                $type = 1;
                if (isset($_GET['floral'])) {
                    $type = 1;
                }
                if (isset($_GET['lemontrees'])) {
                    $type = 2;
                }
                if (isset($_GET['bloom'])) {
                    $type = 3;
                }
                $getir = $db->query("SELECT * from content where type=" . $type . " and dil=" . $dil)->fetch(PDO::FETCH_ASSOC);
                ?>
                <!-- Content Scroll -->
                <div id="content-scroll">
                    <!-- Main -->
                    <div id="main" style="background-color:white;">
                        <!-- Main Content -->
                        <div id="main-content">
                            <div id="main-page-content">
                                <!-- Row -->
                                <div class="content-row row_padding_all light-section change-header-color full" style="margin-top:55px;" data-bgcolor="#fff">

                                    <hr class="white-line has-animation">

                                    <div class="one_third">
                                        <p class="has-animation"><?php echo $getir['service'] ?></p>
                                    </div>

                                    <div class="one_third">
                                        <p class="has-animation"><?php echo $getir['concept'] ?></p>
                                    </div>

                                    <div class="one_third last">
                                        <p class="has-animation"><?php echo $getir['place'] ?></p>
                                    </div>

                                </div>
                                <!--/Row -->
                                <!-- Row -->
                                <div class="content-row row_padding_all light-section change-header-color full" data-bgcolor="#fff">

                                    <div class="one_third"></div>

                                    <div class="two_third last">

                                        <h2 class="has-mask has-animation"><?php echo $getir['content'] ?></h2>

                                    </div>

                                </div>
                                <!--/Row -->
                                <?php
                                if ($type != 3) {
                                    if ($getir['video'] != null and $getir['video'] != "") {
                                ?>
                                        <div class="content-row row_padding_all dark-section full" data-bgcolor="#ffffff">

                                            <!-- Video Player -->
                                            <div class="video-wrapper has-animation" id="video">

                                                <iframe width="100%" height="960" src="https://www.youtube.com/embed/<?php echo $getir['video']  ?>?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                            <!--/Video Player -->

                                        </div>
                                        <!-- Row -->
                                <?php }
                                }
                                ?>


                                <?php
                                $imagetemplate = 2;
                                if ($imagetemplate == 1) {
                                ?>
                                    <div class="content-row row_padding_top row_padding_bottom light-section change-header-color" data-bgcolor="#fff">

                                        <div class="swiper-container content-looped-carousel has-animation autocenter light-cursor" data-delay="0">
                                            <div class="swiper-wrapper">

                                                <?php
                                                $images = $db->query("SELECT * from content_images where ID=" . $getir['imageid'])->fetch(PDO::FETCH_ASSOC);
                                                $dizin = $images['DosyaYolu'];
                                                function uzanti($f)
                                                {
                                                    $a = explode(".", $f);
                                                    foreach ($a as $parts) {
                                                        $r = $parts;
                                                    }
                                                    return $r;
                                                }
                                                $dir = opendir($dizin); ?>
                                                <?php
                                                $count = 0;
                                                $rastgele = array();
                                                while (($dosya = readdir($dir)) !== false) {

                                                    if (!is_dir($dosya)) {
                                                        if ((uzanti($dosya) == "jpg") ||
                                                            (uzanti($dosya) == "JPG") ||
                                                            (uzanti($dosya) == "jpeg") ||
                                                            (uzanti($dosya) == "JPEG") ||
                                                            (uzanti($dosya) == "png") ||
                                                            (uzanti($dosya) == "PNG")
                                                        ) {
                                                            array_push($rastgele, $dizin . $dosya);
                                                        }
                                                    }
                                                }
                                                shuffle($rastgele);
                                                foreach ($rastgele as $imagepath) {
                                                    $count++;
                                                    echo '<div class="swiper-slide" id="images">';
                                                    echo '<figure class="has-animation">';
                                                    echo '<a href="' . $imagepath . '" class="image-link"><img src="' . $imagepath . '" alt=""></a>';
                                                    echo '<figcaption>' . $getir['imagecaption'] . '</figcaption></figure></div>';
                                                    if ($count > $getir['imagecount']) {
                                                        break;
                                                    }
                                                }
                                                closedir($dir);
                                                ?>
                                            </div>

                                        </div>

                                    </div>
                                <?php } else if ($imagetemplate == 2) { ?>
                                    <div class="content-row row_padding_all change-header-color full light-section" data-bgcolor="#fff">

                                        <!-- Collage -->
                                        <div id="justified-grid">

                                            <?php
                                            $images = $db->query("SELECT * from content_images where ID=" . $getir['imageid'])->fetch(PDO::FETCH_ASSOC);
                                            $dizin = $images['DosyaYolu'];
                                            function uzanti($f)
                                            {
                                                $a = explode(".", $f);
                                                foreach ($a as $parts) {
                                                    $r = $parts;
                                                }
                                                return $r;
                                            }
                                            $dir = opendir($dizin); ?>
                                            <?php
                                            $count = 0;
                                            $rastgele = array();
                                            while (($dosya = readdir($dir)) !== false) {

                                                if (!is_dir($dosya)) {
                                                    if ((uzanti($dosya) == "jpg") ||
                                                        (uzanti($dosya) == "JPG") ||
                                                        (uzanti($dosya) == "jpeg") ||
                                                        (uzanti($dosya) == "JPEG") ||
                                                        (uzanti($dosya) == "png") ||
                                                        (uzanti($dosya) == "PNG")
                                                    ) {
                                                        array_push($rastgele, $dizin . $dosya);
                                                    }
                                                }
                                            }
                                            shuffle($rastgele);
                                            foreach ($rastgele as $imagepath) {
                                                $count++;
                                                echo '<div class="collage-thumb">';
                                                echo '<a class="image-link" href="' . $imagepath . '">';
                                                echo '<img src="' . $imagepath . '" alt="img" />';
                                                echo '<div class="thumb-info">' . $getir['imagecaption'] . '</div>';
                                                echo '</a></div>';
                                                if ($count > 20) {
                                                    break;
                                                }
                                            }
                                            closedir($dir);
                                            ?>
                                            <!-- Collage item with pop-up -->



                                        </div>
                                        <!--/Collage -->

                                    </div>
                                <?php  } ?>
                                <!--/Row -->
                            </div>
                            <!--/Main Page Content -->
                        </div>
                        <!--/Main Content -->
                    </div>
                    <!--/Main -->
                    <!-- Footer -->
                    <?php include "Pieces/footer.php"; ?>
                    < <!--/Footer -->
                </div>

                <!--/Content Scroll -->
                <div id="app"></div>
                <div class="next-project-image-wrapper" style="background-color: white;">
                    <div class="next-project-image" style="background-color: white;">
                        <div class="next-project-image-bg" style="background-color: white;"></div>
                    </div>
                </div>
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