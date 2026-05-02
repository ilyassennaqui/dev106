<?php
include("data2.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des employés</title>
</head>
<body>

<h1>Liste des employés</h1>

<?php
foreach ($employes as $departement => $liste) {
    $totalSal = 0;
    $nbEmp = count($liste);

    echo "<h2>$departement : $nbEmp</h2>";

    echo "<table>";
    echo "<tr><th>Matricule</th><th>Nom complet</th><th>Salaire</th></tr>";

    foreach ($liste as $emp) {
        echo "<tr>";
        echo "<td>{$emp['Matricule']}</td>";
        echo "<td>{$emp['nomComplet']}</td>";
        echo "<td>{$emp['Salaire']}</td>";
        echo "</tr>";

        $totalSal += $emp['Salaire'];
    }

    echo "<tr>";
    echo "<td colspan='2'><strong>Total Salaire</strong></td>";
    echo "<td><strong>$totalSal</strong></td>";
    echo "</tr>";

    echo "</table>";
}
?>

</body>
</html>