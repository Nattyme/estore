<?php
$pageTitle = 'Вход в админ панель';
$logImg = 'img/icons/padlock.svg';
?>

<?php include('./templates/_head.php'); ?>

	<!-- white-plate -->
	<div class="white-plate white-plate--login">
		<div class="container-fluid">

			<!-- header -->
			<div class="header text-center">
				<a href="index.php" class="site-logo">
					<span>техно</span>Store
				</a>
			</div>
			<!-- // header -->

			<div class="line-between"></div>
			<form action="admin.php">
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Пароль">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Войти</button>
				</div>
			</form>
			<p class="text-center"><a href="index.php" class="text-secondary">Вернуться назад</a></p>
		</div>
	</div>
	<!-- // white-plate -->

    <?php include('./templates/_footer.php'); ?>

	<script src="js/main.js"></script>
</body>

</html>
