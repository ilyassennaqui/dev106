<?php
include_once('Data.php');
const TVA=0.20;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Information CLient</h1>
    <h3>Client:<?php echo $facture["client"]?></h3>
    <h3>Date Facture : <?php echo $facture["Date"]?></h3>
    <table>
        <tr><td colspan="3"></td></tr>
        <tr>
            <th>Matricule</th>
            <th>Nom Complet</th>
            <th>Salaire</th>          
        </tr>
<tr>
    <?php
    $global=0.0;
    foreach ($employees as $emp):?>  
        <?php
            $total=$article["Prix"]* $article["Quantite"];
            ?>
        <tr>
            <td><?php echo $["Reference"]  ?></td>
            <td><?php echo $["Designation"]  ?></td>
            <td><?php echo $["Prix"]  ?></td>
            <td><?php echo $["Quantite"]  ?></td>
            <td><?php echo $total  ?></td>
            <?php
            $global+=$salaire
            ?>
        </tr>
        
<?php endforeach ?>

<tr >
    <td colspan="4">Montant Hors taxe</td>
    <td><?php echo $global."DHS"?></td>
</tr>
<tr >
    <td colspan="4">Montant TVA</td>
    <td><?php echo $global*TVA." DHS"?></td>
</tr>
<tr >
    <td colspan="4">Montant TTC</td>
    <td><?php echo $global*(1+TVA)?></td>
</tr>
    
    
</tr>
</table>
</body>
</html>