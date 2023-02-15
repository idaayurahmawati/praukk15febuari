<?php
include ("koneksi.php");
if (isset($_POST['tambah'])){
    $nama_peminjam=$_POST['nama_peminjam'];
    $alamat=$_POST['alamat'];
    $umur=$_POST['umur'];
    $keperluan=$_POST['keperluan'];
    $jaminan=$_POST['jaminan'];
    $nomer_rangka=$_POST['nomer_rangka'];
    $merek=$_POST['merek'];
    $jenis_montor=$_POST['jenis_montor'];
    $tahun_montor=$_POST['tahun_montor'];
    $tanggal_pinjaman=$_POST['tanggal_pinjaman'];
    $tanggal_kembali=$_POST['tanggal_kembali'];


$sql = "INSERT INTO tb_montor (nomer_rangka,merek,jenis_montor,tahun_montor,tanggal_pinjam,tanggal_kembali)
VALUES ('$nomer_rangka','$merek','$jenis_montor','$tahun_montor','$tanggal_pinjaman','$tanggal_kembali')";
$query = mysqli_query($koneksi, $sql);

$sql="SELECT max(id_montor)AS montor FROM tb_montor LIMIT 1";
$query = mysqli_query($koneksi,$sql);

$data=mysqli_fetch_array($query);
$montor=$data['montor'];

$sql="INSERT INTO tb_peminjaman(nama_peminjaman, alamat, umur,keperluan, jaminan, id_montor)
VALUES ('$nama_peminjam','$alamat','$umur','$keperluan','$jaminan','$montor')";
$query = mysqli_query($koneksi,$sql);

if($query){
    header('location:tampil.php?status=sukses');
}else{
    header('location:tampil.php?status');
}
}
?>