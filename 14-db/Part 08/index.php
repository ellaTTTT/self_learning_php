<?php
function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
$pdo = new PDO('mysql:host=127.0.0.1:3377;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

/*
$id = (int)$_GET['id'];
$query = "SELECT * FROM `notes` WHERE `id` = {$id}"; //may cause SQL injection if acidiently add another $id = $_GET['id']
var_dump($query);

$stmt = $pdo->prepare($query);
$stmt->execute();
$note = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($note);
*/

$stmt = $pdo->prepare('SELECT * FROM `notes` WHERE `id` = :id');
$stmt->bindValue('id', (int) $_GET['id']); //bind id with $_GET['id'] value to avoid SQL injection
$stmt->execute();
$note = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($note);