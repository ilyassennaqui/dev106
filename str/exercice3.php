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
     //$str=strtolower($str);
    $str=str_replace("a","",$str);
    $str=str_replace("A","",$str);
    $str=str_replace("e","",$str);
    $str=str_replace("E","",$str);
    $str=str_replace("u","",$str);
    $str=str_replace("U","",$str);
    $str=str_replace("i","",$str);
    $str=str_replace("I","",$str);
    $str=str_replace("o","",$str);
    $str=str_replace("O","",$str);
    $str=str_replace("y","",$str);
    $str=str_replace("Y","",$str);
    echo $str."<br/>";

   
}
?>
</body>
</html>