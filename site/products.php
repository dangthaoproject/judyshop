<?php
	
	// get Categories
	function get_all_categories($connect)
	{
		$sql = "SELECT * FROM categories";
		$result = $connect->query($sql);
		if ($result->num_rows > 0) {
			
			while($row = mysqli_fetch_array($result)) 
			{
				$categories[]=$row;
			}
			mysqli_free_result($result);
		}
		return $categories;
	}
	// get 3 products by categories 
	function get_product_in_category($connect,$category_id)
	{
		$sql = "SELECT * FROM products WHERE category_id=".$category_id;
		$result = $connect->query($sql);
		if ($result->num_rows > 0) {
		
		while($row = mysqli_fetch_array($result)) 
		{
			$products[]=$row;
		}
		mysqli_free_result($result);
		return $products;
		}
	}
	function get_product_by_id($connect,$product_id)
	{
		$sql = "SELECT * FROM products WHERE id=".$product_id;
		$result = $connect->query($sql);
		if ($result->num_rows > 0) {
			$products = mysqli_fetch_assoc($result);
		}
		mysqli_free_result($result);
		return $products;
	}
	$categories = get_all_categories($connect);
	function create_new_user($user_infor){
	}
?>
