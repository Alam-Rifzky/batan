<?php
	error_reporting(0);
	require_once('koneksi.php');
	mysql_query("DELETE FROM dataoperasi WHERE id=".$_GET['id']."") or die (mysql_error());
	echo '<meta http-equiv="refresh" content="0; url=http://localhost/skripsi/skrip/tables.php">';
?>