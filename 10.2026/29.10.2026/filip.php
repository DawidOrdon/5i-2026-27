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
<form action="" method="post">
    <input type="text" name="poczatek" >
    <input type="text" name="koniec" >
    <input type="text" name="liczba" >
    <input type="submit" value="submit">
</form>

<?php
$suma=0;
if(!isset($_POST['submit'])&& !empty($_POST['poczatek']) and is_numeric($_POST['poczatek']) and !empty($_POST['koniec']) and is_numeric($_POST['liczba'])and !empty($_POST['liczba'])and is_numeric($_POST['liczba']))
{
    $poczatek = $_POST['poczatek'];
    $koniec = $_POST['koniec'];
    $liczba = $_POST['liczba'];

    if($poczatek=="" || $koniec=="" || $liczba==""){
        echo "podaj poprawne liczy ";
    }elseif($poczatek >= $koniec || $liczba <= 0) {
        echo"poczatek musi byc mniejszy";

    }else {
        $liczba = 0;
        $ile = 0;
        $min = null;
        for ($i = $poczatek; $i <= $koniec; $i++) {
            if ($i > $liczba && $i% 2 == 0) {
                echo $i . "";
                $suma += $i;
                $ile++;
                if ($min === null) {
                    $min = $i;
                }
            }
        }
        if ($ile == 0) {
            echo "brak liczb spelniajavfych ";} else {
            echo "liczba elementoow  .$ile <br> suma: .$suma <br> najmniejsza: .$min";
        }
    }
}

?>
</body>
</html>