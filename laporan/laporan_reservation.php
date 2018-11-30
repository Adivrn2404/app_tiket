<?php  
	include './koneksi.php';

	$filename = "Data_Reservation-(".date('d-m-Y').").xls";

	header("content-disposition: attachment; filename='$filename'");
	header("content-type: application/vdn.ms-excel");
?>

<h2>Laporan Data Resevation</h2>

<table border="1">
	<tr>
        <th>No</th>
        <th>ID</th>
        <th>Reservation_Code</th>
        <th>Reservation_At</th>
        <th>Reservation_Date</th>
        <th>Customer_ID</th>
        <th>Seat_Code</th>
        <th>Rute_ID</th>
        <th>Depart_At</th>
        <th>Price</th>
        <th>User_ID</th>
    </tr>

	<?php 
                
    	$no = 1;

    	$sql = $koneksi->query("SELECT * FROM reservation");

    	while ($data = $sql->fetch_assoc()) {
        
 	?>

 	<tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['reservation_code']; ?></td>
        <td><?php echo $data['reservation_at']; ?></td>
        <td><?php echo $data['reservation_date']; ?></td>
        <td><?php echo $data['customerid']; ?></td>
        <td><?php echo $data['seat_code'] ?></td>
        <td><?php echo $data['ruteid'] ?></td>
        <td><?php echo $data['depart_at'] ?></td>
        <td><?php echo $data['price'] ?></td>
        <td><?php echo $data['userid'] ?></td>
    </tr>

<?php } ?>

</table>