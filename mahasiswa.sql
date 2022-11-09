create database fakultas;


create table jurusan (
    id int primary key auto_increment,
    kode char(4) not null,
    nama varchar(50) not null
);

create table mahasiswa (
    id int primary key auto_increment,
    id_jurusan int not null,
    nim char(8) not null,
    nama varchar(50) not null,
    jk enum('laki-laki','perempuan') not null,
    tempat_lahir varchar(50) not null,
    tgl_lahir date not null,
    alamat varchar(255) not null,
    foreign key (id_jurusan) references jurusan(id)
);

-- insert jurusan
insert into jurusan (kode,nama) values ("TI","Teknik Informatika");

-- insert mahasiswa
insert into mahasiswa (id_jurusan, nim, nama, jk, tempat_lahir, tgl_lahir, alamat) values (1, "12345678", "Key", "perempuan", "Bwi", "2002-05-11", "Jl. Melati");

-- update mahasiswa
update mahasiswa set alamat = "Jl. Melati 17" where id=1;

-- delete mahasiswa
delete from mahasiswa where id=2;
