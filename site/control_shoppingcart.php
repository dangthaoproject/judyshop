<?php
	session_start(); // Starting Session
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		if(isset($_POST['product_id'])&&isset($_POST['product_number']))
		{
			
			$product_id=checkInput($_POST['product_id']);
			$product_number=checkInput($_POST['product_id']);
			$product= array('product_id'=>$product_id, 'product_number'=>$product_number);
		}
	}
	$product_total=count($_SESSION["shopping_cart"]);
	
	if($product_total>0) //if there have any item in shopping cart
	{
		echo $_SESSION["shopping_cart"][0];
		$found = false; //set found item to false
		foreach ($_SESSION["shopping_cart"] as $cart_item) //loop through session array
		{
			if($cart_item["product_id"] == $product_id){ //the item exist in array
				 $found = true;//found user item in array list
				$cart_item["product_number"] = $cart_item["product_id"] + $product_number; // increased the quantity
			}
		}
		if($found == false) //we didn't find item in array
		{
			//add new product into shopping cart
			array_push($_SESSION["shopping_cart"],$product);
		}
	}else{
		$_SESSION["shopping_cart"][0]=$product;
	}
	$_SESSION["number_product_in_cart"]=$_SESSION["number_product_in_cart"]+1;
function checkInput($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }
?>