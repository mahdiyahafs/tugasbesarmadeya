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
    <link href="bootstrap.min.css" rel="stylesheet">

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
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Edit Post</h1>
            <div>
                  <form action= "actionupdate.php" method="post">
               
                  <?php
                  require_once('koneksi.php');
                  $id=$_GET['id'];
                  $sql = "SELECT * FROM post where id = $id";
                  $result = $conn->query($sql);

                  if ($result->num_rows>0){
                    while ($e = $result->fetch_assoc()){
                  
                ?>
                <center> 
                 <table>
              <tr>
                <td> Jenis Makanan: </td>
                <input type=" hidden" name="id" value="<?php echo $e['id']; ?> ">
                <td><input type="text" name="jenis" value="<?php echo $e['jenis']; ?>"></td>
              </tr>
              <tr>
                <td> Bintang: </td>
               
                <td><input type="text" name="bintang" value="<?php echo $e['bintang']; ?>"></td>
              </tr>
              <tr>
                <td> Isi : </td>
                <td><br><br><textarea name="isi" rows="7" cols="100"><?php echo $e['isi'];?></textarea></td>
              </tr>
              <tr>
              <td><td><br><br><input type="submit" value="Save"></td></td>
              </tr>

              <tr>
                <td><br><br><a href ="home.php">Back</a></td>
              </tr>
            </form>
            
            </table>
            </center>
            <?php   
}
}
             ?>
            </div>
          </div>   
      </div>
    </div>
             


 <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
  </body>
</html>