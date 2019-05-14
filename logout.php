<?php 
session_start();
session_destroy();

 ?>

 <div align="center">
 	<h2>Anda telah Log out</h2>
 	silahkan klik <a href="login.php"> disini</a> untuk login kembali </div>

<?php 
header('location: index.php');
 ?>
 