<title>
    TUBY GAMES
</title>
<link href="img/logo_no_alby.png" rel="shortcut icon"/>

<link rel="stylesheet" href="style.css">

<div class="background-image"></div>
<body>

        <?php
        $koneksi=mysqli_connect("localhost","root","","marketplace");
        $id=$_GET['id'];
        //for($i = 0; $i < 6; $i++) 
        $sql="select * from game where id='$id'";
        $query=mysqli_query($koneksi,$sql);
        while($row=mysqli_fetch_array($query))
		{
           
		?> 
        <body>
    <section class="game-detail">
        <div class="game-video">
            <video controls autoplay>
                <source src="vidio_gm/<?=$row['vidio_gm']?>" type="video/mp4" >
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="game-info">
            <h1><?=$row['nm_game']?></h1>
            <p><?=$row['keterangan']?></p>
            <h3 font-color="yellow">CARA BELI</h3>
            <p><?=$row['deskripsi']?></p>
            <br>

            <div class="game-meta">
                <p><strong>Recent Reviews:</strong> <?=$row['nilai']?></p>
                <p><strong>All Reviews:</strong> Very Positive (47,781)</p>
                <p><strong>Release Date:</strong><?=$row['tahun']?></p>
                <p><strong>Developer:</strong><?=$row['pembuat']?></p>
                <p><strong>Publisher:</strong> Electronic Arts</p>
            </div>

            <div class="tags">
                <span>Online Co-op</span>
                <span>Co-op</span>
                <span>Split Screen</span>
                <span>Story Rich</span>
            </div>

            <div class="action-buttons">
                <a href="review.php"><button>Back</button></a>
                <a href="https://wa.me/6285788787737?text=Halo,%20saya%20tertarik%20untuk%20membeli%20game%20Anda"><button>Buy Now</button><a/>
            </div>
        </div>
    </section>
    <?php
            }
    ?>
</body>


            
   