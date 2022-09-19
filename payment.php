<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>

<!DOCTYPE html>
<html>
<title>Payment</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="aaa.png"/>
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
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
                <a href="menu.html">Menu</a>
              </li>
              <li>
                <a href="gallery.html">Gallery</a>
              </li>

              <li>
                <a href="about.html">About</a>
              </li>

              <li>
                <a href="blog.html">Blog</a>
              </li>

              <li>
                <a href="contact.html">Contact</a>
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
          <a href="#"><i class="fa fa-shopping-cart m-l-21" aria-hidden="true"></i>
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
      <a href="home.php" class="txt19">Home</a>
    </li>

    <li class="t-center m-b-13">
      <a href="menu.html" class="txt19">Menu</a>
    </li>

    <li class="t-center m-b-13">
      <a href="gallery.html" class="txt19">Gallery</a>
    </li>

    <li class="t-center m-b-13">
      <a href="about.html" class="txt19">About</a>
    </li>

    <li class="t-center m-b-13">
      <a href="blog.html" class="txt19">Blog</a>
    </li>

    <li class="t-center m-b-33">
      <a href="contact.html" class="txt19">Contact</a>
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

 <?php
$gtotal = 0;
  foreach($_SESSION["cart"] as $keys => $values)
  {

    $F_ID = $values["food_id"];
    $foodname = $values["food_name"];
    $quantity = $values["food_quantity"];
    $price =  $values["food_price"];
    $total = ($values["food_quantity"] * $values["food_price"]);
    $R_ID = $values["R_ID"];
    $username = $_SESSION["login_user2"];
    $order_date = date('Y-m-d');
    
    $gtotal = $gtotal + $total;


     $query = "INSERT INTO ORDERS (F_ID, foodname, price,  quantity, order_date, username, R_ID) 
              VALUES ('" . $F_ID . "','" . $foodname . "','" . $price . "','" . $quantity . "','" . $order_date . "','" . $username . "','" . $R_ID . "')";
             

              $success = $conn->query($query);         

      if(!$success)
      {
        ?>
        <div class="container">
          <div class="jumbotron">
            <h1>Something went wrong!</h1>
            <p>Try again later.</p>
          </div>
        </div>

        <?php
      }
      
  }

        ?>
        <div class="container">
          <div class="jumbotron">
            <h1>Choose your payment option</h1>
          </div>
        </div>
        <br>
<h1 class="text-center">Grand Total: L.E <?php echo "$gtotal"; ?>/-</h1>
<h5 class="text-center">including all service charges. (no delivery charges applied)</h5>
<br>
<h1 class="text-center">
  <a href="cart.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go back to cart</button></a>
  
  <a href="COD.php"><button class="btn btn-success"><span class="glyphicon glyphicon-"></span> Cash On Delivery</button></a>
</h1>
        


<br><br><br><br><br><br>
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

  