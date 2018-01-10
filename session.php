<?php
// Membangun Koneksi dengan Server dengan nama server, user_id dan password sebagai parameter
$connection = mysql_connect("localhost", "root", "");
// Seleksi Database
$db = mysql_select_db("mahasiswa", $connection);
session_start();// Memulai Session
// Menyimpan Session
$user_check=$_SESSION['login_user'];
// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
$ses_sql=mysql_query("select Nama from mahasiswa where Nama='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['Nama'];
if(!isset($login_session)){
mysql_close($connection); // Menutup koneksi
header('Location: Home.php'); // Mengarahkan ke Home Page
}
?>