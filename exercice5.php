
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            width: 400px;
            display:grid;
            grid-template-columns:50% 50% ;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <div>
            <label>Taper le poids(kg)</label>
        </div>
        <div>
            <input type="text" name="poids">
        </div>
        <div>
            <label>
                taper la taille (cm)
            </label>
        </div>
        <div>
            <input type="text" name="taille">
        </div>
        <input type="submit" name="btn" value="Calculer">
    </form>
    <div name="imc">
        
</div>

    <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $poids=$_POST["poids"];
    $taille=$_POST["taille"];
    //$imc=$poids/(($taille*$taille)/100);
    $imc=(float)$poids/((((float)$taille/100)**2));
    //echo "<h3>IMC : ".$imc."</h3>";
    //deuxieme methode 
    echo "<h3>IMC :".round($imc,2)."</h3>";


if($imc<18.5){
    $intrep= "Insuffisant";
    }
    elseif($imc>=18.5 && $imc<=24.9){
        $intrep= "Normale";
        }
elseif ($imc>24.9 && $imc<=30){
    $intrep="Surpoids";
}
else{
    $intrep="Obesité";
}

echo "<h3>Interpretation : $intrep</h3>";
}
?>
</body>
</html>