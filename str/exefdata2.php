<?php
include_once('Data2.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des employés</h1>
    <?php
    foreach ($employes as $dep => $value) {
    $nb_emp=count($value);
    echo "<h2>$dep : $nb_emp</h2>";
    echo "<table>";
    $total=0;
    echo "<tr><th>Matricule</th><th>Nom_Complet</th><th>Salaire</th></tr>";
    foreach ($value as $info_emp) {
        echo"<tr>";
        echo "<td>{$info_emp['Matricule']}</td>";
        echo "<td>{$info_emp['nomComplet']}</td>";
        echo "<td>{$info_emp['Salaire']}</td>";
        $total += $info_emp['Salaire'];
        }
        echo "<tr>";
    echo "<td colspan='2'><strong>Total Salaire</strong></td>";
    echo "<td><strong>$total</strong></td>";
    echo "</tr>";

    echo "</table>";
        
    }




    echo "</table>";
    
    ?>
</body>
</html>