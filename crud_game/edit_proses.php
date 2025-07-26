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
    $vd_game= $_GET['vidio_gm'];

    $id= $_GET['id'];

    $sql="update game set nm_game='$nm_game',keterangan='$des',harga='$harga',foto='$gambar',vidio_gm='$vd_game' where id='$id'";
    $edit=mysqli_query($koneksi,$sql);
    if($edit)
    {
        ?>
        <script>
            alert("Update Berhasil");
            window.location.href="admin.php";
        </script>
        
        
        <?php
    }
    else
    {
        echo"SIMPAN GAGAL";
    }
?>
