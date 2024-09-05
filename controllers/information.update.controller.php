<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$id = $_GET['id'];
require '../models/Database.php';
$db = new Database();
$todo = $db->query("UPDATE `users` SET name='$name', phone='$phone', email='$email', password='$password' WHERE id = $id")->fetch(PDO::FETCH_ASSOC);

session_start();
$_SESSION['name'] = $name;
header('Location: /ToDoApp/views/information.view.php'); 
exit();