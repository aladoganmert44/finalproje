<?php 

session_start();
error_reporting(0);
if($_SESSION['cikis'] == "true"){
	session_destroy();
	$_SESSION['cikis'] = "false";
}
if($_SESSION['mesajDurumu'] == "true"){
?>
	<script type="text/javascript">
		alert("<?php echo $_SESSION['mesaj']; ?>");
	</script>
<?php 
$_SESSION['mesajDurumu'] = "false";

}?>