<?php 
	include 'core/init.php';
	include 'include/overall/over_header.php'  ?>

	<?php if (isset($_SESSION['uyeId']) === true){
		echo 'giriş yaptınız.';
	}else{
		echo 'giriş başarısız';
	}

	?>
			<h1>Ana Sayfa</h1>
			<p>Maçlar listelenecek.</p>

<?php include 'include/overall/over_footer.php'?>