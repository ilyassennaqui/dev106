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
    $compt=0;
    foreach ($str as $t) {
        if($t=="a" or $t=="i" or $t=="e" or $t=="a" or $t=="y" or $t=="u"){
            $compt++;
        }
    }
    echo "le nombre des voyelles est $compt ";
}
?>
</body>
</html>