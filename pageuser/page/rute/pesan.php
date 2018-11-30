<?php
	include 'koneksi.php';
	$tanggal = date("Y-m-d");
?>
<?php 

	$id = $_GET['id'];

	$sql = $koneksi->query("SELECT * FROM rute where id='$id'");

	$tampil = $sql->fetch_assoc();
?>
<div class="panel panel-default">
<div class="panel-heading">
	Pesan Tiket
</div>
<div class="panel-body">
	<div class="row">
		<div class="col-md-6">
			<?php  
				$no = mysqli_query($koneksi, "SELECT id FROM reservation ORDER BY id DESC");
				$kodeid = mysqli_fetch_array($no);
				$kode = $kodeid['id'];

				$urut = substr($kode, 3, 3);
				$tambah = (int) $urut + 1;
				
				if (strlen($tambah) == 1) {
					$format = "KA"."00".$tambah;
				}elseif (strlen($tambah) == 2) {
					$format = "KA"."0".$tambah;
				}else{
					$format = "KA".$tambah;
				}
			?>
        	<form method="POST">
        		<div class="form-group">
    				<label>ID</label>
						<input class="form-control" name="id" value="<?php echo $tampil['id'];?>" readonly/>
				</div>
				<div class="form-group">
    				<label>Reservation_Code</label>
						<input class="form-control" name="reservation_code" type="text" value="<?php echo $format; ?>" readonly  />
				</div>
				<div class="form-group">
    				<label>Reservation_At</label>
						<input class="form-control" name="reservation_at" type="text" required/>
				</div>
				<div class="form-group">
    				<label>Reservation_Date</label>
						<input class="form-control" name="reservation_date" value="<?php echo $tanggal; ?>" />
				</div>
				<div class="form-group">
    				<label>Customer_ID</label>
						<input class="form-control" name="customerid" type="text" required/>
				</div>
				<?php  

				$caricode = mysqli_query("select max(seat_code) from reservation");
				$datacode = mysqli_fetch_array($caricode);
				if ($datacode) {
					$nilaicode = substr($datacode[0], 1);
					$code = (int) $nilaicode;
					$code = $kode + 1;
					$hasilcode = "KA". str_pad($kode, 3, "0", STR_PAD_LEFT);
				}else{
					$hasilcode = "KA001";
				}
			?>
				<div class="form-group">
    				<label>Seat_Code</label>
						<input class="form-control" name="seat_code" value="<?php echo $hasilcode; ?>" readonly/>
				</div>
				<?php 
					$id = $_GET['id'];
					$sqli = $koneksi->query("SELECT * FROM rute WHERE id='$id'");
					$muncul = $sqli->fetch_assoc();
				?>
				<div class="form-group">
    				<label>Rute_ID</label>
						<input class="form-control" name="ruteid" value="<?php echo $muncul['id']; ?>" required/>
				</div>
				<div class="form-group">
    				<label>Depart_At</label>
						<input class="form-control" name="depart_at" value="<?php echo $tampil['depart_at'];?>" />
				</div>
				<div class="form-group">
    				<label>Price</label>
						<input class="form-control" name="price" value="<?php echo $tampil['price'];?>"/>
				</div>
				<div class="form-group">
    				<label>User_ID</label>
						<input class="form-control" name="userid"  required/>
				</div>
				<div>
					<input type="submit" name="pesan" value="Pesan" class="btn btn-primary">
				</div>
			</form>
</div>
</div>
		</div>
	</div>
</div>

<?php 
	
	$id = $_POST['id'];
	$reservation_code = $_POST['reservation_code'];
	$reservation_at = $_POST['reservation_at'];
	$reservation_date = $_POST['reservation_date'];
	$customerid = $_POST['customerid'];
	$seat_code = $_POST['seat_code'];
	$ruteid = $_POST['ruteid'];
	$depart_at = $_POST['depart_at'];
	$price = $_POST['price'];
	$userid = $_POST['userid'];

	$pesan = $_POST['pesan'];

	if ($pesan) {
		
		$sql = $koneksi->query("INSERT INTO reservation (id, reservation_code, reservation_at, reservation_date, customerid, seat_code, ruteid, depart_at, price, userid) VALUES('$id', '$reservation_code', '$reservation_at', '$reservation_date', '$customerid', '$seat_code', '$ruteid', '$depart_at', '$price', '$userid')");
		
		if ($sql){
			?>
				<script type="text/javascript">
					alert("Terima Kasih Telah Memesan Tiket");
					window.location.href="?page=rute&aksi=pesan";
				</script>

			<?php
		}else{
			?>
				<script type="text/javascript">
					alert("Pembelian Tiket Gagal");
					window.location.href="?page=rute&aksi=pesan";
				</script>
			<?php
		}
	}
 ?>