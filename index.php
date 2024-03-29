<?php
require_once('config.php');
$pageTitle = 'Главная страница';
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
				<div class="col-md-9 col-lg-10">
					<div class="row">

                    <?php
                    
                        $sql = "SELECT * FROM `products`";
                        $result = $db->query($sql);
                        $products = $result->fetchAll(PDO::FETCH_ASSOC);

                        // print_r($products);

                        foreach( $products as $product) {
                            include("./templates/_product-item.php"); 
                        }
                    ?>

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
