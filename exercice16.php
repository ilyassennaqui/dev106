<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gestion de fichier</h1>
    <form action="" method="post">
        <label>Votre message :</label><br>
        <textarea name="message" type="text" rows="10" cols="80px" ></textarea><br>
        <input type="submit" value="Envoyer">
</form>
<a href="exercice16re.php">Afficher les messages</a>
<?php
if ($_POST){
    $message=$_POST["message"];
    $fichier="messages.txt";
    $fp=fopen($fichier,"a+");
    fwrite($fp,$message);
    fclose($fp);
    

}

?>
</body>
</html>