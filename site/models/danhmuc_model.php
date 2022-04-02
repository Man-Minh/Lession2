<?php
include_once 'connection.php';

abstract class DanhMuc{
    protected $ma_danh_muc;
    protected $ten_danh_muc;

    function __construct($ma_danh_muc, $ten_danh_muc)
    {
        $this->ma_danh_muc = $ma_danh_muc;
        $this->ten_danh_muc = $ten_danh_muc;
    }

    abstract public function getAllDanhMuc();
} 
?>