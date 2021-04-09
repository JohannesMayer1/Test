<?php
    echo "Hallo hghghghg767676 Test";

    if(isset($_POST["absenden"])){
    move_uploaded_file($_FILES["datei"]["tmp_name"], $_FILES["datei"]["name"]);
    }
?>

<form enctype="multipart/form-data" action="" method="post">
    <input type="file" name="datei">
    <input type="submit" name="absenden" value="Absenden">
</form>

<?php
    include_once("Liste.html");
?>