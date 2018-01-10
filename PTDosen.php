<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$Id_Dosen		= $_POST['Id_Dosen'];	
	$Nama_Dosen		= $_POST['Nama_Dosen'];
	$Alamat	    = $_POST['Alamat'];	
    $No_Telp   = $_POST['No_Telp'];
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO dosen VALUES( '$Id_Dosen', '$Nama_Dosen',  '$Alamat', '$No_Telp')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo 'Data Berhasil Di Tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<p><a href="Dosen.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal Menambahkan Data! ';		//Pesan jika proses tambah gagal
		echo '<p><a href="index.php">Beranda</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>