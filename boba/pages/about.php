<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/about.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>About | Music Magnet Magazine</title>
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
            <li><a href="../home.php">Home</a></li>
            <li><a href="videos.php">Videos</a></li>
            <li><a href="../../pages/view/music_view.php">Music</a></li>
            <li><a href="about.php">About</a></li>
            <?php
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                echo '<li><a href="logout.php">Logout</a></li>';
                echo '<li><a href="chat.php">Chat</a></li>';
            } else {
                echo '<li><a href="../../pages/view/login.php">Login</a></li>';
            }
            ?>
        </ul>
    </nav>

    <div class="left-image">
        <img src="../images/snoop.jpg" alt="Left Side Image">
    </div>

    <div class="container-tag">
        <img src="../images/MMM.png" alt="MMM Logo">
    </div>

    <div class="container">
        <h1>About Music</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
        </p>
        <br>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquiq.
        </p>
        <br>
        <p>
           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
        </p>
    </div>

    <Script src="../js/hamburgermenu.js"></Script>
    <script src="https://kit.fontawesome.com/23cecef777.js" crossorigin="anonymous"></script>
</body>
</html>
