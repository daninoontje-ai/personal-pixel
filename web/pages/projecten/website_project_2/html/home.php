<?php
session_start();
include "../assets/includes/db.php";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marktplaats - Home</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/nav.css">
</head>
<body>

<?php
include "../assets/includes/nav.php";
?>

<main>
    <div class="container">

        <?php
        // Alle advertenties ophalen uit markt_ads en markt_users
        $stmt = $conn->prepare("SELECT markt_ads.*, markt_users.username FROM markt_ads JOIN markt_users ON markt_ads.user_id = markt_users.id ORDER BY markt_ads.id DESC");
        $stmt->execute();
        $ads = $stmt->fetchAll();

        if($ads){
            foreach($ads as $ad){
                ?>
                <div class="product">
                    <?php if(!empty($ad['photo'])):
                        $photoBinary = $ad['photo'];
                        $photoInfo = getimagesizefromstring($photoBinary);
                        $photoType = $photoInfo['mime'] ?? 'image/jpeg';
                        $photoData = base64_encode($photoBinary);
                        ?>
                        <img src="data:<?php echo $photoType; ?>;base64,<?php echo $photoData; ?>" alt="<?php echo htmlspecialchars($ad['title']); ?>">
                    <?php else: ?>
                        <img src="../assets/img/default.png" alt="Geen afbeelding">
                    <?php endif; ?>
                    <h3><?php echo htmlspecialchars($ad['title']); ?></h3>
                    <p><?php echo htmlspecialchars($ad['description']); ?></p>
                    <p><strong>€<?php echo number_format($ad['price'],2); ?></strong></p>
                    <p>Verkoper: <?php echo htmlspecialchars($ad['username']); ?></p>
                </div>
                <?php
            }
        } else {
            echo "<p>Er zijn nog geen advertenties.</p>";
        }
        ?>

    </div>
</main>

</body>
</html>