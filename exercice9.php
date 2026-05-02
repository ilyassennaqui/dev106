<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width: 500px;
            border: 2px solid black;
            display:grid;
            grid-template-columns: 30% 70% ;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
    <div class="container">
        <div>
            <label>Taper le nombre de depart :</label>
        </div>
        <div>
            <input type="number" name="dep">
        </div>
        <div>
            <label>Taper le nombre d'arriveé :</label>
        </div>
        <div>
            <input type="number" name="ari">
        </div>
        <div>
        <input type="submit" value="Afficher">
        </div>
        <div>
        </div>
</form>

<?php
if($_POST){

    $n_depart=$_POST["dep"];
    $n_arrive=$_POST["ari"];
    if($n_depart>$n_arrive){
        $prmu=$n_arrive;
        $n_arrive=$n_depart;
        $n_depart=$prmu;
}
$alea=rand($n_depart , $n_arrive);
echo "<h3>$alea</h3>";
$premier=true;
for($i=2; $i<$alea;$i++){   


    if($alea%$i==0){
        $premier=false;
        break;
    }
}
    echo $premier? "<h3> Est premier</h3> ": "<h3>N'est pas premier</h3> ";
}
?>
</body>
</html>