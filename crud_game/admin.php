<?php
session_start();
$username=@$_SESSION['username'];

$koneksi=mysqli_connect("localhost","root","","marketplace");
$sql="select * from user where username='$username'";
$query=mysqli_query($koneksi,$sql);
while($row=mysqli_fetch_array($query))
{
	$foto=$row['foto'];
}

?>

<title>
    TUBY GAMES
</title>
<head>
        <link href="../img/logo_no_alby.png" rel="shortcut icon"/>

        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
        <header>
            <a href="logout.php"><button class="btn-log">Logout</button></a>
            <img src="logo_alby.png" width="75px" class="logo">  
            <h2>TOKO TUBY</h2>
        </header>
        
    
    <a href="add.php"><button class="btn">TAMBAH</button></a>
    
    <a href="../index.php"><button class="btn">BACK</button></a>
    

    <center>
    <div class="background-image"></div>
        <table border='1' class="tabel">
        <tr>
            <td class="lon">ID</td>
            <td class="long"><center>NAMA GAME</center></td>
            <td class="foto">FOTO</td>
            <td class="harga">HARGA</td>
            <td class="des">KETERANGAN</td>
            <td colspan="2" class="long">ACTION</td>    
        </tr>
    </center>
<?php
$koneksi=mysqli_connect("localhost","root","","marketplace");
$sql="select * from game";
$query=mysqli_query($koneksi,$sql);
while($row=mysqli_fetch_array($query))
{
?>
    <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['nm_game']?></td>
        <td><img src="<?=$row['foto']?>" width="85" height="65"></td>
        <td><?=number_format($row['harga'], 0, ',', '.');?></td>
        <td><?=$row['keterangan']?></td>
        <td><a href="edit.php?id=<?=$row['id']?>"><button class="tombol">EDIT</button></a></td>
        <td><a href="hapus.php?id=<?=$row['id']?>"><button class="tombol">HAPUS</button></a></td>
    </tr>
<?php
}
?>
</table>

<footer>
        <p>&copy; By:Alby Nizam Pradana. SMK-IT As-syifa 2024.</p>
        <div class="footer-links">
            <a href="#">Tentang Kami</a> |
            <a href="#">Kontak</a> |
            <a href="#">Privasi</a>
        </div>
</footer>
