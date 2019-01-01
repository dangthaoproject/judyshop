<?php
	include_once("config.php");
	include_once("site/connect_database.php");
	session_start(); // Starting Session
	if(!isset($_SESSION["shopping_cart"]))
	{
		$_SESSION["shopping_cart"] = array();
	}
	if(!isset($_SESSION["number_product_in_cart"]))
	{
		$_SESSION["number_product_in_cart"] = 0;
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JudyShop - Nơi gởi gắm tình yêu</title>

    <!-- Bootstrap core CSS -->
    <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="public/css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">JUDY SHOP - Nơi gởi gắm tình yêu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Trang chủ
                <span class="sr-only">(current)</span>
              </a>
            </li>
			<li class="class="nav-item"">
              <a class="nav-link" href="shoppingcart.php"><img src="images/shopping-cart-2.png" width=30 height=30 /> Giỏ hàng (<span class="text-danger"><?php echo $_SESSION["number_product_in_cart"];?></span>)</a>
            </li>
			<?php if(isset($_SESSION['username']))
				{
			?>
			<li class="class="nav-item"">
              <a class="nav-link" href="profile.php">Tài khoản <?php echo $_SESSION['username']?> </a>
            </li>
			<li class="class="dropdown scale"">
              <a class="nav-link" href="logout.php">Đăng xuất</a>
            </li>
			<?php }else
				{
			?>
			<li class="nav-item">
              <a class="nav-link" href="login.php">Đăng nhập|Đăng kí</a>
            </li>
			<?php
			}
			?>
			
          </ul>
        </div>
      </div>
    </nav>