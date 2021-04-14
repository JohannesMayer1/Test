<?php
    //session_start();
?>


<html>
<body>
<?php
    //txt datei erstellen wenn noch nicht existiert
    $file = fopen("save.txt", "a");
    if($file == 0){
        fwrite($file, "let zwisch = 0");
    }
    fclose($file);

    //txt datei auslesen
    $arr = file('save.txt');
    echo "<script>";
    for($i = 0; $i < count($arr); $i++){
        echo $arr[$i];
    }
    echo ";";
    echo "</script>";
    
    //Ausgabe zum testen von cookie
    echo "Cookie: ";
    if(isset($_COOKIE["menge"])){
    echo $_COOKIE["menge"];
    }

    include_once("Liste.html");

    //Schreiben des Texdocuments
    $file = fopen("save.txt", "w");
    fwrite($file, $_COOKIE["menge"]);
    fclose($file);

?>
</body>
</html>