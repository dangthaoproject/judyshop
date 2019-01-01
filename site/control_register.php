<?php
$error_register=array("firstNameError"=>"","lastNameError"=>"","emailError"=>"","passwordError"=>"","comfirmPasswordError"=>""); // Variable To Store Error Message
$isError= false;
$firstNameError = "";
$passwordError="";
$user_info = array("firstName"=>"",'lastName'=>"","email"=>"","password"=>"");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  	// check first name
	    if (empty($_POST["firstName"])) {
			echo " first name empty";
			$error_register["firstNameError"] = "là thông tin bắt buộc";
			$isError= true;
	    } else {
			$firstName = checkInput($_POST["firstName"]);
	    	if (!preg_match("/^[a-zA-Z ]*$/", $firstName)) {
	    		$error_register["firstNameError"] = "Họ chỉ bao gồm chữ cái [a-z A-Z ]";
				$firstNameError = "Họ chỉ bao gồm chữ cái [a-z A-Z ]";
				$isError= true;
	    	}
			else{
				$user_info["firstName"] = $firstName;
			}
	    }
		// check last name
	    if (empty($_POST["lastName"])) {
			$error_register["lastNameError"] = "là thông tin bắt buộc";
			$isError= true;
	    } else {
			
	        $lastName = checkInput($_POST["lastName"]);
	    	if (!preg_match("/^[a-zA-Z ]*$/", $lastName)) {
	    		$error_register["lastNameError"] = "Tên chỉ bao gồm chữ cái [a-z A-Z ]";
				$isError= true;
	    	}else
				$user_info["lastName"] = $lastName;
	    }
		// check email 
		if (empty($_POST["inputEmail"])) {
			$error_register["emailError"] = "là thông tin bắt buộc";
			$isError= true;
	    } else {
			$email = checkInput($_POST["inputEmail"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  $error_register["emailErr"] = "Không đúng định dạng email"; 
			  $isError= true;
			}else
			{
				// check email exit?
				if(is_email_exist($connect,$email))
				{
					$error_register["emailError"] = "Email của bạn đã đăng kí!";
					$isError= true;
				}else
				{
					$user_info["email"] = $email;
				}
			}
        }
		// check password 
		if (empty($_POST["inputPassword"])) {
			 $error_register["passwordError"]= "là thông tin bắt buộc";
			 $passwordError= "là thông tin bắt buộc";
			 $isError= true;
	    } else {
			$password = checkInput($_POST["inputPassword"]);
	    	if (strlen($password) <= 7) {
	    		$error_register["passwordError"] = "Mật khẩu có ít nhất 8 kí tự";
				$isError= true;
	    	}else{
				$user_info["password"] = $password;
			}
	    }
		// check comfirm password
		if (empty($_POST["confirmPassword"])) {
			 $error_register["confirmPassword"]= "là thông tin bắt buộc";
			 $isError= true;
	    } else {
			$comfirmPassword = checkInput($_POST["confirmPassword"]);
	    	if ($comfirmPassword != $user_info["password"]) {
	    		$error_register["comfirmPasswordError"] = "Mật khẩu không trùng khớp!";
				$isError= true;
	    	}
	    }
		// if everything is ok and no error.
		if($isError==false)
		{
			$result= insert_user($connect,$user_info["firstName"],$user_info["lastName"],
			$user_info["email"],password_hash($user_info["password"],PASSWORD_DEFAULT));
			if($result >0)
			{
				header("location: login.php");
			}else{
				echo "<script type='text/javascript'> 
				alert('Tạo tại khoản không thành công. Vui lòng liên hệ admin: admin@gmail.com');
				</script>";
			}
		}
}

 function checkInput($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
  }
?>