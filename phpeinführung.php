<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titel</title>
  
    <style type="text/css" media="screen">
        code {
        display: block;
        white-space: pre;
        font-family: monospace;
        background-color: #eee;
        padding: 0 1em;
        }
	  </style>
</head>
  <body>
  
    <p>
      <h1>PHP Einführung 09.23</h1>
      Das ist das Dokument für den Kurs XXXX wie folgt zu lesen:

      <br>Hier ist die Ausgabe von dem ausgeführtem Code: <br>

      <?php echo "Hallo PHP Einführung 09.23"; ?>

      <br>der entsprechende Code wird so angegeben:<br>
    
    <pre>
        <code class="language-php">
        
        &lt;?php
            echo "Hallo PHP Einführung 09.23";
        ?&gt;
        
        </code>
      </pre>

    </p>
    <p>
        <h2>Variablen und Werte</h2>
        In PHP werden Variablen verwendet, um Daten zu speichern und zu verarbeiten. Eine Variable ist im Wesentlichen ein Name oder eine Bezeichnung für einen Wert oder eine Datenmenge. PHP ist eine schwach typisierte Sprache, was bedeutet, dass Sie keine expliziten Datentypen für Variablen deklarieren müssen. PHP erkennt automatisch den Datentyp anhand des zugewiesenen Werts.

        <h3>Variablen deklarieren und Werte zuweisen:</h3>
        Sie können eine Variable in PHP deklarieren und ihr einen Wert zuweisen, indem Sie das Dollarzeichen ($) gefolgt von einem Namen verwenden. 
       <?php
            $myVar = 1;
            $myText="my text";
            $myVar = $myText;
        ?>

        <pre>
        <code class="language-php">
        
        &lt;?php
            $myVar = 1;
            $myText="my text";
            $myVar = $myText;
        ?&gt;
        
        </code>
      </pre>

      <h3>Variablen ausgeben:</h3>

      <?php
            echo $myVar = 1;
            echo $myText="1234567890 ";
            echo $myVar = $myText;
      ?>

      <pre> 
        <code class="language-php">
        
            echo $myVar = 1;
            echo $myText="1234567890 ";
            echo $myVar = $myText;
        
        </code>
      </pre>

      <h3>Datentypen</h3>

      <p><ul>
        <li>Integer (Ganzzahlen): $zahl = 10;</li>
        <li>Float (Gleitkommazahlen): $pi = 3.14159;</li>
        <li>String (Zeichenketten): $name = "John";</li>
        <li>Boolean (Wahrheitswerte): $istWahr = true;</li>
      </ul>
      </p>


    </p>
    <p><h2>PHP-Funktionsreferenz</h2></p>
    Arbeitsweise mit Zeichenketten
      <ul>
        <li>strlen($string)</li>
        <li>strpos($string, $suche)</li>
        <li>str_replace($suche, $ersetze, $string)</li>
      </ul>

      Arbeiten mit Arrays
      <ul>
        <li></li>
        <li></li>
      </ul>
      Mathematische Funktionen
      <ul>
        <li>abs($zahl)</li>
        <li>sqrt($zahl)</li>
        <li>rand($min, $max)</li>
      </ul>
      Dateioperationen
      Datenbankzugriff


      <?php $count = strlen($myText); echo $count;?>

    <p><h2>Fallunterscheidungen bzw. Verzweigungen</h2></p>
    <p><h2>Numerische und assoziative Arrays</h2></p>

  </body>
</html>