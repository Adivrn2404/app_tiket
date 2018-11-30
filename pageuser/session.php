<?php 
	include 'login.php';

	$sql = mysqli_query($koneksi, "SELECT * FROM customer");
 	$row_akun = mysqli_fetch_assoc($sql);
    $_SESSION["id"] = $row_akun["id"];
    $_SESSION["name"] = $row_akun["name"];
    $_SESSION["address"] = $row_akun["address"];
    $_SESSION["phone"] = $row_akun["phone"];
    $_SESSION["gender"] = $row_akun["gender"];
?>