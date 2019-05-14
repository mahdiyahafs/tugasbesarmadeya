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
                <li class="active"><a href="index.php">Home</a></li>
                <li ><a href="login.php">Log In</a></li>
              </ul>
            </div>
          </div>
          <br>  <br>  <br>  <br>  
           <?php
include("koneksi.php");
$sql = "SELECT * FROM menu";
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
    // output data of each row
  while($row = $result->fetch_assoc()) {
   
                      echo "<strong>-Nama Makanan : " . $row["namamakanan"]."</strong><br>"."<br>";
                      echo "<strong>-Harga : " . $row["harga"]."</strong><br>"."<br>";
                 
            echo "<hr/>";
                  }
}
$conn->close();
?>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
  </body>
</html>
