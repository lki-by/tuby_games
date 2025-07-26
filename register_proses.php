<?php

    $koneksi=mysqli_connect("localhost","root","","marketplace");

    $user = $_POST['username'];
    $pass = $_POST['password'];
    $nama = $_POST['name'];
    $no_hp = $_POST['no_hp'];
    
     // Tentukan direktori penyimpanan
     $target_dir = "profil/";
    
     // Pastikan folder "uploads" sudah dibuat
     if (!is_dir($target_dir)) {
         mkdir($target_dir, 0777, true);
     }
 
     // Ambil data file yang diupload
     $file_name = basename($_FILES["foto"]["name"]);
     $target_file = $target_dir . $file_name;
     $uploadOk = 1;
     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
 
     // Cek apakah file adalah gambar
     $check = getimagesize($_FILES["foto"]["tmp_name"]);
     if ($check !== false) {
         echo "File is an image - " . $check["mime"] . ".<br>";
         $uploadOk = 1;
     } else {
         echo "File is not an image.<br>";
         $uploadOk = 0;
     }
 
 
     // Izinkan format tertentu saja
     if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
         echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
         $uploadOk = 0;
     }
 
     // Cek apakah uploadOk masih 1
     if ($uploadOk == 0) {
         echo "Sorry, your file was not uploaded.<br>";
     } else {
         // Pindahkan file ke folder tujuan
         if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
           
            $sql="insert into user (username,password,name,no_hp,foto) value('$user','$pass','$nama','$no_hp','$file_name')";
            $simpan=mysqli_query($koneksi,$sql);
            if($simpan) 
            {
                ?>
                    <script>
                        alert("Daftar berhasil");
                        window.location.href="login.php";
                    </script>
                <?php
            }
            else
            {
                ?>
                    <script>
                        alert("Daftar Gagal");
                        window.location.href="login.php";   
                    </script>
                <?php
            }
            



         } else {
             echo "Sorry, there was an error uploading your file.<br>";
         }
     }
    
   
?>
