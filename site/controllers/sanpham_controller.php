<?php
// namespace Site\Controller;

require_once('site/controllers/base_controller.php');
require_once('site/models/sanpham_model.php');

class SanPhamController extends BaseController
{
    function __construct()
    {
        $this->folder = 'pages';
    }

    public function sanpham()
    {
        $sanpham = SanPham::getAllSanPham();
        $data = array('sanpham' => $sanpham);
        $this->render('sanpham',$data);
    }

    public function error()
    {
        $this->render('error');
    }

  
}
?>