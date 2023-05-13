
<?php

include './conn.php';

$data = json_decode(file_get_contents("php://input"), true);

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

$query = "INSERT INTO `region` (
    `negara`, 
    `provinsi`, 
    `kota`, 
    `kecamatan`, 
    `kelurahan`, 
    `kode_pos`, 
    `nama_jalan`, 
    `rt`, 
    `rw`,
    `kategori`,
    `is_active`
) VALUES (
    '$negara', 
    '$provinsi', 
    '$kota', 
    '$kecamatan', 
    '$kelurahan', 
    '$kode_pos', 
    '$nama_jalan', 
    '$rt', 
    '$rw',
    '$kategori',
    '$is_active'
)";

echo $query;

$exec = mysqli_query($conn, $query);

echo mysqli_error($conn);