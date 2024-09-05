<?php
session_start();
require "../function.php";
$phone = $_POST['phone'];
$password = $_POST['password'];
require '../models/Database.php';
$db = new Database();
$todos = $db->query("SELECT * FROM `users`")->fetchAll(PDO::FETCH_ASSOC);
$text = 'Bạn đã nhập sai tài khoản hoặc mật khẩu';

foreach ($todos as $todo) :
    if ($todo['phone'] == $phone && $todo['password'] == $password) :
        $_SESSION['id'] = $todo['id'];
        $_SESSION['name'] = $todo['name'];
        $_SESSION['error'] = "";
        header('Location: /ToDoApp/index.php');
        exit();
    else: ($todo['phone'] != $phone || $todo['password'] != $password);
        $_SESSION['error'] = "Sai tài khoản hoặc mật khẩu !";
    endif;
endforeach;
header('Location: /ToDoApp/views/login.view.php');
