<?php

$id = $_GET['id'];
require '../models/Database.php';
$db = new Database();
$todo = $db->query("SELECT * FROM `notes` WHERE id = $id")->fetch(PDO::FETCH_ASSOC); //fetchAll cho nhieu ban ghi
?>
<div>
    <?= $todo['body']; ?></br>
    <div class="mt-5">
        <a href="/ToDoApp/views/update.view.php?id=<?= $todo['id'] ?>">CẬP NHẬT VIỆC LÀM</a></br>
    </div>
    <div class="mt-2">
        <a href="/ToDoApp/controllers/delete.controller.php?id=<?= $todo['id'] ?>" onclick="return  confirm('Bạn chắc chắn muốn xóa không ?')" class="text-danger">XÓA VIỆC LÀM</a>
    </div>
</div>