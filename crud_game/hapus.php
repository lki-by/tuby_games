<script>
    alert ("YAKIN MAU HAPUS");
</script>

<?php
    $koneksi=mysqli_connect("localhost","root","","marketplace");

    $id = $_GET['id'];
    
    $hapus=mysqli_query($koneksi,"delete from game where id='$id'");
    if($hapus)
    {
        echo "<center> HAPUS BERHASIL</center>";
        ?>
        <script>
            setTimeout(function(){
                window.location.href="admin.php";
            },10);
        </script>
        
        
        <?php
    }
    else
    {
        echo"HAPUS GAGAL";
    }
?>