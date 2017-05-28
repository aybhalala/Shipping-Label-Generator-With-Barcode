<!DOCTYPE html>
<html>
<head>
<title>
<?php
$title1 = $_POST["start"];
$title2 = $_POST["barcode2"];
$title3 = $title1 + 32;           //change this accordingly
echo $title2.$title1."-".$title2.$title3;
?>
</title>
<style>
table {
    border-collapse: collapse;
    width: 270mm;
}

table, td, th {
    border: 1px solid black;
}
td {
	height: 31.5mm;
	width: 90mm;
	text-align: center;
}
br {line-height: 0.1; content: " "}
</style>
</head>
<body>
<font size="5">
<?php 
include('src/BarcodeGenerator.php');
include('src/BarcodeGeneratorPNG.php');
include('src/BarcodeGeneratorHTML.php');
$generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
$generatorHTML = new Picqer\Barcode\BarcodeGeneratorHTML();
$Barcode2 = $_POST["barcode2"];
$Start = $_POST["start"];
$End = $Start + 51;
echo "<table>";
for ( $j = 0; $j < 11; $j++ ) { //no. of rows
    echo "<tr>";
    for ( $k = 0; $k < 3; $k++ ) { //no. of cols


$array  = array_map('intval', str_split($Start));
//calculation of check digit (9th digit)
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
$BarcodeF=$Barcode2.$Start.$checksum2."IN";
echo "<td><center>".$generatorHTML->getBarcode($BarcodeF, $generatorHTML::TYPE_CODE_39)."<br \><b>".nl2br($BarcodeF)."</b></td>";
$Start++;
}
echo "</tr>";
}
echo "</table>";
 ?>
</font>
</body>
</html>