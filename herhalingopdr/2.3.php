<?php
$day=date('1');
switch($day){
    case "monday";
    echo "vandaag is het maandag";
    break;
    case "tuesday";
    echo "vandaag is het dinsdag";
    break;
    case "wednesday";
    echo "vandaag is dinsdag";
    break;
    default:
        echo "vandaag is het een andere dag";
}

