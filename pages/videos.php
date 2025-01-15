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
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
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
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
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
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
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
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
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
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>All Girls Are The Same</h4>
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
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>Lucid Dreams</h4>
                    <p>Juice Wrld</p>
                </div>

                <div class="item">
                    <iframe 
                        width="345" 
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
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
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
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
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
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
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>All Girls Are The Same</h4>
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
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>Lucid Dreams</h4>
                    <p>Juice Wrld</p>
                </div>

                <div class="item">
                    <iframe 
                        width="345" 
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
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
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
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
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
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
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>All Girls Are The Same</h4>
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
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>Lucid Dreams</h4>
                    <p>Juice Wrld</p>
                </div>

                <div class="item">
                    <iframe 
                        width="345" 
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
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
                        height="200" 
                        class="responsive-iframe"
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
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
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
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
                        src="https://www.youtube.com/embed/<YOUTUBE_VIDEO_ID>" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                    <h4>All Girls Are The Same</h4>
                    <p>Juice Wrld</p>
                </div>
            </div>
        </div>


    </div>

    
    <script src="../js/hamburgermenu.js"></script>
    <script src="https://kit.fontawesome.com/23cecef777.js" crossorigin="anonymous"></script>
</body>
</html>
