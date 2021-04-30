<?php

$host = 'localhost';
$dbname = '1202_website';
$username = 'root';
$password = '';

// try{
    $mysqli = new mysqli($host,$username,$password,$dbname);
    // $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
// } catch (PDOException $e) {
//     die("Could not connect to the database $dbname :" . $e->getMessage());
// }
// $sql = 'SELECT * FROM residents';

//     $query = $pdo->query($sql);

?>