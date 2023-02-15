<!DOCTYPE html>
<html>
    <head>
        <title>Date</title>
</head>
<body>
    <center>
        <header>
            <h3> DATA PEMINJAM </h3>
</header>
<table border="1">
    <tr>

    <td>Nama peminjam</td>
    <td>Alamat</td>
    <td>Umur</td>
    <td>Keperluan</td>
    <td>Jaminan</td>
    <td>No.Rangka</td>
    <td>Merek</td>
    <td>Jenis montor</td>
    <td>Tahun montor</td>
    <td>Tanggal pinjam</td>
    <td>Tanggal kembali</td>
    <td>Aksi</td>
</tr>

    <?php
    include("koneksi.php");
    $query = mysqli_query($koneksi, "SELECT * FROM tb_peminjaman INNER JOIN
    tb_montor ON tb_peminjaman.id_montor = tb_montor.id_montor");

    while($data=mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$data['nama_peminjaman']."</td>";
        echo "<td>".$data['alamat']."</td>";
        echo "<td>".$data['umur']."</td>";
        echo "<td>".$data['keperluan']."</td>";
        echo "<td>".$data['jaminan']."</td>";
        echo "<td>".$data['nomer_rangka']."</td>";
        echo "<td>".$data['merek']."</td>";
        echo "<td>".$data['jenis_montor']."</td>";
        echo "<td>".$data['tahun_montor']."</td>";
        echo "<td>".$data['tanggal_pinjam']."</td>";
        echo "<td>".$data['tanggal_kembali']."</td>";
        echo "<td>";
        echo "<a href='edit.php?id=".$data['id_peminjaman']."'>Edit</a> |";
        echo "<a href='hapus.php?id=".$data['id_peminjaman']."'>Hapus</a>";
        echo "</td>";

        echo "</tr>";
    }
    ?>
    <a href="tambah.php"><input type="button" value="Tambah">
</table>
</center>
</body>
</html>
