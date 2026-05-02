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
            <label for="A">coefficient A:</label>
            <input type="text" name="coe1">
        </div>
        <div>
            <label for="B">coefficient B:</label>
            <input type="text" name="coe2">
        </div>
        <div>
            <label for="C">coefficient C:</label>
            <input type="text" name="coe3">
        </div>
        <button>resoudre</button>
    </form>
    <?php
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $coe1=$_POST["coe1"];
        $coe2=$_POST["coe2"];
        $coe3=$_POST["coe3"];
        $delta=$coe2**2-(4*$coe3*$coe1);
        if($delta> 0){
            $x1=(-$coe2+sqrt($delta))/2*$coe1;
            $x2=(-$coe2-sqrt($delta))/2*$coe1;
            echo "les solutions de cette equation est" .round($x1,2)." et ".round($x2,2);
            echo "les solutions de cette equation est $coe2 ";
            echo "les solutions de cette equation est  round(4.23456789)"
            
}
else if($delta==0){
    $x1=(-$coe2)/2*$coe1;
    echo "la solution du cette equation est" .round($x1,2) ;
    
    }
    else{
        echo "pas de solution";
        }
        
    }
    
    ?>

</body>
</html>