create database TNTstore;
use TNTstore;

create table Thuong_Hieu (
	ma_TH char(8) primary key,
    ten_TH varchar(200)
);

create table San_Pham (
	ma_sp char(8) primary key,
    ten_sp varchar(200),
    noi_dung varchar(300),
    gia int(14),
    soluong int(2),
	ma_TH char(8) references Thuong_Hieu(ma_TH),
    anh varchar(200)
);

create table Khach_Hang(
	MSKH char(8) primary key,
	HoTenKH varchar(50),
	TenCongTy varchar(50), 
	DiaChi varchar(50) ,
	SoDienThoai char(10), 
	MatKhau varchar(20) 
);

create table Dat_Hang(
	SoDonHang int(11) primary key,
	MSKH char(8),
	MSNV char(3), 
	NgayDH date ,
	NgayGH date
);
create table CT_Dat_Hang(
	SoDonHang int(11) primary key,
	ma_sp char(8) ,
	soluong int(2), 
	gia int(14),
	giamgia float
);

create table Nhan_Vien(
	MSNV char(3) primary key,
    HotenNV varchar(50),
    Chucvu varchar(50),
    Diachi varchar(100),
    Sodienthoai char(10),
    Matkhau varchar(20)
);
INSERT INTO Nhan_Vien VALUES ('001', 'Trương Thị Ngọc Tuyết', 'Quản Lý', 'Đường 3/2, phường Xuân Khánh, quận Ninh Kiều, TP.Cần Thơ', '0167896354', 'tuyettruong');
INSERT INTO Nhan_Vien VALUES ('002', 'Cao Thị Huỳnh Quyên', 'Quản Lý', 'Đường 3/2, phường Xuân Khánh, quận Ninh Kiều, TP.Cần Thơ', '0367873012', 'quyenhuynh');
INSERT INTO Nhan_Vien VALUES ('003', 'Lê Thị Như Ý', 'Thu Ngân', 'Đường 3/2, phường Xuân Khánh, quận Ninh Kiều, TP.Cần Thơ', '0267541789', 'yle1234');
INSERT INTO Nhan_Vien VALUES ('004', 'Trần Quang Vinh', 'Giao Hàng', 'Ấp Chợ, xã Đại An, huyện Trà Cú, tỉnh Trà Vinh', '0374563256', 'vinhvinh');
INSERT INTO Nhan_Vien VALUES ('005', 'Trầm Thành Đạt', 'Giao Hàng', 'Ấp Chợ, xã Tập Sơn, huyện Trà Cú, tỉnh Trà Vinh', '0389034582', 'datdat');

INSERT INTO CT_Dat_Hang VALUES (2, 'AS1', 2, 38000000,0);

INSERT INTO Dat_Hang VALUES ('3', 'KH1', '001', '2022-3-4', '2022-3-6');

INSERT INTO Khach_Hang VALUES ('KH1', 'Huỳnh Nhật Quỳnh', 'Không có', 'Trà Vinh', '0397334476', '12340');
INSERT INTO Khach_Hang VALUES ('KH2', 'Nguyễn Hữu Tường', 'Không có', 'Trà Vinh', '0397314477', '4321');
INSERT INTO Khach_Hang VALUES ('KH3', 'Lý Phong Nghi', 'Không có', 'Trà Vinh', '0397344478', '6789');
INSERT INTO Khach_Hang VALUES ('KH4', 'Trầm Phước Huy', 'Không có', 'Trà Vinh', '0397331479', '98776');
INSERT INTO Khach_Hang VALUES ('KH5', 'Huỳnh Kha Nhật Trân', 'Không có', 'Cần Thơ', '0397534470', '09987');

INSERT INTO Thuong_Hieu VALUES ('AS', 'Asus');
INSERT INTO Thuong_Hieu VALUES ('HP', 'HP');
INSERT INTO Thuong_Hieu VALUES ('DL', 'Dell');
INSERT INTO Thuong_Hieu VALUES ('MB', 'Macbook');
INSERT INTO Thuong_Hieu VALUES ('LN', 'Lenovo');

insert into San_Pham values ('AS1','Asus TUF Gaming FX517ZC (HN077W)','RAM 8GB SSD 512GB M.HÌNH 15.6", Full HD, 144Hz CPU i5, 12450H, 3.3GHz CARD RTX 3050 4GB PIN 4-cell,76Wh',27490000,23,'AS','asus-tuf-gaming-fx517zc-i5-hn077w-190322-114627-600x600.jpg');
insert into San_Pham values ('AS2','Asus VivoBook A415EA i3 (EB1748W)','RAM 8GB SSD 512GB M.HÌNH 14", Full HD CPU i3, 1125G4, 2GHz CARD Intel UHD PIN 3-cell, 42Wh',15490000,10,'AS','asus-vivobook-a415ea-i3-1125g4-8gb-512gb-win11-eb1748w-600x600.jpg');
insert into San_Pham values ('AS3','Asus ZenBook UX425EA i5 (KI839W)','RAM 8GB SSD 512GB M.HÌNH 14", Full HD CPU i5, 1135G7, 2.4GHz CARD Intel Iris Xe PIN 4-cell',21990000,10,'AS','asus-zenbook-ux425ea-i5-1135g7-8gb-512gb-600x600.jpg');
insert into San_Pham values ('AS4','Asus Gaming ROG Flow Z13 GZ301Z i7 12700H (LD110W)','RAM 16GB SSD 512GB M.HÌNH 13.4", Full HD+, 120Hz CPU i7, 12700H, 2.30 GHz CARD RTX 3050 4GB PIN 4-cell, 56Wh',49490000,10,'AS','asus-gaming-rog-flow-z13-gz301z-i7-ld110w-160322-120057-600x600.jpg');
insert into San_Pham values ('AS5','Asus VivoBook Pro OLED M7600QC (L2077W)','RAM 16GB SSD 512GB M.HÌNH 16", 4K CPU Ryzen 5, 5600H, 3.3GHz CARD RTX 3050 4GB PIN 6-cell Li-ion, 96 Wh',32490000,10,'AS','asus-vivobook-pro-16x-oled-m7600qc-r5-l2077w-110322-113431-600x600.jpg');
insert into San_Pham values ('HP1','HP 240 G8 i5 (518V7PA)','RAM 8GB SSD 512GB M.HÌNH 14", Full HD CPU i5, 1135G7, 2.4GHz CARD Intel Iris Xe PIN 3-cell, 41Wh',17990000,10,'HP','hp-240-g8-i5-518v7pa-091221-015139-600x600.jpg');
insert into San_Pham values ('HP2','HP Gaming VICTUS 16 e0170AX R7 (4R0U7PA)','RAM 8GB SSD 512GB M.HÌNH 16.1", Full HD, 144Hz CPU Ryzen 7, 5800H, 3.2GHz CARD RTX 3050Ti 4GB PIN 4-cell, 70Wh',27990000,10,'HP','hp-gaming-victus-16-e0170ax-r7-4r0u7pa-600x600.jpg');
insert into San_Pham values ('HP3','HP EliteBook X360 1040 G8 i7 (3G1H4PA)','RAM 16GB SSD 512GB M.HÌNH 14", Full HD CPU i7, 1165G7, 2.8GHz CARD Intel Iris Xe PIN 4-cell, 78.5Wh',46890000,10,'HP','hp-elitebook-x360-1040-g8-i7-3g1h4pa-18-600x600.jpg');
insert into San_Pham values ('HP4','HP ZBook Firefly 14 G8 i5 (275V5AV)','RAM 16GB SSD 512GB M.HÌNH 14", Full HD CPU i5, 1135G7, 2.4GHz CARD NVIDIA QuadroT500, 4GB PIN 3-cell, 53Wh',39690000,10,'HP','hp-zbook-firefly-14-g8-i5-275v5av-141221-042207-600x600.jpg');
insert into San_Pham values ('HP5','HP Envy 13 ba1534TU i7 (4U6M3PA)','RAM 16GB SSD 1TB M.HÌNH 13.3", Full HD CPU i7, 1165G7, 2.8GHz CARD Intel Iris Xe PIN 3-cell, 51Wh',32090000,10,'HP','hp-envy-13-ba1534tu-i7-4u6m3pa-290322-104421-600x600.jpg');
insert into San_Pham values ('DL1','Dell Gaming G15 5511 i7 11800H (P05F006BGR)','RAM 16GB SSD 512GB M.HÌNH 15.6", Full HD, 120Hz CPU i7, 11800H, 2.30 GHz CARD RTX 3050Ti 4GB PIN 3-cell, 56Wh',35490000,10,'DL','dell-gaming-g15-5511-i7-p105f006bgr-140222-091855-600x600.jpg');
insert into San_Pham values ('DL2','Dell XPS 13 9310 i5 1135G7 (70273578)','RAM 8GB SSD 512GB M.HÌNH 13.4", Full HD+ CPU i5, 1135G7, 2.4GHz CARD Intel Iris Xe PIN 4-cell, 52Wh',41990000,10,'DL','dell-xps-13-9310-i5-1135g7-8gb-512gb-cap-office-600x600.jpg');
insert into San_Pham values ('DL3','Dell Gaming G15 5511 i5 11400H (70266676)','RAM 8GB SSD 256GB M.HÌNH 15.6", Full HD, 120Hz CPU i5, 11400H, 2.7GHz CARD RTX 3050 4GB PIN 3-cell, 56Wh',27490000,10,'DL','dell-gaming-g15-5511-i5-70266676-290322-110237-600x600.jpg');
insert into San_Pham values ('DL4','Dell Gaming Alienware m15 R6 i7 11800H (P109F001DBL)','RAM 32GB SSD 1TB M.HÌNH 15.6", Full HD, 165Hz CPU i7, 11800H, 2.30 GHz CARD RTX 3060 6GB PIN 6-cell Li-ion, 86 Wh',61490000,10,'DL','dell-gaming-alienware-m15-r6-i7-p109f001dbl-020322-112012-600x600.jpg');
insert into San_Pham values ('DL5','Dell Gaming Alienware m15 R6 i7 11800H (70272633)','RAM 32GB SSD 1TB M.HÌNH 15.6", 2K, 240Hz CPU i7, 11800H, 2.30 GHz CARD RTX 3070 8GB PIN 6-cell Li-ion, 86 Wh',66490000,10,'DL','dell-gaming-alienware-m15-r6-i7-11800h-32gb-1tb-ssd-8gb-600x600.jpg');
insert into San_Pham values ('MB1','MacBook Air M1 2020 ','RAM 16GB SSD 256GB M.HÌNH 13.3", Retina CPU Apple M1 CARD 7 nhân GPU PIN Khoảng 10 tiếng',29890000,10,'MB','macbook-air-m1-2020-gray-600x600.jpg');
insert into San_Pham values ('MB2','MacBook Pro M1 2020','RAM 16GB SSD 256GB M.HÌNH 13.3", Retina CPU Apple M1 CARD 8 nhân GPU PIN Khoảng 10 tiếng',37500000,10,'MB','macbook-pro-m1-2020-gray-600x600.jpg');
insert into San_Pham values ('MB3','MacBook Pro 14 M1 Pro 2021','RAM 16GB SSD 512GB M.HÌNH 14.2 inch, 120Hz CPU Apple M1 Pro, 200GB/s memory bandwidth CARD 14 nhân GPU PIN Khoảng 10 tiếng',51490000,10,'MB','apple-macbook-pro-14-m1-pro-2021-600x600.jpg');
insert into San_Pham values ('MB4','Macbook Pro M1 2020','RAM 8GB SSD 256GB M.HÌNH 13.3", Retina CPU Apple M1 CARD 8 nhân GPU PIN Khoảng 10 tiếng',31290000,10,'MB','macbook-pro-m1-2020-gray-600x600 (1).jpg');
insert into San_Pham values ('MB5','MacBook Air M1 2020','RAM 8GB SSD 256GB M.HÌNH 13.3", Retina CPU Apple M1 CARD 7 nhân GPU PIN Khoảng 10 tiếng',24450000,10,'MB','macbook-air-m1-2020-gray-600x600 (1).jpg');
insert into San_Pham values ('LN1','Lenovo Ideapad 3 15ITL6 i5 (82H801P9VN)','RAM 8GB SSD 512GB M.HÌNH 15.6", Full HD CPU i5, 1135G7, 2.4GHz CARD Intel Iris Xe PIN 38 Wh',16490000,10,'LN','lenovo-ideapad-3-15itl6-i5-82h801p9vn-thumb-600x600.jpg');
insert into San_Pham values ('LN2','Lenovo Ideapad 5 15ITL05 i5 (82FG01H7VN)','RAM 8GB SSD 512GB M.HÌNH 15.6", Full HD CPU i5, 1135G7, 2.4GHz CARD Intel Iris Xe PIN 45Wh',17990000,10,'LN','lenovo-ideapad-5-15itl05-i5-82fg01h7vn-600x600.jpg');
insert into San_Pham values ('LN3','Lenovo ThinkBook 14p G2 ACH R5 (20YN001HVN)','RAM 16GB SSD 512 M.HÌNH 14", 2K CPU Ryzen 5, 5600H, 3.3GHz CARD Radeon PIN 61Wh',25490000,10,'LN','thinkbook-14p-g2-ach-r5-20yn001hvn-020322-104832-600x600.jpg');
insert into San_Pham values ('LN4','Lenovo Gaming Legion 5 15ITH6 i7 11800H (82JK00FNVN)','RAM 16GB SSD 512GB M.HÌNH 15.6", Full HD, 165Hz CPU i7, 11800H, 2.30 GHz CARD RTX 3050Ti 4GB PIN 60Wh',38990000,10,'LN','lenovo-gaming-legion-5-15ith6-i7-82jk00fnvn-180322-100552-600x600.jpg');
insert into San_Pham values ('LN5','Lenovo Yoga 9 14ITL5 i7 (82BG006EVN)','RAM 16GB SSD 1TB M.HÌNH 14", 4K CPU i7, 1185G7, 3GHz CARD Intel Iris Xe PIN 60 Wh',46990000,10,'LN','lenovo-yoga-9-14itl5-i7-82bg006evn-21-600x600.jpg');

delete from San_Pham where ma_sp = 'HP4';
delete from San_Pham where ma_sp = 'HP3=4';

ALTER TABLE ct_dat_hang
ADD CONSTRAINT ma_sp
  FOREIGN KEY (ma_sp)
  REFERENCES san_pham (ma_sp);

