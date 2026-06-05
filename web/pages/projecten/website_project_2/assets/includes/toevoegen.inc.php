<?php

session_start();
include "db.php";

if(isset($_POST['toevoegen'])){

    if ($_POST['code'] !== "geheim_code") {
        echo "❌ Verkeerde code";
        exit;
    }

    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $price = $_POST['price'];
    $user_id = $_SESSION['user_id'];

    if(isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK){
        $fileTmp = $_FILES['photo']['tmp_name'];
        $fileName = basename($_FILES['photo']['name']);
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png'];

        if(!in_array($fileExt, $allowed)){
            header("Location: ../../html/toevoegen.php?error=ongeldig_bestandstype");
            exit;
        }

        $photoData = file_get_contents($fileTmp);

        // Toegevoegd aan markt_ads
        $stmt = $conn->prepare("INSERT INTO markt_ads (user_id, title, description, price, photo) VALUES (?, ?, ?, ?, ?)");
        $stmt->bindValue(1, $user_id, PDO::PARAM_INT);
        $stmt->bindValue(2, $title, PDO::PARAM_STR);
        $stmt->bindValue(3, $description, PDO::PARAM_STR);
        $stmt->bindValue(4, $price);
        $stmt->bindValue(5, $photoData, PDO::PARAM_LOB);
        $stmt->execute();

        header("Location: ../../html/home.php");
        exit;
    } else {
        header("Location: ../../html/toevoegen.php?error=geen_afbeelding");
        exit;
    }
}