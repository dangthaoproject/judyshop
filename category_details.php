<?php
include("site/header.php");
include("site/products.php");
	if(isset($_GET['category']))
	{
		$products = get_product_in_category($connect,$_GET['category']);
		
         echo '<div class="row">';
			
			foreach($products as $product)
			{
			?>
			<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="product_details.php?id=<?php echo htmlspecialchars($product['id']);?>"><img src="<?php echo $product['image_url'] ?>" width="250" height="180"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="product_details.php?id=<?php echo htmlspecialchars($product['id']);?>"><?php echo $product['product_name'] ?></a>
                  </h4>
                  <h5><?php echo $product['price'] ?></h5>
                </div>
                <div class="card-footer">
                  <small class="text-muted">
				  <?php
				  for($i =0;$i <5;$i++)
				  { 
					if($i <$product['rate'])
						echo " &#9733;";
					else
						echo "&#9734;";
						
				  }
				  ?>
				  </small>
                  </div>
              </div>
            </div>
			
      <!-- /.row -->
	<?php
		}
	}else
	{
		echo "404 không tìm thấy trang.";
	}
	echo "  </div>";
	include("site/footer.php");
?>
