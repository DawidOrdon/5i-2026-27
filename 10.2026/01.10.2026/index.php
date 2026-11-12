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
    <input type="text" name="imie" id="">
    <input type="submit" value="szukaj">
</form>
<pre>
    <?php
    $imie="%";
    if(!empty($_POST['imie'])){
        $imie = "%".$_POST['imie']."%";
    }
        $db = new mysqli("localhost", "root", "", "sklep_join");
        $sql = "SELECT * FROM klienci where imie like ?";
        $query = $db->prepare($sql);
        $query->bind_param("s", $imie);
        $query->execute();
        $result = $query->get_result();
        while ($row = $result->fetch_object()) {
            echo $row->imie . " ";
            echo $row->nazwisko . "<br>";
        }
//        print_r($result->fetch_all());
    ?>

    <?php
        $sql = "SELECT * FROM klienci";
        $query = $db->prepare($sql);
        $query->execute();
        $result = $query->get_result();
        while ($row = $result->fetch_object()) {
            echo $row->nazwisko . "<br>";
        }
    ?>
</pre>
</body>
</html>