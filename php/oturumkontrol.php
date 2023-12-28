<?php 

session_start();
error_reporting(0);

$baglanti = new mysqli("localhost", "root", "", "veritabani");
if ($baglanti->connect_error)
{
    die("Bağlantı hatası: " . $baglanti->connect_error);
}

if($_SESSION["oturum"] == "true"){
	$sqlkomut = "SELECT * FROM uyeler where ka='".$_SESSION["ka"]."'";
	$sqlcalistir = mysqli_query($baglanti,$sqlkomut);
	$degerler = mysqli_fetch_row($sqlcalistir);
	$siparisSayisi = $degerler[3];?>
	<style type="text/css">
	#giriskayitBtn{
		display: none;
	}
	#profilMenusuBtn{
		display: block;
	}
	</style>
	<script type="text/javascript">
		document.getElementById("profilUyeAdi").innerHTML = "<?php echo $_SESSION["ka"]; ?>";
		document.getElementById("siparisSayisiDeger").innerHTML = "<?php echo $siparisSayisi; ?>";
		document.getElementById("oturumDeger").innerHTML = "True";
	</script>
<?php
}
else if($_SESSION["oturum"] == "false"){?>
	<style type="text/css">
	#giriskayitBtn{
		display: block;
	}
	#profilMenusuBtn{
		display: none;
	}
	</style>
	<script type="text/javascript">
		document.getElementById("oturumDeger").innerHTML = "False";
	</script>
<?php
}?>