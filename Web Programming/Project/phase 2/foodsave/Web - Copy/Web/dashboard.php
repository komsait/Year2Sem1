<!-- <?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Food Save</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .centered-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .paragraph-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 15px;
            text-decoration: none;
            color: #FFFFFF;
            background-color: #F47059; /* Website's orange */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <span class="logo-text">
                    <span class="food">Food</span> <span class="save">Save</span>
                </span>
            </div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="logout.php">Logout</a></li> 
            </ul>
        </nav>
    </header>
    <main class="centered-content">
        <section>
            <h2>Dashboard</h2>
            <p>Welcome to your dashboard. From here you can manage your surplus food donations.</p>
            <p><a href="donate.html" class="paragraph-button">Donate Surplus Food</a></p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Food Save. All rights reserved.</p>
    </footer>
</body>
</html> -->

<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Food Save</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Food Save</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Dashboard</h2>
            <p>Welcome to your dashboard. From here you can manage your surplus food donations.</p>
            <a href="donate.html"><button class="dashboard">Donate Surplus Food</button></a>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Food Save. All rights reserved.</p>
    </footer>
</body>
</html>
