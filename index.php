<?php
require_once('connection.php');

if(isset($_GET['controller'])) {
    $controller = $_GET['controller'];
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }else {
        $action = 'error';
    }
} else {
    $controller = 'sanpham_controller';
    $action = 'sanpham';
}
require_once('routes.php');
?>