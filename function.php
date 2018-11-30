<?php

$koneksi = mysqli_connect("localhost", "root", "", "tiket");

function registrasi($data){
	global $koneksi;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($koneksi, $data["password"]);
	$password2 = mysqli_real_escape_string($koneksi, $data["password2"]);
	$fullname = $data["fullname"];
	$level = $data["level"];

	//Cek Username Ada Atau Belum

	$result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('Username Telah Tersedia,Silahkan Pilih Yang Lain');
			 </script>";
		return false;
	}

	//Cek Confirm Password

	if ($password !== $password2) {
		echo "<script>
				alert('Konfirmasi Password Tidak Sesuai');
		      </script>";
		return false;
	}
	//enkripsi password

	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambah user ke DB

	mysqli_query($koneksi, "INSERT INTO user VALUES('', '$username', '$password', '$fullname','$level')");

	return mysqli_affected_rows($koneksi);

}


?>