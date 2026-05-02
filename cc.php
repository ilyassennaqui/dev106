<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
</head>
<body>
<form action="" method="post">
  <div class="contain">
       
        <div class="con">
            <input type="checkbox" name="pain">Pain
            
        </div>
        <div>
           <input type="number" name="p-1">
        </div>
        <div>
            <p>grammmes</p>
        </div>
      
        <div class="con">
            <input type="checkbox" name="viande">Viande
        </div>
        <div>
           <input type="number" name="v-1">
        </div>
        <div>
            <p>grammmes</p>
        </div>
        
        <div class="con">
            <input type="checkbox" name="legume">Legumes
        </div>
        <div>
           <input type="number" name="l-1">
        </div>
        <div>
            <p>grammmes</p>
        </div>
        
        <div class="con">
            <input type="checkbox" name="banane">Banane
        </div>
        <div>
           <input type="number" name="b-1">
        </div>
        <div>
            <p>Unités</p>
        </div>
        
        <div class="con">
            <input type="checkbox" name="pomme">Pomme
        </div>
        <div>
           <input type="number" name="p-2">
        </div>
        <div>
            <p>Unités</p>
        </div>
       
        <div class="con">
            <input type="checkbox" name="yaourt">Yaourt
        </div>
        <div>
           <input type="number" name="y-1">
        </div>
        <div>
            <p>Unités</p>
        </div>
    </div>
   <input type="submit" value="Calculer">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $resultat = 0.0;
    
    
    if(isset($_POST["pain"]) && isset($_POST["p-1"]) && $_POST["p-1"] > 0){
        $resultat += ($_POST["p-1"] ) * 2.75;  
        }
        

    if(isset($_POST["viande"]) && isset($_POST["v-1"]) && $_POST["v-1"] > 0){
            $resultat += ($_POST["v-1"] ) * 1.8; 
            }
            
            
    if(isset($_POST["legume"]) && isset($_POST["l-1"]) && $_POST["l-1"] > 0){
                $resultat += ($_POST["l-1"] ) * 0.4; }  
                
               
    if(isset($_POST["banane"]) && isset($_POST["b-1"]) && $_POST["b-1"] > 0){
                    $resultat += $_POST["b-1"] * 116; }          
                    
                 
    if(isset($_POST["pomme"]) && isset($_POST["p-2"]) && $_POST["p-2"] > 0){
                        $resultat += $_POST["p-2"] * 80;           
                        }                
    if(isset($_POST["yaourt"]) && isset($_POST["y-1"]) && $_POST["y-1"] > 0){
                            $resultat += $_POST["y-1"] * 140;           
                            }
                            
                            echo "<h1>Le résultat est " .$resultat . "KiloCalories </h1>";
                            }
            

?>
</body>
</html>