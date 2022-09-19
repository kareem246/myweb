    <?php
include('login_u.php'); 

if(isset($_SESSION['login_user2'])){
header("location: home.php"); 
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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

  <link rel="stylesheet" type = "text/css" href ="css/managerlogin.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body class="animsition">




    <!-- Title Page -->
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
							<img src="images/icons/logo.png" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png">
					</div>

					
	</header>

    
    <!-- LOGIN -->
	<section class="section-booking bg1-pattern p-t-100 p-b-110"">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							WELCOME TO PATO RESTAURANT
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							PLEASE LOGIN
						</h3>
					</div>

    
          
        <form action="" method="POST">
          
        <div class="row">
			
							<div class="col-md-6">
								<!-- Email -->
								<span class="txt9">
										Username
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <i class="fa fa-envelope ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
									<input class="bo-rad-10 sizefull txt10 p-l-20" id="username" type="text" name="username" placeholder="Username" required="" autofocus="">
								</div>	
							</div>

     	<div class="col-md-6">
								<!-- Password -->
								<span class="txt9">
									Password
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <i class="fa fa-lock ab-r-m hov-pointer m-r-18" aria-hidden="true"></i>
									<input class="bo-rad-10 sizefull txt10 p-l-20" id="password" type="password" name="password" placeholder="Password" required="">
								</div>	
							</div>
						</div>

						<div  class="wrap10-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23" style="background: #1877f2;
                        border-radius: 10px; color: white;">
							<!-- Button3 -->
							<button type="submit" class="bo10-rad-10 sizefull txtkk p-l-20" name="submit" value="login" style="color: white; font-weight: bold;">
								Login
							</button>
							</form>

							</div>


		

		
		

</form>

<div  class="wrap10-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23" style="background: #42b72a;
			   border-radius: 10px; color: white;">

<style>
					   .bo20-rad-10{
						   color: white;
							font-weight: bold;
					   }
					   .bo20-rad-10:hover{
						   background-color: green;
						   color: white;
						   border-radius: 10px;
					   }



					   .bo22-rad-10{
						   color: white;
							font-weight: bold;
					   }
					   .bo22-rad-10:hover{
						   background-color: green;
						   color: white;
						   border-radius: 10px;
					   }
				   </style>
				   <!-- Button3 -->
				   <button type="submit" class="bo20-rad-10 sizefull txtkk p-l-20" onclick="window.location.href='customersignup.php';" style="color: white; font-weight: bold;">
					   Register
				   </button>


				   
</div>


<div  class="wrap10-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23" style="background: red;
			   border-radius: 10px; color: white;">

<style>
					   .bo22-rad-10{
						   color: white;
							font-weight: bold;
					   }
					   .bo22-rad-10:hover{
						   background-color: green;
						   color: white;
						   border-radius: 10px;
					   }



					   .bo22-rad-10{
						   color: white;
							font-weight: bold;
					   }
					   .bo22-rad-10:hover{
						   background-color: #FF3342;
						   color: white;
						   border-radius: 10px;
					   }
				   </style>
				   <!-- Button3 -->
				   <button type="submit" class="bo22-rad-10 sizefull txtkk p-l-20" onclick="window.location.href='managerlogin.php';" style="color: white; font-weight: bold;">
					   ADMIN
				   </button>


				   
</div>




			  

	   </div>

	   <div class="col-lg-6 p-b-30 p-t-18">
		   <div class="wrap-pic-booking size2 bo-rad-10 hov-img-zoom m-l-r-auto">
			   <img src="images/booking-01.jpg" alt="IMG-OUR" data-appear="fadeInDown">
			   
			   
		   </div>
	   </div>
   </div>
</div>
</section>





    


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