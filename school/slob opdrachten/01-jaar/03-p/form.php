<?php require('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Naam: <input type="text" name="name" id=""><br>
        Platform: <input type="text" name="platform" id=""><br>
        <input type="submit" value="Toevoegen" name="submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $platform = $_POST['platform'];

        $conn = dbConnect();
        try {
            $sql = "INSERT INTO games (name, platform)
            VALUES ('$name', '$platform')";
            $conn->exec($sql);
            echo "Record toegevoegd. <a href='index.php'>Terug</a> naar het overzicht";
            } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
            }

    }

    ?>
</body>
</html>