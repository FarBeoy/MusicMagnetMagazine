<?php
$dbname = '../magnet.sqlite';

try {
    $conn = new PDO("sqlite:$dbname");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

$room = $_GET['room'];

$sql = "SELECT * FROM messages WHERE room = :room ORDER BY id ASC";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':room', $room);
$stmt->execute();

$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($messages);
