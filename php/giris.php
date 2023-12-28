<?php

session_start();
error_reporting(0);

$baglanti = new mysqli("localhost", "root", "", "veritabani");
if ($baglanti->connect_error)
{
    die("Bağlantı hatası: " . $baglanti->connect_error);
}

$_SESSION["mesajDurumu"] = "true";
$ka = $_POST['ka'];
$sifre = $_POST['sifre'];
$sqlkontrol = "SELECT * FROM uyeler WHERE ka='".$ka."' and sifre='".$sifre."'";
$kontrol= mysqli_query($baglanti,$sqlkontrol);
$sqlkomut="SELECT * FROM uyeler where ka='".$ka."'";
$sqlcalistir=mysqli_query($baglanti,$sqlkomut);
$degerler = mysqli_fetch_row($sqlcalistir);
$ka = $degerler[1];
if(mysqli_num_rows($kontrol)){
	$_SESSION["oturum"] = "true";
	$_SESSION["ka"] = $ka;
	$_SESSION["mesaj"] = "Giriş başarılı hoşgeldiniz '".$_SESSION["ka"]."'";
}
else{
	$_SESSION["mesaj"] = "Kullanıcı adı veya şifre hatalı!";
}

header("Location: http://localhost/#anasayfa");
$baglanti->close();

?>