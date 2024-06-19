<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "foodsave";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit();
    }

    $stmt = $conn->prepare("SELECT restaurant_name, password_hash FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($restaurantName, $passwordHash);
    
    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (password_verify($password, $passwordHash)) {
            $_SESSION['username'] = $restaurantName;
            $_SESSION['email'] = $email;
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "Invalid email or password.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
