<?php
include "../database.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
}
$update = false;
$method = $_SERVER["REQUEST_METHOD"];
if ($method == "POST") {
    if (isset($_POST['submit'])) {
        $service = $_POST['service'];
        $concept = $_POST['concept'];
        $place = $_POST['place'];
        $content = $_POST['content'];
        $video = $_POST['video'];
        $imagecount = $_POST['imagecount'];
        $imagecaption = $_POST['imagecaption'];

        $service_en = $_POST['service_en'];
        $concept_en = $_POST['concept_en'];
        $place_en = $_POST['place_en'];
        $content_en = $_POST['content_en'];
        $video_en = $_POST['video_en'];
        $imagecount_en = $_POST['imagecount_en'];
        $imagecaption_en = $_POST['imagecaption_en'];

        $service_de = $_POST['service_de'];
        $concept_de = $_POST['concept_de'];
        $place_de = $_POST['place_de'];
        $content_de = $_POST['content_de'];
        $video_de = $_POST['video_de'];
        $imagecount_de = $_POST['imagecount_de'];
        $imagecaption_de = $_POST['imagecaption_de'];


        $type = $_POST['type'];

        $updatetr = $db->prepare("UPDATE content set service=?,concept=?,place=?,content=?,video=?,imagecount=?,imagecaption=? where Dil=? and type=?");
        $updatetr = $updatetr->execute(array($service, $concept, $place, $content, $video, $imagecount, $imagecaption, 1, $type));

        $updateen = $db->prepare("UPDATE content set service=?,concept=?,place=?,content=?,video=?,imagecount=?,imagecaption=? where Dil=? and type=?");
        $updateen = $updateen->execute(array($service_en, $concept_en, $place_en, $content_en, $video_en, $imagecount_en, $imagecaption_en, 2, $type));

        $updatede = $db->prepare("UPDATE content set service=?,concept=?,place=?,content=?,video=?,imagecount=?,imagecaption=? where Dil=? and type=?");
        $updatede = $updatede->execute(array($service_de, $concept_de, $place_de, $content_de, $video_de, $imagecount_de, $imagecaption_de, 3, $type));
        if ($updatetr) {
            $update = true;
        } else {
            $update = false;
        }
        if ($updateen) {
            $update = true;
        } else {
            $update = false;
        }
        if ($updatede) {
            $update = true;
        } else {
            $update = false;
        }
        if ($update) {
            header("location:portfolyo.php?basarili");
        } else {
            header("location:portfolyo.php?hatali");
        }
    }
}


if ($method == "GET") {
    $link =  "<script>window.location.href = 'portfolyo.php?floral'</script>";
    if (isset($_GET['type'])) {
        switch ($_GET['type']) {
            case 1:
                $link = "<script>window.location.href = 'portfolyo.php?floral'</script>";
                break;
            case 2:
                $link = "<script>window.location.href = 'portfolyo.php?lemontrees'</script>";
                break;
            case 3:
                $link = "<script>window.location.href = 'portfolyo.php?bloom'</script>";
                break;
        }
    }
    if (isset($_GET['floralgorsel'])) {
        $gorsel = $_GET['floralgorsel'];
        unlink($gorsel);
        echo $link;
    }
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Brideroom | Admin Sayfası </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="dropzone.css" rel="stylesheet" type="text/css">
    <script src="dropzone.js" type="text/javascript"></script>
    <script>
        function changePicture() {
            $('#upload').click();
        }

        function changePictureuye() {
            $('#uploaduye').click();
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image')
                        .attr('src', e.target.result);

                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURLuye(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imageuye')
                        .attr('src', e.target.result);

                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</head>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <?php include "navheader.php"; ?>
        <!--**********************************
            Nav header end
        ***********************************-->
        <!--**********************************
            Header start
        ***********************************-->
        <?php include "header.php"; ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include "sidebar.php"; ?>
        <!--**********************************
            Sidebar end
        ***********************************-->
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <?php
                    if (isset($_GET['basarili'])) {
                        echo '<div class="col-md-12">
                        <div class="col-xl-12">
                            <div class="alert alert-success left-icon-big alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="alert-left-icon-big">
                                        <span><i class="mdi mdi-check-circle-outline"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">BAŞARILI!</h5>
                                        <p>Başarılı bir şekilde güncellendi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                    } elseif (isset($_GET['hatali'])) {
                        echo '
                        <div class="col-md-12">
                            <div class="col-xl-12">
                                <div class="alert alert-danger left-icon-big alert-dismissible fade show">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                    </button>
                                    <div class="media">
                                        <div class="alert-left-icon-big">
                                            <span><i class="mdi mdi-alert"></i></span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-1 mb-1">HATALI!</h5>
                                            <p>Güncelleme esnasında bir hata oluştu.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-xxl-6 col-lg-6 col-sm-6">

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Portfolyo Ayarları</h5>
                            </div>
                            <div class="card-body">

                                <div class="col-xs-12">
                                    <form action="" method="POST" enctype="">
                                        <div class="row form-group">
                                            <?php $languages = $db->prepare("SELECT * FROM dil");
                                            $languages->execute();
                                            while ($rows = $languages->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                                <div class="col">
                                                    <div class="row mb-4 mt-4 justify-content-center">
                                                        <label><strong><?php echo $rows['Dil']; ?></strong></label>
                                                    </div>
                                                </div>
                                            <?php }
                                            ?>
                                        </div>
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
                                        $bridetr = $db->query("SELECT * FROM content where dil=1 and type=$type");
                                        $bridetrcount = $bridetr->rowCount();
                                        if ($bridetrcount) {
                                            $bridetr = $bridetr->fetch(PDO::FETCH_ASSOC);
                                        }

                                        $brideen = $db->query("SELECT * FROM content where dil=2 and type=$type");
                                        $brideencount = $brideen->rowCount();
                                        if ($brideencount) {
                                            $brideen = $brideen->fetch(PDO::FETCH_ASSOC);
                                        }

                                        $bridede = $db->query("SELECT * FROM content where dil=3 and type=$type");
                                        $bridedecount = $bridede->rowCount();
                                        if ($bridedecount) {
                                            $bridede = $bridede->fetch(PDO::FETCH_ASSOC);
                                        }
                                        ?>
                                        <div class="row form-group">
                                            <div class="col">
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">Hizmet</label>
                                                    <input class="form-control" id="left" type="text" name="service" value="<?php echo $bridetr['service']; ?>">
                                                    <input class="form-control" style="visibility: hidden;display: none;" type="text" name="type" value="<?php echo $type; ?>">
                                                </div>
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">Konsept</label>
                                                    <input class="form-control" id="left" type="text" name="concept" value="<?php echo $bridetr['concept']; ?>">
                                                </div>
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">Mekan</label>
                                                    <input class="form-control" id="left" type="text" name="place" value="<?php echo $bridetr['place']; ?>">
                                                </div>
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">İçerik</label>
                                                    <textarea rows="5" class="form-control" id="left" type="text" name="content"><?php echo $bridetr['content']; ?></textarea>
                                                </div>
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">Video ID (ÖRNEK : https://www.youtube.com/watch?v=<strong style="color: red;">E47TwFfouU0</strong>&ab_channel=SonyMusicTürkiye)</label>
                                                    <input class="form-control" id="left" type="text" name="video" value="<?php echo $bridetr['video']; ?>" placeholder="E47TwFfouU0">
                                                </div>
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">Görüntülenecek Görsel Sayısı</label>
                                                    <input class="form-control" id="left" type="number" name="imagecount" value="<?php echo $bridetr['imagecount']; ?>">
                                                </div>
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">Görsel Başlığı</label>
                                                    <input class="form-control" id="left" type="text" name="imagecaption" value="<?php echo $bridetr['imagecaption']; ?>">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">Hizmet</label>
                                                    <input class="form-control" id="left" type="text" name="service_en" value="<?php echo $brideen['service']; ?>">
                                                </div>
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">Konsept</label>
                                                    <input class="form-control" id="left" type="text" name="concept_en" value="<?php echo $brideen['concept']; ?>">
                                                </div>
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">Mekan</label>
                                                    <input class="form-control" id="left" type="text" name="place_en" value="<?php echo $brideen['place']; ?>">
                                                </div>
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">İçerik</label>
                                                    <textarea rows="5" class="form-control" id="left" type="text" name="content_en"><?php echo $brideen['content']; ?></textarea>
                                                </div>
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">Video ID (ÖRNEK : https://www.youtube.com/watch?v=<strong style="color: red;">E47TwFfouU0</strong>&ab_channel=SonyMusicTürkiye)</label>
                                                    <input class="form-control" id="left" type="text" name="video_en" value="<?php echo $brideen['video']; ?>" placeholder="E47TwFfouU0">
                                                </div>
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">Görüntülenecek Görsel Sayısı</label>
                                                    <input class="form-control" id="left" type="number" name="imagecount_en" value="<?php echo $brideen['imagecount']; ?>">
                                                </div>
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">Görsel Başlığı</label>
                                                    <input class="form-control" id="left" type="text" name="imagecaption_en" value="<?php echo $brideen['imagecaption']; ?>">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">Hizmet</label>
                                                    <input class="form-control" id="left" type="text" name="service_de" value="<?php echo $bridede['service']; ?>">
                                                </div>
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">Konsept</label>
                                                    <input class="form-control" id="left" type="text" name="concept_de" value="<?php echo $bridede['concept']; ?>">
                                                </div>
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">Mekan</label>
                                                    <input class="form-control" id="left" type="text" name="place_de" value="<?php echo $bridede['place']; ?>">
                                                </div>
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">İçerik</label>
                                                    <textarea rows="5" class="form-control" id="left" type="text" name="content_de"><?php echo $bridede['content']; ?></textarea>
                                                </div>
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">Video ID (ÖRNEK : https://www.youtube.com/watch?v=<strong style="color: red;">E47TwFfouU0</strong>&ab_channel=SonyMusicTürkiye)</label>
                                                    <input class="form-control" id="left" type="text" name="video_de" value="<?php echo $bridede['video']; ?>" placeholder="E47TwFfouU0">
                                                </div>
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">Görüntülenecek Görsel Sayısı</label>
                                                    <input class="form-control" id="left" type="number" name="imagecount_de" value="<?php echo $bridede['imagecount']; ?>">
                                                </div>
                                                <div class="row mx-4 justify-content-center mt-2">
                                                    <label for="left">Görsel Başlığı</label>
                                                    <input class="form-control" id="left" type="text" name="imagecaption_de" value="<?php echo $bridede['imagecaption']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group justify-content-center text-center">
                                            <div class="col">
                                                <button type="submit" name="submit" class="btn btn-primary" value="GÜNCELLE">GÜNCELLE</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row form-group justify-content-center text-center m0-0">
                                        <label for="left">Site performansı açısında görselleri optimize etmeden yüklemeyiniz. <strong><a target="_blank" href="https://bulkresizephotos.com/tr?preset=true&quality=0.3">Bu</a></strong> linkten optimize edebilirsiniz.</label>
                                    </div>
                                    <div class="row form-group justify-content-center text-center mb-3 mt-0">
                                        <div class="container">
                                            <div class='content'>
                                                <form action="upload.php" class="dropzone" id="dropzonewidget">
                                                    <input type="text" style="display: none;" name="type" value="<?= $type ?>">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $images = $db->query("SELECT * from content_images where ID=$type")->fetch(PDO::FETCH_ASSOC);
                                    $dizin = "../" . $images['DosyaYolu'];
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
                                    echo '<div class="row text-center"><p class="text-center"><strong>Toplam resim sayısı: ' . count($rastgele) . '</strong></p></div>';
                                    foreach ($rastgele as $imagepath) {
                                        if ($count % 6 == 0) {
                                            echo '<div class="row">';
                                        }
                                        echo '<div class="col-md-2 card mb-3">
                                                <img class="card-img-top img-fluid" src="' . $imagepath . '">
                                                <div class="card-header">
                                                    <h5 class="card-title"><a href="portfolyo.php?floral=&floralgorsel=' . $imagepath . '&type=' . $type . '">
                                                    <button type="button" class="btn btn-danger">Görseli Sil <span class="btn-icon-right"><i class="fa fa-close"></i></span>
                                                    </button>
                                                </a></h5>
                                                </div>
                                            </div>
                                        ';
                                        $count++;
                                        if ($count % 6 == 0) {
                                            echo '</div>';
                                        }
                                    }
                                    closedir($dir);
                                    ?>

                                    <!-- <div class="row">
                                            <div class="col-md-2 card mb-3">
                                                <img class="card-img-top img-fluid" src="../images" alt="Card image cap">
                                                <div class="card-header">
                                                    <h5 class="card-title"><button type="button" class="btn btn-danger">Görseli Sil <span class="btn-icon-right"><i class="fa fa-close"></i></span>
                                                        </button></h5>
                                                </div>
                                            </div>
                                        </div> -->


                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->

        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js">
    </script>
    <script src="./js/quixnav-init.js">
    </script>
    <script src="./js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morris/morris.min.js"></script>


    <script src="./vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="./vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="./vendor/flot/jquery.flot.js"></script>
    <script src="./vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="./vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="./vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>