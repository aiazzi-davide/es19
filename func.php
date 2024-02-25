<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "videoteca";

$conn = new mysqli($servername, $username, $password, $dbname)
or die("Connessione al database fallita: " . $conn->connect_error);