<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $zmienna=54.23;
    if($zmienna==1){
        echo "1";
    }else if ($zmienna==2){
        echo "2";
    }else{
        echo "cos innego";
    }
    echo"<br />";
    if(is_numeric($zmienna)){
        echo "zmienna jest numeryczna <br />";
    }
    if(is_int($zmienna)){
        echo "zmienna jest liczba całkowita <br />";
    }
    if(is_string($zmienna)){
        echo "zmienna to tekst  <br />";
    }
    echo gettype($zmienna)."<br />";
    $db = new mysqli ("localhost","root",'','piwo');
    $sql = $db->prepare("SELECT * from piwa");
    $sql->execute();
    $result = $sql->get_result();
    echo"<pre>";
    var_dump($result->fetch_all());
    echo"</pre>"
?>
</body>
</html>