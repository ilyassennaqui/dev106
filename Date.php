<?php
$auj=new DateTime();
//echo $auj;// Erreur 
echo "Date d'aujourd'hui :"." ".$auj -> format ("d/m/Y")."<br>";
$temps=$auj-> format("H:i:s");
$all=$auj-> format("d/m/Y H:i:s");
echo "Il'est : ".$temps."<br>";
echo $all."<br>";
// Methode1=> La methode modify
$sem1=$auj -> modify("+7day");
echo "<h3>La methode1 :</h3>";
echo "Dans une semaine , la date sera ".$sem1->format("j/m/y")."<br>";
$auj=new DateTime();
$sem2=$auj -> modify("-7day");
echo "Il'y a une semaine , la date était ".$sem2->format("j/m/y")."<br>";
// Methode2 => CLass DateInterval
$auj=new DateTime();
$p=new DateInterval("P7D");
echo "<h3>La methode2 :</h3>";
$semaine=$auj->add($p);//Pour ajouter une periode d'une date donnée
echo "Dans une semaine , la date sera ".$semaine->format("j/m/y")."<br>";
$auj=new DateTime();
$semaine1=$auj->sub($p);//Pour soustraire une periode d'une date donnée
echo "Il'y a une semaine , la date était ".$semaine1->format("j/m/y")."<br>";


$auj=new DateTime();
$periode=new DateInterval("P1W");
$sm1=$auj->add($periode);
echo "Dans une semaine , la date sera ".$sm1->format("Y/M/d")."<br>";

$auj=new DateTime();
$periode=new DateInterval("P1W");
$sm2=$auj->sub($periode);
echo "Il'y a une semaine , la date était ".$sm2->format("Y/M/d")."<br>";

// Pour l'ajout et la soustration du tenps
// Ajouter l'heure
$auj=new DateTime();
$pe1=new DateInterval("PT3H");
$sm3=$auj->add($pe1);
echo "Dans une semaine , le temps sera ".$sm3->format("H:i:s")."<br>";
// Soustraire l'heure
$auj=new DateTime();
$pe1=new DateInterval("PT3H");
$sm4=$auj->sub($pe1);
echo "Il'y a une semaine , la date était ".$sm4->format("H:i:s")."<br>";

// Pour Faire La difference entre deux dates
$d1=new DateTime("2000-10-18");
$d2=new DateTime("2003-01-23");
$difference= $d2->diff($d1);// ON commence par la date la plus grande(recente)
// Pour l'affichage de difference on a le choix de choisir m(month),y(year) et d(date)
$annee=$difference->y;
$mois=$difference->m;
$jours=$difference->d;

echo "<h3>Calcule de difference entre deux dates </h3>";

echo "la diference entre en annees est :".$annee."<br>";
echo "la diference entre en mois est :".$mois."<br>";
echo "la diference entre en jours est :".$jours."<br>";


// Calcule d'age d'une personne
$naissance= new DateTime("2000-10-18");
$date=new DateTime();
$diff=$date -> diff($naissance);
$age=$diff->y;
echo "<h3>Calcule d'age</h3>";
echo "Votre age est ".$age." ans";
?>