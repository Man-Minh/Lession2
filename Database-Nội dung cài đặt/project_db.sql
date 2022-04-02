
CREATE DATABASE db_project01;

CREATE TABLE sanpham
(
    ma_san_pham INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    ten_san_pham varchar(200),
    ma_danh_muc INT(5),
    hinh_anh varchar(200)
 );
 
 CREATE TABLE danhmuc
 (
     ma_danh_muc INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
     ten_danh_muc varchar(200)
 );
 
 ALTER TABLE sanpham ADD FOREIGN KEY(ma_danh_muc) REFERENCES danhmuc(ma_danh_muc);
 