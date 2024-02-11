<?php
require_once('config.php');
$headerTitle = '<span>техно</span>Store';
$logImg = './img/icons/padlock.svg';
?>

<?php include('./templates/_head.php'); ?>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">

            <?php include('./templates/_header.php'); ?>

			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
            
            <?php include('./templates/_aside.php'); ?>

				<!-- Center Part -->
				<div class="col-md-9">
                    <?php
                    $sql =  "SELECT * FROM `products` WHERE id = 1";
                    $result = $db->query($sql);
                    $product = $result->fetch(PDO::FETCH_ASSOC);
                    ?>

					<div class="product-title">
                        <?php echo $product['title'] ?>
                    </div>

					<div class="row">
						<div class="col-6">
							<img src="img/products/<?php echo $product['img'] ?>" alt="">
						</div>
						<div class="col-6">
							<div class="product-price">
                                <?php echo $product['price'] ?>
                            </div>
							<a href="order.php" class="product-btn-order">Сделать заказ</a>
							<div class="product-desc">
								<?php echo $product['description'] ?>
							</div>

						</div>
					</div>

				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

    <?php include('./templates/_footer.php'); ?>

	<script src="js/main.js"></script>
</body>

</html>
