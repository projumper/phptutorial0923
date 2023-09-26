<?php

include('Bankkonto.php');
include('Girokonto.php');
include('Sparbuch.php');

//verbinde dich mit einer Datenbank und hole den Kontostand
$kontostand = file_get_contents("kontostand");

$myAccount = new Girokonto();
$myAccount->setCredit($kontostand);

$myAccount->einzahlung($_POST['betrag_einzahlung']);

$myAccount->auszahlung($_POST['betrag_post']);

file_put_contents("kontostand", $myAccount->getCredit());

//$_GET & $_POST
//var_dump($_POST, $_GET);




?>

<html>
    <head>
    </head>
    <body>
        <p><h1>Unsere Bankkonten</h1></p>
        <p><?php echo $myAccount->name; ?></p>
        <p><?php echo $myAccount->getCredit(); ?></p>


        <form action="" method="POST">
            <input type="text" value="0" name="betrag_einzahlung"/>
            <input type="submit" value="Einzahlung"/>
        </form>

        <form action="" method="POST">
            <input type="text" value="0" name="betrag_post"/>
            <input type="submit" value="Auszahlung"/>
        </form>

    </body>
</html>

<?php
//verbinde dich mit einer DB und speichere denaktuelen Kontostand

?>