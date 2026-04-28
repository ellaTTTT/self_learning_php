<?php
$pdo = new PDO('mysql:host=localhost:3377;dbname=note_app', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION  //display if there might any error 3=>2
]);
// var_dump(PDO::ATTR_ERRMODE); //3
// var_dump(PDO::ERRMODE_EXCEPTION); //2
var_dump($pdo);