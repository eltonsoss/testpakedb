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
        <a href="index.php">Beranda</a>
        <a href="Mahasiswa.php">Mahasiswa</a>
        <a href="Dosen.php">Dosen</a>
        <a href="Matakuliah.php">Mata Kuliah</a>
        <a href="logout.php" style ="float:right">Logout</a>
        
	</div>
    
    <div id="content1"><center>
        <img src="UP.jpg" height="500px" width="800px"></center>
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