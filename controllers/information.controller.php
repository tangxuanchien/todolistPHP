<?php
session_start();
session_destroy();
header('Location: /ToDoApp/index.php'); 