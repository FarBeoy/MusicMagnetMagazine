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

<div class="contianer-main">
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
</div>

<div class="article">
    <div class="image2">
        <img src="images/KANYEWEST.jpg" alt="Description of the image" class="article-image">
    </div>

    <div class="container-article">
        <h1>Kanye West: A Revolutionary in Music and Culture</h1> <br>
        <p>Kanye West, born on June 8, 1977, in Atlanta, Georgia, is one of the most influential figures in modern music and pop culture. Known for his genre-defying music, groundbreaking production, and outspoken personality, Kanye has left an indelible mark on both the music and fashion industries.</p><br>
        <p>Starting his career as a producer, Kanye’s debut album, The College Dropout 2004, revolutionized hip-hop with its soulful beats and introspective lyrics. Over the years, he pushed musical boundaries with albums like Late Registration 2005 and 808s & Heartbreak 2008, each showcasing his willingness to experiment and redefine hip-hop.</p><br>
        <p>Beyond music, Kanye made a significant impact on fashion. His Yeezy brand, in collaboration with Adidas, redefined streetwear and high fashion, becoming one of the most influential names in footwear and apparel.</p>
        <p>While Kanye's public persona has often sparked controversy, his boldness and authenticity have earned him a loyal following. Whether in music, fashion, or culture, Kanye West continues to be a revolutionary force shaping the future.</p>
    </div>
</div>

<div class="article2">
    <div class="image2">
        <img src="images/snoopie.webp" alt="Description of the image" class="article-image2">
    </div>

    <div class="container-article2">
        <h1>Snoop Dogg: A Cultural Icon</h1> <br>
        <p>Snoop Dogg, born Calvin Cordozar Broadus Jr. on October 20, 1971, is a legendary figure in hip-hop and pop culture. Rising to fame in the early 1990s with his debut album <em>Doggystyle</em> (1993), he became known for his smooth delivery and unique voice. Discovered by Dr. Dre, Snoop's influence on hip-hop is undeniable, with hits like "Gin and Juice" and "What's My Name?"</p> <br>

        <p>Beyond music, Snoop Dogg has ventured into acting, business, and cannabis culture, making appearances in films and TV shows like <em>Starsky & Hutch</em> and <em>Soul Plane</em>. He's also become a successful entrepreneur, with ventures in cannabis and philanthropy, supporting education and youth programs.</p> <br>

        <p>Snoop Dogg’s blend of musical talent, charisma, and cultural impact has solidified him as an icon, ensuring his place in entertainment history for years to come.</p>
    </div>
</div>

<script src="../js/animations.js"></script>
<script src="js/hamburgermenu.js"></script>

</body>
</html>