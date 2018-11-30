<?php  
	include './koneksi.php';

	$filename = "Data_Customer-(".date('d-m-Y').").xls";

	header("content-disposition: attachment; filename='$filename'");
	header("content-type: application/vdn.ms-excel");
?>

<h2>Laporan Data Customer</h2>

<table border="1">
	<tr>
      	<th>No</th>
    	<th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Gender</th>
    </tr>

    <?php 
                
	    $no = 1;

	    $sql = $koneksi->query("SELECT * FROM customer");

	    while ($data = $sql->fetch_assoc()) {
	        
	?>

	<tr>
		<td><?php echo $no++; ?></td>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['address']; ?></td>
        <td><?php echo $data['phone']; ?></td>
        <td><?php echo $data['gender']; ?></td>
    </tr>

	<?php } ?>

</table>