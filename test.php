<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="selectpolygon.js"></script>

</head>

<body>

<form>
Select a Customer:
<select name="customers" onchange="showInfo(this.value)">
<option value="1">001</option>
<option value="2 ">002</option>
<option value="3">003</option>
</select>
</form>

<div id="txtHint"><b>Customer info will be listed here.</b></div>

</body>
</html>