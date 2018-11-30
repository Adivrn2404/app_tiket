<?php 
	include 'koneksi.php';

	$sql = $koneksi->query("SELECT * FROM customer where id='$id'");

	$tampil = $sql->fetch_assoc();

?>
<div class="panel panel-default">
<div class="panel-heading">
	Edit Profil
</div>
<div class="panel-body">
	<div class="row">
		<div class="col-md-6">
        	<form method="POST">
        		<div class="form-group">
    				<label>User_ID</label>
						<input class="form-control" name="id" value="<?php echo $tampil['id'];?>" readonly/>
				</div>
				
				<div class="form-group">
    				<label>Name</label>
						<input class="form-control" name="name" value="<?php echo $tampil['name'];?>" />
				</div>

				<div class="form-group">
    				<label>Address</label>
						<input class="form-control" name="address" type="text" value="<?php echo $tampil['address'];?>"/>
				</div>
				<div class="form-group">
    				<label>Phone</label>
						<input class="form-control" name="phone" type="text" value="<?php echo $tampil['phone'];?>"/>
				</div>
				<div class="form-group">
    				<label>Gender</label>
						<input class="form-control" name="gender" value="<?php echo $tampil['gender'];?>" readonly/>
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
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];

	$simpan = $_POST['simpan'];

	if ($simpan) {
		
		$sql = $koneksi->query("UPDATE customer set id='$id', name='$name', address='$address', phone='$phone', gender='$gender'");
		
		if ($sql){
			?>
				<script type="text/javascript">
					alert("Profil Telah Di Ubah");
					window.location.href="./index1.php";
				</script>

			<?php
		}
	}
 ?>