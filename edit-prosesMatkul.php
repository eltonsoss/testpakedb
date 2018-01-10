<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id			= $_POST['Kode_Matkul'];	//membuat variabel $id dan datanya dari inputan hidden id
	$Kode_Matkul		= $_POST['Kode_Matkul'];	//membuat variabel $nis dan datanya dari inputan NIS
	$Nama_Matkul		= $_POST['Nama_Matkul'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$SKS    	= $_POST['SKS'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
    $Dosen   = $_POST['Dosen'];
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE matakuliah SET Kode_Matkul='$Kode_Matkul', Nama_Matkul='$Nama_Matkul', SKS='$SKS', Dosen='$Dosen' WHERE Kode_Matkul='$id'") or die(mysql_error());
	
	//jika query update sukses
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<p><a href="Home.php">Beranda</a> / <a href="Matakuliah.php?id='.$id.'">Kembali</a></p>';	//membuat Link untuk kembali ke halaman edit
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<p><a href="Home.php">Beranda</a> / <a href="editMatkul.php?id='.$id.'">Kembali</a></p>';	//membuat Link untuk kembali ke halaman edit
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>