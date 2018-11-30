<?php 
	include 'koneksi.php';

	$id = $_SESSION['id'];
	
	$sql = $koneksi->query("SELECT * FROM customer WHERE id='$id'");

	$tampil = $sql->fetch_assoc();
?>
<div class="panel panel-default">
<div class="panel-heading">
	Profil Saya
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
			</form>
			<a href="?page=profil&aksi=ubah" class="btn btn-primary">Ubah Data</a>
</div>
</div>
		</div>
	</div>
</div>