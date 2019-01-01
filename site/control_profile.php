<?php
$avatar_error=''; // Variable To Store Error Message
$email="";
$password="";

	// get user by email
	$user = get_user_by_email($connect,$_SESSION['username']);
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{	
		//  submit button wass pressed
		if(isset($_POST['submit']))
		{
			// choose file was pressed
			if(!empty($_FILES["fileToUpload"]["name"]))
			{
				echo "aaaaaaaaaa";
				echo $_FILES["fileToUpload"]["name"];
				$target_dir = "upload/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;	
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					$uploadOk = 1;
				} else {
					$avatar_error = "Chỉ được upload hình ảnh.";
					$uploadOk = 0;
				}
				//Check it file already exists
				if(file_exists($target_file)){
					$avatar_error = "Hình ảnh này đã tồn tại.";
					$uploadOk=0;
				}
				// Check file size
				if($_FILES["fileToUpload"]['size'] > 1000000) //1MB
				{
					 $avatar_error = "Dung lượng hình quá lớn";
					$uploadOk = 0;	
				}
				// Check file type
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
					$avatar_error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					$uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if($uploadOk===0)
				{
					$avatar_error = $avatar_error." Hình đại diện của bạn cập nhật không thành công.";
				}else{
					if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file))//uploaded
					{
						// update user avatar_url
						$user['avatar_url']=$target_file;
					}else{
						echo "Hình đại diện của bạn cập nhật không thành công.";
					}
				}
			}
				$user['firstName']=checkInput($_POST['firstName']);
				$user['lastName']=checkInput($_POST['lastName']);
				$user['address']=checkInput($_POST['address']);
				$user['number_phone']=checkInput($_POST['phone_number']);
				if(update_user_by_email($connect,$user['firstName'],$user['lastName'],$user['email'],$user['address'],$user['number_phone'],$user['avatar_url']))
				{
					header("Refresh:0");

				}else{
					echo "<script type='text/javascript'> 
					alert('Cập nhật thông tin không thành công. Vui lòng kiểm tra lại hoặc liên hệ admin: admin@gmail.com');
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