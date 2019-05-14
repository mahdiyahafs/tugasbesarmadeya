 <?php
    require_once('koneksi.php');
         $id=$_POST['id'];
         $jenis=$_POST['jenis'];
         $bintang=$_POST['bintang'];
         $isi=$_POST['isi'];
        
        $update = "UPDATE post SET jenis = '$jenis', bintang= '$bintang', isi = '$isi' WHERE id = '$id'";

        if ($conn->query($update)===TRUE){
          echo "Berhasil";
 header('location:home.php');
        } else {
          echo "gagal";
        }
        $conn->close();
       
        exit;
  ?>
               