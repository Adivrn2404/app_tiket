<?php
	include 'koneksi.php';
?>
<div class="panel panel-default">
<div class="panel-heading">
	Tambah Data Kereta
</div>
<div class="panel-body">
	<div class="row">
		<div class="col-md-6">
        	<form method="POST">
				<div class="form-group">
    				<label>ID</label>
						<input class="form-control" name="id" required />
				</div>
				<div class="form-group">
    				<label>Code</label>
						<input class="form-control" name="code" type="text" required/>
				</div>
				<div class="form-group">
    				<label>Description</label>
						<input class="form-control" name="description" type="text" required/>
				</div>
				<div class="form-group">
    				<label>Seat_Qty</label>
						<input class="form-control" name="seat_qty" type="text" required/>
				</div>
				<div class="form-group">
    				<label>Transportation_Typeid</label>
						<input class="form-control" name="transportation_typeid" type="text" required/>
				</div>
				<div>
					<input type="submit" name="simpan" value="Tambah" class="btn btn-primary">
				</div>
			</form>
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
		
		$sql = $koneksi->query("INSERT INTO transportation (id, code, description, seat_qty, transportation_typeid ) values('$id', '$code', '$description', '$seat_qty', '$transportation_typeid')");
		
		if ($sql){
			?>
				<script type="text/javascript">
					alert("Jadwal Kereta Telah Disimpan");
					window.location.href="?page=kereta";
				</script>

			<?php
		}
	}
 ?>