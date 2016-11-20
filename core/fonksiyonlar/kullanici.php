<?php 
	funtion giris_yapti(){
		return (isset($_SESSION['uyeId'])) ? true : false;
	}
	
	function kullanici_adindan_id($kullaniciadi){
		$kullaniciadi = filtrele($kullaniciadi);
		return mysql_result(mysql_query("SELECT `uyeId` FROM `uyeler` WHERE `uyeAdi` = '$kullaniciadi'"), 0,'uyeId');
	}

	function login($kullaniciadi, $sifre){
		$uyeId = kullanici_adindan_id($kullaniciadi);
		$kullaniciadi = filtrele($kullaniciadi); 
		$sifre = md5($sifre);
		$query = mysql_query("SELECT COUNT(`uyeId`) FROM `uyeler` WHERE `uyeAdi`= '$kullaniciadi' AND `sifre` = '$sifre' " );
		return (mysql_result($query, 0) == 1) ? $uyeId : false;
		echo mysql_error();
	}

	function kullanici_var($kullaniciadi){
			filtrele($kullaniciadi);
		$query = mysql_query("SELECT COUNT(`uyeId`) FROM `uyeler` WHERE `uyeAdi` = '$kullaniciadi' ");
		return (mysql_result($query, 0) == 1) ? true : false;
	}
	function kullanici_aktif($kullaniciadi){
		$query = mysql_query("SELECT COUNT(`uyeId`) FROM `uyeler` WHERE `uyeAdi` = '$kullaniciadi' AND `uyeDurumu` = 1");
		return (mysql_result($query, 0) == 1) ? true : false;
	}


?>