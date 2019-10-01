CREATE TABLE categories(
	categoryCode varchar(15) PRIMARY KEY,
    categoryName varchar(255),
    textDecription varchar(255)
);
CREATE table book(
	book_number varchar(15) PRIMARY KEY,
    book_name varchar(50),
    status varchar(100),
    publisher varchar(255),
    categoryCode varchar(15),
    FOREIGN KEY (categoryCode) REFERENCES categories(categoryCode)
);
CREATE TABLE students(
    studen_number varchar(15) PRIMARY KEY ,
    studen_name varchar(200),
    address varchar (200),
    email varchar(200),
    image mediumblob
);
CREATE TABLE borroworder(
    studen_name varchar(200),
	studen_number varchar(15) PRIMARY KEY,
    date_order  date,
    date_return date,
    book_number varchar(15),
    FOREIGN KEY (book_number) REFERENCES book(book_number),
    FOREIGN KEY (studen_number) REFERENCES students(studen_number)
);
create database CSDL_QUAN_LY_BAN_HANG;
create table KhachHang(
	MaKH int AUTO_INCREMENT PRIMARY KEY,
    HoTenkH varchar(100),
    Diachi varchar(100),
    Dienthoai varchar(55)
);
create table Nhanvien(
	maNV int AUTO_INCREMENT PRIMARY KEY,
    HoNV varchar(50),
    TenNV varchar(50),
    GioiTinh varchar(15),
    NgaySinh date,
    DiaChi text,
    DienThoai varchar(12)
);
CREATE table SanPham(
	MaSP int AUTO_INCREMENT PRIMARY KEY,
    TenSP varchar (50),
    DonViTinh text ,
    DonGia int
);
create table HoaDon(
	MaHD int AUTO_INCREMENT PRIMARY KEY,
    MaKH int ,
    MaNv int ,
    NgayLapHD date,
    NgayNhanHang date,
    FOREIGN KEY (MaKH) REFERENCES KhachHang(MaKH),
    FOREIGN KEY (MaNv) REFERENCES Nhanvien(maNV)
);
create table ChitietHoaDon(
	MaHD int PRIMARY KEY,
    MaSP int ,
    SoLuong int ,
    FOREIGN KEY (MaHD) REFERENCES HoaDon(MaHD),
    FOREIGN KEY (MaSP) REFERENCES SanPham(MaSP)
);