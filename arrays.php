<?php

// () - runde klammern
// [] - eckige klammern
// {} - geschweifte klammern
// <> - kleiner / größer
// & - kaufmänisches UND
// | - ODER
// # - hashtag / Raute
// ~  - Tilde
// _ - unterstrich
// "" - gänsefüßchen
// '' - einfache gänsefüßchen
// / - slash
// \ - back slash
 

//nummerisches
$number = array(1,2,3,4,5);

//echo $number[0];
//echo $number[4];


//assoziativ
$person = array("name"=>"Ivan", "alter"=>12);

//echo $person["name"];
//echo $person["alter"];


//multidemensionales array

$multiarray = array(array("name"=>"ivan2", "alter2"=>122),array(1,2,3,4,5),$number, $person);



//echo $multiarray[0]["name"];
//echo $multiarray[0]["alter"];

$number2 = array(1,2,3,4,5);
$number =  array(1,2,3,4,5);
$multiarray = array($number, $number2);

$newArray = array();

for ($i = 0; $i < count($number); $i++)
{
    $newArray[] = $number[$i] + $number2[$i];
}

var_dump($newArray);

?>
