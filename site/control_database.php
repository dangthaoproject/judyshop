<?php
	
	function insert_user($connect,$firstName,$lastName,$email,$password)
	{
		$defauLt_avatar_url="images/avatar_profile.png";
		$sql = "INSERT INTO users (firstName, lastName, email, password,avatar_url)
		VALUES ('$firstName', '$lastName','$email','$password','$defauLt_avatar_url')";

		if ($connect->query($sql) === TRUE) {
			$last_id = $connect->insert_id;
			return $last_id;
		} else {
			return -1;
		}
	}
	function get_user_by_email($connect,$email)
	{
		$sql = "SELECT * FROM users WHERE email='".$email."'";
		$result = $connect->query($sql);
		if ($result->num_rows> 0)
		{
		
			while($row = mysqli_fetch_array($result)) 
			{
				$user[]=$row;
			}
			mysqli_free_result($result);
			return $user[0];
		}
	}
	// check email exist
	function is_email_exist($connect,$email)
	{
		$sql = "SELECT email FROM users WHERE email='".$email."'";
		$result = $connect->query($sql);
		if($result->num_rows >0)
			return true;
		else
			return false;
	}
	function is_password_correct($connect,$email,$password)
	{
		$sql = "SELECT * FROM users WHERE email='".$email."'";
		$result = $connect->query($sql);
		while ($row = $result->fetch_assoc()) {
			if(password_verify($password, $row['password']))
			{
				return true;
			}
		}
		return false;
	}
	function delete_user_by_email($connect,$email){
		$sql = "DELETE FROM users WHERE email='".$email."'";
		return $connect->query($sql);
	}
	function update_user_by_email($connect,$firstName,$lastName,$email,$address,$phone,$avatar_url)
	{
		$sql= "UPDATE users SET firstName='$firstName',lastName='$lastName',address='$address',
		number_phone='$phone',avatar_url='$avatar_url' WHERE email='$email'";
		return $connect->query($sql);
	}
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
