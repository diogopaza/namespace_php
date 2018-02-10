<?php

require_once "james.php";
require_once "james1.php";


use  Cantores\TripHop\James as JamesBlunt;
use Cantores\HeavyMetal\James as JamesHatField;



$jamesBlunt = new JamesBlunt();
$jamesBlunt->dizOi('TripHop');

$jamesBlunt = new JamesHatField ();
$jamesBlunt->dizOi('HeavyMetal');