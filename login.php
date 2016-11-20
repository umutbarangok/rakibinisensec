<?php
	include 'core/init.php';
	
	if(empty($_POST)=== false){
		
		$isim = $_POST['kullaniciadi'];
		$sifre = md5($_POST['sifre']);

		if(empty($kullaniciadi) === true || empty($sifre) === true){
			$hatalar[] = 'kullanici adi ve şifre boş bırakılamaz.';

		}else if (kullanici_var($kullaniciadi) === false) {
			$hatalar[] = 'Kullanıcı bulunamadı.';
		}else if (kullanici_aktif($kullaniciadi) === false) {
			$hatalar[] = 'Hesabınızı aktifleştirin.';
		}
		print_r($hatalar);
		
	}
?>