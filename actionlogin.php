<?php 
  require 'koneksi.php';
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = mysqli_query($conn,"SELECT * FROM user where username='$username' and password ='$password'");

  
  if (mysqli_num_rows($result)>0){
    //login
    $data = mysqli_fetch_assoc($result);

    $_SESSION['login'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $data['id'];
    header("location:home.php");
  }
  
  else {
    echo "Anda belum terdaftar!!!";
    echo "<br>";
    echo "<a href='register.php'>registrasi<a>";
  }

?>