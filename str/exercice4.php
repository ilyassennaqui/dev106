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
    $rstr=strrev($str);
if($str==$rstr){
    echo "<h3>$str est palindrome </h3>";
}
else{
        echo "<h3>$str n'est pas palindrome</h3> ";

}
}
?>
</body>
</html>