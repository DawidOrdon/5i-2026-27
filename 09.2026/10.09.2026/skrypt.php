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
<form action="skrypt2.php" method="post">
<?php
if(!empty($_POST['ile'])){
    if(is_numeric($_POST['ile'])){
        $ile = $_POST['ile'];
        for($i = 0; $i < $ile; $i++){
            echo "<input type='text' name='info[]'>";
        }
    }else{
        echo"to nie numer";
    }
}else{
    echo "brak danych";
}

?>
    <input type="submit" value="przeslij">
</form>
</body>
</html>


