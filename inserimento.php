<?php
require 'func.php';
global $conn;
$titolo = $_POST['titolo'];
$regista = $_POST['regista'];
$anno = $_POST['anno'];
$tipo = $_POST['tipo'];
$genere = $_POST['genere'];
echo $genere;
$query = "insert into video (titolo, regista, anno, tipo, idGenere) values ('$titolo', '$regista', '$anno', '$tipo', '$genere')";
$conn->query($query);

/*$query = "insert into video (titolo, regista, anno, tipo, idGenere) values (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("ssisi", $titolo, $regista, $anno, $tipo, $genere);
$stmt->execute();*/

echo "Inserimento avvenuto con successo
        <a href='index.php'>Torna alla home</a>";
?>


