<?php
$error=''; // Variable To Store Error Message
$email="";
$password="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST['email']) || empty($_POST['password'])) {
		$error = "Email và mật khẩu không thể rỗng";
	}
	else
	{
		// Define $email and $password
		$email= checkInput($_POST['email']);
		$password=checkInput($_POST['password']);
		if(!empty($_POST['remember']))
		{
			// save email and password into $_COOKIE
			setcookie("email",$email,time() + 3600);
			setcookie("password",$password,time() + 3600);
		}
		
		// checking email is exist
		
		if(is_email_exist($connect,$email))
		{
			if(is_password_correct($connect,$email,$password))
			{	
				$_SESSION['username']=$email;	
				header("location: index.php");
			}else {
				$error = "Mật khẩu không chính xác! Thử lại.";
			}
		}else{
			$error = "Email chưa đăng kí!";
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