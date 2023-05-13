<?php

include './conn.php';

$data = json_decode(file_get_contents("php://input"), true);

$id = $_GET['id'];
$negara = $data['negara'];
$provinsi = $data['provinsi'];
$kota = $data['kota'];
$kecamatan = $data['kecamatan'];
$kelurahan = $data['kelurahan'];
$kode_pos = $data['kode_pos'];
$nama_jalan = $data['nama_jalan'];
$rt = $data['rt'];
$rw = $data['rw'];
$kategori = $data['kategori'];
$is_active = $data['is_active'];

$query = "UPDATE `region` SET 
    `negara` = '$negara', 
    `provinsi` = '$provinsi', 
    `kota` = '$kota', 
    `kecamatan` = '$kecamatan', 
    `kelurahan` = '$kelurahan', 
    `kode_pos` = '$kode_pos', 
    `nama_jalan` = '$nama_jalan', 
    `rt` = '$rt', 
    `rw` = '$rw',
    `kategori` = '$kategori',
    `is_active` = '$is_active'
WHERE id = $id";

mysqli_query($conn, $query);

echo mysqli_error($conn);