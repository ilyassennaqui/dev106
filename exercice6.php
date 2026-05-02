<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>calculatrice</h1>
    <form action="" method="post">
    <table>
        <tr>
            <td><label for="">taper n1:</label></td>
            <td><input type="number" name="n1"></td>
        </tr>
        <tr>
            <td><label for="">taper n2:</label></td>
            <td><input type="number" name="n2"></td>
        </tr>
        <tr> 
            <td><select name="op">
                <option value="1">Addition</option>
                <option value="2">Soustraction</option>
                <option value="3">Multiplication</option>
                <option value="4">Division</option>
                </select>
            </td>
       </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Calculer">
            </td>
        </tr> 
    </table>
</form>
<div></div>
    <?php
    if($_POST)
        {
        switch ($_POST["op"]) {
            case '1':
                echo "resultat est: ".$_POST["n1"]+$_POST["n2"];
                break;
            case '2':
                echo "resultat est: ".$_POST["n1"]-$_POST["n2"];
                break;
            case '3':
                echo "resultat est: ".$_POST["n1"]*$_POST["n2"];
                break;
           case '4':
             if ($_POST["n2"]==0) {
               echo "Division impossible par 0";
              } else {
               echo "La division est: ".round($_POST["n1"]/$_POST["n2"],2);
              }
                   break; 
        }
     }
    ?>
</body>
</html>