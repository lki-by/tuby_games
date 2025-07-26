<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<center>
<header>
<h2>TOKO TUAN MUDA</h2>
 </header>
 </center>
<?php

    $koneksi=mysqli_connect("localhost","root","","marketplace");

    $nm_game = $_GET['nm_game'];
    $des = $_GET['keterangan'];
    $harga = $_GET['harga'];
    $gambar = $_GET['foto'];
    $vd_game = $_GET['vidio_gm'];
    $cara_beli = $_GET['deskripsi'];
    $tahun = $_GET['tahun'];
    $pembuat = $_GET['pembuat'];
    $nilai = $_GET['nilai'];
    
    $sql="insert into game (nm_game,keterangan,harga,foto,tahun,pembuat,nilai,vidio_gm,deskripsi)value('$nm_game','$des',$harga,'$gambar','$vd_game','$cara_beli','$nilai','$pembuat','$tahun')";
    $simpan=mysqli_query($koneksi,$sql);
    if($simpan)
    {
        ?>
       <script>
        alert("simpan berhasil");
        window.location.href="admin.php";
        </script>
        
        
        <?php
    }
    else
    {
        echo"SIMPAN GAGAL";
    }
    
?>


