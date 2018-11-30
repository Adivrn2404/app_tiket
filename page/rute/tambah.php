<?php
	include 'koneksi.php';
	$sql = $koneksi->query("SELECT * FROM rute");
	$tampil = $sql->fetch_assoc();
?>
<div class="panel panel-default">
<div class="panel-heading">
	Tambah Rute Kereta
</div>
<div class="panel-body">
	<div class="row">
		<div class="col-md-6">

			<?php  

				$carikode = mysqli_query("select max (id) from rute ");
				$datakode = mysqli_fetch_array($carikode);
				if ($datakode) {
					$nilaikode = substr($datakode[0], 1);
					$kode = (int) $nilaikode;
					$kode = $kode + 1;
					$hasilkode = "0". str_pad($kode, 1, "", STR_PAD_LEFT);
				}else{
					$hasilkode = "1";
				}

			?>

        	<form method="POST">
				<div class="form-group">
    				<label>ID</label>
						<input class="form-control" name="id" value="<?php echo $hasilkode; ?>" required/>
				</div>
				<div class="form-group">
    				<label>Depart_At</label>
						<input class="form-control" name="depart_at" type="text" required/>
				</div>
				<div class="form-group">
    				<label>Rute_From</label>
						<input class="form-control" name="rute_from" type="text" required/>
				</div>
				<div class="form-group">
    				<label>Rute_To</label>
						<input class="form-control" name="rute_to" type="text" required/>
				</div>
				<div class="form-group">
    				<label>Price</label>
						<input class="form-control" name="price" type="text" required/>
				</div>
				<div class="form-group">
    				<label>Transportation_id</label>
						<input class="form-control" name="transportationid" value="<?php echo $tampil['transportationid']; ?>" required/>
				</div>
				<div>
					<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>
</div>
</div>

<?php 
	
	$id = $_POST['id'];
	$depart_at = $_POST['depart_at'];
	$rute_from = $_POST['rute_from'];
	$rute_to = $_POST['rute_to'];
	$price = $_POST['price'];
	$transportationid = $_POST['transportationid'];

	$simpan = $_POST['simpan'];

	if ($simpan) {
		
		$sql = $koneksi->query("INSERT INTO rute (id, depart_at, rute_from, rute_to, price, transportationid) values('$id', '$depart_at', '$rute_from', '$rute_to', '$price', '$transportationid')");
		
		if ($sql){
			?>
				<script type="text/javascript">
					alert("Jadwal Kereta Telah Disimpan");
					window.location.href="?page=rute";
				</script>

			<?php
		}
	}
 ?>