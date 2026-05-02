<?php
include("data.php");
include("fonction.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listes de stagiaire de filiere Reseaux</h1>
    <?php
    echo "<table>";
    echo "<tr>";
    echo "<th>Numero</th><th>Nom_Complet</th><th>Filiere</th><th>Note</th><th>Decision</th>";
    echo "</tr>";
    $totno  =[];
    foreach ($res as $d) {
        echo "<tr>";
        echo "<td>".$d['numero']."</td>";
        echo "<td>".$d['nom_complet']."</td>";
        echo "<td>".$d['filiere']."</td>";
        echo "<td>".$d['note']."</td>";
        echo "<td>".getDecision($d['note'])."</td>";
        echo "</tr>";
        array_push($totno,$d['note']);
    }
     $res=getMoyenne($totno);
    echo "<tr>";
    echo "<td colspan='4'>Moyenne :</td>";
    echo "<td>".getMoyenne($totno)."</td>";
    echo "</tr>";
    echo "</table>";
    ?>
</body>
</html>