<!DOCTYPE html>
<html>
<head>
	<title>Prak 3 PI2</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body style = "background-color: tomato;">
	<h2>Data Mahasiswa</h2>
    <br>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>NIM</th>
            <th>Nama Lengkap</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		
<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_REQUEST['cari'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
    $sql = "SELECT * FROM mahasiswa WHERE ";
    if ($_REQUEST['nim'] <> "" OR $_REQUEST['nim'] <> null) {
        $sql .= " nim LIKE '%".$_REQUEST['nim']."%' ";
    }
    if ($_REQUEST['nama'] <> "" OR $_REQUEST['nama'] <> null) {
        $sql .= " AND nama LIKE '%".$_REQUEST['nama']."%' ";
    }
    if ($_REQUEST['tgl_lahir'] <> "" OR $_REQUEST['tgl_lahir'] <> null) {
        $sql .= " AND tgl_lahir LIKE '%".$_REQUEST['tgl_lahir']."%' ";
    }
    if ($_REQUEST['alamat'] <> "" OR $_REQUEST['alamat'] <> null) {
        $sql .= " AND alamat LIKE '%".$_REQUEST['alamat']."%' ";
    }
    $hasil = mysql_query($sql);
    
    if($hasil){
		echo 'Data berhasil ditemukan! ';	
        echo '<br>';//Pesan jika proses cari sukses
        $no = 0;
        while($data = mysql_fetch_assoc($hasil)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.($no+1).'</td>';
					echo '<td>'.$data['NIM'].'</td>';
					echo '<td>'.$data['Nama'].'</td>';
					echo '<td>'.$data['Alamat'].'</td>';
					echo '<td><a href="hapus_mhs.php?id='.$data['NIM'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
				$no++;	//menambah jumlah nomor urut setiap row
			}
		echo '<p><a href="index_mhs.php">Beranda</a> / <a href="cari_mhs.php">Kembali</a></p>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		echo 'Gagal mencari data! ';		//Pesan jika proses cari gagal
		echo '<p><a href="index_mhs.php">Beranda</a> / <a href="cari_mhs.php">Kembali</a></p>';	//membuat Link untuk kembali ke halaman tambah
	}
    
}else{	//jika tidak terdeteksi tombol tambah di klik
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
}
?>
</table>
    <p></p>
    <? echo 'Jumlah : '.$no.' mahasiswa'; ?>
</body>
</html>