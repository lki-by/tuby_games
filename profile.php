<?php 
session_start();

$username=@$_SESSION['username'];

$koneksi=mysqli_connect("localhost","root","","marketplace");
$sql="select * from user where username='$username'";
$query=mysqli_query($koneksi,$sql);
while($row=mysqli_fetch_array($query))
{
	$foto=$row['foto'];
    $name=$row['name'];
}
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Card</title>
  <link rel="stylesheet" href="animasi.css">
</head>
<body>
  <div class="profile-container">
    <div class="profile-header">
        <div class="profile-frame" id="profile">
            <img src="profil/<?=$foto?>" alt="Profile Picture" class="profile-picture">
        </div>
      <div class="profile-info">
        <h1><?=$username?></h1>
        <p><?=$name?></p>
        <p>No information given.</p>
      </div>
    </div>
    <a href="logout.php"><button class="logout-button">Logout</button></a>
    <a href='index.php'><button class='user-panel'>BACK</button></a>
    <div class="profile-details">
      <div class="recent-activity">
        <h3>Recent Activity</h3>
        <p>3.6 hours past 2 weeks</p>

        <?php
        $koneksi=mysqli_connect("localhost","root","","marketplace");
        $sql="select * from game";
        $query=mysqli_query($koneksi,$sql);
        while($row=mysqli_fetch_array($query))
        {
        ?>
        <div class="game">
          <img src="<?=$row['foto']?>" alt="PICO PARK">
          <p><?=$row['nm_game']?></p>
        </div>

        <?php
            }
        ?>
      <div class="profile-stats">
        <h3>Currently Online</h3>
        <p>Level: 1</p>
        <p>Badges: 1</p>
        <p>Games: 1</p>
      </div>
    </div>
  </div>
</body>
</html>