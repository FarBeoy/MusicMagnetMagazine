<?php
$dbname = '../magnet.sqlite';

try {
    $conn = new PDO("sqlite:$dbname");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

$room = $_POST['room'];
$username = $_POST['username'];
$message = $_POST['message'];

$sql = "CREATE TABLE IF NOT EXISTS messages (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    room TEXT NOT NULL,
    username TEXT NOT NULL,
    message TEXT NOT NULL,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
)";
$conn->exec($sql);

$sql = "INSERT INTO messages (room, username, message) VALUES (:room, :username, :message)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':room', $room);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':message', $message);
$stmt->execute();

echo "Message saved.";
