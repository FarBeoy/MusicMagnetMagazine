<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="../css/chat.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="../js/chat.js" defer="defer"></script>
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
        <li><a href="../../pages/view/music_view.php">Music</a></li>
        <li><a href="about.php">About</a></li>
        <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            echo '<li><a href="logout.php">Logout</a></li>';
            echo '<li><a href="chat.php">Chat</a></li>';
        } else {
            echo '<li><a href="../../pages/view/login.php">Login</a></li>';
        }
        ?>
    </ul>
</nav>

<div id="room-selection">
    <h1>Select a Chat Room</h1>
    <div id="centered-chat-button">
        <button onclick="selectRoom('Room 1')">Room 1</button>
        <button onclick="selectRoom('Room 2')">Room 2</button>
        <button onclick="selectRoom('Room 3')">Room 3</button>
    </div>
</div>

<div id="chat-container" style="display: none;">
    <h2 id="room-name"></h2>
    <input type="text" id="username" placeholder="Enter your name">
    <button id="join-chat">Join Chat</button>
    <div id="chat-box" style="display: none;">
        <div id="messages"></div>
        <input type="text" id="message-input" placeholder="Type a message">
        <button id="send-message">Send</button>
    </div>
</div>


</body>
</html>
