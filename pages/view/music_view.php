<?php

$db = new SQLite3('../../magnet.sqlite');

$query = "SELECT * FROM music";
$result = $db->query($query);

while ($row = $result->fetchArray()) {
    echo "<div class='music-item'>";
    echo "<h3>" . htmlspecialchars($row['song_name']) . " - " . htmlspecialchars($row['artist_name']) . "</h3>";
    echo "<img src='" . htmlspecialchars($row['image_file']) . "' alt='Afbeelding'>";
    echo "<iframe width='560' height='315' src='" . htmlspecialchars($row['song_link']) . "' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
    echo "</div>";
}
