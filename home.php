<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>Home</title>
</head>
<body>
    <div class="overlay"></div>

    <nav class="navbar">
        <!-- Hamburger Menu Icon -->
        <div class="burger-menu" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="pages/videos.php">Videos</a></li>
            <li><a href="pages/music.php">Music</a></li>
            <li><a href="pages/about.php">About</a></li>
            <?php
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                echo '<li><a href="pages/logout.php">Logout</a></li>';
                echo '<li><a href="pages/chat.php">Chat</a></li>';
            } else {
                echo '<li><a href="pages/login.php">Login</a></li>';
            }
            ?>
        </ul>
    </nav>

    <div class="container-tag">
        <img src="images/MMM.png" alt="MMM Logo">
    </div>

    <div class="container-titel">
        <h1>Music</h1>
        <h1>Magnet</h1>
    </div>

    <div class="container-kanye">
        <img src="images/kanye.avif" alt="Kanye West">
    </div>

    <script src="../js/animations.js"></script>
    <script src="js/hamburgermenu.js"></script>

</body>
</html>
