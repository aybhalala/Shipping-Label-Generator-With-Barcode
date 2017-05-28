<!DOCTYPE html>
<html>
<head>
<title>
Print Label
</title>

</head>
<body>
<font size="2">
<table width=600 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
<tr>
<td>
<font size="4"><b>
<?php
$q = $_POST["pincode"];

$con = mysqli_connect('SQL HOST ADDRESS','USER','PASSWORD','Database Name');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"get_pin");
$sql="SELECT * FROM pincodes WHERE pincode = '".$q."'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    $State = $row['state'];
}
mysqli_close($con);
?>
<?php

$Vendor = $_POST["vendor"];
switch ($Vendor) {
	case 'Vendor/Self':
	echo "Vendor/Self";
		break;
	case 'Snapdeal':
	echo '<img src="img/snapdeal.png" height="45" width="150" alt="Snapdeal" />';
		break;
	case 'Ebay':
	echo '<img src="img/ebay.jpg" height="45" width="150" alt="Ebay" />';
		break;
	case 'Indiatimes Shopping':
	echo '<img src="img/indiatimes.jpg" height="45" width="150" alt="Indiatimes Shopping" />';
		break;
	case 'Shopclues':
	echo '<img src="img/shopclues.jpg" height="45" width="150" alt="Shopclues" />';
		break;
	case 'Flipkart':
	echo '<img src="img/flipkart.jpg" height="45" width="150" alt="Flipkart" />';
		break;
	case 'Shopping Dil':
	echo '<img src="img/shoppingdil.png" height="45" width="150" alt="Shubhleen" />';
		break;
	default:
		# code...
		break;
}

			?>
			</b>
			</font>
</td>
<td align="right">

	<b>Quantity:</b> </td>
	</tr>
<td><b>
<?php
$Mode = $_POST["mode"];
echo nl2br($Mode);
			?></b>
</td>
<td align="right" style="padding-right:20px"><font size="5">
			<?php 
			$Quantity = $_POST["quantity"];
			echo nl2br($Quantity);
			?>
			</font>
</td>
</tr>
<tr>
<td><b><font size="3">
			<?php 
			$Mode = $_POST["mode"];
			if ($Mode === 'COD') {
			$Quantity = $_POST["quantity"];
			$Rate = $_POST["rate"];
			$Amount = $Rate * $Quantity;
			echo "Please Collect: Rs.".nl2br($Amount);
		}
			?>
</b></font></td>

</tr>
</table>
<table width=600 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
<tr>
<td align="center"> 
<?php 
include('src/BarcodeGenerator.php');
include('src/BarcodeGeneratorPNG.php');
include('src/BarcodeGeneratorHTML.php');
$generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
$generatorHTML = new Picqer\Barcode\BarcodeGeneratorHTML();
$Barcode2 = $_POST["barcode2"];
$Barcode8 = $_POST["barcode8"];
$array  = array_map('intval', str_split($Barcode8));
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
$BarcodeF=$Barcode2.$Barcode8.$checksum2."IN";
echo $generatorHTML->getBarcode($BarcodeF, $generatorHTML::TYPE_CODE_39);
 ?>
</td>
</tr>
<tr>
<td align="center"> AWB: 
<?php 
echo $BarcodeF;
?>
</td>
</tr>
</table>
<table width=600 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
<tr>
<td><b>Ship To:</b></td>
</tr>
<tr>
<td><b>
	<?php 
	$Name = $_POST["name"];
	echo nl2br($Name);
	?>
	</b>
	</td>
</tr>
<tr>
<td>
	<?php 
	$Address = $_POST["address"];
	echo nl2br($Address)."<br>";
	$City = $_POST["city"];
	echo nl2br($City)."<br>";
	echo nl2br($State);
	?>
	</td>
</tr>
<tr>
<td>Pincode:<b> 
<?php
	$Pincode = $_POST["pincode"];
	echo nl2br($Pincode);
	?></b>
</td>
</tr>
<tr>
<td>Phone Number:<b> 
<?php 
	$Phone = $_POST["phone"];
	echo nl2br($Phone);
	?></b>
</td>
</tr>
</table>
<table width=600 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">

<tr>
<td>
<table width="60%">
<tr>
<td><b>Product:</b> 
<?php 
	$Product = $_POST["product"];
	echo nl2br($Product);
	?>
</td>
</tr>
<tr>
<td><b>Item:</b> 
<?php 
	$Item = $_POST["item"];
	echo nl2br($Item);
	?>
</td>
</tr>
<tr>
<td><b>Offer:</b> 
<?php 
	$Offer = $_POST["offer"];
	echo nl2br($Offer);
	?></td>
</tr>
<tr>
<td><b>Sold By: Seller Name Here</b></td>
</tr>
</table>
</td>
<td>
<table width="40%">
<tr>
<td align="center"> 
<?php 
$Refno = $_POST["refno"];
echo $generatorHTML->getBarcode($Refno, $generatorHTML::TYPE_CODE_128);
 ?>
</td>
</tr>
<tr>
<td align="center"> Order Ref. No.: 
<?php 
echo $Refno;
?>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table width=600 STYLE="border: 1px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
<tr>
<td><b>If undelivered please return to:</b></td>
</tr>
<tr>
<td>Address Line 1</td>
</tr>
<tr>
<td>Address Line 2</td>
</tr>
<tr>
<td>Address Line 3</td>
</tr>
</table>
<hr style="border-top: dashed 2px;" width="600" align="left" />
<table width="600" border=1 rules=rows frame=border>
	<tr>
		<td>
			<b>FROM</b>
		</td>
	</tr>
	<tr>
		<td>
			<b>Company Name</b>
		</td>
	</tr>
	<tr>
		<td>Address Line 1</td>
	</tr>
	<tr>
		<td>Address Line 2</td>
	</tr>
	<tr>
		<td>Address Line 3</td>
	</tr>
	<tr style="border-top: solid 2px">
		<td>
			<b>INDIAN POST</b>
		</td>
	</tr>
	<tr>
		<td>
			<b>E-BILLER ID: ID Here</b>
		</td>
	</tr>
	<tr>
		<td>
			<b>BNPL ACCOUNT CODE : Account Number Here</b>
		</td>
	</tr>
	<tr>
		<td>
			<b>BOOKED AT : Post Office Name Here</b>
		</td>
	</tr>
	<tr>
		<td>
			<b>APPROX WEIGHT: 
					<?php 
					$Weight = $_POST["weight"];
					echo nl2br($Weight);
					?>
			 GRAMS</b>
		</td>
	</tr>
	</table>
	<table width=600 STYLE="border: 2px solid #000001; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
	<tr>
		<td>
			<b>DATE: </b>
					<?php 
					$Date = $_POST["date"];
					echo nl2br($Date);

					?>
			
		</td>
		<td align="right">
			<b>Order Ref. No.:</b> 
			<?php 
			$Refno = $_POST["refno"];
			echo nl2br($Refno);
			?>
		</td>		
	</tr>
</table>
<table width="600" border=1 rules=all frame=border>
	<tr>
		<td>
			<b>Description of Goods</b>
		</td>
		<td>
			<b>Rate</b>
		</td>
		<td>
			<b>Quantity</b>
		</td>
		<td>
			<b>Amount</b>
		</td>
	</tr>
	<tr>
		<td width="50%">
			<?php 
			$Product = $_POST["product"];
			echo nl2br($Product);
			?>
			</td>
		<td width="15%">
			<?php 
			$Rate = $_POST["rate"];
			echo nl2br($Rate);
			?>
		</td >
		<td width="15%">
			<?php 
			$Quantity = $_POST["quantity"];
			echo nl2br($Quantity);
			?>
		</td>
		<td width="20%">
			<?php 
			$Amount = $Rate * $Quantity;
			echo nl2br($Amount);
			?>
			<br> (Incl. Of Taxes)
		</td>
	</tr>	
</table>
<table width=600 border=1 rules=all frame=border>
	<tr>
	<!--this is left table-->
		<td>
			<table width=290>
				<tr>
					<td>
						<b><font size="3">Invoice No: </b><br \>
						<?php
						$Invoice = $_POST["invoice"];
						echo nl2br($Invoice);
						?>
						</b><br \>Date: 
						<?php
						$Date = $_POST["date"];
						echo nl2br($Date);
						?>
					</td>
				</tr>
			</table>
		</td> 
		<!--table on right-->
		<td>
			<table width=300>
				<tr>
					<td><?php
					$Tin = $_POST["tin"];
					if (!empty($Tin)) {
						echo "<b>TIN / VAT Regn No:</b> <br \>";
						echo nl2br($Tin);
					}
						?><br \>
						<?php
						$Cst = $_POST["cst"];
					if (!empty($Cst)) {
						echo "<b>CST No: </b><br \>";									
						echo nl2br($Cst);
					}
						?><br \>
						<?php
						$Cin = $_POST["cin"];
					if (!empty($Cin)) {
						echo "<b>CIN No: </b><br \>";
						echo nl2br($Cin);
					}
						?><br \>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</font>
</body>
</html>

<?php
date_default_timezone_set('Asia/Kolkata');
$date1 = date('d-m-Y');
$servername = "server host";
$username = "username";
$password = "password";
$dbname = "database name";
$article_type = "BPCOD";
$mobile_seller = "mobile number";
$Email = "";
$tarrif_category = $_POST["tarrif_category"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "con error";
} 

$sql = "INSERT INTO new_cust (date1, name, address, state, email, mobile, city, pincode, barcode, article_type, tarrif_category, weight, codval, refid, mobile_seller) VALUES ('".$date1."', '".$Name."', '".$Address."', '".$State."', '".$Email."', '".$Phone."', '".$City."', '".$Pincode."', '".$BarcodeF."', '".$article_type."', '".$tarrif_category."', '".$Weight."', '".$Amount."', '".$Refno."', '".$mobile_seller."')";
if ($conn->query($sql) === TRUE) {
	//echo "query success";
} else {
//echo "Error: " . $sql . "<br>" . $conn->error;
	echo "Error in inserting in database, Please contact administrator";
}
$conn->close();
?>