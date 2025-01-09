<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: ../login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new SQLite3('../../magnet.sqlite');

    $image_path = '../../covers/' . basename($_FILES['image_file']['name']);
    $song_link = htmlspecialchars($_POST['song_link']);

    if (move_uploaded_file($_FILES['image_file']['tmp_name'], $image_path)) {
        $artist_name = htmlspecialchars($_POST['artist_name']);
        $song_name = htmlspecialchars($_POST['song_name']);

        $stmt = $db->prepare('INSERT INTO music (artist_name, song_name, song_link, image_file) VALUES (?, ?, ?, ?)');
        $stmt->bindValue(1, $artist_name, SQLITE3_TEXT);
        $stmt->bindValue(2, $song_name, SQLITE3_TEXT);
        $stmt->bindValue(3, $song_link, SQLITE3_TEXT);
        $stmt->bindValue(4, $image_path, SQLITE3_TEXT);
        $stmt->execute();

        header('Location: ../music.php');
        exit;
    } else {
        echo 'Er is een fout opgetreden bij het uploaden van de afbeelding.';
    }
}
