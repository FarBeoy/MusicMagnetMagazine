<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new SQLite3('../magnet.sqlite');
    $errors = [];

    $title = htmlspecialchars($_POST['title']);
    $artist = htmlspecialchars($_POST['artist']);

    if (isset($_FILES['audio']) && $_FILES['audio']['error'] === 0) {
        $uploadDir = '../assets/media/music/';
        $audioTmp = $_FILES['audio']['tmp_name'];
        $audioName = basename($_FILES['audio']['name']);
        $audioPath = $uploadDir . $audioName;

        if (move_uploaded_file($audioTmp, $audioPath)) {
            $audioURL = '../assets/media/music/' . $audioName;
        } else {
            $errors[] = "Er is een fout bij het uploaden van het audiobestand.";
        }
    } else {
        $errors[] = "Geen geldig audiobestand geselecteerd.";
    }

    // Cover afbeelding uploaden
    if (isset($_FILES['cover']) && $_FILES['cover']['error'] === 0) {
        $uploadDir = '../assets/media/covers/';
        $coverTmp = $_FILES['cover']['tmp_name'];
        $coverName = basename($_FILES['cover']['name']);
        $coverPath = $uploadDir . $coverName;

        if (move_uploaded_file($coverTmp, $coverPath)) {
            $coverURL = '../assets/media/covers/' . $coverName;
        } else {
            $errors[] = "Fout bij uploaden van de cover afbeelding.";
        }
    } else {
        $errors[] = "Geen geldige cover afbeelding geselecteerd.";
    }

    if (empty($errors)) {
        $stmt = $db->prepare("INSERT INTO music (title, artist, cover, audio) VALUES (:title, :artist, :cover, :audio)");
        $stmt->bindValue(':title', $title, SQLITE3_TEXT);
        $stmt->bindValue(':artist', $artist, SQLITE3_TEXT);
        $stmt->bindValue(':cover', $coverURL, SQLITE3_TEXT);
        $stmt->bindValue(':audio', $audioURL, SQLITE3_TEXT);

        if ($stmt->execute()) {
            header('location: music.php');
        } else {
            echo "Fout bij het toevoegen van muziek.";
        }
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}

include 'view/toevoegen_view.php';
