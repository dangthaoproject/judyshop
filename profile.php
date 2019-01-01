<?php
include "site/header.php";
include "site/control_database.php";
include "site/control_profile.php";
?>

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Thông tin tài khoản</div>
        <div class="card-body">
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data"> 
            <div class="form-group">
              <div class="form-row">
			   <div class="col-md-6">
                  <!---->
				  <div class="form-label-group">
				  <img src="<?php echo $user['avatar_url'];?>" alt=" Avatar" width="300" height="300">
				  </div>
				  </br>
				  Chọn ảnh khác:
				  <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
						<label for="firstName">Họ:</label>
						<input type="text" id="firstName"  name="firstName" class="form-control" required="required" value="<?php echo $user['firstName'];?> ">
					</div>
					<div class="form-label-group">
					   <label for="lastName">Tên:</label>
					   <input type="text" id="lastName" name="lastName"  class="form-control" required="required" value="<?php echo $user['lastName'];?>">
					</div>
					<div class="form-label-group">
						<label for="inputEmail">Địa chỉ email: <?php echo $user['email'];?></label>
					</div>
					<div class="form-label-group">
						<label for="address">Địa chỉ:</label>
						<input type="text" id="address" name ="address" class="form-control" required="required" placeholder="Số nhà, đường, Quận Huyện, Tỉnh Thành" value="<?php echo $user['address'];?>">
					</div>
					<div class="form-label-group">
						<label for="phone_number">Số điện thoại:</label>
						<input type="text" id="phone_number" name ="phone_number"class="form-control" required="required" placeholder="+84xxxxxx" value="<?php echo $user['number_phone'];?>">
					</div>
				</div>
                  </div>
                </div>
				<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary btn-block" value="Cập nhật">
				</div>
				</form>
              </div>
            </div>
        </div>
      </div>
    </div>
<?php
include "site/footer.php"
?>
