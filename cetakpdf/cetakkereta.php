<?php
include 'koneksi.php';
require_once __DIR__ . '/vendor/autoload.php';
$sql = $koneksi->query("SELECT * FROM transportation");
$html = '<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Kereta</title>
</head>
<body>
	<h1>Laporan Data Kereta Api</h1>

	<table border="1">
		<tr>
            <th>No</th>
            <th>ID</th>
            <th>Code</th>
            <th>Description</th>
            <th>Seat_qty</th>
            <th>Transportation_typeid</th>
        </tr>';
		
		$no = 1;
		while ($data = $sql->fetch_assoc()) {    
$html .='<tr>
                <td>'.$no++.'</td>
                <td>'.$data["id"].'</td>
                <td>'.$data["code"].'</td>
                <td>'.$data["description"].'</td>
                <td>'.$data["seat_qty"].'</td>
                <td>'.$data["transportation_typeid"].'</td>
                <td>'.$data["transportationid"].'</td>
            </tr>';
			}
$html.= '
</table>
</body>
</html>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('DataKereta.pdf', \Mpdf\Output\Destination::INLINE);