<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label>Taper une chaine :</label>
        </div>
        <div>
            <input type="text" name="str">
        </div>
        <input type="submit" value="Afficher">
</form>    
<?php
if($_POST){
    $str=$_POST["str"];
    $str=$str.trim(" ");
    $str=strtolower($str);
    $str=str_split($str);
    $compta=0;
    $compte=0;
    $compti=0;
    $comptu=0;
    $compty=0;
    $compto=0;
    foreach ($str as $t) {
        switch ($t){
            case "a" :$compta++;
            break;
            case "e" :$compte++;
            break;
            case "i" :$compti++;
            break;
            case "u" :$comptu++;
            break;
            case "y" :$compty++;
            break;
            case "o" :$compto++;
            break;
        }
    }

    echo "le nombre des a est $compta <br>";
    echo "le nombre des u est $comptu <br>";
    echo "le nombre des e est $compte <br>";
    echo "le nombre des i est $compti <br>";
    echo "le nombre des y est $compty <br>";
    echo "le nombre des o est $compto <br>";
}
?>
</body>
</html>