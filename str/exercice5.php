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
    $pos=strpos($str,"@");
    $uti=substr($str,0,$pos-1);
    $dom=substr($str,$pos+1);
    echo "Email : $str<br>";
    echo "Utilisateur : $uti <br>";
    echo "Domaine : $dom";
    

}
?>
</body>
</html>