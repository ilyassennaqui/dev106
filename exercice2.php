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
    <form action="" method="post">
      <div class="container">
        <div>
            <label>Nom :</label>
        </div>
        <div>
            <input type="text" name="nom" id="nom">
        </div>
        <div>
            <label>Prenom :</label>
        </div>
        <div>
            <input type="text" name="prenom" id="prenom">
        </div>
        <div>
            <label>Age :</label>
        </div>
        <div>
        <input type="number" name="age" id="age">
        </div>
      </div>
        <input type="submit" value="Afficher">

    </form>

    <?php
    // pour afficher le nom de fichier script 
       // echo $_SERVER["PHP_SELF"];
    //pour afficher le nom de server
        //echo $_SERVER["SERVER_NAME"];
    // pour afficher le nom de methode de requete 
        //echo $_SERVER["REQUEST_METHOD"];
    if($_SERVER["REQUEST_METHOD"]=="POST")// ou if($_POST)
    {

        echo "Nom :".$_POST["nom"];
        echo "<br>";
        echo "Prenom :".$_POST["prenom"];
        echo "<br>";
        echo "Age :".$_POST["age"];
    }


    ?>



</body>
</html>