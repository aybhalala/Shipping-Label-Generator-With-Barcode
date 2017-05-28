<!DOCTYPE html>
<html>
<head>
<title>
List Generated
</title>

</head>
<body>
<font size="2">
<?php 
$Barcode2 = $_POST["barcode2"];
$Start = $_POST["start"];
$End = $_POST["end"];
for ($i = $Start; $i <= $End; $i++) { 

$array  = array_map('intval', str_split($i));
$checksum1 = (11 - (($array[0] * 8 + $array[1] * 6 + $array[2] * 4 + $array[3] * 2 + $array[4] * 3 + $array[5] * 5 + $array[6] * 9 + $array[7] * 7) % 11));
if ($checksum1 == 10 || $checksum1 == 11) {
	if ($checksum1 == 10) {
		$checksum2 = 0;
	}
	else {
		$checksum2 = 5;
	}
}
else {
	$checksum2 = $checksum1;
}
$BarcodeF=$Barcode2.$i.$checksum2."IN";
echo nl2br($BarcodeF)."<br \>";
}
 ?>
</font>
</body>
</html>