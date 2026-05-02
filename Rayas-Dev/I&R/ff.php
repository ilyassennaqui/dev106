<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label>Date de naissance :<label>
            <input type="date" name="dat" required>
            <input type="submit" value="env">
</form>
<?php
if($_POST){
    $date=$_POST["dat"];
    $d=new DateTime();
    $da=new DateTime($date);
    $dat=$da->format("j/m/Y");
    echo $dat;
    echo $d->format("j/m/Y");
}
?>
</body>
</html>