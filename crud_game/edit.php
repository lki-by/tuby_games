<title>
    TUBY GAMES
</title>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="../img/logo_no_alby.png" rel="shortcut icon"/>
</head>
<center>
<header>
<img src="logo_alby.png" width="75px" class="logo">  
<h2>TOKO TUAN MUDA</h2>
 </header>
</center>
<div class="background-image"></div>
<center>
<?php
    $koneksi=mysqli_connect("localhost","root","","marketplace");

    $id = $_GET['id'];

    $query=mysqli_query($koneksi,"select * from game where id='$id'");
    while($row=mysqli_fetch_array($query))
    {
        $nm_game=$row['nm_game'];
        $foto=$row['foto'];
        $harga=$row['harga'];
        $ket=$row['keterangan'];
        $vd_game=$row['vidio_gm'];
    }

?>

<div class="fom">
    <form action="edit_proses.php" mathod="GET">   
    ID:<input type='number' name='id' value='<?=$id?>' required>
    <br>     
    NAMA GAME:<input type="text" name="nm_game" value='<?=$nm_game?>' required>
    <br>
    FOTO:<input type="url" name="foto"  value='<?=$foto?>' reduired>
    <br>
    HARGA:<input type="number" name="harga" value='<?=$harga?>' required>
    <br>
    KETERANGAN:<input type="text" name="keterangan" value='<?=$ket?>' required>
    <br>
    VIDIO:<input type="text" name="vidio_gm" value='<?=$vd_game?>' required>
    <br>
    <button type="submit" name="simpan" class="sub">UPDATE</button>
    </form>
    </div>
    </center>
</div>

<footer>
        <p>&copy; By:Alby Nizam Pradana. SMK-IT As-syifa 2024.</p>
        <div class="footer-links">
            <a href="#">Tentang Kami</a> |
            <a href="#">Kontak</a> |
            <a href="#">Privasi</a>
        </div>
</footer>
