<?php
include "site/header.php";
include "site/products.php";
if(isset($_GET['id'])){
	$products = get_product_by_id($connect,$_GET['id']);
?>
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Thông tin sản phẩm</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-row">
			   <div class="col-md-6">
                  <!---->
				  <div class="form-label-group">
				  <img src="<?php echo $products['image_url'];?>" width="300" height="300">
				  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
						<div class="form-label-group">
						<label for="address">Danh mục: <?php echo $categories[$products['category_id']-1]['name'];?> </label>
					</div><h2> <?php echo $products['product_name'];?></h2>
					</div>
					<div class="form-label-group">
					   <label for="description"><?php echo $products['description'];?></label>
					 </div>
					<div class="form-label-group">
						<label for="price">Giá:</label> <h3 style="color:green"><?php echo $products['price'];?></h3>
						</div>
					<div class="form-group">
					 <label for="price">Số lượng: </label><input type="text" id="number_product" value="1" /><input type="Button" id='AddButton' onclick="javascript: document.getElementById('number_product').value++;" value="+" />
					</div>
					<a class="btn btn-primary btn-block" onclick="addProductIntoShoppingCart(<?php echo $products['id'];?>);"><img src="images/shopping-cart-2.png" width=30 height=30 />Thêm vào giỏ hàng</a>
				</div>
                  </div>
                </div>
				
				</form>
              </div>
            </div>
        </div>
      </div>
    </div>
<script type="text/javascript">
	function addProductIntoShoppingCart(product_id){
	var product_number = document.getElementById('number_product').value;
	var request =$.ajax({
    type: "POST",
    url: 'site/control_shoppingcart.php',
    dataType: 'json',
    data: {'product_id': product_id,
		  'product_number': product_number },
		  dataType: "html",
	success: function(msg) {
		alert("Sản phẩm của bạn đã được thêm vào giỏ hàng");
		location.reload();
	}
	});
	request.fail(function(jqXHR, textStatus) {
	  console.log( "Request failed: " + textStatus );
	});
		
	}
</script>
<?php
}else
{
	echo "<h1 class='text-center'>404 Page not found!</h1>";
}
include "site/footer.php"
?>
