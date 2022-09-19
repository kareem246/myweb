<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

?>


<!DOCTYPE html>
<html>
<title>Menu</title>
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

  <link rel="stylesheet" type = "text/css" href ="css2/foodlist.css">
  <link rel="stylesheet" type = "text/css" href ="css2/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

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
            <img src="images/icons/logo.png" alt="IMG-LOGO" data3-logofixed="images/icons/logo2.png">
          </a>
        </div>

        <!-- Menu -->
        <div class="wrap_menu p-l-45 p-l-0-xl">
          <nav class="menu">
            <ul class="main_menu">
              <li>
                <a href="home.php">Home</a>
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
?></a>
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
      <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-01.jpg" data3-lightbox="gallery-footer">
        <img src="images/photo-gallery-thumb-01.jpg" alt="GALLERY">
      </a>

      <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-02.jpg" data3-lightbox="gallery-footer">
        <img src="images/photo-gallery-thumb-02.jpg" alt="GALLERY">
      </a>

      <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-03.jpg" data3-lightbox="gallery-footer">
        <img src="images/photo-gallery-thumb-03.jpg" alt="GALLERY">
      </a>

      <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-05.jpg" data3-lightbox="gallery-footer">
        <img src="images/photo-gallery-thumb-05.jpg" alt="GALLERY">
      </a>

      <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-06.jpg" data3-lightbox="gallery-footer">
        <img src="images/photo-gallery-thumb-06.jpg" alt="GALLERY">
      </a>

      <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-07.jpg" data3-lightbox="gallery-footer">
        <img src="images/photo-gallery-thumb-07.jpg" alt="GALLERY">
      </a>

      <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-09.jpg" data3-lightbox="gallery-footer">
        <img src="images/photo-gallery-thumb-09.jpg" alt="GALLERY">
      </a>

      <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-10.jpg" data3-lightbox="gallery-footer">
        <img src="images/photo-gallery-thumb-10.jpg" alt="GALLERY">
      </a>

      <a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-11.jpg" data3-lightbox="gallery-footer">
        <img src="images/photo-gallery-thumb-11.jpg" alt="GALLERY">
      </a>
    </div>
  </div>
</aside>


<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-01.jpg);">
		<h2 class="tit6 t-center">
			Pato Menu
		</h2>
	</section>


	<section class="section-ourmenu bg2-pattern p-t-115 p-b-120">
		<div class="container">
			<div class="title-section-ourmenu t-center m-b-22">
				<span class="tit2 t-center">
					Discover
				</span>

				<h3 class="tit5 t-center m-t-2">
					Our Menu
				</h3>
			</div>

			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-sm-6">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/our-menu-01.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<h2 class="btn2 flex-c-m txt5 ab-c-m size4">
									Lunch
                      </h2>
							</div>
						</div>

						<div class="col-sm-6">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/our-menu-05.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<h2 class="btn2 flex-c-m txt5 ab-c-m size5">
									Dinner
                      </h2>
							</div>
						</div>

						
					</div>
				</div>

				<div class="col-md-4">
					<div class="row">
						<div class="col-12">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/our-menu-08.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<h2 class="btn2 flex-c-m txt5 ab-c-m size7">
									Drink
                      </h2>
							</div>
						</div>

						<div class="col-12">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/our-menu-10.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<h2 class="btn2 flex-c-m txt5 ab-c-m size8">
									Starters
                      </h2>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
	</section>




  

  <a name="lunch">
	<section class="section-lunch bgwhite">
		<div class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					OUR MENU
				</h2>
			</div>
		</div>
  </section>
	</a>


  




<div class="container" style="width:95%;">

<!-- Display all Food from food table -->
<?php

require 'connection.php';
$conn = Connect();

$sql = "SELECT * FROM FOOD WHERE options = 'ENABLE' ORDER BY F_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>



<div class="col-md-3">

<form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
<div class="mypanel" align="center";>
<img src="<?php echo $row["images_path"]; ?>" class="img-responsive">
<h4 class="text-dark"><?php echo $row["name"]; ?></h4>
<h5 class="text-info"><?php echo $row["description"]; ?></h5>
<h5 class="text-danger">L.E <?php echo $row["price"]; ?></h5>
<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
<input type="hidden" name="hidden_RID" value="<?php echo $row["R_ID"]; ?>">
<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
</div>
</form>
      
     
</div>

<?php
$count++;
if($count==4)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>
</div>
<?php
}
else
{
  ?>




  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
        <p>Stay Hungry...! :P</p>
      </center>
       
    </div>
  </div>

  
  <?php

}

?>




   
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
	<script src="js/main.js"></script>

</body>
</html>