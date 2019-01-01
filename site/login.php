
<?php
include "header.php"
?>
    <!-- Page Content -->
	<form method="post"> 
    <div class="container">
      <div class="card card-login mx-auto mt-5 w-50">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-label-group">
			  <label for="inputEmail">Email</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
			  <label for="inputPassword">Mật khẩu</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
				Nhớ mật khẩu aa
                  <input type="checkbox" name="remember">
                  
                </label>
              </div>
            </div>
            <a class="btn btn-primary btn-block" >Đăng nhập</a>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Đăng kí tài khoản</a>
            <a class="d-block small" href="forgot-password.html">Quên mật khẩu?</a>
          </div>
        </div>
      </div>
<?php
include "footer.php"
?>