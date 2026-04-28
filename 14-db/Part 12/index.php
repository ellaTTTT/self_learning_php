<?php
function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

try {
    $pdo = new PDO('mysql:host=127.0.0.1:3377;dbname=note_app;charset=utf8mb4', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

} catch (PDOException $e) {
    // var_dump($e->getMessage());
    echo 'A problem occured with database connection..';
    die();
}

$stmt = $pdo->prepare('INSERT INTO `notes` (`title`, `content`) VALUES (:title, :content)');
$stmt->bindValue('title', '🧑🏾');
$stmt->bindValue('content', '🧑🏾');
$stmt->execute();