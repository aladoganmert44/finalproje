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
$sqlkontrol = "SELECT * FROM uyeler WHERE ka='".$ka."'";
$kontrolkomut = mysqli_query($baglanti,$sqlkontrol);
if(!mysqli_num_rows($kontrolkomut)){
	$sqlekle = "INSERT INTO uyeler (id,ka,sifre,siparis) VALUES ('','".$ka."','".$sifre."','0')";
	$komut = mysqli_query($baglanti,$sqlekle);
	if ($komut){
		$_SESSION['mesaj'] = "Kayıt işlemi başarılı.. Lütfen giriş yapınız!";
	}
	else{
		$_SESSION['mesaj'] = "Kayıt işlemi sırasında bir hata oluştu.. Lütfen tekrar deneyiniz!";
	}
}
else{
	$_SESSION['mesaj'] = "Girdiğiniz kullanıcı adı başka biri tarafından kullanılıyor!";
}

header("Location: http://localhost/#anasayfa");
$baglanti->close();

?>