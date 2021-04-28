<?php

$host = 'localhost';
$dbname = 'tutorial_php';
$username = 'root';
$password = '';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $sql = 'SELECT * FROM residents';

    $query = $pdo->query($sql);

} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>