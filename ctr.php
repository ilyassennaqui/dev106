<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des fichiers JSON</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        div { margin-bottom: 15px; }
        label { display: inline-block; width: 80px; }
        input { padding: 5px; width: 200px; }
        input[type="submit"] { margin-left: 85px; width: auto; }
        .success { color: green; margin-top: 20px; padding: 10px; background: #d4edda; border-radius: 5px; }
        .error { color: red; margin-top: 20px; padding: 10px; background: #f8d7da; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Les fichiers JSON</h1>
    <form action="" method="post">
        <div>
            <label>Nom :</label>
            <input type="text" name="nom" required>
        </div>
        <div>
            <label>Prénom :</label>
            <input type="text" name="prenom" required>
        </div>
        <div>
            <label>Âge :</label>
            <input type="number" name="age" required>
        </div>
        <input type="submit" value="Enregistrer">
    </form>

    <?php
    if ($_POST) {
        // Vérification des champs
        if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["age"])) {
            $nom = trim($_POST["nom"]);
            $prenom = trim($_POST["prenom"]);
            $age = trim($_POST["age"]);
            
            // Création d'un tableau associatif
            $nouvelUtilisateur = [
                "Nom" => $nom,
                "Prenom" => $prenom,
                "Age" => $age
            ];
            
            $monfichier = "info.json";
            $utilisateurs = [];
            
            // Lecture du fichier existant s'il existe
            if (file_exists($monfichier)) {
                $contenu = file_get_contents($monfichier);
                if (!empty($contenu)) {
                    $utilisateurs = json_decode($contenu, true);
                    // Si ce n'est pas un tableau, on le transforme
                    if (!is_array($utilisateurs)) {
                        $utilisateurs = [];
                    }
                }
            }
    
            // Ajout du nouvel utilisateur
            $utilisateurs[] = $nouvelUtilisateur;
            
            // Conversion en JSON
            $jsonData = json_encode($utilisateurs, JSON_PRETTY_PRINT);
            
            // Enregistrement dans le fichier
            if (file_put_contents($monfichier, $jsonData)) {
                echo '<div class="success">✓ Sauvegarde réussie !</div>';
            } else {
                echo '<div class="error">✗ Erreur lors de la sauvegarde.</div>';
            }
        } else {
            echo '<div class="error">✗ Veuillez remplir tous les champs.</div>';
        }
    }
    ?>

    <?php
    // Affichage des données existantes
    //if (file_exists("info.json")) {
    //    $contenu = file_get_contents("info.json");
    //    $donnees = json_decode($contenu, true);
    //    
    //    if (!empty($donnees) && is_array($donnees)) {
    //        echo '<hr><h2>Utilisateurs enregistrés :</h2>';
    //        echo '<table border="1" cellpadding="10" style="border-collapse: collapse;">';
    //        echo '<tr style="background: #f0f0f0;"><th>Nom</th><th>Prénom</th><th>Âge</th></tr>';
    //        
    //        foreach ($donnees as $utilisateur) {
    //            echo '<tr>';
    //            echo '<td>' . htmlspecialchars($utilisateur['Nom']) . '</td>';
    //            echo '<td>' . htmlspecialchars($utilisateur['Prenom']) . '</td>';
    //            echo '<td>' . htmlspecialchars($utilisateur['Age']) . '</td>';
    //            echo '</tr>';
    //        }
    //        echo '</table>';
    //    }
    //}
    ?>
</body>
</html>