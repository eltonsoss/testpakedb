<!DOCTYPE html>
<html>
<head>
	<title>PRAKTIKUM</title>
    <link href="style.css" rel="stylesheet" type="text/css">
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
	<h1>Tambah Data Mata Kuliah</h1>
	
    
	<form action="PTMatkul.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Kode_Matkul</td>
				<td>:</td>
				<td><input type="text" name="Kode_Matkul" size="50" required></td>
			</tr>
			<tr>
				<td>Nama_Matkul</td>
				<td>:</td>
				<td><input type="text" name="Nama_Matkul" size="50" required></td>
			</tr>
            <tr>
				<td>SKS</td>
				<td>:</td>
				<td><input type="text" name="SKS" size="50" required></td>
			</tr>
            <tr>
				<td>Dosen</td>
				<td>:</td>
				<td><input type="text" name="Dosen" size="50" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
    </div>
<footer>
    <br>
    <br>
<?php
echo "<p>Copyright &copy; 2014-" . date("Y") . " Elton Sostenes</p>";
?>
</footer>
</body>
</html>