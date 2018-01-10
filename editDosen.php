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
    
	<h2>Edit Data Mahasiswa</h2>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM dosen WHERE Id_Dosen='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-prosesDosen.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Id Dosen</td>
				<td>:</td>
				<td><input type="text" name="Id_Dosen" size="50" value="<?php echo $data['Id_Dosen']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Nama Dosen</td>
				<td>:</td>
				<td><input type="text" name="Nama_Dosen" size="50" value="<?php echo $data['Nama_Dosen']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="Alamat" size="50" value="<?php echo $data['Alamat']; ?>" required></td>
			</tr>
            <tr>
				<td>No_Telp</td>
				<td>:</td>
				<td><input type="text" name="No_Telp" size="50" value="<?php echo $data['No_Telp']; ?>" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
    </div>
</body>
<footer>
    <br>
    <br>
<?php
echo "<p>Copyright &copy; 2014-" . date("Y") . " Elton Sostenes</p>";
?>
</footer>
</html>