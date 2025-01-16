<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new SQLite3('../../magnet.sqlite');

    $uploadDir = '../../music/';
    $errors = [];

    $title = htmlspecialchars($_POST['title']);
    $artist = htmlspecialchars($_POST['artist']);

    if (isset($_FILES['cover']) && $_FILES['cover']['error'] === 0) {
        $coverTmp = $_FILES['cover']['tmp_name'];
        $coverName = basename($_FILES['cover']['name']);
        $coverPath = $uploadDir . $coverName;

        if (move_uploaded_file($coverTmp, $coverPath)) {
            $coverURL = 'music/' . $coverName;
        } else {
            $errors[] = "Fout bij uploaden van de cover afbeelding.";
        }
    } else {
        $errors[] = "Geen geldige cover afbeelding geselecteerd.";
    }

    if (isset($_FILES['audio']) && $_FILES['audio']['error'] === 0) {
        $audioTmp = $_FILES['audio']['tmp_name'];
        $audioName = basename($_FILES['audio']['name']);
        $audioPath = $uploadDir . $audioName;

        if (move_uploaded_file($audioTmp, $audioPath)) {
            $audioURL = 'music/' . $audioName;
        } else {
            $errors[] = "Fout bij uploaden van het MP3 bestand.";
        }
    } else {
        $errors[] = "Geen geldig MP3 bestand geselecteerd.";
    }

    if (empty($errors)) {
        $stmt = $db->prepare("INSERT INTO music (title, artist, cover, audio) VALUES (:title, :artist, :cover, :audio)");
        $stmt->bindValue(':title', $title, SQLITE3_TEXT);
        $stmt->bindValue(':artist', $artist, SQLITE3_TEXT);
        $stmt->bindValue(':cover', $coverURL, SQLITE3_TEXT);
        $stmt->bindValue(':audio', $audioURL, SQLITE3_TEXT);

        if ($stmt->execute()) {
            echo "Muziek succesvol toegevoegd!";
        } else {
            echo "Fout bij het toevoegen aan de database.";
        }
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}

