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
                <li><a href="add.php">Add Post</a></li>
                </li>
                <li><a href="logout.php">Log Out</a></li>
                </li>
               
             
            
              </ul>
            </div>
          </div>

      <br><br> <br> <br>  


        <?php
$servername = "sql200.epizy.com";
$username = "epiz_23904722";
$password = "FXoXdxmjLrl";
$dbname = "epiz_23904722_afsri";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM post";
$result = $conn->query($sql);

if ($result->num_rows > 0) { 
    // output data of each row
    while($row = $result->fetch_assoc()) {
                      echo " ".$row["waktu"]."<br>"."<br>";
                      echo "<strong>Jenis Makanan : " . $row["jenis"]."</strong><br>"."<br>";
                      echo "<strong>Bintang : " . $row["bintang"]."</strong><br>"."<br>";
                      echo "-Content : " . substr($row["isi"], 0,100);
                      echo " <a href='update.php?id=".$row["id"]."'>Update</a> ||";
                      echo " <a onclick=\"return confirm('Are you sure deleting this post?');\" href='delete1.php?id=".$row["id"]."'>Delete</a><br />";
                      echo "<hr/>";
                  }
}
$conn->close();
?>
    <!-- Bootstrap core JavaScript


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 <script src="bnj/jquery.min.js"></script>
    <script src="bnj/js/bootstrap.min.js"></script>
    <script src="`Bootstrap-3-Offline-Docs-master/assets/js/docs.min.js"></script>
  </body>
</html>
