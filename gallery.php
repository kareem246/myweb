<?php 
session_start();



 ?>
<!DOCTYPE html>
<html>
<title>Gallery</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="aaa.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html">
							<img src="images/icons/logo.png" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="index.php">Home</a>
								</li>

								<li>
									<a href="foodlist.php">Menu</a>
								</li>

								<li>
									<a href="gallery.php">Gallery</a>
								</li>

								<li>
									<a href="about.php">About</a>
								</li>

								<li>
									<a href="blog.php">Blog</a>
								</li>

								

               
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="logout_u.php"><i class="fa fa-user" aria-hidden="true"></i>
						<?php
if(isset($_SESSION['login_user1'])){

?>


           Welcome <?php echo $_SESSION['login_user1']; ?> 
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
            Welcome <?php echo $_SESSION['login_user2']; ?> 
            
  <?php        
}
else {

  ?>



<?php
}
?>
					
					
					</a>
						<a href="cart.php"><i class="fa fa-shopping-cart m-l-21" aria-hidden="true"></i>
            <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning \">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning \">0</span>";
                        }

                        ?>
          </a>

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="index.php" class="txt19">Home</a>
			</li>

			<li class="t-center m-b-13">
				<a href="foodlist.php" class="txt19">Menu</a>
			</li>

			<li class="t-center m-b-13">
				<a href="gallery.php" class="txt19">Gallery</a>
			</li>

			<li class="t-center m-b-13">
				<a href="about.php" class="txt19">About</a>
			</li>

			<li class="t-center m-b-13">
				<a href="blog.php" class="txt19">Blog</a>
			</li>

			
		</ul>

		<!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
			<!-- - -->
			<h4 class="txt20 m-b-33">
				Gallery
			</h4>

			<!-- Gallery -->
			<div class="wrap-gallery-sidebar flex-w">
				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-01.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-02.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-03.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-05.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-06.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-07.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-09.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-10.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-11.jpg" alt="GALLERY">
				</a>
			</div>
		</div>
	</aside>


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
		<h2 class="tit6 t-center">
			Gallery
		</h2>
	</section>



	<!-- Gallery -->
	<div class="section-gallery p-t-118 p-b-100">
		<div class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
			<button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
				All Photo
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".interior">
				Interior
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".food">
				Food
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".events">
				Events
			</button>

			<button class="label-gallery txt26 trans-0-4" data-filter=".guests">
				Vip guests
			</button>
		</div>

		<div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">
			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events guests">
				<img src="images/photo-gallery-13.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="images/photo-gallery-13.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom food">
				<img src="images/photo-gallery-14.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="images/photo-gallery-14.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events">
				<img src="images/photo-gallery-15.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="images/photo-gallery-15.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom food">
				<img src="images/photo-gallery-16.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="images/photo-gallery-16.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom food">
				<img src="images/photo-gallery-17.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="images/photo-gallery-17.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom interior guests">
				<img src="images/photo-gallery-18.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="images/photo-gallery-18.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom interior">
				<img src="images/photo-gallery-19.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="images/photo-gallery-19.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom interior">
				<img src="images/photo-gallery-20.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="images/photo-gallery-20.jpg" data-lightbox="gallery"></a>
				</div>
			</div>

			<!-- - -->
			<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events">
				<img src="images/photo-gallery-21.jpg" alt="IMG-GALLERY">

				<div class="overlay-item-gallery trans-0-4 flex-c-m">
					<a class="btn-show-gallery flex-c-m fa fa-search" href="images/photo-gallery-21.jpg" data-lightbox="gallery"></a>
				</div>
			</div>
		</div>

		
	</div>


	


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
