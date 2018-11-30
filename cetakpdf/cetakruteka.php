<?php
include 'koneksi.php';
require_once __DIR__ . '/vendor/autoload.php';
$sql = $koneksi->query("SELECT * FROM rute");
$html = '<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Rute KA</title>
</head>
<body>
	<h1>Laporan Data Rute KA</h1>

	<table border="1">
		<tr>
	        <th>No</th>
			<th>ID</th>
			<th>Depart_At</th>
			<th>Rute_From</th>
	        <th>Rute_To</th>
			<th>Price</th>
		    <th>Transportation_id</th>
		</tr>';
		
		$no = 1;
		while ($data = $sql->fetch_assoc()) {    
$html .='<tr>
                <td>'.$no++.'</td>
                <td>'.$data["id"].'</td>
                <td>'.$data["depart_at"].'</td>
                <td>'.$data["rute_from"].'</td>
                <td>'.$data["rute_to"].'</td>
                <td>'.$data["price"].'</td>
                <td>'.$data["transportationid"].'</td>
            </tr>';
			}
$html.= '
</table>
</body>
</html>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('DataRuteKA.pdf', \Mpdf\Output\Destination::INLINE);