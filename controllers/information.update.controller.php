<?php
session_start();
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$password = trim($_POST['password']);
$id = $_GET['id'];


$invalid = 1;
if(empty($name)){
    $_SESSION['message'] = "Bạn đang để trống tên";
    $invalid = 0;
}
if(empty($email)){
    $_SESSION['message'] = "Bạn đang để trống email";
    $invalid = 0;
}
if(empty($phone)){
    $_SESSION['message'] = "Bạn đang để trống số điện thoại";
    $invalid = 0;
}
if(empty($password)){
    $_SESSION['message'] = "Bạn đang để trống mật khẩu";
    $invalid = 0;
}

if($invalid == 1){
    require '../models/Database.php';
    $db = new Database();
    $todo = $db->query("UPDATE `users` SET name='$name', phone='$phone', email='$email', password='$password' WHERE id = $id")->fetch(PDO::FETCH_ASSOC);
    $_SESSION['name'] = $name;
    header('Location: /ToDoApp/views/information.view.php'); 
    exit(); 
} 
else {
    header("Location: /ToDoApp/views/information.update.view.php?id=$id");
    exit();
}