<html>
    <head>
</head>
<body>
    <h3>Daftar Montor</h3>
    <form action="prosestambah.php" method="POST">
       <fieldset>
          <p>
            <label for="nama_peminjam">Nama Peminjam : </label>
            <input type="text" name="nama_peminjam"/>
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
    <label for="tanggal_pinjaman">Tanggal pinjaman : </label>
    <input type="date" name="tanggal_pinjaman"/>
</p>
<p>
    <label for="tanggal_kembali"> Tanggal Kembali : </label>
    <input type="date" name="tanggal_kembali"/>
</p>
<p>
    <input type="submit" value="kirim" name="tambah"/>
</p>

</fieldset>
</form>
</body>
</html>