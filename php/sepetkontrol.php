<?php

session_start();
error_reporting(0);?>

<script type="text/javascript">
	var toplamUcretDeger = parseInt(document.getElementById("toplamUcretDeger").innerHTML);
	document.getElementById("toplamUcretDegerText").innerHTML = toplamUcretDeger + "₺";
</script>

<?php
if($_SESSION["urunDurum1"] == "true"){ ?>
	<script type="text/javascript">
		document.getElementById("urunSepet1").style.display = "block";
		var menuOzellikleri1 = "<?php echo $_SESSION["menuOzellikleri1"]; ?>";
		var toplamFiyat1 = "<?php echo $_SESSION["toplamFiyat1"]; ?>";
		document.getElementById("fiyatSepet1").innerHTML = toplamFiyat1 + "₺";
		document.getElementById("menuOzellikleri1").innerHTML = menuOzellikleri1;
		document.getElementById("sepetBosText").style.display = "none";
		toplamUcretDeger += parseInt(toplamFiyat1);
		document.getElementById("toplamUcretDegerText").innerHTML = toplamUcretDeger + "₺";
		document.getElementById("toplamUcretDeger").innerHTML = toplamUcretDeger;
	</script>
<?php
}
if($_SESSION["urunDurum2"] == "true"){?>
	<script type="text/javascript">
		document.getElementById("urunSepet2").style.display = "block";
		var menuOzellikleri2 = "<?php echo $_SESSION["menuOzellikleri2"]; ?>";
		var toplamFiyat2 = "<?php echo $_SESSION["toplamFiyat2"]; ?>";
		document.getElementById("fiyatSepet2").innerHTML = toplamFiyat2 + "₺";
		document.getElementById("menuOzellikleri2").innerHTML = menuOzellikleri2;
		document.getElementById("sepetBosText").style.display = "none";
		toplamUcretDeger += parseInt(toplamFiyat2);
		document.getElementById("toplamUcretDegerText").innerHTML = toplamUcretDeger + "₺";
		document.getElementById("toplamUcretDeger").innerHTML = toplamUcretDeger;
	</script>
<?php
}
if($_SESSION["urunDurum3"] == "true"){?>
	<script type="text/javascript">
		document.getElementById("urunSepet3").style.display = "block";
		var menuOzellikleri3 = "<?php echo $_SESSION["menuOzellikleri3"]; ?>";
		var toplamFiyat3 = "<?php echo $_SESSION["toplamFiyat3"]; ?>";
		document.getElementById("fiyatSepet3").innerHTML = toplamFiyat3 + "₺";
		document.getElementById("menuOzellikleri3").innerHTML = menuOzellikleri3;
		document.getElementById("sepetBosText").style.display = "none";
		toplamUcretDeger += parseInt(toplamFiyat3);
		document.getElementById("toplamUcretDegerText").innerHTML = toplamUcretDeger + "₺";
		document.getElementById("toplamUcretDeger").innerHTML = toplamUcretDeger;
	</script>
<?php
}
if($_SESSION["urunDurum4"] == "true"){?>
	<script type="text/javascript">
		document.getElementById("urunSepet4").style.display = "block";
		var menuOzellikleri4 = "<?php echo $_SESSION["menuOzellikleri4"]; ?>";
		var toplamFiyat4 = "<?php echo $_SESSION["toplamFiyat4"]; ?>";
		document.getElementById("fiyatSepet4").innerHTML = toplamFiyat4 + "₺";
		document.getElementById("menuOzellikleri4").innerHTML = menuOzellikleri4;
		document.getElementById("sepetBosText").style.display = "none";
		toplamUcretDeger += parseInt(toplamFiyat4);
		document.getElementById("toplamUcretDegerText").innerHTML = toplamUcretDeger + "₺";
		document.getElementById("toplamUcretDeger").innerHTML = toplamUcretDeger;
	</script>
<?php
}
if($_SESSION["urunDurum5"] == "true"){?>
	<script type="text/javascript">
		document.getElementById("urunSepet5").style.display = "block";
		var menuOzellikleri5 = "<?php echo $_SESSION["menuOzellikleri5"]; ?>";
		var toplamFiyat5 = "<?php echo $_SESSION["toplamFiyat5"]; ?>";
		document.getElementById("fiyatSepet5").innerHTML = toplamFiyat5 + "₺";
		document.getElementById("menuOzellikleri5").innerHTML = menuOzellikleri5;
		document.getElementById("sepetBosText").style.display = "none";
		toplamUcretDeger += parseInt(toplamFiyat5);
		document.getElementById("toplamUcretDegerText").innerHTML = toplamUcretDeger + "₺";
		document.getElementById("toplamUcretDeger").innerHTML = toplamUcretDeger;
	</script>
<?php
}
if($_SESSION["urunDurum6"] == "true"){?>
	<script type="text/javascript">
		document.getElementById("urunSepet6").style.display = "block";
		var menuOzellikleri6 = "<?php echo $_SESSION["menuOzellikleri6"]; ?>";
		var toplamFiyat6 = "<?php echo $_SESSION["toplamFiyat6"]; ?>";
		document.getElementById("fiyatSepet6").innerHTML = toplamFiyat6 + "₺";
		document.getElementById("menuOzellikleri6").innerHTML = menuOzellikleri6;
		document.getElementById("sepetBosText").style.display = "none";
		toplamUcretDeger += parseInt(toplamFiyat6);
		document.getElementById("toplamUcretDegerText").innerHTML = toplamUcretDeger + "₺";
		document.getElementById("toplamUcretDeger").innerHTML = toplamUcretDeger;
	</script>
<?php
}
if($_SESSION["urunDurum7"] == "true"){?>
	<script type="text/javascript">
		document.getElementById("urunSepet7").style.display = "block";
		var menuOzellikleri7 = "<?php echo $_SESSION["menuOzellikleri7"]; ?>";
		var toplamFiyat7 = "<?php echo $_SESSION["toplamFiyat7"]; ?>";
		document.getElementById("fiyatSepet7").innerHTML = toplamFiyat7 + "₺";
		document.getElementById("menuOzellikleri7").innerHTML = menuOzellikleri7;
		document.getElementById("sepetBosText").style.display = "none";
		toplamUcretDeger += parseInt(toplamFiyat7);
		document.getElementById("toplamUcretDegerText").innerHTML = toplamUcretDeger + "₺";
		document.getElementById("toplamUcretDeger").innerHTML = toplamUcretDeger;
	</script>
<?php
}
if($_SESSION["urunDurum8"] == "true"){?>
	<script type="text/javascript">
		document.getElementById("urunSepet8").style.display = "block";
		var menuOzellikleri8 = "<?php echo $_SESSION["menuOzellikleri8"]; ?>";
		var toplamFiyat8 = "<?php echo $_SESSION["toplamFiyat8"]; ?>";
		document.getElementById("fiyatSepet8").innerHTML = toplamFiyat8 + "₺";
		document.getElementById("menuOzellikleri8").innerHTML = menuOzellikleri8;
		document.getElementById("sepetBosText").style.display = "none";
		toplamUcretDeger += parseInt(toplamFiyat8);
		document.getElementById("toplamUcretDegerText").innerHTML = toplamUcretDeger + "₺";
		document.getElementById("toplamUcretDeger").innerHTML = toplamUcretDeger;
	</script>
<?php
}
if($_SESSION["urunDurum9"] == "true"){?>
	<script type="text/javascript">
		document.getElementById("urunSepet9").style.display = "block";
		var menuOzellikleri9 = "<?php echo $_SESSION["menuOzellikleri9"]; ?>";
		var toplamFiyat9 = "<?php echo $_SESSION["toplamFiyat9"]; ?>";
		document.getElementById("fiyatSepet9").innerHTML = toplamFiyat9 + "₺";
		document.getElementById("menuOzellikleri9").innerHTML = menuOzellikleri9;
		document.getElementById("sepetBosText").style.display = "none";
		toplamUcretDeger += parseInt(toplamFiyat9);
		document.getElementById("toplamUcretDegerText").innerHTML = toplamUcretDeger + "₺";
		document.getElementById("toplamUcretDeger").innerHTML = toplamUcretDeger;
	</script>
<?php
}
if($_SESSION["urunDurum10"] == "true"){?>
	<script type="text/javascript">
		document.getElementById("urunSepet10").style.display = "block";
		var menuOzellikleri10 = "<?php echo $_SESSION["menuOzellikleri10"]; ?>";
		var toplamFiyat10 = "<?php echo $_SESSION["toplamFiyat10"]; ?>";
		document.getElementById("fiyatSepet10").innerHTML = toplamFiyat10 + "₺";
		document.getElementById("menuOzellikleri10").innerHTML = menuOzellikleri10;
		document.getElementById("sepetBosText").style.display = "none";
		toplamUcretDeger += parseInt(toplamFiyat10);
		document.getElementById("toplamUcretDegerText").innerHTML = toplamUcretDeger + "₺";
		document.getElementById("toplamUcretDeger").innerHTML = toplamUcretDeger;
	</script>
<?php
}?>