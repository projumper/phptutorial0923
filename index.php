<?php

include('Bankkonto.php');
include('Girokonto.php');
include('Sparbuch.php');

$gunbayKonto = new Girokonto();
$gunbayKonto->kntnr = 110;
$gunbayKonto->einzahlung(745);
//$gunbayKonto->auszahlung(800);

echo $gunbayKonto->getCredit();