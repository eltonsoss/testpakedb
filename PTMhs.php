<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$nim		= $_POST['nim'];	//membuat variabel $nis dan datanya dari inputan NIM
	$nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
    $tgl_lahir  = $_POST['tgl_lahir'];
	$alamat	    = $_POST['alamat'];	//membuat variabel $jurusan dan datanya dari inputan alamat
    $password   = $_POST['password'];
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO mahasiswa VALUES( '$nim', '$nama', '$tgl_lahir', '$alamat', '$password')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<p><a href="Home.php">Beranda</a> / <a href="Mahasiswa.php">Kembali</a></p>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<p><a href="Home.php">Beranda</a> / <a href="tambah.php">Kembali</a></p>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>