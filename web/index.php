<?php include 'includes/head.php'; ?>

<?php include 'includes/nav.php'; ?>

<?php
$page = $_GET['page'] ?? 'home';

$pages = [
    'home' => 'pages/home.php',
    'game1' => 'pages/menu/game1.php',
    '31' => 'pages/menu/31.php',
    'over-mij' => 'pages/over-mij.php',
    'mijn-projecten' => 'pages/mijn-projecten.php',
];

if (isset($pages[$page])) {
    include $pages[$page];
} else {
    echo "Pagina niet gevonden";
}
?>

<?php include 'includes/footer.php'; ?>
</body>
</html>