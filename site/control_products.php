<?php
	
	/*// query Category from database
	{
		$sql = "SELECT * FROM category";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// Numeric array
			//$categories=mysqli_fetch_array($result,MYSQLI_NUM);
			//printf ("%s (%s)\n",$row[0],$row[1]);

			// Associative array
			$categories=mysqli_fetch_array($result,MYSQLI_ASSOC);
		} else {
			$categories=array("1","2");
			echo "Không kết nối được dữ liệu";
		}
	}
	*/
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
	$categories = get_all_categories($connect);
	//$vongtay_products=get_top3_product_in_category($connect,0);
	//$daychuyen_products = get_top3_product_in_category($connect,1);
?>
