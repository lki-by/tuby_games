<?php
session_start();

$koneksi=mysqli_connect("localhost","root","","marketplace");

$usernamenya = $_POST['username'];
$passnya = $_POST['password'];


 $sql="SELECT COUNT(*) as jumlah FROM admin WHERE username='$usernamenya'";
$query=mysqli_query($koneksi,$sql);
while($row=mysqli_fetch_array($query))
{
    $j = $row['jumlah'];    
}
if($j=='0')
{
    ?>
    <script>
        alert("Username tidak ada di data base");
        window.location.href="admin_login.php";
    </script>

    <?php
}
else
{
    //echo "USERNAME $usernamenya sudah ada di data base";
    $sql="SELECT password FROM admin WHERE username='$usernamenya'";
    $query=mysqli_query($koneksi,$sql);
    while($row=mysqli_fetch_array($query))
    {
    $p = $row['password'];
    }
    if($p  == $passnya)
    {
        $_SESSION['username']=$usernamenya;
        header("location:admin.php");
    }
    else
    {
        ?>
        <script>
            alert("Password salah");
            window.location.href="admin_login.php";
        </script>
    
        <?php
    }

}

?>