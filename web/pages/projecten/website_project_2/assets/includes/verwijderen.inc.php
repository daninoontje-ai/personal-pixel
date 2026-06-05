<?php
session_start();
include "db.php";

if(!isset($_SESSION['user_id'])){
    header("Location: ../../html/inlog.php");
    exit;
}

if(isset($_POST['verwijderen'])){

    $title = $_POST['product_name'];
    $user_id = $_SESSION['user_id'];

    // Verwijderen uit markt_ads
    $stmt = $conn->prepare("
        DELETE FROM markt_ads
        WHERE title = ? AND user_id = ?
        LIMIT 1
    ");

    $stmt->execute([$title, $user_id]);

    header("Location: ../../html/home.php");
    exit;
}