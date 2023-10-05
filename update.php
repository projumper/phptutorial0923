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
var_dump($_POST);

$conn = createMySQLConnection();

if($_POST['send'])
{
    $firstname = $_POST['firstname'];
    $surename = $_POST['surename'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    
    $conn->query("UPDATE accounts SET firstname='$firstname', surename='$surename', email='$email' WHERE id='$id'");

    header("Location: bankmanagement.php");
}

$id = $_GET['id'];

if (isset($id))
{

    $res = $conn->query('SELECT * FROM accounts WHERE id='.$id);

    if(!$data=$res->fetch_assoc())
    {
        die("die ID ist falsch ");
    }
}
//

?>

<html>
    <head>
    </head>
    <body>
        <p><h1>Kunden bearbeiten</h1></p>
        <form action="update.php" method="POST">
            <input type="text" value="<?php echo $data['firstname'] ?>" name="firstname"/>
            <input type="text" value="<?php echo $data['surename'] ?>" name="surename"/>
            <input type="text" value="<?php echo $data['email'] ?>" name="email"/>
            <input type="hidden" value="send" name="send"/>
            <input type="hidden" value="<?php echo $data['id'] ?>" name="id"/>
            <input type="submit" value="Bearbeiten"/>
        </form>
    </body>
</html>