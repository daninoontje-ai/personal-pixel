<?php
// -----------------------------------
// 1. Database connectie functie
// -----------------------------------
function dbConnect(){
    $host = "localhost";
    $dbname = "classicmodels";
    $username = "bit_academy";
    $password = "bit_academy";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        die("Connectie mislukt: " . $e->getMessage());
    }
}

// -----------------------------------
// 2. Verwerking formulier
// -----------------------------------
if(isset($_POST['submit'])){

    // Formulierwaarden in variabelen opslaan
    $customerName = $_POST['customerName'];
    $contactLastName = $_POST['contactLastName'];
    $contactFirstName = $_POST['contactFirstName'];
    $phone = $_POST['phone'];
    $addressLine1 = $_POST['addressLine1'];
    $city = $_POST['city'];
    $country = $_POST['country'];

    // Connectie maken
    $conn = dbConnect();

    try{
        // INSERT query voorbereiden
        $stmt = $conn->prepare("
            INSERT INTO customers
            (customerName, contactLastName, contactFirstName, phone, addressLine1, city, country)
            VALUES
            (:customerName, :contactLastName, :contactFirstName, :phone, :addressLine1, :city, :country)
        ");

        // Variabelen koppelen
        $stmt->bindParam(':customerName', $customerName);
        $stmt->bindParam(':contactLastName', $contactLastName);
        $stmt->bindParam(':contactFirstName', $contactFirstName);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':addressLine1', $addressLine1);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':country', $country);

        // Query uitvoeren
        $stmt->execute();

        echo "<p style='color:green;'>Customer succesvol toegevoegd!</p>";

    } catch(PDOException $e) {
        echo "<p style='color:red;'>Fout: " . $e->getMessage() . "</p>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Nieuwe Customer toevoegen</title>
</head>
<body>

<h2>Nieuwe Customer toevoegen</h2>

<!-- -----------------------------------
     3. HTML formulier
----------------------------------- -->
<form method="post" action="">
    Customer Name:<br>
    <input type="text" name="customerName" required><br><br>

    Contact Last Name:<br>
    <input type="text" name="contactLastName" required><br><br>

    Contact First Name:<br>
    <input type="text" name="contactFirstName" required><br><br>

    Phone:<br>
    <input type="text" name="phone" required><br><br>

    Address Line 1:<br>
    <input type="text" name="addressLine1" required><br><br>

    City:<br>
    <input type="text" name="city" required><br><br>

    Country:<br>
    <input type="text" name="country" required><br><br>

    <input type="submit" name="submit" value="Toevoegen">
</form>

</body>
</html>