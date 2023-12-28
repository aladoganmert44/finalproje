<?php

session_start();
error_reporting(0);

$baglanti = new mysqli("localhost", "root", "", "veritabani");
if ($baglanti->connect_error)
{
    die("Bağlantı hatası: " . $baglanti->connect_error);
}

$_SESSION["mesajDurumu"] = "true";
$isimsoyisim = $_POST['isimsoyisim'];
if ($_SESSION["oturum"] == "true") {
	$ka = $_SESSION["ka"];
	$sql = "UPDATE uyeler SET siparis=siparis+1 WHERE ka='".$ka."'";
	mysqli_query($baglanti,$sql);
	$_SESSION["mesaj"] = "Satın alma işlemi başarılı bir şekilde gerçekleşti. Bizi tercih ettiğiniz için teşekkür ederiz '".$isimsoyisim."'";
	for ($i=1; $i <= 10; $i++) { 
		$_SESSION["urunDurum".$i] = "false";
	}
}
else{
	$_SESSION["mesaj"] = "Satın alma işlemi başarılı bir şekilde gerçekleşti. Bizi tercih ettiğiniz için teşekkür ederiz '".$isimsoyisim."'";
	for ($i=1; $i <= 10; $i++) { 
		$_SESSION["urunDurum".$i] = "false";
	}
}

header("Location: http://localhost/#anasayfa");
$baglanti->close();

?>