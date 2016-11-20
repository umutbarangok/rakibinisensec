<?php 
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