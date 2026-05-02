
<?php 
$tab=array();
$tab[]="Dev";$tab[]="Res";$tab[]="Ges";
$tab[]="Com";
$to[]="M";
$to[]="F";
//print_r($var):permet d'afficher des infos 
//à propos d'une variable de maniére 
//à ce qu'elle soit lisible
/* echo "<pre>";
print_r($tab);
echo "</pre>";
echo "<br/>";
//pour afficher la taille du tableau
echo "la taille du tableau:".count($tab);
echo "<br/>";
echo "la taille du tableau:".sizeof($tab); */
/* foreach($tab as $t)
{
    echo $t."<br/>";
} */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
</style>
<body>
<div class="container">
<form action="" method="post">
        <h1>Learning PHP</h1>
        <table>
            <tr>
                <td><label for="nom">Nom:</label></td>
                <td><input type="text" name="nom"
                value="<?php  if(isset($_POST["nom"])) echo $_POST["nom"] ?>"
                
                ></td>     
            </tr>
            <tr>
               <td><label for="prenom">Prénom:</label></td> 
                <td><input type="text" name="prenom" 
                value="<?php if(isset($_POST["prenom"]))   echo $_POST["prenom"] ?>"></td>
            </tr>
            <tr>
                <td><label for="fil">Filière:</label></td>
                <td><select name="fil" id="">
                <?php 
    foreach($tab as $t):?>
        <option value="<?php echo $t ?>"
        <?php if(isset($_POST["fil"]) and $_POST["fil"]==$t) echo "selected" ?>
        ><?php echo $t ?></option>
    
    <?php endforeach  ?>
                </select></td>
            </tr>
            <tr><td>
                <label>Genre</label>
                <?php 
                foreach ($to as $t):
                ?>
                <input type="radio" name="grn" value="<?php echo $t ?>" 
                <?php if(isset($_POST["grn"]) and $_POST["grn"]==$t) echo "checked" ?>
                <?php echo $t?>><?php echo $t ?>
                <?php endforeach  ?>
    </td>
    </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Envoyer"></td>
            </tr>
        </table>
    </form>
</div>
    
    <?php 
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $filiere=$_POST["fil"];
        $genre=$_POST["grn"];
        echo "Nom:".$nom."<br/>";
        echo "Prénom:".$prenom."<br/>";
        echo "Genre:".$genre."<br/>";
        echo "Filière:".$filiere."<br/>";
    }
    ?>
</body>
</html>