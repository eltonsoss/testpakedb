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
	<h2>Data Mata Kuliah</h2>
	<a href="tambahMatkul.php">Tambah Data</a></p>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>Kode Matkul</th>
            <th>Nama Matkul</th>
			<th>SKS</th>
			<th>Aksi</th>
		</tr>
		
		<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT * FROM matakuliah ORDER BY Kode_Matkul ASC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
		}else{	//else ini artinya jika data hasil query ada (data di database tidak kosong)
			$no = 0;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.($no+1).'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['Kode_Matkul'].'</td>';	//menampilkan data nis dari database
					echo '<td>'.$data['Nama_Matkul'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['SKS'].'</td>';	//menampilkan data jurusan dari database
					echo '<td><a href="editMatkul.php?id='.$data['Kode_Matkul'].'">Edit</a> / <a href="hapusMatkul.php?id='.$data['Kode_Matkul'].'" onclick="return confirm(\'Apakah Anda Yakin ?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
				$no++;	//menambah jumlah nomor urut setiap row
			}
		}
		?>
	</table>
    <p></p>
    <? echo 'Jumlah : '.$no.' mahasiswa'; ?>
    </div>
<footer>
    <br>
    <br>
<?php
echo "<p>Copyright &copy; 2014-" . date("Y") . " Elton Sostenes</p>";
?>
</body>
</html>