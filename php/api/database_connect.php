<?php

const HOST = 'localhost';
define('DB_NAME', '1202_website');
define('USERNAME', 'root');
const PASSWORD ='';


// try{
    $mysqli = new mysqli(HOST,USERNAME,PASSWORD,DB_NAME);
    // $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    // var_dump($mysqli);
// } catch (PDOException $e) {
//     die("Could not connect to the database $dbname :" . $e->getMessage());
// }
// $sql = 'SELECT * FROM residents';

//     $query = $pdo->query($sql);

?>