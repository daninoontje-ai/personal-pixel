<?php require('functions.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Naam: <input type="text" name="name" value="<?php echo $name; ?>"><br>
        Platform: <input type="text" name="platform" value="<?php echo $platform; ?>"><br>
        <input type="submit" value="Edit" name="edit"><a href="index.php"></a>
    </form>

    <br>
    <a href="Index.php">Terug naar het overzicht</a>
    
    <?php

    if(isset($_GET['id'])){

        $id = $_GET['id'];

        if(isset($_POST['edit'])){
            $name = $_POST['name'];
            $platform = $_POST['platform'];

            $conn = dbConnect();
            try {
                $sql = "UPDATE games SET name = '$name', platform = '$platform' WHERE id = '$id'";
                $conn->exec($sql);
            } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        }

        $conn = dbConnect();
        $stmt = $conn->prepare("SELECT * FROM games WHERE id = $id");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();

        foreach ($result as $record) {
            $id = $record['id'];
            $name = $record['name'];
            $platform = $record['platform'];
        }

    }

    ?>
</body>
</html>