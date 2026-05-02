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
        <div>
            <label>Nom :</label>
            <input type="text" name="nom">
        </div>
         <div>
            <label>Prenom :</label>
            <input type="text" name="prenom">
        </div>
         <div>
            <label>Age :</label>
            <input type="text" name="age">

        </div>
        <input type="submit" value="Enregistre">
        <form>

        <?php
        if($_POST){
            $nom=$_POST["nom"];
            $prenom=$_POST["prenom"];
            $age=$_POST["age"];
            // Creation d'un tableaux associative 
            $tab=[
                "Nom"=>trim($nom),
                "Prenom"=>trim($prenom),
                "Age"=>trim($age)
            ];
            //Creation du fichier ou les infos seront stockées
            $monfichier="info.json";
            //Creation d'un objet JSON
           
            $obj=json_encode($tab);
            //Enregistrer l'objet json dans le fichier json 
            $fp=fopen($monfichier,"w+");
            fwrite($fp,$obj);
            fclose($fp);
            echo "Sauvegarde avec succees";
            
            
            }
        
        
        ?>
</body>
</html>