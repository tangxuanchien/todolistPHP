<?php
    session_start();
    require '../models/Database.php';
    $body = trim($_POST['body']);
    $id = $_SESSION['id'];
    require '../function.php';
    
    if(empty($body)){
        $_SESSION['textbody'] = 'Bạn đang để trống, vui lòng nhập nội dung';
        header('Location: /ToDoApp/views/create.view.php');
    }
    else {
        $db = new Database();
        $todo = $db->query("INSERT INTO `notes` (`id`, `body`, `userid`) VALUES (:id, :body, :userid)",
        [
            'id' => NULL,
            'body' => $body,
            'userid' => $id
        ])->fetch(PDO::FETCH_ASSOC);
    
        $_SESSION['textbody'] = '';
        header('Location: /ToDoApp/index.php'); 
        exit();
    }




