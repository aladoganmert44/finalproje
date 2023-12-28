<?php
session_start();
$_SESSION["oturum"] = "false"; 
$_SESSION["mesajDurumu"] = "true";
$_SESSION["cikis"] = "true";
$_SESSION["mesaj"] = "Çıkış işlemi tamamlandı.. İyi günler ".$_SESSION['ka'];
header("Location: http://localhost/#anasayfa");
?>