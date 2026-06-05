<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: inlog.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Product beheren</title>

<link rel="stylesheet" href="./../css/nav.css">
<link rel="stylesheet" href="./../css/toevoegen.css">

</head>

<body>

<?php
include "./../assets/includes/nav.php";
?>

<div class="actions">

    <!-- PRODUCT TOEVOEGEN -->

    <div class="container">

        <h1>Product toevoegen</h1>

        <form action="./../assets/includes/toevoegen.inc.php" method="post" enctype="multipart/form-data">

            <input type="text" name="title" placeholder="Product naam" required>

            <input type="number" step="0.01" name="price" placeholder="Product prijs" required>

            <input type="text" name="description" placeholder="Product beschrijving" required>

            <input type="file" name="photo" accept="image/png, image/jpg, image/jpeg" required>

            <input type="text" name="code" placeholder="code" required>

            <button type="submit" name="toevoegen">Toevoegen</button>

        </form>

    </div>


    <!-- PRODUCT VERWIJDEREN -->

    <div class="container">

        <h1>Product verwijderen</h1>

        <form action="./../assets/includes/verwijderen.inc.php" method="post">

            <input type="text" name="product_name" placeholder="Product naam" required>

            <button type="submit" name="verwijderen">Verwijderen</button>

        </form>

    </div>
</div>

</body>
</html>