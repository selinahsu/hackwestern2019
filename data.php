<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","123456789","hackwestern");

$sqlQuery = "SELECT barcode FROM inventory";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

print json_encode($data);
?>
