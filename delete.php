<?php

include('Bankkonto.php');
include('Girokonto.php');
include('Sparbuch.php');
include('functions.php');

//verbinde dich mit einer Datenbank und hole den Kontostand
/*
1. erstelle eine verbundung $conn=mysqli_connect($serverName,$userName,$password);
2. wenn alles ok, dann wähle die datenbnaknamen: $conn->select_db("bankomat");
3. query abfeuern: $res = $conn->query("SELECT * FROM accounts as acc, sparbue ....);
4. bekommen wir eine resource $res
5. verarbeiten wir die Ergebnisse der Datenbankabfrage while ($row = $res->fetch_array()){var_dump($row);}
*/

$conn = createMySQLConnection();

if(isset($_POST["delete_id"]))
    $res = $conn->query("DELETE FROM accounts WHERE accounts.id =".$_POST["delete_id"]);

$res1 = $conn->query("SELECT * FROM accounts");

?>

<html>
    <head>
    </head>
    <body>
        <p><h1>Kunden löschen</h1></p>
        <ul>
        <?php
        while ($row = $res1->fetch_assoc())
            echo "<li>".$row["id"]."-".$row["firstname"]."-".$row["surename"]."</li>"
        ?>
        </ul>

        <form action="delete.php" method="POST">
            <input type="text" value="0" name="delete_id"/>
            <input type="submit" value="Löschen"/>
        </form>


    </body>
</html>