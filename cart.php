<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>

<!DOCTYPE php>
<php>
<title>Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="aaa.png">
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
          <a href="index.php">
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
                <a href="menu.php">Menu</a>
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
      <a href="menu.php" class="txt19">Menu</a>
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



    
<?php
if(!empty($_SESSION["cart"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
        <h1>Your Shopping Cart</h1>
        <p>Looks tasty...!!!</p>
        
      </div>
      
    </div>
    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="40%">Food Name</th>
<th width="10%">Quantity</th>
<th width="20%">Price Details</th>
<th width="15%">Order Total</th>
<th width="5%">Action</th>
</tr>
</thead>


<?php  

$total = 0;
foreach($_SESSION["cart"] as $keys => $values)
{
?>
<tr>
<td><?php echo $values["food_name"]; ?></td>
<td><?php echo $values["food_quantity"] ?></td>
<td>L.E <?php echo $values["food_price"]; ?></td>
<td>L.E <?php echo number_format($values["food_quantity"] * $values["food_price"], 2); ?></td>
<td><a href="cart.php?action=delete&id=<?php echo $values["food_id"]; ?>"><span class="text-danger">Remove</span></a></td>
</tr>
<?php 
$total = $total + ($values["food_quantity"] * $values["food_price"]);
}
?>
<tr>
<td colspan="3" align="right">Total</td>
<td align="right">L.E <?php echo number_format($total, 2); ?></td>
<td></td>
</tr>
</table>
<?php
  echo '<a href="cart.php?action=empty"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Empty Cart</button></a>&nbsp;<a href="foodlist.php"><button class="btn btn-warning">Continue Shopping</button></a>&nbsp;<a href="payment.php"><button class="btn btn-success pull-right"><span class="glyphicon glyphicon-share-alt"></span> Check Out</button></a>';
?>
</div>
<br><br><br><br><br><br><br>
<?php
}
if(empty($_SESSION["cart"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
        <h1>Your Shopping Cart</h1>
        <p>Please confirm your order <a href="foodlist.php">Confirm now.</a></p>
        
      </div>
      
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
}
?>


<?php


if(isset($_POST["add"]))
{
if(isset($_SESSION["cart"]))
{
$item_array_id = array_column($_SESSION["cart"], "food_id");
if(!in_array($_GET["id"], $item_array_id))
{
$count = count($_SESSION["cart"]);

$item_array = array(
'food_id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'R_ID' => $_POST["hidden_RID"],
'food_quantity' => $_POST["quantity"]
);
$_SESSION["cart"][$count] = $item_array;
echo '<script>window.location="cart.php"</script>';
}
else
{
echo '<script>alert("Products already added to cart")</script>';
echo '<script>window.location="cart.php"</script>';
}
}
else
{
$item_array = array(
'food_id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'R_ID' => $_POST["hidden_RID"],
'food_quantity' => $_POST["quantity"]
);
$_SESSION["cart"][0] = $item_array;
}
}
if(isset($_GET["action"]))
{
if($_GET["action"] == "delete")
{
foreach($_SESSION["cart"] as $keys => $values)
{
if($values["food_id"] == $_GET["id"])
{
unset($_SESSION["cart"][$keys]);
echo '<script>alert("Food has been removed")</script>';
echo '<script>window.location="cart.php"</script>';
}
}
}
}

if(isset($_GET["action"]))
{
if($_GET["action"] == "empty")
{
foreach($_SESSION["cart"] as $keys => $values)
{

unset($_SESSION["cart"]);
echo '<script>alert("Cart is made empty!")</script>';
echo '<script>window.location="cart.php"</script>';

}
}
}


?>
<?php

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
</php>

  
</body>
</php>