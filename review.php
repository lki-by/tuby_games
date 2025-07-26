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
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>TUBY GAMES</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/logo_no_alby.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="animasi.css"/>

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a class="site-logo" href="index.php">
				<img src="img/favicon.png" alt="" width="165" height="53">
			</a>

			<?php 
			if(!isset($_SESSION['username']))
			{
			?>
			<div class="user-panel">
				<img src="fonts/login_24dp_000000_FILL0_wght200_GRAD0_opsz24.svg">
				<a href="login.php">Login</a>
			</div>
			<div class="user-admin">
				<img src="fonts/login_24dp_000000_FILL0_wght200_GRAD0_opsz24.svg">
				<a href="crud_game/admin_login.php">Admin</a>
			</div>
			<?php
			}
			?>

			<?php 
			if (isset($_SESSION['username'])){
			?>
			<div class="profile-container">
        		<div class="profile-frame" id="profile">
				<a href="profile.php" class="user avatar player Avatar online" aria-label="View your profile"><img src="profil/<?=$foto?>" alt="Foto Profil" class="profile-image"></a>
        		</div>
    		</div>
			<?php
			}
			?>

			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="review.php">Store</a></li>
					<li><a href="categories.php">Blog</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">Latest News</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<div class="nt-item"><span class="new">new</span>banyak permainnan baru yang bisa kamu beli di sini,jangan sampai kehabisan cepat buruan order </div>
				<div class="nt-item"><span class="strategy">strategy</span>jenis permainan strategi yang dirancang untuk mempromosikan produk atau layanan tertentu dengan mengintegrasikan elemen pemasaran ke dalam gameplay.</div>
				<div class="nt-item"><span class="racing">racing</span>jenis permainan balapan yang dirancang dengan tujuan mempromosikan produk atau layanan tertentu, sehingga pemain tidak hanya menikmati pengalaman bermain game tetapi juga terpapar pada elemen promosi.  </div>
			</div>
		</div>
	</div>
	<!-- Latest news section end -->


	<!-- Page info section -->

	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/3.jpg">
	<div class="wave wave1">
	<div class="wave wave2">
		<div class="pi-content">
			<div class="container">
					<div class="row">
						<div class="col-xl-5 col-lg-6 text-white">
							<div class="tengah">
							<h2>Much Game</h2>
							<p>jangan lupa tetap beli games di sini,karna akan ada bonus besar besaran untuk orang yang sering beli di sini,di bulan januari tahun 2025</p>
							</div>
						</div>
					</div>
				</div>
			</div>
	
		</div>
	</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	 <div class="bg">
	<section class="review-section review-dark spad set-bg" data-setbg="">
		<div class="container">
			<div class="row">
			<?php
        $koneksi=mysqli_connect("localhost","root","","marketplace");	
        
        //for($i = 0; $i < 6; $i++) 
        $sql="select * from game";
        $query=mysqli_query($koneksi,$sql);
        while($row=mysqli_fetch_array($query))
		{
		?>		
				<div class="col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="">
							<img src="<?=$row['foto']?>" alt="Product Image">
						</div>
						<div class="review-text">
							<h4><?=$row['nm_game']?></h4>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star "></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<a href="#" class="btn btn-primary"><?=number_format($row['harga'], 0, ',', '.');?></a>
							<div class="read-more-container">
        						<p>
            					<span class="more-text" color="black"><?=$row['keterangan']?></span>
        						</p>
								<?php
								if (isset($_SESSION['username'])){
								?>
        						<a href="detail.php?id=<?=$row['id']?>"><label for="read-more-toggle" class="read-more-label">Detail Beli</label></a>
								<?php
								}
								?>
								<?php
								if (!isset($_SESSION['username'])){
								?>
								<label for="read-more-toggle" class="read-more-label">Jika Ingin Beli,Login Dulu</label>
								<?php
								}
								?>
    						</div>
						</div>
					</div>
				</div>

				<?php
				}
				?>



			</div>
		</div>
	</section>
			</div>
	<!-- Page section end -->


	<!-- Review section -->
	<section class="review-section review-dark spad set-bg" data-setbg="img/review-bg-2.jpg">
		<div class="container">
			<div class="section-title text-white">
				<div class="cata new">new</div>
				<h2>Recent Reviews</h2>
			</div>
			<div class="row text-white">
				<div class="col-lg-3 ">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/1.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h5>Assasin’’s Creed</h5>
							<p>game ini sangat cocokuntuk kamu yang suka bermain yang memiliki strategi</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 ">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/2.jpg">
							<div class="score purple">9.5</div>
						</div>
						<div class="review-text">
							<h5>Doom</h5>
							<p>game yang sangat membutuhkan kekuatan dalam berpikir untuk bagaimana mengang dalam ber tarung di medan perang</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 ">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/3.jpg">
							<div class="score green">9.1</div>
						</div>
						<div class="review-text">
							<h5>Overwatch</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 ">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="img/review/4.jpg">
							<div class="score pink">9.7</div>
						</div>
						<div class="review-text">
							<h5>GTA</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review section end -->


	<!-- Footer top section -->
	<section class="footer-top-section">
		<div class="container">
			<div class="footer-top-bg">
				<img src="img/footer-top-bg.png" alt="">
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo text-white">
						<img src="img/footer-logo.png" alt="">
						<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
					</div>
				</div>
				<div class="col-lg-4 ">
					<div class="footer-widget mb-5 mb-md-0">
						<h4 class="fw-title">Latest Posts</h4>
						<div class="latest-blog">
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/1.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/2.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="img/latest-blog/3.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="footer-widget">
						<h4 class="fw-title">Top Comments</h4>
						<div class="top-comment">
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/1.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/2.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/3.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="img/authors/4.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->

	
	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<ul class="footer-menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="review.php">Games</a></li>
				<li><a href="categories.php">Blog</a></li>
			</ul>
			<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>