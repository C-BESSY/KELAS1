drop database pweb_2022_kelas_1;
create database pweb_2022_kelas_1;
use pweb_2022_kelas_1;

create table mahasiswa(
    nim int not null primary key auto_increment,
    nama varchar(100) not null,
    tgl_lahir date not null,
    alamat text not null,
    jenis_kelamin enum('L','P') default 'L'
);

insert into mahasiswa values
('2142101545','Adi','2003-01-01','Jogja','L'),
('2142101546','Ida','2003-02-02','Jogja','P'),
('2142101547','Edi','2003-03-03','Jogja','L'),
('2142101548','Susi','2003-04-04','Jogja','P'),
('2142101549','Joko','2003-05-05','Jogja','L');

insert into mahasiswa values
('2142101555','Adi','2003-12-30','Jogja','L');

create table motor(
    id int not null primary key auto_increment,
    plat_no varchar(10) not null,
    merek varchar(100),
    tipe varchar(100),
    mahasiswa_nim varchar(10) not null,
    foreign key(mahasiswa_nim) references mahasiswa(nim),
    unique(plat_no)
);

insert into motor values
(null, "AB 1","Honda","Vario",'2142101545');

alter table motor add 
gambar varchar(100) default null;
