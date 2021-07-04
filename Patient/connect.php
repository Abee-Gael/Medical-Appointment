<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
if (!empty($password)){
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "student";

$db = new PDO ('mysql:host=$servername;dbname= $dbname, 'charset=utf8,' $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>