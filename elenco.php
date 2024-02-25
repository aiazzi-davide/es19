<?php
//pagina che elenca i film per genere
require 'func.php';
global $conn;
$genere = $_GET['genere'];
$query = "SELECT titolo, regista, anno, tipo, count(*) as numero_noleggi FROM video left join prestiti on video.idVideo = prestiti.idVideo where idGenere = $genere group by titolo, regista, anno, tipo order by numero_noleggi desc";
$result = $conn->query($query);
echo '<doctype html>
<html lang="it">
  <head>
    <title>Elenco film per genere</title>
  </head>
  <body>
  <h1>Elenco film per genere</h1>';
while ($row = $result->fetch_assoc())
    echo $row['titolo'] . ' ' . $row['regista'] . ' ' . $row['anno'] . ' ' . $row['tipo'] . ' ' . $row['numero_noleggi'] . '<br>';
$result->free();
echo '</body>';
?>
