<?php

session_start();
error_reporting(0);

if (isset($_POST['sepeteEkle1'])) {
	$adet1 = $_POST['adet1'];
	$menuBoyutu1 = $_POST['menuBoyutu1'];
	$menuIcecek1 = $_POST['menuIcecek1'];
	$menuSos1 = $_POST['menuSos1'];
	$menuSos2 = $_POST['menuSos2'];
	if ($menuBoyutu1 == "Büyük") {
		$_SESSION["toplamFiyat1"] = (intval($adet1) * 15) + (intval($adet1) * 5);
	}
	else{
		$_SESSION["toplamFiyat1"] = intval($adet1) * 15;
	}
	$_SESSION["menuOzellikleri1"] = $adet1." Adet ".$menuBoyutu1." Boy Hamburger Menü, ".$menuIcecek1.", ".$menuSos1.", ".$menuSos2;
	$_SESSION["urunDurum1"] = "true";
}
if (isset($_POST['sepeteEkle2'])) {
	$adet2 = $_POST['adet2'];
	$menuBoyutu2 = $_POST['menuBoyutu2'];
	$pizzaSecimi2 = $_POST['pizzaSecimi2'];
	$menuIcecek2 = $_POST['menuIcecek2'];
	if ($menuBoyutu2 == "Büyük") {
		$_SESSION["toplamFiyat2"] = (intval($adet2) * 20) + (intval($adet2) * 5);
	}
	else{
		$_SESSION["toplamFiyat2"] = intval($adet2) * 20;
	}
	$_SESSION["menuOzellikleri2"] = $adet2." Adet ".$menuBoyutu2." Boy ".$pizzaSecimi2." Pizza Menü, ".$menuIcecek2;
	$_SESSION["urunDurum2"] = "true";
}
if (isset($_POST['sepeteEkle3'])) {
	$adet3 = $_POST['adet3'];
	$menuBoyutu3 = $_POST['menuBoyutu3'];
	$aciDurumu3 = $_POST['aciDurumu3'];
	if ($menuBoyutu3 == "Büyük") {
		$_SESSION["toplamFiyat3"] = (intval($adet3) * 10) + (intval($adet3) * 5);
	}
	else{
		$_SESSION["toplamFiyat3"] = intval($adet3) * 10;
	}
	$_SESSION["menuOzellikleri3"] = $adet3." Adet ".$menuBoyutu3." Boy Tavuk Menü, ".$aciDurumu3;
	$_SESSION["urunDurum3"] = "true";
}
if (isset($_POST['sepeteEkle4'])) {
	$adet4 = $_POST['adet4'];
	$menuBoyutu4 = $_POST['menuBoyutu4'];
	if ($menuBoyutu4 == "Büyük") {
		$_SESSION["toplamFiyat4"] = (intval($adet4) * 10) + (intval($adet4) * 5);
	}
	else{
		$_SESSION["toplamFiyat4"] = intval($adet4) * 10;
	}
	$_SESSION["menuOzellikleri4"] = $adet4." Adet ".$menuBoyutu4." Boy Sebze Menü";
	$_SESSION["urunDurum4"] = "true";
}
if (isset($_POST['sepeteEkle5'])) {
	$adet5 = $_POST['adet5'];
	$hamburgerBoyu5 = $_POST['hamburgerBoyu5'];
	if ($hamburgerBoyu5 == "Büyük") {
		$_SESSION["toplamFiyat5"] = (intval($adet5) * 6) + (intval($adet5) * 4);
	}
	else{
		$_SESSION["toplamFiyat5"] = intval($adet5) * 6;
	}
	$_SESSION["menuOzellikleri5"] = $adet5." Adet ".$hamburgerBoyu5." Boy Hamburger";
	$_SESSION["urunDurum5"] = "true";
}
if (isset($_POST['sepeteEkle6'])) {
	$adet6 = $_POST['adet6'];
	$pizzaBoyu6 = $_POST['pizzaBoyu6'];
	$pizzaSecimi6 = $_POST['pizzaSecimi6'];
	if ($pizzaBoyu6 == "Büyük") {
		$_SESSION["toplamFiyat6"] = (intval($adet6) * 3) + (intval($adet6) * 2);
	}
	else{
		$_SESSION["toplamFiyat6"] = intval($adet6) * 3;
	}
	$_SESSION["menuOzellikleri6"] = $adet6." Adet ".$pizzaBoyu6." Boy ".$pizzaSecimi6." Pizza";
	$_SESSION["urunDurum6"] = "true";
}
if (isset($_POST['sepeteEkle7'])) {
	$adet7 = $_POST['adet7'];
	$patatesBoyu7 = $_POST['patatesBoyu7'];
	if ($patatesBoyu7 == "Büyük") {
		$_SESSION["toplamFiyat7"] = (intval($adet7) * 5) + (intval($adet7) * 2);
	}
	else{
		$_SESSION["toplamFiyat7"] = intval($adet7) * 5;
	}
	$_SESSION["menuOzellikleri7"] = $adet7." Adet ".$patatesBoyu7." Boy Patates";
	$_SESSION["urunDurum7"] = "true";
}
if (isset($_POST['sepeteEkle8'])) {
	$adet8 = $_POST['adet8'];
	$donutSecimi8 = $_POST['donutSecimi8'];
	$_SESSION["toplamFiyat8"] = intval($adet8) * 2;
	$_SESSION["menuOzellikleri8"] = $adet8." Adet ".$donutSecimi8." Donut";
	$_SESSION["urunDurum8"] = "true";
}
if (isset($_POST['sepeteEkle9'])) {
	$adet9 = $_POST['adet9'];
	$kurabiyeSecimi9 = $_POST['kurabiyeSecimi9'];
	$_SESSION["toplamFiyat9"] = intval($adet9) * 1;
	$_SESSION["menuOzellikleri9"] = $adet9." Adet ".$kurabiyeSecimi9." Kurabiye";
	$_SESSION["urunDurum9"] = "true";
}
if (isset($_POST['sepeteEkle10'])) {
	$adet10 = $_POST['adet10'];
	$kolaSecimi10 = $_POST['kolaSecimi10'];
	if ($kolaSecimi10 == "1 lt.") {
		$_SESSION["toplamFiyat10"] = (intval($adet10) * 3) + (intval($adet10) * 2);
	}
	else{
		$_SESSION["toplamFiyat10"] = intval($adet10) * 3;
	}
	
	$_SESSION["menuOzellikleri10"] = $adet10." Adet ".$kolaSecimi10." Coca-Cola";
	$_SESSION["urunDurum10"] = "true";
}
header("Location: http://localhost/#menuler");
?>