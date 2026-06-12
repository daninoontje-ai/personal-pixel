<?php

// Functie voor het opzetten van de databaseverbinding met de database 'oefeningen'
function dbConnect() {
    $servername = "localhost";
    $database = "oefeningen";
    $dns = "mysql:host=$servername;dbname=$database";
    $username = "bit_academy";
    $password = "bit_academy";
    $conn = new PDO($dns, $username, $password);
    return $conn;
    }

    

?>