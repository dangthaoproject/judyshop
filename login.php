
<?php
include "site/header.php";
include "site/control_database.php";
include "site/control_login.php";
?>
    <!-- Page Content -->
    <div class="container">
	<a class="col-sm-3 btn btn-primary float-right" href="register.php">Đăng kí</a>
      <div class="card card-login mx-auto mt-5 w-50">
        <div class="card-header">Đăng nhập</div>
        <div class="card-body">
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		    <span class="text-danger"><?php echo $error?></span>
            <div class="form-group">
              <div class="form-label-group">
			  <label for="inputEmail">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" value=<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email'];?>>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
			  <label for="inputPassword">Mật khẩu</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required"  value=<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'];?>>
                
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
				Nhớ mật khẩu
                  <input type="checkbox" name="remember" value="yes">
                </label>
              </div>
            </div>
            <button type="submit" class="col-sm-12 btn btn-primary">Đăng nhập</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.php">Đăng kí tài khoản</a>
            <a class="d-block small" href="forgot-password.php">Quên mật khẩu?</a>
          </div>
        </div>
      </div>
	  </div><!-- container-->
<?php
include "site/footer.php"
?>