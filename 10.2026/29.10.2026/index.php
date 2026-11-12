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
    <label for="start">start</label><input type="number" name="start" id="start">
    <label for="end">end</label><input type="number" name="end" id="end">
    <label for="control">control</label><input type="number" name="control" id="control">
    <input type="submit" value="">
</form>
<?php
    if(!empty($_POST['start']) && !empty($_POST['end']) && !empty($_POST['control'])    ) {
        if(is_numeric($_POST['start']) && is_numeric($_POST['end']) && is_numeric($_POST['control'])) {
            if($_POST['start']<$_POST['end']&&$_POST['control']>0) {
                $suma=0;
                $ile=0;
                $min =$_POST['end'];
                for ($i=$_POST['start']; $i <= $_POST['end']; $i++) {
                    if($i>$_POST['control']&&$i%2==0){
                        echo $i."<br />";
                        $ile++;
                        $suma+=$i;
                        if($min>$i){
                            $min=$i;
                        }
                    }
                }
                echo"ile: ".$ile." suma: ".$suma."<br />";
                if($min!=$_POST['end']){
                    echo "min".$min."<br />";
                }else{
                    echo "brak liczby";
                }
            }
        }else{
            echo"dane maja byc liczbnami";
        }
    }else{
        echo "podaj dane";
    }
?>
</body>
</html>