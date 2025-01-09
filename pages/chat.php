<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
</head>
<body>

<ul>
    <li><a href="../home.html">Home</a></li>
    <li><a href="videos.html">Videos</a></li>
    <li><a href="music.php">Music</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="chat.php">Friends</a></li>
</ul>
<h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
<p>You are now logged in.</p>
<a href="logout.php">Logout</a>
</body>
</html>
