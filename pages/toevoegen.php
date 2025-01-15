<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/music.css">
    <title>Muziek Toevoegen</title>
</head>
<body>
<div class="form-container">
    <h2>Muziek Toevoegen</h2>
    <form action="view/toevoegen_view.php" method="POST" enctype="multipart/form-data">
        <label for="artist_name">Artiest Naam:</label>
        <input type="text" id="artist_name" name="artist_name" required>

        <label for="song_name">Muziek Titel:</label>
        <input type="text" id="song_name" name="song_name" required>

        <label for="image_file">Afbeelding Uploaden:</label>
        <input type="file" id="image_file" name="image_file" accept="image/*" required>

        <label for="song_link">YouTube Link:</label>
        <input type="url" id="song_link" name="song_link" placeholder="Bijvoorbeeld: https://www.youtube.com/embed/tXKh6P10vSY" required>

        <button type="submit">Toevoegen</button>
    </form>
</div>
</body>
</html>

