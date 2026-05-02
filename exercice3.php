<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min-Calculator</title>
    <style>
        .container{
            width: 500px;
            border: 2px dashed black;
            display:grid;
            grid-template-columns: 50% 45% ;
            gap:4%;
            padding:15px;
            margin:3px;
        }
        div{
            margin: 10px 0px 
        }
        input[type="number"]{
            width: 100%;
        }
        input[type="submit"]{
            background-color:red;
            border:none;
            font-weight:bolder;
            font-size:20px;
            border-radius:15px;
            margin-left:190px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
    <div class="container">
        <div>
            <label>Taper le premier nombre :</label>
        </div>
        <div>
            <input type="number" name="pre" id="pre">
        </div>
        <div>
            <label>Taper le deuxieme nombre :</label>
        </div>
        <div>
            <input type="number" name="sec" id="sec">
        </div>
  </div>
        <input type="submit" value="Calculer">
    </form>

    <?php
    echo "<br>";
    if($_POST){

        echo "le resultat est :".$_POST["pre"]+$_POST["sec"];
        }
    ?>
</body>
</html>