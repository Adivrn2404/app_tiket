<?php
	include 'koneksi.php';
?>
<?php

	$id = $_GET ['id'];
	$koneksi->query("DELETE FROM rute where id = '$id'");
?>
<script type="text/javascript">
	window.location.href="?page=rute";
</script>