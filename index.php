<?php
 require 'func.php';
 global $conn;
 $query = "SELECT * FROM genere";

echo '
<doctype html>
<html lang="it">
  <head>
    <title>Inserimento video</title>
  </head>
  <body>
  <h1>Inserimento nuovo video</h1>
 
    <form action="inserimento.php" method="post">
        <label for="titolo">Titolo</label>
        <input type="text" name="titolo" id="titolo" required> <br>
        <label for="regista">Regista</label>
        <input type="text" name="regista" id="regista" required><br>
        <label for="anno">Anno</label>
        <input type="text" name="anno" id="anno" required><br>
        <label for="tipo">Tipo</label>
        <select name="tipo" id="tipo" required>
          <option value="vhs">VHS</option>
          <option value="dvd">DVD</option>
        </select><br>';
        $result = $conn->query($query);
        echo '<label for="genere">Genere</label>
                <select name="genere" id="genere" required>';
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row['idGenere'] . '">' . $row['descrizione'] . '</option>';
        }
        echo '</select>';
        $result->free();
        echo '<input type="submit" value="Inserisci">
        </form>';
        echo '<a href="indice.php">Indice</a>';
        echo '</body>';

  ?>
