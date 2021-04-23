<?php
    //session_start();
?>


<html>
<body>
<?php
    //txt Dokument erstellen für menge wenn Cookie forhanden
    if(isset($_COOKIE["menge"])) {
        $file = fopen("save.txt", "w");
        fwrite($file, $_COOKIE["menge"]);
        fclose($file); 
    }

    //txt Dokument erstellen für namen wenn Cookie forhanden
    if(isset($_COOKIE["addName"])) {
        $file = fopen("namen.txt", "a");
        fwrite($file, $_COOKIE["addName"]);
        fclose($file);
    }

    //txt datei "save" auslesen
    $arr = file('save.txt');
    echo "<script>";
    for($i = 0; $i < count($arr); $i++){
        echo $arr[$i];
    }
    echo ";";
    echo "</script>";

    //txt datei "namen" auslesen
    $arr = file('namen.txt');
    echo "<script> let listNames = [";
    for($i = 0; $i < count($arr); $i++) {
        echo $arr[$i];
    }
    echo "];";
    echo "</script>";
    

    include_once("Liste.html");

    //Schreiben des Texdocuments für Zahlen (vorläufig)
   /* $file = fopen("save.txt", "w");
    fwrite($file, $_COOKIE["menge"]);
    fclose($file);
    */

?>
</body>
</html>