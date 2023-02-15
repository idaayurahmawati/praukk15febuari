<?php
include("koneksi.php");

if(isset($_GET['id'])){
    header("Location:tampil.php");
}

$id = $_GET['id'];
$sql =("SELECT * FROM tb_peminjaman INNER JOIN tb_motor ON
tb_peminjaman.id_motor = tb_motor.id_motor
where tb_peminjaman.id='$id'");

$query=mysqli_query($koneksi, $sql);
$row=mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
    die ("data tidak ditemukan");
}

?>
<html>
<head>
</head>
<body>
    <h1>EDIT</h1>
    <form action="prosesedit.php" method="POST">
    <form>
        <fieldset>
            <input typ="hidden" name="id" value="<?php echo $row['id']?>"/>
            <p>
            <label for="nama_peminjaman">Nama Peminjam : </label>
            <input type="text" name="nama_peminjaman"/>
</p>

<p>
    <label for="alamat">Alamat : </label>
    <textarea name="alamat" rows="5"></textarea>
</p>
<p>
    <label for="umur">Umur : </label>
    <input type="number" name="umur"/>
</p>
<p>
    <label for="keperluan">Keperluan : </label>
    <input type="text" name="keperluan"/>
</p>
<p>
    <label for="jaminan">Jaminan : </label>
    <input type="text" name="jaminan"/>
</p>
<p>
    <label for="nomer_rangka">Nomer Rangka : </label>
    <input type="number" name="nomer_rangka"/>
</p>
<p>
    <label for="merek">Merek : </label>
    <input type="text" name="merek"/>
</p>
<p>
    <label for="jenis_montor">Jenis Montor : </label>
    <input type="text" name="jenis_montor"/>
</p>
<p>
    <label for="tahun_montor">Tahun Montor : </label>
    <input type="year" name="tahun_montor"/>
</p>
<p>
    <label for="tanggal_pinjam">Tanggal pinjam : </label>
    <input type="date" name="tanggal_pinjam"/>
</p>
<p>
    <label for="tanggal_kembali"> Tanggal Kembali : </label>
    <input type="date" name="tanggal_kembali"/>
</p>
<p>
    <input type="submit" value="simpan" name="simpan"/>
</p>

</fieldset>
</form>
</body>
</html>