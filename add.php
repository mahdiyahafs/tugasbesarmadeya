<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Welcome to Italiano Hut Official Website</title>

    <!-- Bootstrap core CSS -->
    <link href="bnj/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Italiano Hut</h3>
              <ul class="nav masthead-nav">
             
                <li><a href="home.php">Home</a></li>
                </li>
             
            
              </ul>
            </div>
          </div>

      <br><br>

 <body>

    
   
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Add New Review</h1>
            <div>
              <table>
                
                <form action="" method="post">
              <tr>
                <td> Jenis Makanan: </td>
                <td><input type="text" name="jenis"></td>
<br><br>
              </tr>
               <td> Bintang: </td>
                <td><input type="text" name="bintang"></td>
              </tr>
              <tr>
                <td> Isi: </td>
                <td><br><br><textarea name="isi" rows="7" cols="100"></textarea></td>
              </tr>
              <tr>
              <td><td><br><br><input type="submit" value="Save"></td></td>
              </tr>
 
              <tr>
                <td><br><br><a href ="home.php">Back</a></td>
              </tr>
            </form>
            
            </table>
            </div>
          </div>   
      </div>
    </div>
    <?php
    include("koneksi.php");
    $conn = mysqli_connect("sql200.epizy.com","epiz_23904722","FXoXdxmjLrl","epiz_23904722_afsri");
    
    if($_SERVER['REQUEST_METHOD']=='POST'){

    $simpan = mysqli_query($conn,"INSERT INTO post (id,jenis,bintang,isi,waktu) VALUES(null,'$_POST[jenis]','$_POST[bintang]','$_POST[isi]',null) ");

    if ($simpan) {

       echo "New record created successfully";
       header("location:home.php");
    } else {
        echo " gagal menambahkan post.." ;
      }
    }
    ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 <script src="bnj/jquery.min.js"></script>
    <script src="bnj/js/bootstrap.min.js"></script>
    <script src="`Bootstrap-3-Offline-Docs-master/assets/js/docs.min.js"></script>
  </body>
</html>
