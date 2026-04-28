<?php
$pdo = new PDO('mysql:host=localhost:3377;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION  //display if there might any error 3=>2
]);

$stmt = $pdo->prepare("SELECT * FROM `notes`"); // prepare statement in PHP
$stmt->execute(); // send command to db(i.e. MySQL)
$results = $stmt->fetchAll(); // get results after executing command and store them into $results.
var_dump($results);