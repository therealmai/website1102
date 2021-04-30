<?php


$mysqli = new mysqli("$host","$username","$password","1202_website");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>