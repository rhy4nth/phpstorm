<?php
$action ="test3";
//$action ==casename
switch ($action){
    case "test1":

    case "test2":

        break;
    default:

}

if($age <= 18){
    echo "Volwassen";
}else{
    echo"kind";
}

echo ($age <= 18)? "Volwassen": "kind";
//is hetzelfde als if else maar dan verkort
}

echo $age ??"Geen leeftijd beschikbaar";
?>