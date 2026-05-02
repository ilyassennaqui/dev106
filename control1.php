<?php
$Groupes = array('Dev101','Dev102','Dev103','Dev104');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulaire Stagiaire</title>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>Saisi d'information</legend>
            <label>Numéro :</label>
            <input type="text" name="numero"><br><br>

            <label>Nom Complet :</label>
            <input type="text" name="nom" ><br><br>

            <label>Genre :</label>
            <input type="radio" name="genre" value="M"> M
            <input type="radio" name="genre" value="F"> F<br><br>

            <label>Groupe :</label>
            <select name="groupe">
                <?php foreach($Groupes as $g): ?>
                    <option value="<?= $g ?>" ><?= $g ?></option>
                <?php endforeach; ?>
            </select><br><br>

            <table border="1">
                <tr><th>Module</th><th>Note</th></tr>
                <tr><td>Algorithm</td><td><input type="text" name="note_alg" ></td></tr>
                <tr><td>JavaScript</td><td><input type="text" name="note_js" ></td></tr>
                <tr><td>PHP</td><td><input type="text" name="note_php"></td></tr>
            </table><br>

            <input type="submit" name="enregistrer" value="Enregistrer">
        </fieldset>
    </form>

    <?php
    function getDecision($moyenne) {
    if ($moyenne >= 10) return "Admis";
    elseif ($moyenne >= 9) return "Racheté";
    elseif ($moyenne >= 8) return "Redouble";
    else return "Réorienté";
}
    ?>
    <?php
    function moyenneGen($note1, $note2, $note3) {
    const coeff1 = 2; const coeff2 = 3;
    const coeff3 = 3;
    $sommeNotes = ($note1 * coeff1) + ($note2 * coeff2) + ($note3 * coeff3);
    
    return $sommeNotes / 8;
}
    ?>

   
    <?php
if ($_POST) {
    // Récupération des données
    $numero = $_POST['numero'];
    $nom = $_POST['nom'];
    $genre = $_POST['genre'];
    $groupe = $_POST['groupe'];
    $note_alg = $_POST['note_alg'];
    $note_js = $_POST['note_js'];
    $note_php = $_POST['note_php'];

    // Calcul moyenne
    $moyenne = moyenneGen($note_alg, $note_js, $note_php);
    $decision = getDecision($moyenne);

    // Affichage à l'écran
    echo "<h3>Données enregistrées</h3>";
    echo "Numéro : $numero<br>";
    echo "Nom : $nom<br>";
    echo "Genre : $genre<br>";
    echo "Groupe : $groupe<br>";
    echo "Moyenne : $moyenne<br>";
    echo "Décision : $decision<br>";

    // Export JSON
    $data = [
        'numero' => $numero,
        'nom' => $nom,
        'genre' => $genre,
        'groupe' => $groupe,
        'notes' => [
            {"Algorithm":$note_alg},
            {"JavaScript":$note_js},
            {"PHP":$note_php}
            //'Algorithm' => $note_alg,
            //'JavaScript' => $note_js,
            //'PHP' => $note_php
        ]
    ];

    $json = json_encode($data);
    $fichier='info.json';
    $op=fopen($fichier,"w+");
    fwrite($op,$json);
    fclose($op);

    echo "<br>✅ Données exportées dans info.json";
}
?>
    
</body>
</html>