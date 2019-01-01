<?php
include "site/header.php";
include "site/control_database.php";
include "site/control_register.php";
?>
    <div class="container">
	<form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="post">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Tạo tài khoản</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
				    <label for="firstName">Họ</label>
					<span class="text-danger"><?php echo $error_register["firstNameError"]?></span>
                    <input type="text" id="firstName" name ="firstName"  class="form-control" placeholder="Họ chỉ gồm kí tự" required="required" autofocus="autofocus" value=<?php echo $user_info["firstName"]; ?> >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
				   <label for="lastName">Tên</label>
				   <span class="text-danger"><?php echo $error_register["lastNameError"]?></span>
                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Tên chỉ gồm kí tự" required="required" value=<?php echo $user_info["lastName"]?>>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
			  <label for="inputEmail">Địa chỉ email</label>
			  <span class="text-danger"><?php echo $error_register["emailError"]?></span>
                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Địa chỉ email cần có @" required="required" value=<?php echo $user_info["email"]?>>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
				   <label for="inputPassword">Mật khẩu</label>
				   <span class="text-danger"><?php echo $error_register["passwordError"]?></span>
                    <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Mật khẩu có ít nhất 8 kí tự" required="required" value=<?php echo $user_info["password"]?>>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
				  <label for="confirmPassword">Xác nhận mật khẩu</label>
				  <span class="text-danger"><?php echo $error_register["comfirmPasswordError"]?></span>
                    <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder=" Nhập lại mật khẩu" required="required">
                    
                  </div>
                </div>
              </div>
            </div>
			<button type="submit" class="col-sm-12 btn btn-primary">Đăng kí</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.html">Trang đăng nhập</a>
            <a class="d-block small" href="forgot-password.html">Quên mã đăng nhập?</a>
          </div>
        </div>
      </div>
    </div>
<?php
include "site/footer.php"
?>
