<?php
function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function check_login($name){
    if(!isset($name)){
        return 'Đăng nhập';
    } else return 'Chào, '.$name;
}