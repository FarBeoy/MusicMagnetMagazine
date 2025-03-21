<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/music.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <title>Music | Music Magnet Magazine</title>
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
        <li><a href="home.php">Home</a></li>
        <li><a href="videos.php">Videos</a></li>
        <li><a href="music.php">Music</a></li>
        <li><a href="about.php">About</a></li>
        <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            echo '<li><a href="logout.php">Logout</a></li>';
        } else {
            echo '<li><a href="login.php">Login</a></li>';
        }
        ?>
    </ul>
</nav>

<div class="container-tag">
    <img src="../assets/media/images/MMM.png" alt="MMM Logo">
</div>

<div class="main-container">
    <div class="spotify-playlists">
        <h2>MMM Playlists Kayne West</h2>
        <div class="list">
            <div class="item">
                <img src="../assets/media/covers/heartless.jpg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>Heartless</h4>
                <p>Kanye West</p>
                <audio>
                    <source src="../audio/Kanye West - Heartless (Lyrics).mp3" type="audio/mpeg">
                </audio>
            </div>

            <div class="item">
                <img src="../assets/media/covers/flashinglights.jpg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>Flashing Lights</h4>
                <p>Kanye West</p>
                <audio>
                    <source src="../audio/Flashing Lights.mp3" type="audio/mpeg">
                </audio>
            </div>

            <div class="item">
                <img src="../assets/media/covers/carnival.jpg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>Carnival</h4>
                <p>Kanye West</p>
                <audio>
                    <source src="../audio/CARNIVAL - Kanye West & Dolla $ign (Lyrics) feat. [Playboi Carti, Rich The Kid].mp3" type="audio/mpeg">
                </audio>
            </div>

            <div class="item">
                <img src="../assets/media/covers/father.jpg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>Father Stretch My Hands pt.1</h4>
                <p>Kanye West</p>
                <audio>
                    <source src="../audio/Father Stretch My Hands Pt. 1.mp3" type="audio/mpeg">
                </audio>
            </div>

            <div class="item">
                <img src="../assets/media/covers/allfallsdown.jpg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>All Falls Down</h4>
                <p>Kanye West</p>
                <audio>
                    <source src="../audio/All Falls Down.mp3" type="audio/mpeg">
                </audio>
            </div>
        </div>
    </div>

    <div class="spotify-playlists">
        <h2>MMM Playlists Juice Wrld</h2>
        <div class="list">
            <div class="item">
                <img src="../assets/media/covers/allgirlsarethesame.jpg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>All Girl Are The Same</h4>
                <p>Juice Wrld</p>
                <audio>
                    <source src="../audio/All Girls Are The Same.mp3" type="audio/mpeg">
                </audio>
            </div>

            <div class="item">
                <img src="../assets/media/covers/allgirlsarethesame.jpg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>Lucid Dreams</h4>
                <p>Juice Wrld</p>
                <audio>
                    <source src="../audio/Lucid Dreams.mp3" type="audio/mpeg">
                </audio>
            </div>

            <div class="item">
                <img src="../assets/media/covers/roberry.jpg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>Robbery</h4>
                <p>Juice Wrld</p>
                <audio>
                    <source src="../audio/Robbery.mp3" type="audio/mpeg">
                </audio>
            </div>

            <div class="item">
                <img src="../assets/media/covers/allgirlsarethesame.jpg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>Lean Wit Me</h4>
                <p>Juice Wrld</p>
                <audio>
                    <source src="../audio/Juice WRLD - Lean Wit Me (Official Audio).mp3" type="audio/mpeg">
                </audio>
            </div>

            <div class="item">
                <img src="../assets/media/covers/letmeknow.jpg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>Let Me Know</h4>
                <p>Juice Wrld</p>
                <audio>
                    <source src="../audio/Juice WRLD Let Me Know (I Wonder Why Freestyle) (Official Audio).mp3" type="audio/mpeg">
                </audio>
            </div>
        </div>
    </div>

    <div class="spotify-playlists">
        <h2>MMM Playlists Aarne</h2>
        <div class="list">
            <div class="item">
                <img src="../assets/media/covers/sos.jpg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>SOS</h4>
                <p>Aarne, BUSHIDO ZHO</p>
            </div>

            <div class="item">
                <img src="../assets/media/covers/ameli.jpg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>Ameli</h4>
                <p>Big Baby Tape, Aarne, Toxis</p>
            </div>

            <div class="item">
                <img src="../assets/media/covers/drainseason.jpg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>DRAIN SEASON</h4>
                <p>Aarne, BUSHIDO ZHO</p>
            </div>

            <div class="item">
                <img src="../assets/media/covers/supersonic.jpeg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>Supersonic</h4>
                <p>Big Baby Tape, Aarne</p>
            </div>

            <div class="item">
                <img src="../assets/media/covers/daleko.jpeg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>Daleko</h4>
                <p>Aarne, MORGENSHTERN</p>
            </div>

        </div>
    </div>

    <div class="spotify-playlists">
        <h2>MMM Playlists Scarlxrd</h2>
        <div class="list">
            <div class="item">
                <img src="../assets/media/covers/like.jpg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>LIKE YXU WXULD KNXW</h4>
                <p>Scarlxrd, Kordhell, CORPSE</p>
            </div>

            <div class="item">
                <img src="../assets/media/covers/missme.jpg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>MISS ME?</h4>
                <p>Scarlxrd, Kordhell</p>
            </div>

            <div class="item">
                <img src="../assets/media/covers/heartattack.jpeg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>HEART ATTACK</h4>
                <p>Scarlxrd</p>
            </div>

            <div class="item">
                <img src="../assets/media/covers/mypain.jpeg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>MY PAIN</h4>
                <p>Scarlxrd, KUTE</p>
            </div>

            <div class="item">
                <img src="../assets/media/covers/777.jpg" />
                <div class="play">
                    <span class="fa fa-play"></span>
                </div>
                <h4>777  777  777</h4>
                <p>Scarlxrd</p>
            </div>
        </div>
    </div>
    <div class="spotify-playlists">
        <h2>MMM Custom Added Music</h2>
        <div class="list">
            <?php
            include_once 'music.php';

            if (!empty($musicData)) {
                foreach ($musicData as $row) {
                    ?>
                    <div class="item">
                        <img src="../<?= htmlspecialchars($row['cover']) ?>" alt="Cover">
                        <div class="play">
                            <span class="fa fa-play"></span>
                        </div>
                        <h4><?= htmlspecialchars($row['title']) ?></h4>
                        <p><?= htmlspecialchars($row['artist']) ?></p>

                        <!-- Alleen audio bestand afspelen -->
                        <audio controls>
                            <source src="../<?= htmlspecialchars($row['audio']) ?>" type="audio/mpeg">
                            Je browser ondersteunt het audio-element niet.
                        </audio>
                    </div>
                    <?php
                }
            } else {
                echo '<p>Er is nog geen muziek toegevoegd.</p>';
            }
            ?>
        </div>
    </div>

    <?php
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        ?>
        <div class="add-button-container">
            <a href="toevoegen.php" class="add-button">Muziek Toevoegen</a>
        </div>
        <?php
    }
    ?>
</div>

<script src="../assets/js/music.js"></script>
<script src="../assets/js/hamburgermenu.js"></script>
<script src="https://kit.fontawesome.com/23cecef777.js" crossorigin="anonymous"></script>
</body>
</html>
