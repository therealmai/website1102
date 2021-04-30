<?php

$host = 'localhost';
$dbname = 'tutorial_php';
$username = 'root';
$password = '';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
$sql = 'SELECT * FROM residents';

    $query = $pdo->query($sql);

?>