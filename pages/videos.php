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
    <link rel="stylesheet" href="../css/videos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Video's | Music Magnet Magazine</title>
</head>
<body>

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

    <div class="container-tag">
        <img src="../images/MMM.png" alt="MMM Logo">
    </div>

    <div class="main-container">
        <div class="mmm-playlists">
            <h2>MMM Music Videos Kanye West</h2>
            <div class="list">
                <div class="item">
                    <iframe 
                        class="responsive-iframe"
                        width="345" 
                        height="200" 
                        src="https://www.youtube.com/embed/Co0tTeuUVhU?si=zxDvktBXWGbz7EX0"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>Heartless</h4>
                    <p>Kanye West</p>
                </div>

                <div class="item">
                    <iframe 
                        width="345" 
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/ila-hAUXR5U?si=yfa9A58usuCbIFHI"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>Flashing Lights</h4>
                    <p>Kanye West</p>
                </div>
               
                <div class="item">
                    <iframe 
                        class="responsive-iframe"
                        width="345" 
                        height="200" 
                        src="https://www.youtube.com/embed/6vwNcNOTVzY?si=VNQNnkpT7cdZB7-l"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>Gold Digger ft. Jamie Foxx</h4>
                    <p>Kanye West</p>
                </div>

                <div class="item">
                    <iframe 
                        width="345" 
                        class="responsive-iframe"
                        height="200" 
                        src="https://www.youtube.com/embed/h3EJICKwITw?si=xYmacFdBKkfObSaQ"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>All Girls Are The Same</h4>
                    <p>Juice Wrld</p>
                </div>

                <div class="item">
                    <iframe 
                        width="345" 
                        class="responsive-iframe"
                        height="200" 
                        src="https://www.youtube.com/embed/5SejM_hBvMM?si=f5prVKEPi-A0NTXH"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>Lean Wit Me</h4>
                    <p>Juice Wrld</p>
                </div>
            </div>
        </div>

        <div class="mmm-playlists">
            <h2>MMM Music Videos Juice Wrld</h2>
            <div class="list">
                <div class="item">
                    <iframe 
                        width="345" 
                        class="responsive-iframe"
                        height="200" 
                        src="https://www.youtube.com/embed/HA1srD2DwaI?si=KIDi8MDy98d6mIOQ"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>Burn</h4>
                    <p>Juice Wrld</p>
                </div>

                <div class="item">
                    <iframe 
                        width="345" 
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/cr82wSBZeeQ?si=YjTqSk0bjzDg7kD2"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>Armed & Dangerous</h4>
                    <p>Juice Wrld</p>
                </div>

                <div class="item">
                    <iframe 
                        width="345" 
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/iI34LYmJ1Fs?si=7_ycaAxAUDr7yWDr"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>Robbery</h4>
                    <p>Juice Wrld</p>
                </div>

                <div class="item">
                    <iframe 
                        width="345" 
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/Ys3zAdSI1eI?si=PBgxTo83HOb9XqSC"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>Party By Myself</h4>
                    <p>Juice Wrld</p>
                </div>

                <div class="item">
                    <iframe 
                        width="345" 
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/6TK--iArtQM?si=Z9qfyiEHY7_d83Yl"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>Misfit</h4>
                    <p>Juice Wrld</p>
                </div>
            </div>
        </div>

        <div class="mmm-playlists">
            <h2>MMM Music Videos Snoop Dogg</h2>
            <div class="list">
                <div class="item">
                    <iframe 
                        width="345" 
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/GtUVQei3nX4?si=XEbA-kphiXMGwTJA"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>Drop It Like It's Hot</h4>
                    <p>Snoop Dogg</p>
                </div>

                <div class="item">
                    <iframe 
                        width="345" 
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/_FE194VN6c4?si=XH4rbpYFpn02sIyU"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>Beautiful (Official Music Video) ft. Pharrell Williams</h4>
                    <p>Snoop Dogg</p>
                </div>

                <div class="item">
                    <iframe 
                        width="345" 
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/UXWFqxKU2qA?si=qfIMPog66CjcWj6G"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>Vato (Official Music Video) ft. B-Real</h4>
                    <p>Snoop Dogg</p>
                </div>

                <div class="item">
                    <iframe 
                        width="345" 
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/-KCBLA-fuVw?si=hG2cFlhywKOtbydZ"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>"French Inhale" [Official Music Video]</h4>
                    <p>Snoop Dogg & Wiz Khalifa</p>
                </div>

                <div class="item">
                    <iframe 
                        width="345" 
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/gKS08HkGMA4?si=9Jlk_RFrxyVablcy"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>Boss' Life (Official Music Video) ft. Nate Dogg</h4>
                    <p>Snoop Dogg</p>
                </div>
            </div>
        </div>

        <div class="mmm-playlists">
            <h2>MMM Music Videos bbno$</h2>
            <div class="list">
                <div class="item">
                    <iframe 
                        width="345" 
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/K6BRna4_bmg?si=sfSKuvRIhuH59i8h"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>edamame (Official Video)</h4>
                    <p>bbno$ & Rich Brian</p>
                </div>

                <div class="item">
                    <iframe 
                        width="345" 
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/X_nJ5ksFVbg?si=UDmIFNq0R6gTHcmY"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>lalala (Official Audio)</h4>
                    <p>bbno$ & y2k</p>
                </div>

                <div class="item">
                    <iframe 
                        width="345" 
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/QuvqzlxEO6g?si=yqfvOvVLmp98Y_jA"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>it boy (official music video)</h4>
                    <p>bbno$</p>
                </div>

                <div class="item">
                    <iframe 
                        width="345" 
                        class="responsive-iframe"
                        height="200" 
                        src="https://www.youtube.com/embed/41B5zvsvQdM?si=w43Z7iySod66fTFB"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>lil' freak (starring MoistCr1TiKaL)</h4>
                    <p>bbno$</p>
                </div>

                <div class="item">
                    <iframe 
                        width="345" 
                        class="responsive-iframe"
                        height="200" 
                        src="https://www.youtube.com/embed/LiXYi-_MVa4?si=D0hmXKDn6tHbbAnN"
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>two (official music video)</h4>
                    <p>bbno$</p>
                </div>
            </div>
        </div>


    </div>

    
    <script src="../js/hamburgermenu.js"></script>
    <script src="https://kit.fontawesome.com/23cecef777.js" crossorigin="anonymous"></script>
</body>
</html>
