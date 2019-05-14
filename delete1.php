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

// sql to delete a record
$id = $_GET["id"];
$sql = "DELETE FROM post WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('Location: home.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>