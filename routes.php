<?php
var_dump($controller);
var_dump($action);

$controllers = array(
    'sanpham_controller' => ['sanpham', 'error']
);  // Các controllers trong hệ thống và các action có thể gọi ra từ controller đó.

// Nếu các tham số nhận được từ URL không hợp lệ (không thuộc list controller và action có thể gọi
// thì trang báo lỗi sẽ được gọi ra.
if(!array_key_exists($controller,$controllers ) || !in_array($action, $controllers[$controller])) {
    $controller = 'sanpham_controller';
    $action = 'error';
    var_dump($action);
}
// Nhúng file định nghĩa controller vào để có thể dùng được class định nghĩa trong file đó
include_once('site/controllers/'.$controller.'.php');
// Tạo ra tên controller class từ các giá trị lấy được từ URL sau đó gọi ra để hiển thị trả về cho người dùng.

$className = str_replace('_', '', ucwords($controller, '_'));


$controller = new $className;
$controller->$action();
?>  