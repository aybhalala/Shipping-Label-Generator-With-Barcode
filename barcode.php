
<html>
<head>
<title>Personal INFO</title>
<style type="text/css">
    #contactContent { margin-top: 20px; margin-left: 20px;}
input { border: groove; margin-left: 20px; margin-bottom: 20px; padding-right: 50px;}
textarea { border: groove; margin-left: 20px; margin-bottom: 20px; padding-right: 50px; vertical-align: text-top;}
select { border: groove; margin-left: 20px; margin-bottom: 20px; padding-right: 50px;}
input[type="submit"]{
/* change these properties to whatever you want */
background-color: #555;
color: #fff;
border-radius: 10px;
}

label{
    display:inline-block;
    width:150px;

}

    </style>
</head>
<body>
<div id="contactContent">
<form method="post" action="genbar.php">
<div style="float:left; position:relative; margin-right:80px">
<b>
<label>Vendor:</label>
<select name="vendor">
	<option value="Vendor/Self">Vendor/Self</option>
	<option value="Shubhleen">Shubhleen</option>
	<option value="Snapdeal">Snapdeal</option>
	<option value="Ebay">Ebay</option>
	<option value="Shopping Dil">Shopping Dil</option>
	<option value="Indiatimes Shopping">Indiatimes Shopping</option>
	<option value="Shopclues">Shopclues</option>
	<option value="Flipkart">Flipkart</option>
</select><br />
<label>Mode:</label>
<select name="mode">
	<option value="COD">COD</option>
	<option value="Prepaid">Prepaid</option>
</select><br />
<label> First 2 Digits of Barcode:</label><input type="text" size="15" maxlength="13" name="barcode2"><br />
<label>8 Numeric Digits of Barcode:</label><input type="text" size="15" maxlength="8" name="barcode8"><br />
<label>Customer Name:</label><input type="text" size="15" maxlength="130" name="name"><br />
<label>Customer Address:</label><textarea rows="5" name="address"></textarea><br />
<label>Pincode:</label><input type="text" size="15" maxlength="6" name="pincode"><br />
<label>Phone Number:</label><input type="text" size="15" maxlength="13" name="phone"><br />
</div>
<div style="float:left; position: relative;">
<label>Product:</label><input type="text" size="25" name="product"><br \>
<label>Item:</label><input type="text" size="15" name="item"><br />
<label>Offer:</label><input type="text" size="15" name="offer"><br />
<label>Weight:</label><input type="text" size="15" name="weight"><br />
<label>Date:</label><input type="text" size="15" name="date"><br />
<label>Ref. No.:</label><input type="text" size="15" name="refno"><br />
<label>Invoice No.:</label><input type="text" size="15" name="invoice"><br />
<label>Rate:</label><input type="text" size="15" name="rate"><br />
<label>Quantity:</label><input type="text" size="15" name="quantity"><br />
<label>TIN / VAT No:</label><input type="text" size="15" name="tin"><br />
<label>CST No:</label><input type="text" size="15" name="cst"><br />
<label>CIN No:</label><input type="text" size="15" name="cin"><br />
<div style="text-align:center">
<input type="submit" value="submit" name="submit">
</div>
</div>

</form>
</div>
</body>
</html>