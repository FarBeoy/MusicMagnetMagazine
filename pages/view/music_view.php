<?php
$db = new SQLite3('../magnet.sqlite');

$result = $db->query("SELECT * FROM music");

if ($result) {
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        echo '<div class="item">';
        echo '<img src="../' . htmlspecialchars($row['cover']) . '" alt="Cover">';
        echo '<div class="play">';
        echo '<span class="fa fa-play"></span>';
        echo '</div>';
        echo '<h4>' . htmlspecialchars($row['title']) . '</h4>';
        echo '<p>' . htmlspecialchars($row['artist']) . '</p>';
        echo '<audio controls>';
        echo '<source src="../' . htmlspecialchars($row['audio']) . '" type="audio/mpeg">';
        echo 'Je browser ondersteunt geen audio playback.';
        echo '</audio>';
        echo '</div>';
    }
} else {
    echo '<p>Er is nog geen muziek toegevoegd.</p>';
}
