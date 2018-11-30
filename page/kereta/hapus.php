<?php
	include 'koneksi.php';
?>
<?php

	$id = $_GET ['id'];
	$koneksi->query("DELETE FROM transportation where id = '$id'");
?>
<script type="text/javascript">
	window.location.href="?page=kereta";
</script>