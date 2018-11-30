<?php
include 'koneksi.php';
require_once __DIR__ . '/vendor/autoload.php';
$sql = $koneksi->query("SELECT * FROM reservation");
$html = '<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Reservation</title>
</head>
<body>
	<h1>Laporan Data Reservation</h1>

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
        </tr>';
		
		$no = 1;
		while ($data = $sql->fetch_assoc()) {    
$html .='<tr>
                <td>'.$no++.'</td>
                <td>'.$data["id"].'</td>
                <td>'.$data["reservation_code"].'</td>
                <td>'.$data["reservation_at"].'</td>
                <td>'.$data["reservation_date"].'</td>
                <td>'.$data["customer_id"].'</td>
                <td>'.$data["seat_code"].'</td>
                <td>'.$data["rute_id"].'</td>
                <td>'.$data["depart_at"].'</td>
                <td>'.$data["price"].'</td>
                <td>'.$data["user_id"].'</td>
            </tr>';
			}
$html.= '
</table>
</body>
</html>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('DataReservation.pdf', \Mpdf\Output\Destination::INLINE);