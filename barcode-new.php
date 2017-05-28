
<html>
<head>
<script>
function showState(str) {
    if (str == "") {
        document.getElementById("stateHint").innerHTML = "";
        return $state3;


    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("stateHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getpin.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
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
<form method="post" action="genbar-new.php">
<div style="float:left; position:relative; margin-right:80px">
<b>
<label>Vendor:</label>
<select name="vendor">
	<option value="Vendor/Self">Vendor/Self</option>
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
<label>Tarrif Category:</label>
<select name="tarrif_category">
	<option value="O-S">O-S</option>
	<option value="N-S">N-S</option>
	<option value="W-S">W-S</option>
	<option value="L-L">L-L</option>
</select><br />
<label>Pincode:</label><input type="text" size="15" maxlength="6" name="pincode" onchange="showState(this.value)"><br />
<label> First 2 Digits of Barcode:</label><input type="text" size="15" maxlength="13" name="barcode2"><br />
<label>8 Numeric Digits of Barcode:</label><input type="text" size="15" maxlength="8" name="barcode8"><br />
<label>Customer Name:</label><input type="text" size="15" maxlength="130" name="name"><br />
<label>Customer Address:</label><textarea rows="5" name="address"></textarea><br />
<label>Customer City:</label><textarea rows="5" name="city"></textarea><br />
<label>Phone Number:</label><input type="text" size="15" maxlength="13" name="phone"><br />
<label>State:</label><label id="stateHint" name="stateHint2"><b>Enter Pincode</b></label><br />
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
<?php

?>
<input type="submit" value="submit" name="submit">
</div>
</div>
</form>
</div>
</body>
</html>