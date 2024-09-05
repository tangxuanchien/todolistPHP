<?php
$id = $_GET['id'];
require '../models/Database.php';
$db = new Database();
$todo = $db->query("DELETE FROM `notes` WHERE id = $id")->fetch(PDO::FETCH_ASSOC);

header('Location: /ToDoApp/index.php'); 
exit();
