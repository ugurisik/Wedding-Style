<?php
include "../database.php";


$filetypeid = 1;
if (isset($_POST['type'])) {
    $filetypeid = $_POST['type'];
}

function getfilepath($id, $dbb)
{
    $filepath = $dbb->query("SELECT * from content_images where ID=$id")->fetch(PDO::FETCH_ASSOC);
    return $filepath['DosyaYolu'];
}
$target_dir = "../" . getfilepath($filetypeid, $db);
$target_file = $target_dir . strtolower(str_replace(" ", "", basename($_FILES["file"]["name"])));

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    $status = 1;
}
