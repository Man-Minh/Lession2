<?php 
require_once('site/models/danhmuc_model.php');

class SanPham extends DanhMuc{
    public $ma_san_pham;
    public $ten_san_pham;
    public $ma_danh_muc;
    public $hinh_anh;
    public $ten_danh_muc;

    function __construct($ma_san_pham = null, $ten_san_pham = null, $ma_danh_muc = null, $hinh_anh= null, $ten_danh_muc=null)
    {
        $this->ma_san_pham = $ma_san_pham;
        $this->ten_san_pham = $ten_san_pham;
        $this->ma_danh_muc = $ma_danh_muc;
        $this->hinh_anh = $hinh_anh;
        $this->ten_danh_muc = $ten_danh_muc;
    }

    public  function getAllDanhMuc()
    {
        $results = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM danhmuc');

        foreach ($req->fetchAll() as $item) {
            $results[] = new DanhMuc($item['ma_danh_muc'], $item['ten_danh_muc']);
          }      

        return $results;
    }

    public static function getAllSanPham()
    {
        $results = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM sanpham INNER JOIN danhmuc ON sanpham.ma_danh_muc = danhmuc.ma_danh_muc');
    
        foreach ($req->fetchAll() as $item) {      
            $results[] = new SanPham($item['ma_san_pham'], $item['ten_san_pham'], $item['ma_danh_muc'], $item['hinh_anh'], $item['ten_danh_muc']); 
          }      

        return $results;
    }
}
?>