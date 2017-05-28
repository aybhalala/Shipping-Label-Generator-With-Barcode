<!DOCTYPE html>
<html>
<head>
<style>
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 400px;
  transition: all 0.5s;
  cursor: pointer;
  display: block;
    margin: 0 auto;
    vertical-align: middle;
  
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}
.button:hover {
    background-color: #4CAF50;
}
.button:hover span:after {  
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>
<div style="padding-top: 2vh">
<a href="barcode-new.php"><button class="button"><span>Shipping Label Generator </span></button></a><br \><br \>
<a href="esg.php"><button class="button"><span>Get Excel Sheet </span></button></a><br \><br \>
<a href="barsheet/barsheet.php"><button class="button"><span>Barcode Label Sheet Generator </span></button></a><br \><br \>
<a href="list.php"><button class="button"><span>List Generator </span></button></a>


</body>
</html>
