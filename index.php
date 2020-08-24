<?php

include_once 'Dancer.php';
include_once 'Couple.php';

$dancer1 = new Dancer('Male 1', 'male');
$dancer2 = new Dancer('Male 2', 'male');
$dancer3 = new Dancer('Male 3', 'male');
$dancer4 = new Dancer('Male 4', 'male');
$dancer5 = new Dancer('Female 1', 'female');
$dancer6 = new Dancer('Female 2', 'female');
$dancer7 = new Dancer('Female 3', 'female');

$couples = new Couple();
$couples->addDancer($dancer1);
$couples->addDancer($dancer2);
$couples->addDancer($dancer3);
$couples->addDancer($dancer4);
$couples->addDancer($dancer5);
$couples->addDancer($dancer6);
$couples->addDancer($dancer7);

if ($couples->getMale() != null || $couples->getFemale() != null) {
    while ($couples->getMale() != null && $couples->getFemale() != null) {
        $couples->setCouple();
    }
    echo 'Wait a minutes';
}

echo '<pre>';
print_r($couples->displayCouple());