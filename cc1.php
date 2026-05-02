<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">
    <title>Delibiration</title>
</head>
<body>
    <h1>Délibération de fin d'année</h1>
    <form action="" method="post">
    <div>
        <label for="annee">Année de formation :</label>
        <select  name="formation">
            <option  name="opt" value="1" selected>1ere année</option>
            <option name="opt" value="2" >2ème année</option>
        </select>
    </div>
    <div>
        Deja Redoublant<input type="checkbox" name="ab">
    </div>
    <div>
        <label>Moyenne général :</label>
        <input type="number" name="moyene">
    </div>
    <div>
        <label>Nombre total d'abscence :</label>
        <input type="number" name="nbre-a">
    </div>
    <input type="submit" value="Decision">
</form>
   <?php
        if($_POST){
            $a=$_POST["formation"];
            $b=$_POST["ab"];
            $mg=$_POST["moyene"];
            $abs=$_POST["nbre-a"];
            if( $mg>=10 && $mg<20){
                $result="Admis";
            }
            elseif ($a==1){
                if (($mg>=9)&&($mg<10)){
                    if ( $abs>=30){
                        if (isset($b)){
                            $result="Elimine";
                        }
                        else{
                            $result="Redouble";
                        }
                    }
                    else{
                        $result="Rachete";
                    }
                }
                elseif(($mg<9)){
                    if (isset($b)){
                        $result="Elimne";
                    }
                    else{
                        $result="Redouble";
                    }
                }
            }

            else if ($a==2){
                if (($mg>=9)&&($mg<10)){
                    if ( $abs>=30){
                        if (isset($b)){
                            $result="Elimine";
                        }
                        else{
                            $result="Redouble";
                        }
                    }
                    else{
                        $result="Admis avec Bonus";
                    }
                }
                elseif(($mg<9.5)){
                    if (isset($b)){
                        $result="Elimne";
                    }
                    else{
                        $result="Redouble";
                    }
                }
            }
            else {
                $result="Veuillez taper les bonnes informations";
            }

            echo "<h1>Delibiration :". $result." </h1>";
        }
    ?>
</body>
</html>