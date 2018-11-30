<?php
include 'koneksi.php';
require_once __DIR__ . '/vendor/autoload.php';
$sql = $koneksi->query("SELECT * FROM customer");
$html = '<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Customer</title>
</head>
<body>
	<h1>Laporan Data Customer</h1>

	<table border="1">
		<tr>
            <th>No</th>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Gender</th>
        </tr>';
		
		$no = 1;
		while ($data = $sql->fetch_assoc()) {    
$html .='<tr>
                <td>'.$no++.'</td>
                <td>'.$data["id"].'</td>
                <td>'.$data["name"].'</td>
                <td>'.$data["address"].'</td>
                <td>'.$data["phone"].'</td>
                <td>'.$data["gender"].'</td>
            </tr>';
			}
$html.= '
</table>
</body>
</html>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('DataCustomer.pdf', \Mpdf\Output\Destination::INLINE);