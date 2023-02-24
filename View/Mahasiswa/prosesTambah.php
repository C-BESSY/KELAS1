<?php
include_once __DIR__ . '/../../Model/Mahasiswa.php';

$nim = $_REQUEST['nim'];
$nama = $_REQUEST['nama'];
$alamat = $_REQUEST['alamat'];
$tanggalLahir = $_REQUEST['tanggalLahir'];
$jenisKelamin = $_REQUEST['jenisKelamin'];

#1. Buat objek dari mahasiswa
$mhs = new Mahasiswa();

#2. set semua fieldnya
$mhs->nim = $nim;
$mhs->nama = $nama;
$mhs->alamat = $alamat;
$mhs->tanggalLahir = $tanggalLahir;
$mhs->jenisKelamin = $jenisKelamin;

#3. Panggil fungsi insert
$mhs->insert();

header('Location: /../../index.php?page=list-mhs');
die();