<?php
	include 'koneksi.php';
?>
<?php 

	$id = $_GET['id'];

	$sql = $koneksi->query("SELECT * FROM transportation where id='$id'");

	$tampil = $sql->fetch_assoc();
?>
<div class="panel panel-default">
<div class="panel-heading">
	Edit Kereta
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
    				<label>Code</label>
						<input class="form-control" name="code" value="<?php echo $tampil['code'];?>" readonly />
				</div>

				<div class="form-group">
    				<label>Description</label>
						<input class="form-control" name="description" type="text" value="<?php echo $tampil['description'];?>" readonly/>
				</div>
				<div class="form-group">
    				<label>Seat_qty</label>
						<input class="form-control" name="seat_qty" type="text" value="<?php echo $tampil['seat_qty'];?>"/>
				</div>
				<div class="form-group">
    				<label>Transportation_typeid</label>
						<input class="form-control" name="transportation_typeid" value="<?php echo $tampil['transportation_typeid'];?>"/>
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
	$code = $_POST['code'];
	$description = $_POST['description'];
	$seat_qty = $_POST['seat_qty'];
	$transportation_typeid = $_POST['transportation_typeid'];

	$simpan = $_POST['simpan'];

	if ($simpan) {
		
		$sql = $koneksi->query("UPDATE transportation set id='$id', code='$code', description='$description', seat_qty='$seat_qty', transportation_typeid='$transportation_typeid' where id='$id'");
		
		if ($sql){
			?>
				<script type="text/javascript">
					alert("Kereta Berhasil Diubah");
					window.location.href="?page=kereta";
				</script>

			<?php
		}
	}
 ?>