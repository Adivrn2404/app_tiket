<?php  
	include './koneksi.php';

	$filename = "Data_Kereta-(".date('d-m-Y').").xls";

	header("content-disposition: attachment; filename='$filename'");
	header("content-type: application/vdn.ms-excel");
?>

<h2>Laporan Data Resevation</h2>
<table border="1">
	<tr>
        <th>No</th>
        <th>ID</th>
        <th>Code</th>
        <th>Description</th>
        <th>Seat_qty</th>
        <th>Transportation_typeid</th>
    </tr>

    <?php 
                
        $no = 1;

        $sql = $koneksi->query("SELECT * FROM transportation");

        while ($data = $sql->fetch_assoc()) {
            
     ?>

     <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['code']; ?></td>
        <td><?php echo $data['description']; ?></td>
        <td><?php echo $data['seat_qty']; ?></td>
        <td><?php echo $data['transportation_typeid']; ?></td>
    </tr>
    
<?php } ?>

</table>