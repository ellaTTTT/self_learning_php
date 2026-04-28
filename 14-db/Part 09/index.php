<?php
function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$pdo = new PDO('mysql:host=127.0.0.1:3377;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$title = 'A title (from PHP)'; // would cause SQL injection risk
$content = 'The content \'" (from PHP)';

$stmt = $pdo->prepare("INSERT INTO `notes` (`title`, `content`) VALUES (:abc, :content)");
$stmt->bindValue('abc', $title);
$stmt->bindValue('content', $content);
$stmt->execute();