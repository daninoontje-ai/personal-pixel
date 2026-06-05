<?php

$host = "localhost";
$dbname = "st1739531576";
$user = "st1739531576";
$pass = "7EceU5WxVjqZEsS";

try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $user,
        $pass
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Database connectie mislukt: " . $e->getMessage());
}