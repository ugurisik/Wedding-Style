<?php
include "../database.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
}

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
    $pattern = $_POST['pattern_select'];


    $sticky_left_tr = $_POST['sticky_left_tr'];
    $sticky_right_tr = $_POST['sticky_right_tr'];
    $floral_data_title = $_POST['floral_data_title'];
    $floral_data_subtitle = $_POST['floral_data_subtitle'];
    $floral_data_firstline = $_POST['floral_data_firstline'];
    $floral_data_secondline = $_POST['floral_data_secondline'];
    //$uploadfloral = $_POST['uploadfloral'];
    $bloom_data_title = $_POST['bloom_data_title'];
    $bloom_data_subtitle = $_POST['bloom_data_subtitle'];
    $bloom_data_firstline = $_POST['bloom_data_firstline'];
    $bloom_data_secondline = $_POST['bloom_data_secondline'];
    //$uploadbloom = $_POST['uploadbloom'];
    $lemon_data_title = $_POST['lemon_data_title'];
    $lemon_data_subtitle = $_POST['lemon_data_subtitle'];
    $lemon_data_firstline = $_POST['lemon_data_firstline'];
    $lemon_data_secondline = $_POST['lemon_data_secondline'];
    //$uploadlemon = $_POST['uploadlemon'];




    $sticky_left_en = $_POST['sticky_left_en'];
    $sticky_right_en = $_POST['sticky_right_en'];
    $enfloral_data_title = $_POST['enfloral_data_title'];
    $enfloral_data_subtitle = $_POST['enfloral_data_subtitle'];
    $enfloral_data_firstline = $_POST['enfloral_data_firstline'];
    $enfloral_data_secondline = $_POST['enfloral_data_secondline'];
    //$enuploadfloral = $_POST['enuploadfloral'];
    $enbloom_data_title = $_POST['enbloom_data_title'];
    $enbloom_data_subtitle = $_POST['enbloom_data_subtitle'];
    $enbloom_data_firstline = $_POST['enbloom_data_firstline'];
    $enbloom_data_secondline = $_POST['enbloom_data_secondline'];
    //$enuploadbloom = $_POST['enuploadbloom'];
    $enlemon_data_title = $_POST['enlemon_data_title'];
    $enlemon_data_subtitle = $_POST['enlemon_data_subtitle'];
    $enlemon_data_firstline = $_POST['enlemon_data_firstline'];
    $enlemon_data_secondline = $_POST['enlemon_data_secondline'];
    //$enuploadlemon = $_POST['enuploadlemon'];



    $sticky_left_de = $_POST['sticky_left_de'];
    $sticky_right_de = $_POST['sticky_right_de'];
    $defloral_data_title = $_POST['defloral_data_title'];
    $defloral_data_subtitle = $_POST['defloral_data_subtitle'];
    $defloral_data_firstline = $_POST['defloral_data_firstline'];
    $defloral_data_secondline = $_POST['defloral_data_secondline'];
    //$enuploadfloral = $_POST['enuploadfloral'];
    $debloom_data_title = $_POST['debloom_data_title'];
    $debloom_data_subtitle = $_POST['debloom_data_subtitle'];
    $debloom_data_firstline = $_POST['debloom_data_firstline'];
    $debloom_data_secondline = $_POST['debloom_data_secondline'];
    //$enuploadbloom = $_POST['enuploadbloom'];
    $delemon_data_title = $_POST['delemon_data_title'];
    $delemon_data_subtitle = $_POST['delemon_data_subtitle'];
    $delemon_data_firstline = $_POST['delemon_data_firstline'];
    $delemon_data_secondline = $_POST['delemon_data_secondline'];
    //$enuploadlemon = $_POST['enuploadlemon'];


    $updatehome = $db->prepare("UPDATE home set data_pattern_img_id=?,sticky_left=?,sticky_right=? where Dil=?");
    $updatehome = $updatehome->execute(array($pattern, $sticky_left_tr, $sticky_right_tr, 1));

    $updatehomeEn = $db->prepare("UPDATE home set data_pattern_img_id=?,sticky_left=?,sticky_right=? where Dil=?");
    $updatehomeEn = $updatehomeEn->execute(array($pattern, $sticky_left_en, $sticky_right_en, 2));

    $updatehomede = $db->prepare("UPDATE home set data_pattern_img_id=?,sticky_left=?,sticky_right=? where Dil=?");
    $updatehomede = $updatehomede->execute(array($pattern, $sticky_left_de, $sticky_right_de, 3));

    if ($updatehome) {
        $home = true;
        if ($updatehomeEn) {
            $home = true;
            if ($updatehomede) {
                $home = true;
            } else {
                $home = false;
            }
        } else {
            $home = false;
        }
    } else {
        $home = false;
    }

    if ($home) {

        function update($dbb, $data_title_, $data_subtitle_, $data_firstline_, $data_secondline_, $img_, $ID__)
        {
            $updatehomeslider = $dbb->prepare("UPDATE home_slider set data_title=?,data_subtitle=?,data_firstline=?,data_secondline=?,subtitle=?,slide_title=?,slide_img=? where ID=?");
            $updatehomeslider = $updatehomeslider->execute(array($data_title_, $data_subtitle_, $data_firstline_, $data_secondline_, $data_subtitle_, $data_title_, $img_, $ID__));
            if ($updatehomeslider) {
                $home = true;
            } else {
                $home = false;
            }
        }
        function getImagePath($id, $dbb)
        {
            $gethomeslider = $dbb->query("SELECT * FROM home_slider where ID=" . $id)->fetch(PDO::FETCH_ASSOC);
            return $gethomeslider['slide_img'];
        }
        function uploadImage($inputname)
        {
            $target_dir = "../images/SliderImages/";
            $target_file = $target_dir . strtolower(str_replace(" ", "", basename($_FILES[$inputname]["name"])));
            move_uploaded_file($_FILES[$inputname]["tmp_name"], $target_file);
            return "images/SliderImages/" . strtolower(str_replace(" ", "", basename($_FILES[$inputname]["name"])));
        }


        if ($_FILES['uploadfloral']['name'] != '') {
            $floraltr = uploadImage("uploadfloral");
        } else {
            $floraltr = getImagePath(1, $db);
        }
        update($db, $floral_data_title, $floral_data_subtitle, $floral_data_firstline, $floral_data_secondline, $floraltr, 1);

        if ($_FILES['uploadbloom']['name'] != '') {
            $bloomtr = uploadImage("uploadbloom");
        } else {
            $bloomtr = getImagePath(2, $db);
        }
        update($db, $bloom_data_title, $bloom_data_subtitle, $bloom_data_firstline, $bloom_data_secondline, $bloomtr, 2);

        if ($_FILES['uploadlemon']['name'] != '') {
            $lemontr = uploadImage("uploadlemon");
        } else {
            $lemontr = getImagePath(3, $db);
        }
        update($db, $lemon_data_title, $lemon_data_subtitle, $lemon_data_firstline, $lemon_data_secondline, $lemontr, 3);



        if ($_FILES['enuploadfloral']['name'] != '') {
            $enfloral = uploadImage("enuploadfloral");
        } else {
            $enfloral = getImagePath(4, $db);
        }
        update($db, $enfloral_data_title, $enfloral_data_subtitle, $enfloral_data_firstline, $enfloral_data_secondline, $enfloral, 4);

        if ($_FILES['enuploadbloom']['name'] != '') {
            $enbloom = uploadImage("enuploadbloom");
        } else {
            $enbloom = getImagePath(5, $db);
        }
        update($db, $enbloom_data_title, $enbloom_data_subtitle, $enbloom_data_firstline, $enbloom_data_secondline, $enbloom, 5);

        if ($_FILES['enuploadlemon']['name'] != '') {
            $enlemon = uploadImage("enuploadlemon");
        } else {
            $enlemon = getImagePath(6, $db);
        }
        update($db, $enlemon_data_title, $enlemon_data_subtitle, $enlemon_data_firstline, $enlemon_data_secondline, $enlemon, 6);




        if ($_FILES['deuploadfloral']['name'] != '') {
            $defloral = uploadImage("deuploadfloral");
        } else {
            $defloral = getImagePath(7, $db);
        }
        update($db, $defloral_data_title, $defloral_data_subtitle, $defloral_data_firstline, $defloral_data_secondline, $defloral, 7);

        if ($_FILES['deuploadbloom']['name'] != '') {
            $debloom = uploadImage("deuploadbloom");
        } else {
            $debloom = getImagePath(8, $db);
        }
        update($db, $debloom_data_title, $debloom_data_subtitle, $debloom_data_firstline, $debloom_data_secondline, $debloom, 8);

        if ($_FILES['deuploadlemon']['name'] != '') {
            $delemon = uploadImage("deuploadlemon");
        } else {
            $delemon = getImagePath(9, $db);
        }
        update($db, $delemon_data_title, $enlemon_data_subtitle, $delemon_data_firstline, $delemon_data_secondline, $delemon, 9);





        if ($home) {
            header("location:home-page.php?basarili");
        } else {
            header("location:home-page.php?hatali");
        }
    }
}
