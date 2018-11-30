<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<?php  
	include './koneksi.php';

	$filename = "Rute_KA-(".date('d-m-Y').").xls";

	header("content-disposition: attachment; filename='$filename'");
	header("content-type: application/vdn.ms-excel");
?>

<h2>Laporan Rute Kereta Api</h2>

<table border="1">
	<tr>
        <th>No</th>
		<th>ID</th>
		<th>Depart_At</th>
		<th>Rute_From</th>
        <th>Rute_To</th>
		<th>Price</th>
	    <th>Transportation_id</th>

	</tr>

	<?php 
                
        $no = 1;

        $sql = $koneksi->query("SELECT * FROM rute");

        while ($data = $sql->fetch_assoc()) {
                     
   	?>

   	<tr>
		<td><?php echo $no++; ?></td>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['depart_at']; ?></td>
        <td><?php echo $data['rute_from']; ?></td>
		<td><?php echo $data['rute_to']; ?></td>
        <td><?php echo $data['price'] ?></td>
		<td><?php echo $data['transportationid'] ?></td>
	</tr>
<?php } ?>

</table>