<?php
// phpinfo();
function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

// avoid fetal error to show password of db in older PHP version(<=8.1)
try {
    $pdo = new PDO('mysql:host=127.0.0.1:3377;dbname=note_app', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

} catch (PDOException $e) {
    // var_dump($e->getMessage());
    echo 'A problem occured with database connection..';
    die();
}