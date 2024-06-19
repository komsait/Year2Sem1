<!-- donate.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $foodType = htmlspecialchars($_POST['foodType']);
    $quantity = htmlspecialchars($_POST['quantity']);
    $pickupTime = htmlspecialchars($_POST['pickupTime']);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "foodsave";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO donations (food_type, quantity, pickup_time) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $foodType, $quantity, $pickupTime);

    if ($stmt->execute()) {
        echo "Donation successful! Thank you for your contribution.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
