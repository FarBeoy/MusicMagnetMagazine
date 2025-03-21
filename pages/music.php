<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$db = new SQLite3('../magnet.sqlite');

$result = $db->query("SELECT * FROM music");
$musicData = [];

if ($result) {
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $musicData[] = $row;
    }
}

include 'view/music_view.php';
