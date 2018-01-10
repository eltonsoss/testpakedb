<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id			= $_POST['Id_Dosen'];	//membuat variabel $id dan datanya dari inputan hidden id
	$Id_Dosen		= $_POST['Id_Dosen'];	//membuat variabel $nis dan datanya dari inputan NIS
	$Nama_Dosen		= $_POST['Nama_Dosen'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$Alamat    	= $_POST['Alamat'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
    $No_Telp   = $_POST['No_Telp'];
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE dosen SET Id_Dosen='$Id_Dosen', Nama_Dosen='$Nama_Dosen', Alamat='$Alamat', No_Telp='$No_Telp' WHERE Id_Dosen='$id'") or die(mysql_error());
	
	//jika query update sukses
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<p><a href="Home.php">Beranda</a> / <a href="Dosen.php?id='.$id.'">Kembali</a></p>';	//membuat Link untuk kembali ke halaman edit
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<p><a href="Home.php">Beranda</a> / <a href="editDosen.php?id='.$id.'">Kembali</a></p>';	//membuat Link untuk kembali ke halaman edit
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>