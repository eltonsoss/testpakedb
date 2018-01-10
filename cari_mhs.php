<!DOCTYPE html>
<html>
<head>
	<title>Prak 3 PI2</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body bgcolor="pink">
    <div id="head">
	<h1 style="padding:0px;margin:0px;">WELCOME</h1>
        <p>Selamat datang gan !!!</p>
        <p style="color:white"></p>
    </div>
    
    <div id="content">
        <a href="Home.php">Beranda</a>
        <a href="Mahasiswa.php">Mahasiswa</a>
        <a href="Dosen.php">Dosen</a>
        <a href="Matakuliah.php">Mata Kuliah</a>
        <a href="logout.php" style ="float:right">Logout</a>
        
	</div>
     <div id="content1">
	<h2>Data Mahasiswa</h2>
	<a href="tambahMhs.php">Tambah Data</a> / 
	<a href="cari_mhs.php">Cari Data</a></p>
	<p>
	<h1>Cari Data Mahasiswa</h1>
	
	<form action="cari-proses_mhs.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" size="50"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="50"></td>
			</tr>
            <tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="text" name="tgl_lahir" size="50"></td>
			</tr>
            <tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" size="50"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="cari" value="Cari"></td>
			</tr>
		</table>
	</form>
    </div>
</body>
</html>