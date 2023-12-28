<?php

session_start();
error_reporting(0);

if (isset($_POST['urunSepetKaldir1'])) {
	$_SESSION["urunDurum1"] = "false";
}
if (isset($_POST['urunSepetKaldir2'])) {
	$_SESSION["urunDurum2"] = "false";
}
if (isset($_POST['urunSepetKaldir3'])) {
	$_SESSION["urunDurum3"] = "false";
}
if (isset($_POST['urunSepetKaldir4'])) {
	$_SESSION["urunDurum4"] = "false";
}
if (isset($_POST['urunSepetKaldir5'])) {
	$_SESSION["urunDurum5"] = "false";
}
if (isset($_POST['urunSepetKaldir6'])) {
	$_SESSION["urunDurum6"] = "false";
}
if (isset($_POST['urunSepetKaldir7'])) {
	$_SESSION["urunDurum7"] = "false";
}
if (isset($_POST['urunSepetKaldir8'])) {
	$_SESSION["urunDurum8"] = "false";
}
if (isset($_POST['urunSepetKaldir9'])) {
	$_SESSION["urunDurum9"] = "false";
}
if (isset($_POST['urunSepetKaldir10'])) {
	$_SESSION["urunDurum10"] = "false";
}
if (($_SESSION["urunDurum1"] == "false") && ($_SESSION["urunDurum2"] == "false") && ($_SESSION["urunDurum3"] == "false") && ($_SESSION["urunDurum4"] == "false") && ($_SESSION["urunDurum5"] == "false") && ($_SESSION["urunDurum6"] == "false") && ($_SESSION["urunDurum7"] == "false") && ($_SESSION["urunDurum8"] == "false") && ($_SESSION["urunDurum9"] == "false") && ($_SESSION["urunDurum10"] == "false")) {?>
	<script type="text/javascript">
		document.getElementById("sepetBosText").style.display = "block";
	</script>
<?php
}
header("Location: http://localhost/#sepetim");
?>