<?php
	include 'koneksi.php';
?>
<?php 

	$id = $_GET['id'];

	$sql = $koneksi->query("SELECT * FROM rute where id='$id'");

	$tampil = $sql->fetch_assoc();
?>
<div class="panel panel-default">
<div class="panel-heading">
	Edit Rute
</div>
<div class="panel-body">
	<div class="row">
		<div class="col-md-6">
        	<form method="POST">
        		<div class="form-group">
    				<label>ID</label>
						<input class="form-control" name="id" value="<?php echo $tampil['id'];?>" readonly/>
				</div>
				
				<div class="form-group">
    				<label>Depart_At</label>
						<input class="form-control" name="depart_at" value="<?php echo $tampil['depart_at'];?>" />
				</div>

				<div class="form-group">
    				<label>Rute_From</label>
						<input class="form-control" name="rute_from" type="text" value="<?php echo $tampil['rute_from'];?>"/>
				</div>
				<div class="form-group">
    				<label>Rute_To</label>
						<input class="form-control" name="rute_to" type="text" value="<?php echo $tampil['rute_to'];?>"/>
				</div>
				<div class="form-group">
    				<label>Price</label>
						<input class="form-control" name="price" value="<?php echo $tampil['price'];?>"/>
				</div>
				<div class="form-group">
    				<label>Transportation_ID</label>
						<input class="form-control" name="transportationid"  value="<?php echo $tampil['transportationid'];?>"/>
				</div>
				<div>
					<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
				</div>
			</form>
</div>
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
		
		$sql = $koneksi->query("UPDATE rute set id='$id', depart_at='$depart_at', rute_from='$rute_from', rute_to='$rute_to', price='$price', transportationid='$transportationid' where id='$id'");
		
		if ($sql){
			?>
				<script type="text/javascript">
					alert("Jadwal Berhasil Diubah");
					window.location.href="?page=rute";
				</script>

			<?php
		}
	}
 ?>