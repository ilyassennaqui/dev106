<?php
if (file_exists("info.json")){

    $fp=file_get_contents("info.json");
    $data=json_decode($fp,true);// True veut dire qu'il va le changer 
    // à un tableau associative

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Les fichiers JSON</h1>
    <form action="" method="post">
        <label>Taper votre Numero</label>
        <input type="number" name="num" >
        <?php $num=$_POST["num"];  
        foreach ($variable as $key => $value) {
            # code...
        }
        
        ?>
    <form>
        <div>
            <label>Nom :</label>
            <input type="text" name="nom" value="<?php?>">
        </div>
         <div>
            <label>Prenom :</label>
            <input type="text" name="prenom" value="<?php echo $data["Prenom"]?>">
        </div>
         <div>
            <label>Age :</label>
            <input type="text" name="age" value="<?php echo $data["Age"]?>">

        </div>
        
    
</body>
</html>