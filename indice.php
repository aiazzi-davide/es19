
<?php
//Creare una pagina PHP che contenga una serie di link, uno per ogni genere cinematografico, che se
//cliccati mostrino l’elenco dei film appartenenti al genere prescelto, ordinati per numero di noleggi
//(ovviamente di uno stesso film possono essercene più copie e il numero totale di noleggi è la
//somma dei noleggi di tutte le copie).

require 'func.php';
global $conn;

$query = "SELECT * FROM genere";
$result = $conn->query($query);
echo '<doctype html>
<html lang="it">
  <head>
    <title>Elenco film per genere</title>
  </head>
  <body>
  <h1>Elenco film per genere</h1>';
while ($row = $result->fetch_assoc()) {
    echo '<a href="elenco.php?genere=' . $row['idGenere'] . '">' . $row['descrizione'] . '</a><br>';
}
$result->free();
echo '</body>';
?>


