<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id			= $_POST['NIM'];	//membuat variabel $id dan datanya dari inputan hidden id
	$NIM		= $_POST['NIM'];	//membuat variabel $nis dan datanya dari inputan NIS
	$Nama		= $_POST['Nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$Tgl_lahir	= $_POST['Tgl_lahir'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$Alamat    	= $_POST['Alamat'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
    $Password   = $_POST['Password'];
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE mahasiswa SET NIM='$NIM', Nama='$Nama', Tgl_lahir='$Tgl_lahir', Alamat='$Alamat', Password='$Password' WHERE NIM='$id'") or die(mysql_error());
	
	//jika query update sukses
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<p><a href="Home.php">Beranda</a> / <a href="Mahasiswa.php?id='.$id.'">Kembali</a></p>';	//membuat Link untuk kembali ke halaman edit
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<p><a href="Home.php">Beranda</a> / <a href="editMhs.php?id='.$id.'">Kembali</a></p>';	//membuat Link untuk kembali ke halaman edit
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>