<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="form.php">Voeg een record toe</a><br>
    <?php

      $conn = dbConnect();
      $stmt = $conn->prepare("SELECT * FROM games"); 
      $stmt->execute();
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $result = $stmt->fetchAll();

      
    ?>

     <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Platform</th>
        </tr>

       <?php foreach ($result as $record) { ?>
        <tr>
            <?php foreach ($record as $value) { ?>
                <td><?php echo $value; ?></td>
            <?php } ?>
            <td>
                <a href="edit.php?id=<?php echo $record['id'];?>">edit</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    
</body>
</html>