<?php
include('login.php'); // Memasuk-kan skrip Login 

if(isset($_SESSION['login_user'])){
header("location: Home.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login User</title>
	
	<!-- Skrip CSS -->
      <link href="stylee.css" rel="stylesheet" type="text/css">

  
  </head>	
  <body id="body">
      <div id="head">
          <center>
	      <form action="" method="post">
			
              </div>
              
              
              <div id="left"></div>
              <div id="center">
              <h1 style="color:black;">Sistem Akademik</h1>
              </div>
                  <div id="content">
                      
			<table width="230" border="0"><br>
                <tr>
                    
			<td style="padding-right:10px;">Username:</td>
			<td><input  size="50" id="name" name="username" placeholder="username" type="text" style="height:25px">
                    </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    
			<td style="padding-right:10px;">Password:</td>
			<td><input size="50" id="password" name="password" placeholder="*******" type="password" style="height:25px">
                    </td>
			</tr>
                
                
                 <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td></td>
                    <td>
                        
                        <button type="submit" name="submit" id="submit" value="Login" style="border:1px dotted grey;padding:7px;padding-right:10px;padding-left:10px">Submit</button>
                    </td>
                    </tr>
              </table>
                
                </form>
                  </div>
</center>
      <div id="right"></div>
  <div id="foot"></div>
    </body>
</html>






