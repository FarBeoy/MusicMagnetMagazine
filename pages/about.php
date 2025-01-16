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
            <li><a href="music.php">Music</a></li>
            <li><a href="about.php">About</a></li>
            <?php
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                echo '<li><a href="logout.php">Logout</a></li>';
                echo '<li><a href="chat.php">Chat</a></li>';
            } else {
                echo '<li><a href="login.php">Login</a></li>';
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
            Music is a universal language that touches hearts and connects people across the globe. It has the power to express emotions, tell stories, and unite communities. From ancient melodies to modern beats, music reflects the essence of cultures and history.
        </p>
        <br>
        <p>
            Whether it's the rhythm of drums, the harmony of a choir, or the energy of electronic music, each genre offers something unique. Music evolves constantly, blending tradition with innovation, and continues to inspire creativity and expression in people of all ages.
        </p>
        <br>
        <p>
            Beyond entertainment, music is a source of healing and inspiration. It has the ability to soothe the mind, uplift the soul, and bring joy. In every note and lyric, music reminds us of the beauty of life and our shared humanity.
        </p>
    </div>


    <Script src="../js/hamburgermenu.js"></Script>
    <script src="https://kit.fontawesome.com/23cecef777.js" crossorigin="anonymous"></script>
</body>
</html>
