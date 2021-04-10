<?php
    if(isset($_POST["absenden"])){
    move_uploaded_file($_FILES["datei"]["tmp_name"], $_FILES["datei"]["name"]);
    echo $_FILES["datei"]["tmp_name"] . "<br>";
    echo $_FILES["datei"]["name"] . "<br>";
    }

    $arr = file('meineDatei3.txt');
    for($i = 0; $i < count($arr); $i++){
        echo $arr[$i];
    }
?>

<form enctype="multipart/form-data" action="" method="post">
    <input type="file" name="datei">
    <input type="submit" name="absenden" value="Absenden">
</form>

<?php
    include_once("Liste.html");
?>