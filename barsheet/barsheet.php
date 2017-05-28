
<html>
<head>
<title>Barcode Sheet Generator</title>
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
<h1 align="center">Barcode Label Sheet Generator</h1>
<h3>This List will generate 51 barcode labels for printing in A4 Size Sheet</h3>
<h3>Enter the First Two Digit and Starting Number of Barcode</h3>
<div id="contactContent">
<form method="post" action="genbarsheet.php">
<div style="float:left; position:relative; margin-right:80px">
<b>
<label> First 2 Digits of Barcode:</label><input type="text" size="12" maxlength="13" name="barcode2"><br />
<label>Starting Number:</label><input type="text" size="12" maxlength="8" name="start"><font color="red">  *8 Digits</font><br />
<input type="submit" value="submit" name="submit">
</form>
</div>
</body>
</html>