-- -- phim
-- id | tên    | ...
-- 1  | connan |
-- 2  | mưa đỏ |
-- -- người dùng
-- id | tên 7   | loai_tk
-- 1  | abc 9   |  diễn viên   
-- 2  | xyz 1   |  Đạo diễn
-- 3  | abc 2   |  diễn viên   
-- 4  | xyz 3   |  admin
-- 5  | abc 4   |  diễn viên   
-- 6  | xyz 6   |  user
-- --phim_dien_vien

-- id | phim_id    | dien_vien_id
-- 1  | 1          | 5
-- 2  | 1          | 1

-- create DATABASE IF not EXISTS quan_ly_web_phim;

-- 1. thể loại
--     - id int primary key
--     - ten_the_loai varchar(50)
-- 2. người dùng
--     - id int
--     - ten_dang_nhap varchar(50)
--     - matKhau varchar(50)
--     - ho_ten varchar(50)
--     - email varchar(50)
--     - sdt varchar(10)
--     - vai_tro_id int 
--     - ngay_sinh datetime
-- 3. vai_tro
--     - id int
--     - ten_vai_tro varchar(20)
-- 4. phim
--     - id int primary key
--     - ten_phim varchar
--     - dao_dien_id int
--     - nam_phat_hanh int
--     - poster varchar
--     - quoc_gia_id int
--     - so_tap int
--     - trailer varchar
--     - mo_ta text
-- 5. phim_dien_vien
--     - id int
--     - phim_id int
--     - dien_vien_id int
-- 6. phim_the_loai
--     - id int
--     - phim_id int
--     - the_loai_id int
-- 7. quốc gia
--     -id int
--     -ten_quoc_gia varchar
-- 5. Tập phim
--     - id int
--     - so_tap int
--     - tieu_de varchar
--     - phim_id int
--     - thoiLuong float 
--     - trailer varchar
CREATE DATABASE IF NOT EXISTS quan_ly_web_phim;
USE quan_ly_web_phim;

CREATE TABLE IF NOT EXISTS the_loai(
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten_the_loai VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS vai_tro(
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten_vai_tro VARCHAR(20)
);

CREATE TABLE IF NOT EXISTS quoc_gia(
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten_quoc_gia VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS nguoi_dung(
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten_dang_nhap VARCHAR(50),
    mat_khau VARCHAR(50),
    ho_ten VARCHAR(50),
    email VARCHAR(50),
    sdt VARCHAR(10),
    vai_tro_id INT,
    ngay_sinh DATETIME
);

CREATE TABLE IF NOT EXISTS phim(
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten_phim VARCHAR(100),
    dao_dien_id INT,
    nam_phat_hanh INT,
    poster VARCHAR(200),
    quoc_gia_id INT,
    so_tap INT,
    trailer VARCHAR(200),
    mo_ta TEXT
);

CREATE TABLE IF NOT EXISTS phim_dien_vien(
    id INT PRIMARY KEY AUTO_INCREMENT,
    phim_id INT,
    dien_vien_id INT
);

CREATE TABLE IF NOT EXISTS phim_the_loai(
    id INT PRIMARY KEY AUTO_INCREMENT,
    phim_id INT,
    the_loai_id INT
);

CREATE TABLE IF NOT EXISTS tap_phim(
    id INT PRIMARY KEY AUTO_INCREMENT,
    so_tap INT,
    tieu_de VARCHAR(100),
    phim_id INT,
    thoi_luong FLOAT,
    trailer VARCHAR(200)
);

INSERT INTO the_loai(ten_the_loai) VALUES
('Hành động'),('Tình cảm'),('Kinh dị'),('Hoạt hình'),('Khoa học viễn tưởng');

INSERT INTO vai_tro(ten_vai_tro) VALUES
('Quản trị viên'),('Người dùng'),('Đạo diễn'),('Diễn viên'),('Biên kịch');

INSERT INTO quoc_gia(ten_quoc_gia) VALUES
('Việt Nam'),('Hàn Quốc'),('Mỹ'),('Nhật Bản'),('Trung Quốc');

INSERT INTO nguoi_dung(ten_dang_nhap, mat_khau, ho_ten, email, sdt, vai_tro_id, ngay_sinh) VALUES
('admin','26072004','Quản trị viên','admin@mail.com','0972372313',1,'26-07-2004'),
('caubeiudui','123456','Nguyễn Văn A','caubeiudui@mail.com','0327374983',2,'2011-05-05'),
('bachduongfomaique','123456','Trần Thị B','bachduongfomaique@mail.com','02378236728',2,'1999-12-12'),
('director1','123456','Đạo diễn Park','park@mail.com','0232120321',3,'1980-04-04'),
('actor1','123456','Hyun Bin','hb@mail.com','0951281793',4,'1982-09-25'),
('actor2','123456','Son Ye Jin','syj@mail.com','0993710021',4,'1982-01-11'),
('actor3','123456','Chris Evans','ce@mail.com','0983928923',4,'1981-06-13');

INSERT INTO phim(ten_phim, dao_dien_id, nam_phat_hanh, poster, quoc_gia_id, so_tap, trailer, mo_ta) VALUES
('Hạ Cánh Nơi Anh', 4, 2019, 'crashlanding.jpg', 2, 16, 'trailer1.mp4', 'Phim tình cảm Hàn Quốc nổi tiếng.'),
('Avengers: Endgame', 4, 2019, 'endgame.jpg', 3, 1, 'trailer2.mp4', 'Bom tấn siêu anh hùng.'),
('Your Name', 4, 2016, 'yourname.jpg', 4, 1, 'trailer3.mp4', 'Phim anime Nhật Bản nổi tiếng.');

INSERT INTO phim_dien_vien(phim_id, dien_vien_id) VALUES
(1, 5),(1, 6),(2, 7);

INSERT INTO phim_the_loai(phim_id, the_loai_id) VALUES
(1, 2),(2, 1),(2, 5),(3, 4);

INSERT INTO tap_phim(so_tap, tieu_de, phim_id, thoi_luong, trailer) VALUES
(123'Conan-Thám tử lừng danh',1,55,'conanmovie.mp4'),
(16,'sợi dây chuyền định mệnh',1,55,'soidaychuyendinhmenh.mp4'),
(13,'Doraemon',2,180,'doraemon.mp4'),
(1,'Hôn Lễ của em',3,110,'chuongnhuocnam.mp4');

