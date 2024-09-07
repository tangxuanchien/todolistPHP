<?php
session_start();

$title = "Thay đổi thông tin";
$banner = "Thay đổi thông tin";
$login = 'Chào, ' . $_SESSION['name'];
if(empty($_SESSION['message'])){
    $_SESSION['message'] = '';
}
// require '../function.php';
// dd($_SESSION);

$id = $_GET['id'];
require '../models/Database.php';
$db = new Database();
$user = $db->query("SELECT * FROM `users` WHERE id = $id")->fetch(PDO::FETCH_ASSOC);

require '../partials/header.php';

require '../partials/navigation.php';

require '../partials/banner.php';

$password = $user['password'];
$confirmpassword = '';
?>
<form action="/ToDoApp/controllers/information.update.controller.php?id=<?= $user['id'] ?>" method="POST">
    <div class="text-danger fw-semibold lh-1 fs-5 mt-3"><?= $_SESSION['message'] ?></div>
    <div class="mb-3">
        <label class="form-label">Họ và tên</label>
        <input type="name" class="form-control" placeholder="Nguyen Van A" name='name' value="<?= $user['name'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="name@gmail.com" name='email' value="<?= $user['email'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Số điện thoại</label>
        <input type="number" class="form-control" placeholder="09xx-xxx-xxx" name='phone' value="<?= $user['phone'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Mật khẩu</label>
        <input type="password" class="form-control" name='password' value="<?= $user['password'] ?>">
    </div>
    <div class="mt-5">
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </div>
</form>
<?php
require '../partials/footer.php';
?>