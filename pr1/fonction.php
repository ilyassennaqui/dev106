<?php
function getDecision($a){
    if($a>=10){
        $decision= "Admis";
    }
    elseif($a<10 and $a>=9){
       $decision="Racheté";
    }
    else {
        $decision="Redouble";
    }
    return $decision ;
}
function getMoyenne($tab){
    $i=0;
    $som=0.0;
    foreach ($tab as $t) {
        $som+=$t;
        $i++;
    }
    $moy=$som/$i;
    return $moy;
}
?>